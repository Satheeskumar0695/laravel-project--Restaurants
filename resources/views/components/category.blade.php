



@extends('components.admin1')
@section('menu')


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>add category</title>
    <link rel="stylesheet" href="{{asset('assets/css/menu.css')}}">
</head>
<body>

    <div class="container">
        <form action="{{url('addcategory')}}" method="POST" enctype="multipart/form-data">
            @csrf

            
            <div class="input-field">
                <label for="menuOption">Select Menu</label>

                <select  name="menues" id="menuOption" name="menues" >
                    <option> Select</option>
                    @foreach ( $menu as $menues )


                  <option value="{{$menues->menu_id}}">{{$menues->name}}</option>
                    @endforeach
                </select>
            </div>

            <div class="input-field">
                <label for="productName">Product Name</label>
                <input type="text" name="productname" id="productName" placeholder="Enter the Product Name" required>
            </div>

            <div class="input-field">
                <label for="productDescription">Product Description</label>
                <input type="text" name="productdescription" id="productDescription" placeholder="Enter the Product Description" required>
            </div>
            <div class="input-field">
                <label for="productPrice">Product Price</label>
                <input type="text" name="productprice" id="productPrice" placeholder="Enter the Product Price" required>
            </div>
            <div class="input-field">
                <label for="productImage">Product Image</label>
                <input type="file" name="productImage" id="productImage" placeholder="Enter the Product Image" required>
            </div>
                <input type="hidden" name="status" value=1>
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
            <button type="submit">Submit</button>
        </form>
    </div>
    @endsection
</body>
</html>
