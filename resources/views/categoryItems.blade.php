@extends('template')
@section('content')
@parent
<section class="popular" id="popular">

    @foreach ($category as $cat)
    <h1 class="heading"><span>{{ $cat->categoryName }}</span> Items</h1>
    <a href="../AddFood/{{ $cat->categoryID }}" class="btn" >Add New {{$cat->categoryName}}</a>
    @endforeach
    @php
        if(session('message')!==null)
        {
            echo session('message');
        }
    @endphp
    <div class="box-container">
    @foreach ($foodRecords as $foodRecord )
    <div class="box">
        <span class="price"> {{ $foodRecord->price }} Rs</span>
        <img src="../images/foodImages/{{ $foodRecord->PicPath }}" alt="">
        <h3>{{ $foodRecord->foodName }}</h3>
        <a href="#" class="btn">Add To Cart</a>
    </div>
    @endforeach
        
        <div class="box">
            <span class="price"><span>100</span> Rs </span>
            <img src="../images/p-2.jpg" alt="">
            <h3>tasty cakes</h3>
            <a href="#" class="btn">Add To Cart</a>
        </div>
        <div class="box">
            <span class="price"><span>800</span> Rs </span>
            <img src="../images/p-3.jpg" alt="">
            <h3>tasty sweets</h3>
            <a href="#" class="btn">Add To Cart</a>
        </div>
        <div class="box">
            <span class="price"><span>100</span> Rs </span>
            <img src="../images/p-4.jpg" alt="">
            <h3>tasty cupcakes</h3>
            <a href="#" class="btn">order now</a>
        </div>
    </div>

</section>
@endsection