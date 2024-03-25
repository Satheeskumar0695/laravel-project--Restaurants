<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Your Website Title</title>
  <!-- Bootstrap CSS link -->
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.4.2/css/fontawesome.min.css" >
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"  />
  <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" ></script>
  <style>
    /* Custom styles go here */
    body {
      padding-top: 1px; /* Adjust based on the height of your navbar */
    }

    /* Custom styles for the header */

    .custom-header {
      background-color: #EADBDB;
      color: #fff;
      height: 25%;
    }

    .header-title {
      margin-right: auto;
      padding-right: 20px; /* Adjust padding as needed */
      font-size: 26px;
      font-family: 'Leckerli One', cursive;
      font-weight: 700;
      word-wrap: break-word;
      color: #610909;
      display: flex;
      align-items: center; /* Align title and bar icon */
    }

    .navbar-buttons {
      display: flex;
      align-items: center;
    }

    .navbar-buttons-left {
      margin-right: auto;
      margin-left: 0; /* Align left nav bar buttons to the left */
    }

    .navbar-buttons-right {
      margin-left: auto;
    }

    /* Custom styles for the buttons */
    .navbar-buttons button {
      background-color: #610909;
      color: #fff;
      border-radius: 0;
    }

    /* Custom styles for the buttons */
    .custom-buttons-container {
      display: flex;
      margin: 20px;
    }

    .custom-button {
      flex: 1;
      margin: 0;
    }

    /* Different background colors for each button */
    .button-1 {
      background-color: #d2c5c5;
      color: #fff;
      /* width: 100px; */
    }
     .menu{
        colour: #610909;
        text-decoration: none;

     }

    .a{
        colour: #610909;
        text-decoration: none;
     }
     .button-1 {
      background-color: #610909;
      color: #fff;
    }

    .button-2 {
      background-color: #610909;
      color: #fff;
    }

    .button-3 {
      background-color: #d2c5c5;
      color: #fff;
    }

    /* Custom styles for the left section */
    .left-section {
      background-color: #F6F6F6;
      padding: 20px;
      height: 100vh;
    }

    .box {
      border: 1px solid #ddd;
      color: #610909;
      padding: 10px;
      margin-bottom: 10px;
    }

    /* Custom styles for the search tab */
    .search-tab {
      background-color: #fff;
      padding: 10px;
      display: flex;
      align-items: center;
      width:50%;
      top: 56px;
      left: 0;
      z-index: 1000;
    }

    .search-input {
      flex: 1;
      margin-right: 10px;
      /* background-color:#; */
      /* color:black */
      border-radius: 0;
    }

    /* Custom styles for the bar icon */
    .bar-icon {
      font-size: 24px;
      margin-right: 20px;
    }
    .btn{
      border-radius: 0;
    }
    .bt{
      background-color: #610909;
      color: white;
      border-radius: 0;
    }
    .b{
      background-color:#d2c5c5  ;
    }
    /* .box{
      background-color:EADBDB;
    } */
    .left-section{

      background-color:#EADBDB;
    }
    .middle-section{
      background-color:white;

    }
    .bt {
      border-radius: 0;
      background-color: #610909;
      color: #EADBDB;
      border: none;
    }

    .bt:hover {
      background-color: #CECECE;
      color: #610909;
    }
    .right-section{
      background-color: #EADBDB;
    }
    .food-item img {
      height: 60% /* Maintain the aspect ratio */
    }
    .form-group {
      margin: 20px;
      /* background-color: #CECECE; */
      color: #610909;
      font-weight: 400;
    }
    .form-control{
      background-color: #d2c5c5;
      color:#610909;
      border-radius: 0;
    }


    th, td {
      border: 1px solid #ddd;
      padding: 10px;
      text-align: left;

      padding: 10px;
      text-align: left;
    }

    th {
      background-color: #610909;
      color: white;

    }



    /* Optional: Style the remove button */
    .remove-button {
      padding: 5px 10px;
      background-color: #dc3545;
      color: #fff;
      border: none;
      cursor: pointer;
    }

    .remove-button:hover {
      background-color: #bd2130;
    }
    .total-amount-container{
      margin-left: 50%;    }

      .payment-options {
      display: flex;
      justify-content: space-around;
      margin-top: 20px;
      background-color: #610909;
      color: white;
      width: auto;
    }

    .payment-option {
      display: flex;
      align-items: center;
    }

    .payment-label {
      margin-left: 10px;
    }
    .custom-buttons-container {
      margin-top: 20px;
    }

    .btn {
      background-color: #610909;
      color: white;
      border: none;
      /* padding: 10px 20px; */
      margin-right: 10px;
      border-radius: 0;
    }

    .bnn{
      background-color: #d2c5c5;
      color: white;
      margin-left: 70%;
    }
    /* Media query for smaller screens */
    @media (max-width: 768px) {
      .custom-header {
        padding: 5px; /* Adjust padding for smaller screens */
      }
    }
  </style>
