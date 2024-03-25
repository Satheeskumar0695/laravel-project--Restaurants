
@extends('components.menu_items')
@section('payment')
<div class="col-md-4 right-section">
    <!-- Content Goes Here -->

<form>
  <!-- First Row -->
  <div class="form-row">
    <div class="form-group col-md-5 clr">
      <label for="customerName">Customer Name</label>
      <input type="text" class="form-control" id="customerName" placeholder="customer name" required>
    </div>
    <div class="form-group col-md-5 clr">
      <label for="contactNumber">Contact Number</label>
      <input type="tel" class="form-control" id="contactNumber" placeholder="contact number" required>
    </div>
  </div>

  <!-- Second Row -->
  <div class="form-row">
    <div class="form-group col-md-5 clr">
      <label for="tableNumber">Table Number</label>
      <input type="text" class="form-control" id="tableNumber" placeholder="Table number" required>
    </div>
    <div class="form-group col-md-5 clr">
      <label for="billAmount">Bill Amount</label>
      <input type="number" class="form-control" id="billAmount" placeholder="Total amount" required>
    </div>
  </div>


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
  <tbody>
    @foreach ( $menu_items as  $menu_item)


    <tr>
      <td>{{$menu_item->product_name}}</td>
      <td>{{$menu_item->product_price}}</td>
      <td>
        <input type="number" class="form-control" value="1" min="1">
      </td>
      <td>
        <button class="btn btn-danger remove-button">Remove</button>
      </td>
      <td></td>
    </tr>
    @endforeach
    <!-- Example Row 2 -->
   </tbody>
</table>
<div class="total-amount-container">
  <span class="total-amount-label">Total Amount:</span>
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

@endsection
