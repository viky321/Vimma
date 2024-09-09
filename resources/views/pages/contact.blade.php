@extends("master")

@section("title", "CONTACT US")

@section("content")
<div class="content container">
    <h1 class="shadow"> {{ $title}}</h1>

    <h2 class="shadow">
        We won't read it.
    </h2>

    @include("partials.errors")

    @include("partials.message")

    <form method="POST" action="{{ route('contact.store') }}" class="contact-form">
        @csrf

        <label for="name">Your name (required)</label>
        <input type="text" id="name" name="name" value="{{ old('name') }}" required>

        <label for="email">Your email (required)</label>
        <input type="email" id="email" name="email" value="{{ old('email') }}" required>

        <label for="message">Your message</label>
        <textarea id="message" name="message" rows="4" required>{{ old('message') }}</textarea>

        <button type="submit">Send</button>

    </form>


    <!-- flash message  -->
    @if (session('status'))
        <meta name="flash-status" content="{{ session('status') }}">
    @endif

</div>
@stop
