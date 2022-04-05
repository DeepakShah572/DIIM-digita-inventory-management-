<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}- Generated Barcodes</title>
    <style>
        .grid_container {
    display: grid;
    grid-template-columns: auto auto auto;
}
    </style>
   </head>
<body style="margin: 1%">
<?php $lot_data=session("g_lot_data");?>
@if($lot_data)
<div class="grid_container">
@foreach($lot_data as $lot_data)
<div>
    {!! DNS1D::getBarcodeHTML(($lot_data->pid), "C128")!!}
    <p>{{$lot_data->Name}}     MRP:{{$lot_data->Price}}</p>
</div>
@endforeach
</div>
@else
  <p> No lot_data found..</p>
@endif
</body>
</html>