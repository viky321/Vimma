@extends("master")

@section("title", "Gallery")

@section("content")
<section class="content container">
    <h1 class="shadow">{{ $title}}</h1>
    <h2 class="shadow">Explore our blueberry images!</h2>


    <p class="notice">
        Click on the images to view them in more detail.
    </p>

     <div class="image-grid group">
        <a href="{{ asset('img/blueberry1.jpg') }}" data-fancybox="gallery">
            <img src="{{ asset('img/blueberry1.jpg') }}" class="gallery-img" alt="Blueberries in the field">
        </a>
        <a href="{{ asset('img/blueberry2.jpg') }}" data-fancybox="gallery">
            <img src="{{ asset('img/blueberry2.jpg') }}" class="gallery-img" alt="Blue">
        </a>
        <a href="{{ asset('img/blueberry3.jpg') }}" data-fancybox="gallery">
            <img src="{{ asset('img/blueberry3.jpg') }}" class="gallery-img" alt="Blueberries in the field">
        </a>
        <a href="{{ asset('img/blueberry4.jpg') }}" data-fancybox="gallery">
            <img src="{{ asset('img/blueberry4.jpg') }}" class="gallery-img" alt="Blue">
        </a>
        <a href="{{ asset('img/blueberry5.jpg') }}" data-fancybox="gallery">
            <img src="{{ asset('img/blueberry5.jpg') }}" class="gallery-img" alt="Blueberries in the field">
        </a>
        <a href="{{ asset('img/blueberry6.jpg') }}" data-fancybox="gallery">
            <img src="{{ asset('img/blueberry6.jpg') }}" class="gallery-img" alt="Blue">
        </a>
    </div>
</section>
@stop
