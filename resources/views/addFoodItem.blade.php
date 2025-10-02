@extends('template')
@section('content')
@parent
<section class="order" id="order">
@foreach ($category as $cat)
    
    <h1 class="heading">Add <span>{{ $cat->categoryName }}</span> Item Here</h1>
    <div class="row">
        <form action="../AddFood/{{$cat->categoryID}}" method = "POST">
            @csrf
            <div class="inputBox">
            <input name="Name" type="text" placeholder="Food Name Here">
            </div>
    
            <div class="inputBox">
            <input  name="price" type="number" placeholder = 'Price in Rupees'>
            </div>
    
            <div class="inputBox">
                <div class="imageContainer">
                    <h3>Food Picture</h3>
                    <div class="imageInput" >
                        <input style="width: 90%;" type="file" name="fileToUpload" id="fileToUpload">
                    </div>
                </div>
            </div>
            <input type="submit" name = "add" value="Add" class="btn">
            <input type="submit" name = "cancel" value="Cancel" class="btn">
        </form>
    </div>
@endforeach
    </section>    
@endsection