<x-guest-layout>
    @section('title', 'Verify-Email')
        <form action="{{ route('verification.send') }}" method="POST">
            @csrf
            <img src="{{ asset('images/avatar.svg') }}">
            <h2 class="title">Verify Email</h2>
            <div class="mb-1" style="border:0.5px solid #28a745; background-color: #def7ec; color: #999; padding:0.4rem; border-radius:0.4rem;">
                {{ __('Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you? If you didn\'t receive the email, we will gladly send you another if you click the button below.') }}
            </div>
            <div>
                @if (session('status') == 'verification-link-sent')
                    <div class="form-error-div" role="alert" style="text-align: center; color:#28a745;">
                        <strong>A new verification link has been sent to the email address you provided during registration.</strong>
                    </div>
                @endif
            </div>
            <input type="submit" class="btn" style="font-size: 1rem;" value="Resend Email">
            <div class="form-footer">
                <a href="{{ route('login') }}">Sign in</a>
                <a href="{{ route('register') }}">Create an account</a>
            </div>
        </form>
    </x-guest-layout>
