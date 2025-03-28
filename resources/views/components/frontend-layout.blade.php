<!DOCTYPE html>
<html lang="en">
@props(['title', 'description', 'key_words'])

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Jawaaf | {{ $title ?? 'Home' }}</title>
    <meta name="kewywords" content="{{ $key_words ?? 'jawaaf, news, latest news' }}">
    <meta name="description" content="{{$description ?? 'We are a news website where you can get latest and trending news'}}">
    <meta property="og:title" content="Jawaaf | {{ $title ?? 'Home' }}" />
    <meta property="og:description" content="{{$description ?? 'We are a news website where you can get latest and trending news'}}" />
    <meta property="og:image" content="{{ asset('images/1742568874.avif') }}" />
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="{{ asset('frontend/style.css') }}">
    <link rel="stylesheet" href="{{ asset('fontawesome/css/all.min.css') }}">
    <script type="text/javascript" src="https://platform-api.sharethis.com/js/sharethis.js#property=67e6b68659793500196ab073&product=inline-share-buttons&source=platform" async="async"></script>
</head>

<body>
    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v22.0"></script>
    
    <x-frontend-header />

    <main>
        {{ $slot }}
    </main>

    <footer></footer>

</body>

</html>
