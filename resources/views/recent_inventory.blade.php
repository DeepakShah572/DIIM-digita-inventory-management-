<title>Recent Inventory</title>
@extends('layouts.app')
@section("content")
<link rel="stylesheet" href="{{ url("css/welcome_to_dimm.css") }}">
<link rel="stylesheet" href="{{url('css/table.css') }}" />
<script src="js/table.js"></script>
<div >
    <center><h1>Recent Inventory</h1></center>
@if($product_data)
<table cellpadding="0" cellspacing="0" border="0">
    <thead>
        <tr>
            <th> id</th>
            <th> pid</th>
            <th> name </th>
            <th> price </th>
            <th> lot size</th>
            <th> lot no </th>
            <th> location</th>
            <th> added at </th>
        </tr>
    </thead>
</table>
</div>
<div class="tbl-content">
    <table cellpadding="0" cellspacing="0" border="0">
    <tbody>
         @foreach($product_data as $product_data)
          <tr>
              <td> {{$product_data->id}} </td>
              <td> {{$product_data->pid}} </td>
              <td> {{$product_data->Name}} </td>
              <td> {{$product_data->Price}} </td>
              <td> {{$product_data->lot_size}} </td>
              <td> {{$product_data->lot_no}} </td>
              <td> {{$product_data->location}} </td>
              <td> {{$product_data->added_at}} </td>
          </tr>
         @endforeach
   </tbody>
</table>
</div>
@else
  <p> No product_datas found..</p>
@endif
@endsection