@extends("master")



@section("content")
<article class="content container">
    <h1 class="shadow"> {{ $title}} </h1>

    <h2 class="shadow">
        Our family business has been involved in fruit cultivation for several years. In orchards spanning several hectares, we grow blueberries, strawberries, and aronia with respect for the environment and a focus on preserving biodiversity. Organic quality is not just a slogan but a part of our daily work.

    In our orchards, you will find both early and late varieties, making blueberries available from July to September. Each variety, whether it’s Bluecrop, Liberty, Spartan, or Chandler, is exceptional in its own way.
    </h2>

    <a href="#" class="btn btn-red animate">Local and delicious organic fruit.</a>

    <p class="small">
        We are a Slovak fruit grower.
    In our orchards located near Bardejov, we cultivate blueberries, strawberries, and aronia."
    </p>

    <div class="image-container">
        <img src="{{ asset('img/bluberries.jpg') }}" alt="Image 1">
        <img src="{{ asset('img/blu.jpg') }}" alt="Image 2">
    </div>
</article>
@stop

