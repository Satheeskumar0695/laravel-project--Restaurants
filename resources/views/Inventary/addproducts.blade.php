@extends('components.admin1')

@section('menu')


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add products</title>
<style>
   body {
    font-family: Arial, sans-serif;
}
h2{
    text-align: center;
    color:#ab1111 ;
}

.container {
    background: rgb(240, 204, 204);
    max-width: 600px;
    margin: 2rem auto;
    padding: 20px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

form {
    display:flex;
    flex-direction: column;
}

input {
            width: 100%;
            padding: 8px;
            margin-bottom: 16px;
            box-sizing: border-box;
        }

input[type="text"],
input[type="number"],
input[type="file"] {
    margin-bottom: 10px;
}
.message
{
    color:green;
}
button {
    margin-top: 10px;
    padding: 10px 20px;
    background-color: #ab1111;
    color: white;
    border: none;
    cursor: pointer;
}

button:hover {
    background-color: #6a0b0b;
}

#productList {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
    grid-gap: 20px;
    margin-top: 20px;
}

.product
{
    display: flex;
    flex-direction: column;
    align-items: center;
    padding: 20px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

.product img {
    width: 50%;
    height: auto;
}

.product h3 {
    margin: 10px 0;
}

.product button {
    margin-top: 10px;
    padding: 5px 10px;
    background-color: #dc3545;
    color: white;
    border: none;
    cursor: pointer;
}

.product button:hover {
    background-color: #bd2130;
}
</style>
    <body>
    <div class="container">
        <h2>ADD NEW PRODUCTS</h2>
        <form action="{{url('products')}}" method="POST" enctype="multipart/form-data">
            @csrf

            <label for="productName">Product Name:</label>
            <input type="text" id="productName" name="productName"  autocomplete="off">
            <br>
            <!-- <label for="productPrice">Product Price:</label>
            <input type="number" id="productPrice" name="productPrice" required>
            <br> -->
            <label for="productQuantity">Product Quantity:</label>
            <input type="text" id="productQuantity" name="productQuantity"  autocomplete="off" required>
            <br>

            <label for="productImage">Choose File:</label>
            <input type="file" id="productImage" name="image" required>
            <br>
            @if ('inventary')
            <div id="menu" class="message">

                {{Session('inventary')}}
                <script>
                    setTimeout(function() {
                        document.getElementById('menu').style.display = 'none';
                    }, 5000);
                </script>
             </div>
            @endif
         <button type="submit">Add Product</button>
         </form>
        </div>
<div id="productList"></div>
    </div>
    @endsection
</body>
</html>
