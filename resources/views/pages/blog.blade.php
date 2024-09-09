@extends("master")

@section("title", "About us")

@section("content")
<section class="content container">
    <h1 class="shadow">{{ $title}}</h1>

    <h2 class="shadow">
        Discover the benefits of blueberries.<br>
        Welcome to our world of fresh, organic fruits.
    </h2>

    <div class="post-list">
        <article class="post">
            <h1 class="post-title">he Superfood: Blueberries</h1>

            <p>Blueberries are renowned for their health benefits. Packed with antioxidants, vitamins, and minerals, these small berries are a powerhouse of nutrients. They can help improve heart health, enhance brain function, and support a healthy digestive system.</p>

            <p>Our blueberries are grown with care in our orchards near Bardejov. We ensure that our farming practices are sustainable and eco-friendly, preserving the natural environment while providing you with the highest quality fruit.</p>

            <p>From the moment they’re picked, our blueberries are handled with the utmost care to maintain their freshness and flavor. Whether you enjoy them fresh, in smoothies, or as part of your favorite recipes, you can trust that our blueberries are both delicious and nutritious.</p>
        </article>

        <article class="post">
            <h1 class="post-title">Why Choose Our Blueberries?</h1>

            <p>Our blueberries are cultivated using organic farming methods, ensuring that they are free from harmful pesticides and chemicals. We focus on maintaining the biodiversity of our orchards and nurturing the soil to produce the best possible fruit.</p>

            <p>Each variety of blueberry we grow, from early to late-season varieties, is selected for its superior taste and nutritional value. Whether you’re looking for a sweet, tangy, or robust flavor, we have a blueberry variety that will meet your needs.</p>

            <p>We take pride in our commitment to quality and sustainability. By choosing our blueberries, you’re not only enjoying a delicious fruit but also supporting environmentally responsible farming practices.</p>
        </article>

        <a href="#" class="btn btn-yellow load-older">Learn More</a>
    </div>
</section>
@stop

