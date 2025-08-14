<?php

namespace App\Http\Controllers;

use App\Common\Common;
use App\Http\Requests\UserRequest;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;


class UserController extends Controller
{

    use Common;

    public function index()
    {

        //dd(Hash::make('Aa123456'));
        $users = User::orderBy('name')->paginate(5);
        if( request()->has('search')){
            $data = request()->only('search');
            $users = User::orderBy('id')->where('name' , 'like' , '%'  . $data['search'] . '%' )->paginate(5);
        }

        $num = ($users->currentPage() - 1) * $users->perPage() + 1;
        return view('admin.user.index')->with(['users' => $users , 'num' => $num]);
    }

    public function create()
    {
        $roles = Role::all();
        return view('admin.user.create')->with('roles', $roles);
    }

    public function store(UserRequest $request)
    {
        $data = $request->all();
        $data['password'] = Hash::make($data['password']);
        $res =  User::create($data);
        $this->sendFlashMessage($res, 'User', 'Created');
        return redirect()->route('users.index', app()->getLocale());
    }


    public function edit(Request $request)
    {
        $id =  $request->route()->parameter('user');
        $user = User::find($id);
        $roles = Role::all();
        $view_values = ['roles' => $roles, 'user' => $user];
        return view('admin.user.edit')->with($view_values);
    }

    public function update(UserRequest $request)
    {

        $data = $request->all();
        $user = User::find($data['id']);
        if(!Hash::check($data['password'] , $user['password'])){
            $data['password'] = Hash::make($data['password']);
        }
        $res = $user->update($data);
        $this->sendFlashMessage($res, 'User', 'Updated');
        return redirect()->route('users.index', app()->getLocale());
    }

    public function destroy(Request $request)
    {
        $data = $request->all();
        $user = User::find($data['id']);
        $res = $user->delete();
        $this->sendFlashMessage($res, 'User', 'Deleted');
        return redirect()->route('users.index', app()->getLocale());
    }
}
