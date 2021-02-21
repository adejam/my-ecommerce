<x-guest-layout>
    @section('title', 'Welcome')
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
                        <input id="email" value="{{old('email')}}" name="email"
                            type="email" class="input" autocomplete="email">
                    </div>
                </div>
            </div>

            <x-input-without-borders
                :input="['value' => '', 'name' => 'password', 'title' => 'Password', 'type' => 'password']" />

            <div class="form-footer">
                <a href="{{ route('register') }}">Create account</a>
                <a href="#">Forgot Password?</a>
            </div>
            <input type="submit" class="btn" value="Login">
        </form>
    </x-guest-layout>
