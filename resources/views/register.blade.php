@extends('template')
@section('content')
@parent
<section class="order" id="order">

<h1 class="heading"> <span>Signup</span> Here</h1>
<?php //include 'config.php'?>
<p style = "text-align:center;font-size:medium">
    @php
        if(session('message') !== null)
        {
            echo session('message');
        }
    @endphp
    </p>
<div class="row">

    <form action="\register" method = "POST">
        @csrf
        <div class="inputBox">
            <input type="text" name = "fname" placeholder="First Name" required>
            <input type="text" name = "lname" placeholder="Last Name (optional)">
        </div>

        <div class="inputBox">
            <input type="mobile" name = "mobile" placeholder="Mobile Number">
            <input type="email" name = "email" placeholder="Email">
        </div>

        <div class="inputBox">
            <input type="username" name = "username" placeholder="Username (Unique)"required>
            <input type="password" name = "password" placeholder="Password"required>
        </div>

        <input type="submit" name = "submit" value="Sign Up" class="btn">
    </form>
</div>

</section>
@endsection