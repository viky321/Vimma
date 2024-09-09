<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>@yield("title", $title ?: "Vimma")</title>
	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Montserrat:400,700">
	<link rel="stylesheet" href={{ URL::asset("css/style.css")}}>
	<link rel="stylesheet" href="css/animations.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css" />

</head>
<body class="{{ Request::segment(1) ?:"home"}}">

	<header class="site-header">
		<nav class="container">
			<ul class="menu">
            @foreach ( $nav_links as $path => $name)
                <li>
                    @if ( trim($path, "/") == Request::segment(1))
                    <strong>{{ $name }}</strong>
                    @else
                    <a href="{{ url($path) }}"> {{ $name }} </a>
                    @endif
                </li>
                @endforeach
			</ul>
		</nav>
	</header>

	<main>

		@yield("content")

	</main>

	<aside class="pre-footer">
		<div class="container">
            @section("aside")
                <h3>Check our products</h3>

                <p>
                    Welcome to our website! We are dedicated to providing you with the best blueberries and other fruits.<br>
                    Feel free to explore our site and learn more about our products and offers.
                </p>

                <a href="#" class="btn btn-green">Learn More About Our Products</a>
                @show
		</div>
	</aside>

	<footer class="site-footer">
		<div class="container">
			<p class="small">
				&copy; Vimma s.r.o.
				<span>
					design straight stolen from
					<a href="http://muz.li">muz.li</a>
				</span>
			</p>
		</div>
	</footer>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>
<script>
$(document).ready(function() {
    $(".image-grid a").fancybox({
        loop: true,
        buttons: [
            'slideShow',
            'thumbs',
            'close'
        ]
    });
});
</script>


</body>
</html>



