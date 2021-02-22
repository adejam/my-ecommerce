<x-guest-layout>
    @section('title', 'Use Recovery code')
        <form action="{{ url('/two-factor-challenge') }}" method="POST">
            @csrf
            <img src="{{ asset('images/avatar.svg') }}">
            <p class="title-text">Please enter your recovery code to login.</p>
            <x-input-without-borders
                :input="['value' => '', 'name' => 'recovery_code', 'title' => 'Enter code', 'type' => 'text']" />
            <input type="submit" class="btn" value="Submit">
        </form>
    </x-guest-layout>
