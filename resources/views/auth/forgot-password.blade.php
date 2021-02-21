<x-guest-layout>
    @section('title', 'Forgot-password')
        <form action="{{ route('password.request') }}" method="POST">
            @csrf
            <img src="{{ asset('images/avatar.svg') }}">
            <h2 class="title">Reset Password</h2>
            <div>
                @if (session('status'))
                    <div class="form-error-div" role="alert" style="text-align: center; color:#28a745;">
                        <strong>{{ session('status') }}</strong>
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
                @if ($errors->has('email'))
                    <div class="form-error-div" role="alert" style="text-align: center;">
                        <strong>{{ $errors->first('email') }}</strong>
                    </div>
                @endif
            </div>
            <input type="submit" class="btn" value="Reset">
            <div class="form-footer">
                <a href="{{ route('login') }}">Sign in</a>
                <a href="{{ route('register') }}">Create an account</a>
            </div>
        </form>
    </x-guest-layout>
