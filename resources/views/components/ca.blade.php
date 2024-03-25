@extends('components.admin1')
@section('menu')



<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Restaurant Mangement System</title>
    {{-- <link rel="stylesheet" href="./assets/css/login1.css"> --}}
    <link rel="stylesheet" href="./assets/css/category.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
<style>
    .message
    {
        font-size:15px;
        color: green;
    }
    .error
    {
        color:red;
    }
</style>
</head>
<body>
	<div class="  h-[80vh] mx-5 flex flex-col gap-3 justify-center">
		<div class="px-10  py-10 flex  divide-x-2 rounded-lg shadow-md">
         <img src="./assets/img/menu.jpg" alt="" class="h-100 w-50 img " />

       <div class="center">

        <form action="{{url('addcategory')}}" method="POST" enctype="multipart/form-data" onsubmit="return validateForm()">
            @csrf

            <h1>Category</h1>
            @if ('category')

            <div id="menu" class="message">

               {{Session('category')}}
               <script>
                   setTimeout(function() {
                       document.getElementById('menu').style.display = 'none';
                   }, 5000);
               </script>
            </div>
            @endif

                @if ('product')
                <div id="product" class="error">

               {{Session('product')}}
               <script>
                   setTimeout(function() {
                       document.getElementById('product').style.display = 'none';
                   }, 5000);
               </script>
            </div>
            @endif

            <div class="txt_field">
                <select name="menues" id="menuOption">
                    <option value="">Select Menu</option>
                    @foreach ($menu->sortBy('name') as $menues)
                        <option value="{{$menues->menu_id}}">{{$menues->name}}</option>
                    @endforeach
                </select>
                <span id="menuOptionError" class="error"></span>
            </div>
            <div class="txt_field">
                <input type="text" name="productname" id="productName" placeholder=" " maxlength="25" >
                <label for="Product Name">Product Name:</label>
                <span id="prodectnameError" class="error"></span>
            </div>
            <div class="txt_field">
                <input type="text" name="productdescription" id="productdescription" placeholder=" "  maxlength="75">
                <label for="productDescription">Product Description :</label>
                <span id="productdescriptionError" class="error"></span>
            </div>
            <div class="txt_field">
                <input type="text" name="productPrice" id="productPrice" placeholder="" maxlength="10">
                <label for="productPrice">Product Price :</label>
                <span id="productPriceError" class="error"></span>
            </div>
            <div class="field">
                <p>Product Image:</p>
                <input type="file" name="productimage" id="productimage" placeholder=" ">
                <span id="productimageError" class="error"></span>
            </div>
            <input type="hidden" name="status" value=1>
      <input type="submit" value="Add Category">

    </form>
    </div>
</span>
</div>
<script src="{{asset('assets/js/category_validation.js')}}"></script>
 </body>
</html>

@endsection
