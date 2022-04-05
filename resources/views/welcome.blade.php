<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="{{url('css/home.css') }}" />
    </head>
    <body>
<div class="Company_Name">
    <center id="center"><h1 class="fade-in-text"><alpha>DI</alpha>gital  &nbsp&nbsp<alpha>I</alpha>nventory   &nbsp&nbsp<alpha>M</alpha>anagement</h1></center>
</div>





            @if (Route::has('login'))
                <div class="login-box">
                    @auth
                        <a href="{{ url('/home') }}"> <button type="button" class="transparent">Home</button></a>
                    @else
                        <a href="{{ route('login') }}"><button type="button" class="transparent2">Log in</button></a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}"><button type="button" class="transparent">Register</button></a>
                        @endif
                    @endauth
                </div>
            @endif
           <center> <h2 class="take_tour">Scroll to take a tour</h2>
        <h2 class="down_arrow">^</h2></center>
<div class="window" style="margin-top:10%">
    <div class="al">
    <img src="assets/manscan.gif" alt="manscan" height="250px" width="250px" class="photo_frame"></div>
    <div><p class="my_text">Portable and esay to connect just register and login and take your business 10 steps further.</p></div>
</div>
<div class="window">
    <div class="ar">
        <img src="assets/barcode-scan.gif" alt="manscan" height="250px" width="250px" class="photo_frame"></div>
    <div><p class="my_text">Generate barcodes in C39 format instantainously with flexible,customised and in great detail.</p></div>

</div>
<div class="window">
    <div class="al">
    <img src="assets/mobile scanning barcode.gif" alt="manscan" height="285px" width="249.5px" class="photo_frame"></div>
    <div><p class="my_text">Scan barcodes on the go from the phone and get great concurrency. Never miss a barcode 
        keep your scan history , pre-scan the barcodes and retrive data at once. The Scanned data is store on the cloud so it can be accessed from any where in the world.</p></div>
</div>
<div class="window">
    <div class="ar">
        <img src="assets/search.gif" alt="manscan" height="200px" width="249.5px" class="photo_frame"></div>
    <div><p class="my_text">Query and search products from the Inventory so that you are upto date regarding the stocks in the inventory, able to keep up with the clients demand and never miss an opportunity for business.</p></div>

</div>
<div class="window">
    <div class="al">
    <img src="assets/ui code.gif" alt="manscan" height="250px" width="250px" class="photo_frame"></div>
    <div><p class="my_text">Simplistic beautiful and interactive User Interface to make your operations simpler and to make your mundane task not so boring.</p></div>
</div>
<div class="window">
    <div class="ar">
        <img src="assets/pdf_generating.gif" alt="manscan" height="180px" width="250px" class="photo_frame"></div>
    <div><p class="my_text">Generate PDF'S of barcode so that you have unlimited freedom to move data around and share information remotely, Just print it, attach it on the product and relax <b>DI.I.M</b> will handle all the stress of organizing it.</p></div>

</div>
<div class="window">
    <div class="al">
    <img src="assets/secure.gif" alt="manscan" height="190px" width="250px" class="photo_frame"></div>
    <div><p class="my_text">Safe and secure , uses tokenization method to store your passwords which are already encrypted, So that you can be worry free of your Business 
        operation data as it is in safe hands</p></div>
</div>
<center>
<a href="#center"><button type="button" class="transparent">To the Top ^</button></a></center>
    </body>
</html>
