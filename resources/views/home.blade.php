@extends('layouts.app')
<link rel="stylesheet" href="{{url('css/generate_barcodes.css') }}" />

@section('content')
<div class="login-box" >
    <form>
        <a href="{{url("search")}}">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <button type="button" class="transparent">Search Products</button></a>
        <a href="{{url("barcode_scanner")}}">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <button type="button" class="transparent">Scan Barcode</button></a>
    <a href="{{route("create_barcodes")}}">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <button type="button" class="transparent">Create barcodes</button></a>
    <a href="{{route("recent_inventory")}}">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <button type="button" class="transparent">Recent Inventory</button></a>
    </form>
</div>
@endsection
