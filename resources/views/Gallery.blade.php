<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Espav Gallery</title>
    <link rel="stylesheet" href="{{ asset('css/gallery.css') }}">
</head>
<body>
    <h1>Espav Gallery</h1>

    <div class="gallery" id="gallery">
        @foreach($photos as $image)
        <div class="gallery-item">
            <div class="content"><img src="images/{{ $image['name'] }}"></div>
        </div>
        @endforeach
               
    </div>
    <!-- <script src="{{ asset('js/gallery.js') }}"></script> -->
</body>
</html>