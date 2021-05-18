<x-guest-layout>
    @section('title', 'Login')
        <form action="{{ route('login') }}" method="POST">
            @csrf
            <img src="{{ asset('images/avatar.svg') }}">
            <h2 class="title">Login</h2>
            <div>
                @if ($errors->has('email'))
                    <div class="form-error-div" role="alert" style="text-align: center;">
                        <strong>{{ $errors->first('email') }}</strong>
                    </div>
                @endif
            </div>
            <div class="inputs-container">
                <div class="input-div pass">
                    <div class="div">
                        <Label for="email">Email</Label>
                        <input id="email" value="{{ old('email') }}" name="email" type="email" class="input"
                            autocomplete="email">
                    </div>
                </div>
            </div>

            <x-input-without-borders
                :input="['value' => '', 'name' => 'password', 'title' => 'Password', 'type' => 'password']" />
            <div class="mt-3 mb-1" style="text-align: left; color: #999;">
                <label for="remember_me" class="flex items-center">
                    <input id="remember_me" type="checkbox" class="form-checkbox" name="remember">
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>
            <input type="submit" class="btn" value="Login">
            <div class="form-footer">
                <a href="{{ route('register') }}">Create account</a>
                <a href="{{ route('password.request') }}">Forgot Password?</a>
            </div>
        </form>
    </x-guest-layout>
