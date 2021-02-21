<x-guest-layout>
    @section('title', 'Forgot-password')
    <form action="{{ route('password.update') }}" method="POST">
        @csrf
        <input type="hidden" name="token" value="{{$request->route('token')}}"/>
        <input type="hidden" name="email" value="{{$request['email']}}"/>
        <img src="{{ asset('images/avatar.svg') }}">
        <h2 class="title">Reset Password</h2>
        <div>
            @if (session('status'))
            <div class="form-error-div" role="alert" style="text-align: center;">
                <strong>{{ session('status') }}</strong>
            </div>
            @endif
        </div>
        <x-input-without-borders
            :input="['value' => old('password'), 'name' => 'password', 'title' => 'Password', 'type' => 'password']" />
        <x-input-without-borders
            :input="['value' => '', 'name' => 'password_confirmation', 'title' => 'Confirm Password', 'type' => 'password']" />

        <input type="submit" class="btn" value="Update Password">
        <div class="form-footer">
            <a href="{{ route('login') }}">Sign in</a>
            <a href="{{ route('register') }}">Create an account</a>
        </div>
    </form>
</x-guest-layout>