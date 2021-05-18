<x-guest-layout>
    @section('title', 'Password Confirm')
        <form action="{{ url('user/confirm-password') }}" method="POST">
            @csrf
            <img src="{{ asset('images/avatar.svg') }}">
            <h2 class="title">Confirm Your Password</h2>
            <x-input-without-borders
                :input="['value' => '', 'name' => 'password', 'title' => 'Password', 'type' => 'password']" />
            <input type="submit" class="btn" value="Confirm Password">
        </form>
    </x-guest-layout>