</head>
<body>

  <!-- Bootstrap Navbar -->
  <nav class="navbar navbar-expand-sm navbar-dark custom-header">
    {{-- <i class="fas fa-bars bar-icon" style="color:#610909;"></i>
    <a class="navbar-brand header-title" style="color:#610909;"href="#">Food Jet</a> --}}

    <!-- Left Navigation Buttons -->
    <div class="navbar-buttons navbar-buttons-left">
        <a href="{{url('order')}}" class="btn btn-light mr-2">New Order</a>

      <button class="btn btn-light mr-2">OnGoing Order</button>
      <button class="btn btn-light mr-2">Kitchen Status</button>
      <button class="btn btn-light">Today's Order</button>
    </div>

    <!-- Right Navigation Buttons -->
    <div class="custom-buttons-container">
      <!-- Button 1 -->
      <a class="btn " href="dinein">Dine In</a>

      <!-- Button 2 -->
      <button class="btn custom-button button-2">Take Away</button>

      <!-- Button 3 -->
      <button class="btn custom-button button-3">Delivery</button>

      <div  class="box b"><a href="/">
        Logout
     </a></div>
    </div>
  </nav>

  <!-- Search Tab -->
  <div class="search-tab">
    <input type="text" class="form-control search-input" placeholder="Search by Products">
    <button class="btn btn-light mr-2 bt">Search</button>
  </div>

  <!-- Left Section with Columns -->
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-2 left-section">
        <div  class="box b"><a href="#" onclick="AllProducts()" >
           All Products
        </a></div>
        @foreach ( $menu as $menues )
        <div class="box b">
            <a  class="menu" href="#" onclick="ShowProducts({{$menues->menu_id}})" >
                {{ $menues->name }}
            </a>
        </div>

      @endforeach


      </div>

      <!-- Middle Section Goes Here -->
      <div class="col-md-6 middle-section">
        <div class="row">
            @foreach ($menu_items as $index => $menu_item)
                @if ($index <8)
                    <div class="col-md-3 food-item img Products_{{$menu_item->menu_id}}">
                        <img src="{{$menu_item->image}}" alt="Food 1" class="img-fluid">
                        <button  product-price="{{$menu_item->product_price}}" menu-id="{{$menu_item->menu_id}}" product-id="{{$menu_item->product_id}}" product-name="{{$menu_item->product_name}}" class="addCart btn btn-primary bt mt-3 mx-auto d-block" data-toggle="modal" data-target="#foodModal1">{{$menu_item->product_name}}</button>
                    </div>
                @endif
            @endforeach
        </div>
    </div>


      <!-- Right Section Goes Here -->
      <div class="col-md-4 right-section">
        <!-- Content Goes Here -->

    <form>
      <!-- First Row -->
      <div class="form-row">
        {{-- <div class="form-group col-md-5 clr">
          <label for="customerName">Customer Name</label>
          <input type="text" class="form-control" id="customerName" placeholder="customer name" required>
        </div>
        <div class="form-group col-md-5 clr">
          <label for="contactNumber">Contact Number</label>
          <input type="tel" class="form-control" id="contactNumber" placeholder="contact number" required>
        </div> --}}
      </div>

      <!-- Second Row -->
      <div class="form-row">
        <div class="form-group col-md-5 clr">
          <label for="tableNumber">Table Number</label>
          <input type="text" class="form-control" id="tableNumber" placeholder="Table number" required>
        </div>
        <div class="form-group col-md-5 clr">
            <p>Date: {{ now()->format('d-m-Y') }}</p>
            {{-- <p>Time: {{ now()->format('H:i:s') }}</p> --}}
        </div>
      </div>

    </form>

    <table class="table">
      <thead>  
        <tr>
          <th>Item Name</th>
          <th>Price</th>
          <th>Quantity</th>
          <th>Remove</th>
          <th>Total Amount</th>
        </tr>
      </thead>
      <tbody id="OrdersList">


      </tbody>
    </table>
    <div class="total-amount-container">
        <input type="hidden" value="" id="gross_amount" >
      <span class="total-amount-label">Total Amount: <span class="gross_amount"></span></span>
      <span id="totalAmount"></span>
    </div>
    <div class="payment-options">
      <!-- Cash Option -->
      <div class="payment-option">
        <input type="radio" id="cashOption" name="payment" value="cash">
        <label class="payment-label" for="cashOption">Cash</label>
      </div>

      <!-- UPI Payment Option -->
      <div class="payment-option">
        <input type="radio" id="upiOption" name="payment" value="upi">
        <label class="payment-label" for="upiOption">UPI Payment</label>
      </div>

      <!-- Card Payment Option -->
      <div class="payment-option">
        <input type="radio" id="cardOption" name="payment" value="card">
        <label class="payment-label" for="cardOption">Card</label>
      </div>

    </div>
    <div class="custom-buttons-container">
      <!-- Save Button -->
      <button class="btn custom-button bn">Save</button>

      <!-- Save and Print Button -->
      <button class="btn custom-button bn">Save and Print</button>

      <!-- KOT Button -->
      <button class="btn custom-button bn">KOT</button>
    </div>

    <button class="btn custom-button bnn">Cancel Order</button>

  </div>

      </div>
    </div>
  </div>

  <!-- Bootstrap JS and Popper.js scripts -->
  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script>
    function AllProducts(){
        $(".food-item").show();
    }
    function ShowProducts(id){

        $(".food-item").hide();
        $(`.Products_${id}`).show()
    }
    $(document).ready(function() {

        var OrdersList = []
      $('.addCart').on('click', function(e) {
            var price = $(this).attr("product-price")
            var MenuId = $(this).attr("menu-id")
            var Product_Id = $(this).attr("product-id")
            var ProductName = $(this).attr("product-name")

            var Html = `<tr class="${Product_Id}">
            <td>${ProductName}</td>
            <td>${price}</td>
            <td>
                <input name="total_line_qty[${Product_Id}]" data-qty-product_id="${Product_Id}"  data-price="${price}"  type="number" class="form-control qty total_line_qty_${Product_Id}" value="1" min="1">
            </td>
            <td>
                <button data-id="${Product_Id}" class="btn btn-danger remove-button">Remove</button>
            </td>
            <input type="hidden" name="total_line_price[${Product_Id}]" class="SumLinePrice total_line_price_${Product_Id}" value="" >
            <td class="total_line_price_${Product_Id}"></td>
            </tr>`

            if(OrdersList.includes(Product_Id)){

            }else {
                OrdersList.push(Product_Id)
                $("#OrdersList").append(Html)
                $(`.total_line_price_${Product_Id}`).html(price * 1)
                $(`.total_line_price_${Product_Id}`).val(price * 1)
                getTotalAmount()

            }
            $(".remove-button").on('click', function(e) {
                getTotalAmount()
                var arr = ["jQuery", "JavaScript", "HTML", "Ajax", "Css"];
                var itemtoRemove = $(this).attr("data-id");
                OrdersList.splice($.inArray(itemtoRemove, arr), 1);

                $(`.${$(this).attr("data-id")}`).remove()
                getTotalAmount()
            })

            $(".qty").on('change', function(e) {
                var LinePrice = Number($(this).val() * $(this).attr("data-price"))
                $(`.total_line_price_${$(this).attr("data-qty-product_id")}`).html(LinePrice)
                $(`.total_line_price_${$(this).attr("data-qty-product_id")}`).val(LinePrice)
                getTotalAmount()


            })

      })
    })
    function  getTotalAmount(){
        var FinalAmount = 0;
        $(".SumLinePrice").each(function() {
            FinalAmount += Number($(this).val())
        });
        $("#gross_amount").val(FinalAmount)
        $(".gross_amount").html(FinalAmount)
    }
    </script>


