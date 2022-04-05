<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}- Generated Barcodes</title>
    <!-- Styles -->
    <link rel="stylesheet" href="{{url('css/grid.css') }}" />
    <link rel="stylesheet" href="{{url('css/welcome_to_diim.css') }}" />
</head>
<body>
<div class="container">
@if($lot_data)
<div>
    <center><h3>Generated Barcodes</h3></center></div>
    <a href="{{ url("create_barcodes") }}" class="back-link"><img src="assets/back-icon.png" class= "back-but parent"></a>
    <a href="{{url('barcodes_generated/pdf')}}" class="download-link"><button type="button" class="download" ><u>Download</u></button></a>
</div>
<br>
<div class="grid_container">
@foreach($lot_data as $lot_data)
<div>{!! DNS1D::getBarcodeHTML(($lot_data->pid), "C128")!!}
    {{$lot_data->Name}} || MRP:{{$lot_data->Price}}
</div>
@endforeach
</div>
@else
  <p> No lot_data found..</p>
@endif
</div>
<a href="{{ url("create_barcodes") }}" class="back-link"><img src="assets/back-icon.png" class= "back-but parent"></a>
</body>
</html>