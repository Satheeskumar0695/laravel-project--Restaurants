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
    <link rel="stylesheet" href="./assets/css/menu1.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
<style>
    .menu
    {
        color:green
    }
    .message
    {
        color:red;
    }
</style>
</head>
<body>
	<div class="  h-[80vh] mx-5 flex flex-col gap-3 justify-center">
		<div class="px-5  py-5 flex  divide-x-2 rounded-lg shadow-md">
         <img src="./assets/img/foods.jpeg" alt="" class="h-50 w-50 img " />

       <div class="center">
        <form  action="{{url('addmenu')}}" method="post" onsubmit="return validateForm()">
            @csrf
            <h1>MENU</h1>
            <div class="txt_field">
                <input type="text" name="menuname" id="menuname" maxlength="15" placeholder=" ">
                <label for="menu">Menu Name :</label>
                <span id="menuError" class="message"></span>
            </div>

        @if (Session('message'))
        <div id="message"class="menu">
           {{Session('message')}}
        </div> <script>
            setTimeout(function() {
                document.getElementById('message').style.display = 'none';
            }, 5000);

        </script>
 @endif

        @if (Session('menu'))
        <div id="message"class="message">
           {{Session('menu')}}
        </div> <script>
            setTimeout(function() {
                document.getElementById('message').style.display = 'none';
            }, 2000);

        </script>
      @endif

        <input type="submit" value="Add Menu">
        <a href="category" class="button">Add Category</a>

    </form>
    </div>
</span>
</div>

<script src="{{asset('assets/js/menu_validation.js')}}"></script>
@endsection

  </body>
</html>
