{{-- Ghie and jasper --}}
@extends('layouts.app')

@section('title', 'Check out Page')

@section('content')



{{-- Dito kayo mag frontend lagay kayo ng checkout tapos yung url ay http://127.0.0.1:8000/checkout pwede kayo mag hanap template tas design niyo nalang--}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout Page</title>
    <link rel="stylesheet" href="resources/css/app.css">
    <style>
      body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f9f9f9;
}

.container {
    width: 100%;
    margin-top: 20px;
    margin-bottom: 20px;
    padding: 20px;
    display: flex;
    flex-wrap: wrap; /* Added to ensure responsiveness */
    justify-content: space-between;
    background-color: #fff;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

.order-summary, .checkout-details {
    flex-basis: calc(50% - 20px); /* Adjusted for better spacing */
    padding: 20px;
}

.order-summary h2, .checkout-details h2 {
    font-size: 24px; /* Increased font size for emphasis */
    margin-bottom: 20px; /* Increased spacing */
    color: #333; /* Changed text color for better readability */
}

.item {
    display: flex;
    align-items: center; /* Center aligning items */
    margin-bottom: 20px; /* Increased spacing between items */
}

.item-image {
    width: 80px;
    height: 80px;
    background-color: #ddd;
    border-radius: 5px;
    margin-right: 20px; /* Increased spacing */
}

.item-details h3 {
    font-size: 18px; /* Increased font size for emphasis */
    margin: 0;
    color: #333; /* Changed text color for better readability */
}

.item-details p {
    margin: 5px 0;
    color: #666; /* Adjusted text color for better contrast */
}

hr {
    border: none;
    border-top: 1px solid #ccc;
    margin: 20px 0; /* Increased spacing */
}

input[type="text"], select {
    width: calc(100% - 20px);
    padding: 10px;
    margin-bottom: 20px; /* Increased spacing */
    border-radius: 5px;
    border: 1px solid #ccc;
}

input[type="text"]::placeholder {
    color: #999;
}

select {
    appearance: none;
    -webkit-appearance: none;
    -moz-appearance: none;
    background-image: url('data:image/svg+xml;utf8,<svg fill="%23999" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><path d="M7 10l5 5 5-5z"/><path d="M0 0h24v24H0z" fill="none"/></svg>');
    background-size: 14px;
    background-repeat: no-repeat;
    background-position-x: calc(100% - 10px);
    background-position-y: center;
}

input[type="submit"] {
    background-color: #ff5722;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    font-size: 18px; /* Increased font size for emphasis */
    width: 100%;
}

input[type="submit"]:hover {
    background-color: #f44336;
}


    </style>
</head>
<body>
<div class="container">
        <div class="order-summary">
            <h2>Order Summary</h2>
            <div class="item">
                <div class="item-image">
                    <!-- Placeholder for product image -->
                </div>
                <div class="item-details">
                    <h3>Product Name</h3>
                    <p>Price: ₱100.00</p>
                    <p>Quantity: 1</p>
                </div>
            </div>
            <div class="item">
                <div class="item-image">
                    <!-- Placeholder for product image -->
                </div>
                <div class="item-details">
                    <h3>Product Name</h3>
                    <p>Price: ₱100.00</p>
                    <p>Quantity: 1</p>
                </div>
            </div>
            <div class="item">
                <div class="item-image">
                    <!-- Placeholder for product image -->
                </div>
                <div class="item-details">
                    <h3>Product Name</h3>
                    <p>Price: ₱100.00</p>
                    <p>Quantity: 1</p>
                </div>
            </div>
            <div class="item">
                <div class="item-image">
                    <!-- Placeholder for product image -->
                </div>
                <div class="item-details">
                    <h3>Product Name</h3>
                    <p>Price: ₱100.00</p>
                    <p>Quantity: 1</p>
                </div>
            </div>
            <hr>
            <p>Total: ₱400.00</p>
        </div>
        <div class="checkout-details">
            <h2><b>Buyer's Information</b></h2>
            <p>Please pay <b>25%</b> of the product price to reserve and send the payment through our e-wallets below.</p>
            <p>G-cash: <b>0981-219-8618 - J***s H.</b></p>
            <p>Pay Maya: <b>0981-219-8618 - JAMES HALAYAHAY</b></p>
            <form>
                <input type="text" placeholder="Full Name" required>
                <input type="text" placeholder="Address" required>
                <input type="text" placeholder="City" required>
                <input type="text" placeholder="Contact Number" required>
            </form>
                <div class="mop">

                    <h2>Mode of Payment:</h2>

                      <div class="opt1">
                          <input type="checkbox" id="option1" name="gcash" value="gcash">
                          <label for="option1">G-Cash</label>
                      </div>

                      <div class="opt2">
                          <input type="checkbox" id="option2" name="paymaya" value="paymaya">
                          <label for="option2">PayMaya</label>
                      </div>
                </div>


            <form>
                <input type="text" placeholder="Reference ID or Ref. No." required>
            </form>
            <h2>Schedule Pick-up</h2>
            <input type="date" id="birthday" name="birthday">
            <h2>
              File to upload:
            </h2>
            <input type="file" id="file_upload" name="file_upload">
        </div>
        <div>
            <button class="btn btn-danger"> Proceed </button>
        </div>
    </div>
</body>
</html>







@endsection
