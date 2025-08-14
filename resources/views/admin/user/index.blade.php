@extends('layouts.main')
@section('title' , __('Users'))
@section('content')

    <div class="container mt-0">

        <h2 class="text-center">{{ __('Users') }} </h2>

        <a href="/{{ app()->getLocale() }}/users/create" class="mdc-button mdc-button--raised mb-2 "> {{ __('Add') }}
        </a>


        <div class="row">
            <form
                id="search-form" action="{{ route('users.index', ['language' => app()->getLocale()]) }}"
                method="get">

                <div class="form-group row justify-content-center mb-3">
                    <div class="col-md-6">
                        <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop">
                            <div class="mdc-text-field">
                                <input class="mdc-text-field__input"  id="search-text" name="search" >
                                <div class="mdc-line-ripple"></div>
                                <label for="text-field-hero-input" class="mdc-floating-label">{{__('Search By Name')}}</label>
                            </div>
                        </div>
                    </div>
                </div>

            </form>

        </div>


        <div class="row">

            <br>
            <div class="table-responsive bg-light ">
                <table id="table" class="table">
                    <thead>
                    <tr>
                        <th> {{ __('#') }} </th>
                        <th> {{ __('Name') }} </th>
                        <th>{{ __('Email') }} </th>
                        <th>{{ __('Role') }} </th>
                        <th>{{ __('Action') }} </th>
                    </tr>
                    </thead>
                    <tbody>


                    @foreach ($users as $user)

                        <tr>
                            <td>{{ $num++ }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->role->name }}</td>

                            <td>
                                <form
                                    action="{{ route('users.destroy', ['language' => app()->getLocale(), 'user' => $user->id]) }}"
                                    method="post">

                                    <input type="hidden" name="id" value="{{ $user->id }}">

                                    <a href="{{ route('users.edit', ['language' => app()->getLocale(), 'user' => $user->id]) }}"
                                       class="btn btn-secondary"> {{ __('Edit') }} </a>


                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"
                                            onclick=" event.preventDefault(); confirmDelete(
                                                '{{ __('Confirm Delete') }} ',
                                                '{{ __('Are You Sure?') }} ',
                                                '{{ __('Yes') }}' ,
                                                '{{ __('Cancel') }}' ,
                                                this ); "
                                            class=" btn btn-danger ">
                                        {{ __('Delete') }} </button>
                                </form>
                            </td>
                        </tr>

                    @endforeach
                    </tbody>
                </table>
                @if (count($users) === 0)
                    <div class="text-center">
                        <h4> {{ __('No Data') }} </h4>
                    </div>
                @endif

            </div>
        </div>

        <div class="row justify-content-center mt-2">

            {{ $users->links() }}
        </div>
    </div>
@endsection
<script src="{{ asset('assets/js/jquery.js') }}"  ></script>
<script>
    $(document).ready(function (){
        let form = $('#search-form');

        $('#search-text').on('blur', function () {
            form.submit();
        });
    });
</script>
