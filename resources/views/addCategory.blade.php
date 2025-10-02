@extends('template')
@section('content')
@parent
<section class="order" id="order">

    <h1 class="heading">Add <span>Category</span> Here</h1>
    <div class="row">
        <form action="/speciality" method = "POST">
            @csrf;
            <div class="inputBox">
            <input name="Name" type="text" placeholder="Name Here">
            </div>
    
            <div class="inputBox">
            <input  name="description" type="field" placeholder = 'Description Here'>
            </div>
    
            <div class="inputBox">
                <div class="imageContainer">
                    <h3>Category Picture</h3>
                    <div class="imageInput" >
                        <input style="width: 90%;" type="file" name="fileToUpload" id="fileToUpload">
                    </div>
                </div>
            </div>
            <input type="submit" name = "add" value="Add Category" class="btn">
            <input type="submit" name = "cancel" value="Cancel" class="btn">
        </form>
    </div>
    
    </section>
    
@endsection