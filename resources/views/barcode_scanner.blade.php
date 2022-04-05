@extends('layouts.app')
@section('content')
<link rel="stylesheet" href="{{url('css/generate_barcodes.css') }}" />
<link rel="stylesheet" href="{{url('css/table.css') }}" />
<div class="container" >
  <center>
    <div class="the_oracle">
        <form action="barcode_scanner" method="POST" >
            @csrf
            <div>
            <input type="number" id="entry_pid" name="entry_pid" placeholder="Scan Barcode" autocomplete="off" class="scanner">
            <input type="submit" value="Enter" name="enter" class="enter">
            </div>
        </form>
        <div>
        @if(isset($data))
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
          @foreach($data as $data)
          <tr>
            <td> {{$data->id}} </td>
            <td> {{$data->pid}} </td>
            <td> {{$data->Name}} </td>
            <td> {{$data->Price}} </td>
            <td> {{$data->lot_size}} </td>
            <td> {{$data->lot_no}} </td>
            <td> {{$data->location}} </td>
            <td> {{$data->added_at}} </td>
        </tr>
            @endforeach
          </tbody>
          </table>
        </div>
    @else <h1 class="message">  Product Not Found</h1>
    @endif
    </div>
  </center>
</div>
<script>
  document.getElementById('entry_pid').select();
</script>
@endsection
