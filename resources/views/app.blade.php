<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>CNdrih | Personal CV & Portfolio</title>

    <!-- Primary Meta Tags -->
    <meta name="title" content="CNdrih | Personal CV & Portfolio">
    <meta name="description" content="Explore CNdrih’s professional experience, education, and projects. A detailed CV showcasing skills, achievements, and portfolio highlights.">
    <meta name="keywords" content="CNdrih, CV, Resume, Portfolio, Web Developer, Designer, Software Engineer, Frontend, Backend, Full Stack">
    <meta name="author" content="CNdrih">

    <!-- Open Graph / Facebook / LinkedIn -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://cndrih.xo.je/">
    <meta property="og:title" content="CNdrih | Personal CV & Portfolio">
    <meta property="og:description" content="Discover CNdrih’s career journey, technical expertise, and portfolio projects.">
    <meta property="og:image" content="{{ URL::asset('images/pic.jpg') }}">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="https://cndrih.xo.je/">
    <meta property="twitter:title" content="CNdrih | Personal CV & Portfolio">
    <meta property="twitter:description" content="Explore CNdrih’s professional background, skills, and achievements.">
    <meta property="twitter:image" content="{{ URL::asset('images/pic.jpg') }}">

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="/favicon.png">

    <!-- CSS -->
    <link href="{{ URL::asset('/css/app.css') }}" rel="stylesheet">
</head>

<body>
    @yield('header')

    @yield('content')

    @yield('footer')

    <script src="https://cdnjs.cloudflare.com/ajax/libs/lottie-web/5.12.1/lottie.min.js"></script>
    <script src="{{ URL::asset('/js/app.js') }}"></script>
    @yield('js')
</body>

</html>