<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>complete responsive food website design tutorial</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <link rel = "stylesheet" href = "/css/style.css">

    <link rel="icon" href="images/icon.jpg" type = "image/x-icon">
</head>
<body>
    
<!-- header section starts  -->

<!--<?php //include 'menu.php';?> -->

<!-- header section ends -->

<!-- home section starts  -->

<header>
<a href="\" class="logo"><i class="fas fa-utensils"></i>RETRO</a>
<div id="menu-bar" class="fas fa-bars"></div>

<nav class="navbar" id="home">
    <a class="menu"  href="\">home</a>
    <a class="menu" href="\speciality">speciality</a>
    <a class="menu" href="\popular">popular</a>
    <a class="menu" href="\cart">Cart</a>
    <a class="menu" href="\about" >About</a>
    <a class="menu login" href="\login">login </a>
</nav>

</header>

@section('content')
@show

<section class="footer">

    <div class="share">
        <a href="#" target="_blank" class="btn">facebook</a>
        <a href="#" target="_blank" class="btn">twitter</a>
        <a href="#" target="_blank" class="btn">instagram</a>
        <a href="#" target="_blank" class="btn">pinterest</a>
        <a href="#" target="_blank" class="btn">linkedin</a>
    </div>

    <h1 class="credit"> created by <span> M Farooq </span> | all rights reserved! </h1>

</section>


<!-- scroll top button  -->
<a href="" class="fas fa-angle-up" id="scroll-top"></a>


<!-- custom js file link  -->
<script src="js/script.js"></script>


</body>
</html>