<x-guest-layout>
    @section('title', 'Two Factor Challenge')
        <form action="{{ url('/two-factor-challenge') }}" method="POST">
            @csrf
            <img src="{{ asset('images/avatar.svg') }}">
            <p class="title-text">Please enter your authentication code to login.</p>
            <x-input-without-borders
                :input="['value' => '', 'name' => 'code', 'title' => 'Enter code', 'type' => 'text']" />
            <input type="submit" class="btn" value="Submit">
            <div class="form-footer" style="display: block; color: #999;">
                Can't access your authentication application?. click 
                <a href="{{ route('recovery-code') }}" style="display:inline; text-align: left; color:#1a73e8;">here</a> 
                to login with your recovery code instead
            </div>
        </form>
    </x-guest-layout>
