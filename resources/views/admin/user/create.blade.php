@extends('layouts.main')

@section('content')

    <div class="container">

        <h2 class="text-center mt-3">{{ __('Add') }} {{ __('User') }} </h2>

                <a href="{{ route('users.index' , app()->getLocale()) }}" class="mdc-button mdc-button--success text-white btn-sm mb-2
                          @if(app()->getLocale() === 'en') float-end @endif
                          @if(app()->getLocale() === 'ar') float-start @endif
                    ">
                    {{ __('Back') }}
           </a>

        <div class="row justify-content-center">
            <div class="row">

            </div>
            <form method="POST" action="/{{ app()->getLocale() }}/users">
                @csrf

                <div class="form-group row justify-content-center mb-3">
                    <div class="col-md-6">
                        <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop">
                            <div class="mdc-text-field">
                                <input class="mdc-text-field__input" id="text-field-hero-input" name="name" value="{{old('name')}}">
                                <div class="mdc-line-ripple"></div>
                                <label for="text-field-hero-input" class="mdc-floating-label">{{__('Name')}}</label>
                            </div>
                        </div>
                    </div>
                    <div class="text-danger text-center">
                     @error('name')  {{$message}}   @enderror
                    </div>
                </div>


                <div class="form-group row justify-content-center mb-3">
                    <div class="col-md-6">
                        <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop">
                            <div class="mdc-text-field">
                                <input class="mdc-text-field__input" id="text-field-hero-input" name="email" type="email" value="{{old('email')}}">
                                <div class="mdc-line-ripple"></div>
                                <label for="text-field-hero-input" class="mdc-floating-label">{{__('Email')}}</label>
                            </div>
                        </div>
                    </div>
                    <div class="text-danger text-center">
                        @error('email')  {{$message}}   @enderror
                    </div>
                </div>

                <div class="form-group row justify-content-center mb-3">
                    <div class="col-md-6">
                        <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop">
                            <div class="mdc-text-field">
                                <input class="mdc-text-field__input" id="password" name="password"  type="password" >
                                <div class="mdc-line-ripple"></div>
                                <label for="text-field-hero-input" class="mdc-floating-label">{{__('Password')}}</label>
                            </div>
                        </div>
                    </div>
                    <input class="mt-2" type="checkbox" id="checkbox">{{__('Show Password')}}
                    <div class="text-danger text-center">
                        @error('password')  {{$message}}   @enderror
                    </div>
                </div>

                <div class="form-group row justify-content-center mb-3">
                    <div class="col-md-6">
                        <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop">
                            <div class="mdc-text-field">
                                <input class="mdc-text-field__input" id="password_confirmation" name="password_confirmation" type="password">
                                <div class="mdc-line-ripple"></div>
                                <label for="text-field-hero-input" class="mdc-floating-label">{{__('Confirm Password')}}</label>
                            </div>
                        </div>
                    </div>
                    <input class="mt-2" type="checkbox" id="checkbox_confirm">{{__('Show Password')}}
                    <div class="text-danger text-center">
                        @error('password_confirmation')  {{$message}}   @enderror
                    </div>
                </div>

                <div class="form-group row justify-content-center mb-3">
                    <div class="col-md-6">
                        <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop">
                            <div class="mdc-text-field">

                                <select class="mdc-text-field__input form-control " name="role_id" >
                                    <option class="text-center" value="">{{__('Select Role')}}</option>
                                    @foreach($roles as $role)
                                    <option value="{{$role->id}}">{{__($role->name)}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="text-danger text-center">
                        @error('role_id')  {{$message}}   @enderror
                    </div>
                </div>


                <div class="form-group text-center mt-3">
                    <input type="submit" value="{{ __('Add') }} " class="mdc-button mdc-button--raised ">
                </div>
            </form>

        </div>
    </div>

@endsection
@section('scripts')
<script>
    $(document).ready(function(){
        $('#checkbox').on('change', function(){
            $('#password').attr('type',$('#checkbox').prop('checked')==true?"text":"password");
        });

        $('#checkbox_confirm').on('change', function(){
            $('#password_confirmation').attr('type',$('#checkbox_confirm').prop('checked')==true?"text":"password");
        });
    });
</script>
@endsection
