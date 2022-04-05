@extends('layouts.app')
<link rel="stylesheet" href="{{url('css/generate_barcodes.css') }}" />
@section("content")
<div class="login-box">
    <h2>Create Barcodes</h2>
    <form name="generate" action="create_barcodes" method="POST">
        @csrf
      <div class="user-box">
        <input type="text" name="name" required=""  autocomplete="on">
        <label>Product Name</label>
      </div>
      <div class="user-box">
        <input type="number" name="price" required="" min="1" autocomplete="off">
        <label>Price</label>
      </div>
      <div class="user-box">
        <input type="number" name="quantity" required="" min="1" autocomplete="off">
        <label>Quantity</label>
      </div>
      <div class="user-box">
        <input type="text" name="location" value="front shelf" >
        <label>Location (optional)</label>
      </div>

      <a href="#">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <input type="submit" value="generate" class="transparent_submit" name="generate">
      </a>
    </form>
  </div>
@endsection