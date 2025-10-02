@extends('template')
@section('content')
@parent
<section class="order" id="order">

<h1 class="heading"> <span>Login</span> Here</h1>
<!-- <?php //include 'loginConfig.php'?> -->
<p style = "text-align:center;font-size:medium">
@php
    if(session('message') !== null)
    {
        echo session('message');
    }
@endphp
</p>
<div class="row">
    
<div class="image">
            <img src="images/login.jpg" alt="">
</div>

    <form action="\login" method="POST">
        @csrf
        <div class="login"">
            <br>
        <div class="inputBox">
            <input name = "username"type="Username" placeholder="username" required>
        </div>
        <br>
        <div class="inputBox">
            <input name = "password"type="password" placeholder="Password" required>
        </div>
        <br>
        <input name = "login"type="submit" value="Login" class="btn">
        <input name = "cancel"type="submit" value="cancel" class="btn">
        <p class="login" style = "font-size:medium; padding-top:2rem">
        Don't Have Account? 
        <a href = "\register"style = "cursor:pointer; font-weight:bolder; color:blue;">SignUp</a>
        </p>
</form>
</div>
</section>
@endsection