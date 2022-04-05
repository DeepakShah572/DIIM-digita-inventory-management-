@extends('layouts.app')
<link rel="stylesheet" href="{{url('css/search.css') }}" />
<link rel="stylesheet" href="{{url('css/table.css') }}" />

@section('content')


<link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
<form action="search" method="POST">
  @csrf
<div class="wrapper">
  <div class="label">Submit your search</div>
  <div class="searchBar">
    <input id="searchQueryInput" type="text" name="searchQueryInput" placeholder="Search" value="" />
    <button id="searchQuerySubmit" type="submit" name="searchQuerySubmit">
      <svg style="width:24px;height:24px" viewBox="0 0 24 24"><path fill="#666666" d="M9.5,3A6.5,6.5 0 0,1 16,9.5C16,11.11 15.41,12.59 14.44,13.73L14.71,14H15.5L20.5,19L19,20.5L14,15.5V14.71L13.73,14.44C12.59,15.41 11.11,16 9.5,16A6.5,6.5 0 0,1 3,9.5A6.5,6.5 0 0,1 9.5,3M9.5,5C7,5 5,7 5,9.5C5,12 7,14 9.5,14C12,14 14,12 14,9.5C14,7 12,5 9.5,5Z" />
      </svg>
    </button>
  </div>
</div>
</form>
<div>
@if(isset($product_data))
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
         @for($x = 0;$x < 1;$x++)
          <tr>
              <td> {{$product_data[$x]->id}} </td>
              <td> {{$product_data[$x]->pid}} </td>
              <td> {{$product_data[$x]->Name}} </td>
              <td> {{$product_data[$x]->Price}} </td>
              <td> {{$product_data[$x]->lot_size}} </td>
              <td> {{$product_data[$x]->lot_no}} </td>
              <td> {{$product_data[$x]->location}} </td>
              <td> {{$product_data[$x]->added_at}} </td>
          </tr>
          @endfor
         @endforeach
   </tbody>
</table>
</div>
@else
  <h1> Search by Product Name</h1>
@endif

@endsection