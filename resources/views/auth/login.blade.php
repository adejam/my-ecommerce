<x-guest-layout>
    @section('title', 'Welcome')
    <form action="index.html">
        <img src="{{ asset('images/avatar.svg') }}">
        <h2 class="title">Login</h2>
        <div class="input-div pass">
            <div class="div">
                <Label for="username">Username</Label>
                <input id="username" type="text" class="input">
            </div>
        </div>
        <div class="input-div pass">
            <div class="div">
                <Label for="password">Password</Label>
                <input id="password" type="password" class="input">
            </div>
        </div>   
        <div class="form-footer">
            <a href="#">Create account</a>
            <a href="#">Forgot Password?</a>
        </div>
        <input type="submit" class="btn" value="Login">
    </form>
</x-guest-layout>