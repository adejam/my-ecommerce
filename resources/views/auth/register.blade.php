<x-guest-layout>
    @section('title', 'Register')
        <form action="index.html" style="margin-top: 7rem; width:100%; max-width:40rem;">
            <img src="{{ asset('images/avatar.svg') }}">
            <h2 class="title">Register</h2>
            <div class="reg-row">
                <div class="input-div pass">
                    <div class="div">
                        <Label for="name">Firstname</Label>
                        <input id="name" type="text" class="input">
                    </div>
                </div>
                <div class="input-div pass">
                    <div class="div">
                        <Label for="lastname">Lastname</Label>
                        <input id="lastname" type="text" class="input">
                    </div>
                </div>
            </div>
            <div class="input-div pass">
                <div class="div">
                    <Label for="phone">Phone</Label>
                    <input id="phone" type="tel" class="input" pattern="[0-9]{11}">
                </div>
            </div>
            <div class="input-div pass">
                <div class="div">
                    <Label for="email">Email</Label>
                    <input id="email" type="email" class="input">
                </div>
            </div>
            <div class="reg-row">
                <div class="input-div pass">
                    <div class="div">
                        <Label for="password">Password</Label>
                        <input id="password" type="password" class="input">
                    </div>
                </div>
                <div class="input-div pass">
                    <div class="div">
                        <Label for="confirm_password">Confirm Password</Label>
                        <input id="confirm_password" type="password" class="input">
                    </div>
                </div>
            </div>
            
            
            
            <div class="reg-row">
                <div class="input-div pass">
                    <div class="div">
                        <Label for="state">Choose State</Label>
                        <select name="state" id="state" class="input appearance-none" data-field_to_arget="area" data-object_to_check="states">
                            <option value=""></option>
                            <option value="lagos">Lagos State</option>
                            <option value="oyo">Oyo State</option>
                        </select>
                    </div>
                </div>
                <div class="input-div pass">
                    <div class="div">
                        <Label for="area">Choose Area</Label>
                        <select name="area" id="area" class="input appearance-none" disabled></select>
                    </div>
                </div>
            </div>
            <div class="form-footer">
                <a href="#">Sign in</a>
                <a href="#">Forgot Password?</a>
            </div>
            
            <input type="submit" class="btn" value="Login">
        </form>
    </x-guest-layout>
