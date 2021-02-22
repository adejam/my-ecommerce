<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>@yield('title') . My-ecommerce</title>
        <!-- Styles -->
        {{-- <link rel="stylesheet" href="{{ mix('css/app.css') }}"> --}}
        <style>
        *{padding:0;margin:0;box-sizing:border-box}html{font-family:arial, helvetica, sans-serif;font-size:13px;}.container{min-width:100%;min-height:100vh;display:flex;flex-wrap:wrap;padding:0 2rem; align-items: center}.mb-1{margin-bottom: 1rem;}.mt-3{margin-top: 3rem;}.form-footer{display: flex; flex-wrap: wrap; justify-content: space-between;color: #1a73e8; margin:1rem 0.5rem;}.img{justify-content:flex-end;}.img,.login-content{display:flex;flex-basis:50%;align-items:center}.login-content{justify-content:center;text-align:center}.img img{width:100%}form{max-width:360px;width: 100%;}.login-content img{height:100px}.login-content h2{margin:15px 0;color:#333;text-transform:uppercase;font-size:2.5rem}.input-div{position:relative;margin:25px 0;padding:5px 0;border-bottom:2px solid #d9d9d9}.input-div>div{position:relative;height:45px}.input-div>div>label{position:absolute;left:10px;top:50%;transform:translateY(-50%);color:#999;font-size:1.1rem;transition:.3s}.input-div:after,.input-div:before{content:"";position:absolute;bottom:-2px;width:0;height:2px;background-color:#6c63ff;transition:.4s}.input-div:before{right:50%}.input-div:after{left:50%}.input-div.focus:after,.input-div.focus:before{width:50%}.input-div.focus>div>label{top:-5px;}.input-div>div>input, .input-div>div>select{position:absolute;left:0;top:0;width:100%;height:100%;border:none;outline:none;background:none;padding:.5rem .7rem;font-size:1.2rem;color:#555;}.input-div.pass{margin-bottom:4px}a{display:block;text-align:right;text-decoration:none;color:#999;font-size:.9rem;transition:.3s}a:hover{color:#6c63ff}.btn{display:block;width:100%;height:50px;border-radius:25px;outline:none;border:none;background-image:linear-gradient(90deg,#6c63ff,#332ad8,#6c63ff);background-size:200%;font-size:1.2rem;color:#fff;text-transform:uppercase;margin:1rem 0;cursor:pointer;transition:.5s}.btn:hover{background-position:100%}.appearance-none{appearance: none;}.reg-row{display: flex; flex-wrap: wrap; justify-content: space-between;}.reg-row .inputs-container{flex-basis: 48%;}.form-error-div{text-align: left; font-size: 0.9rem; color: #dc3545;}@media screen and (max-width:1000px){form{max-width:290px}.login-content h2{font-size:2.4rem;margin:8px 0}.img img{width:400px}}@media screen and (max-width:900px){.img{display:none}.container{justify-content: center;}.login-content{justify-content:center; flex-basis: 100%;}}@media screen and (max-width:500px){.reg-row .inputs-container{flex-basis: 100%;}}
        </style>
        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>
    </head>
    <body>
	<div class="container" style="{{request()->routeIs('register') ? 'justify-content:center;' : 'justify-content:space-between'}}">
        @if (!request()->routeIs('register'))
           <div class="img">
			<img src="{{ asset('images/authentication.png') }}">
		</div> 
        @endif
		
		<div class="login-content" style="{{request()->routeIs('register') ? 'flex-basis:100%;' : ''}}">
			{{ $slot }}
        </div>
    </div>
    </body>
</html>
