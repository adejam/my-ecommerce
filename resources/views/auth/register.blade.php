<x-guest-layout>
    @section('title', 'Register')
        <form action="{{ route('register') }}" method="POST" style="margin-top: 7rem; width:100%; max-width:40rem;">
            @csrf
            <img src="{{ asset('images/avatar.svg') }}">
            <h2 class="title">Register</h2>
            <div class="reg-row">
                <x-input-without-borders
                    :input="['value' => old('firstname'), 'name' => 'firstname', 'title' => 'Firstname', 'type' => 'text']" />
                <x-input-without-borders
                    :input="['value' => old('lastname'), 'name' => 'lastname', 'title' => 'Lastname', 'type' => 'text']" />
            </div>
            <x-input-without-borders :input="['value' => old('email'), 'name' => 'email', 'title' => 'Email', 'type' => 'email']" />
            <div class="reg-row">
                <x-input-without-borders
                    :input="['value' => old('password'), 'name' => 'password', 'title' => 'Password', 'type' => 'password']" />
                <x-input-without-borders
                    :input="['value' => '', 'name' => 'password_confirmation', 'title' => 'Confirm Password', 'type' => 'password']" />

            </div>



            <div class="reg-row">
                <div class="inputs-container">
                    <div class="input-div pass">
                        <div class="div">
                            <Label for="state">Choose State</Label>
                            <select name="state" id="state" class="input appearance-none" data-field_to_target="area"
                                data-object_to_check="states">
                                <option value="{{ old('firstname') }}"></option>
                                <option value="lagos">Lagos State</option>
                                <option value="oyo">Oyo State</option>
                            </select>
                        </div>
                    </div>
                    @if ($errors->has('state'))
                        <div class="form-error-div" role="alert">
                            <strong>{{ $errors->first('state') }}</strong>
                        </div>
                    @endif
                </div>
                <div class="inputs-container">
                    <div class="input-div pass">
                        <div class="div">
                            <Label for="area">Choose Area</Label>
                            <select name="area" id="area" class="input appearance-none" disabled>
                                <option value="{{ old('firstname') }}"></option>
                            </select>
                        </div>
                    </div>
                    @if ($errors->has('area'))
                        <div class="form-error-div" role="alert">
                            <strong>{{ $errors->first('area') }}</strong>
                        </div>
                    @endif
                </div>
            </div>

                <input type="submit" class="btn" value="Register">
                <div class="form-footer">
                    <a href="{{ route('login') }}">Sign in</a>
                    <a href="{{ route('password.request') }}">Forgot Password?</a>
                </div>
        </form>
    </x-guest-layout>
