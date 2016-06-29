<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Laravel bootstrap example" />
    <meta name="keywords" content="sci, training, bootstrap, laravel, example, project" />
    <meta name="author" content="sci.ng" />

    <!-- Facebook and Twitter integration -->
    <meta property="og:title" content=""/>
    <meta property="og:image" content=""/>
    <meta property="og:url" content=""/>
    <meta property="og:site_name" content=""/>
    <meta property="og:description" content=""/>
    <meta name="twitter:title" content="" />
    <meta name="twitter:image" content="" />
    <meta name="twitter:url" content="" />
    <meta name="twitter:card" content="" />

    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
    <link rel="shortcut icon" href="{{ url('favicon.ico') }}">

    <!-- Google Webfonts -->
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,100,500' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>

    <!-- Animate.css -->
    {{ HTML::style("css/animate.css") }}
    <!-- Icomoon Icon Fonts-->
    {{ HTML::style("css/icomoon.css") }}
    <!-- Owl Carousel -->
    {{ HTML::style("css/owl.carousel.min.css") }}
    {{ HTML::style("css/owl.theme.default.min.css") }}
    <!-- Magnific Popup -->
    {{ HTML::style("css/magnific-popup.css") }}
    <!-- Theme Style -->
    {{ HTML::style("css/style.css") }}
    <!-- Modernizr JS -->
    {{ HTML::script("js/modernizr-2.6.2.min.js") }}
    <!-- FOR IE9 below -->
    <!--[if lt IE 9]>
{{ HTML::script("js/respond.min.js") }}
<![endif]-->

</head>