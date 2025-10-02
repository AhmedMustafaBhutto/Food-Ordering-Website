@extends('template')
@section('content')
@parent
<section class="speciality" id="speciality">

<h1 class="heading"> our <span>speciality</span> </h1>
<h2>
@php
        if((session('request'))!== null)
        {
         echo session('request');
        }
@endphp
</h2>
<a href="/addCategory" class="btn">Add New Category</a>
<div class="box-container">
    @foreach($categories as $category)
        @php
            $path = $category->picPath;
            $description = $category->description;
        if($path == '') 
        {
           $path = "images/defaultcategory.jpg";    
        }
        if($description == "")
        {
            $description = "RETRO gives you best place to enjoy your Fresh Foods with your family. 
            Innovative shakes that suits with your taste which compramises in health and hygene.";
        }
        @endphp
       
        <div class="box">
            <a href="/speciality/{{ $category->categoryID }}"><img class="image" src="{{ $path }}" alt=""></a>
             <div class="content">
                <img src = "images\s-6.png" alt="">
                <h3>{{ $category->categoryName }}</h3>
                <p>{{ $description }}</p>
            </div>
        </div>
         @endforeach

            {{-- <div class="box">
            <a href="categoryitems.php?id=1"><img class="image" src="images\s-img-1.jpg" alt=""></a>
             <div class="content">
                <img src="images/s-6.png" alt="">
                <h3>Tasty Burger</h3>
                <p>RETRO gives you best place to enjoy your Fresh Foods with your family. 
            //     Innovative shakes that suits with your taste which compramises in health and hygene.</p>
            </div>
        </div>
        <div class="box">
            <a href="categoryitems.php?id=1"><img class="image" src="images\s-img-1.jpg" alt=""></a>
             <div class="content">
                <img src="images/s-6.png" alt="">
                <h3>Tasty Burger</h3>
                <p>RETRO gives you best place to enjoy your Fresh Foods with your family. 
            //     Innovative shakes that suits with your taste which compramises in health and hygene.</p>
            </div>
        </div>
        <div class="box">
            <a href="categoryitems.php?id=1"><img class="image" src="images\s-img-1.jpg" alt=""></a>
             <div class="content">
                <img src="images/s-6.png" alt="">
                <h3>Tasty Burger</h3>
                <p>RETRO gives you best place to enjoy your Fresh Foods with your family. 
            //     Innovative shakes that suits with your taste which compramises in health and hygene.</p>
            </div>
        </div> --}}
  
</div>

</section>

@endsection