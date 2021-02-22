<x-app-layout>
    @section('title', 'Profile')
    <a href="{{route('home')}}">home</a>
        <h1>User Profile</h1>
        @if (!auth()->user()->two_factor_secret)
        You have not enabled two factor authentication
        <form method="POST" action="{{url('user/two-factor-authentication')}}">
        @csrf
        <button class="btn bg-primary" style="padding: 0.5rem; background-color:#007bff;" type="submit">
            Enable
        </button>
        </form>
         @else  
         You have enabled two factor authentication 

         <form method="POST" action="{{url('user/two-factor-authentication')}}">
            @csrf
            @method('DELETE')
            <button class="btn bg-primary" style="padding: 0.5rem; background-color:#007bff;" type="submit">
                Disable
            </button>
            </form>
        @endif

        <div class="mt-3 max-w-xl text-sm text-gray-600">
            <p>
                {{ __('When two factor authentication is enabled, you will be prompted for a secure, random token during authentication. You may retrieve this token from your phone\'s Google Authenticator application.') }}
            </p>
        </div>

        

        @if (session('status') == 'two-factor-authentication-enabled')
        <div class="mt-4 max-w-xl text-sm text-gray-600">
            <p class="font-semibold">
                {{ __('Two factor authentication is now enabled. Scan the following QR code using your phone\'s authenticator application.') }}
            </p>
        </div>

        <div class="mt-4 dark:p-4 dark:w-56 dark:bg-white">
            {!! auth()->user()->twoFactorQrCodeSvg() !!}
        </div>

        <div class="mt-4 max-w-xl text-sm text-gray-600">
            <p class="font-semibold">
                {{ __('Store these recovery codes in a secure password manager. They can be used to recover access to your account if your two factor authentication device is lost.') }}
            </p>
        </div>

        <div class="grid gap-1 max-w-xl mt-4 px-4 py-4 font-mono text-sm bg-gray-100 rounded-lg">
            @foreach (json_decode(decrypt(auth()->user()->two_factor_recovery_codes), true) as $code)
                <div>{{ trim($code) }}</div>
            @endforeach
        </div>
        @endif
</x-app-layout>
