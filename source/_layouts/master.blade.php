<!DOCTYPE html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Why?t</title>
    <meta name="description" content="A multi-disciplinary creative and brand design studio in London. Creating powerful design solutions for a client list including individuals, brands, charities and institutions that we strongly believe in.">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="{{ mix('/css/main.css') }}">

    <meta name="og:image" content="https://whytstudio.com/images/share.jpeg" />
    <meta name="og:url" content="https://whytstudio.com" />
    <meta name="og:title" content="Why?t" />
    <meta name="og:site_name" content="Why?t" />
    <meta name="og:type" content="Website" />
    <meta name="og:description" content="A multi-disciplinary creative and brand design studio in London. Creating powerful design solutions for a client list including individuals, brands, charities and institutions that we strongly believe in."
    />
    <meta name="twitter:card" content="summary_large_image">

    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#2d89ef">
    <meta name="theme-color" content="#ffffff">
</head>

<body class="font-sans">
    <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->
        @yield('body')
    <script src="{{ mix('/js/main.js') }}"></script>
    <script>
        window.ga = function () { ga.q.push(arguments) }; ga.q = []; ga.l = +new Date;
        ga('create', 'UA-XXXXX-Y', 'auto'); ga('send', 'pageview')
    </script>
    <script src="https://www.google-analytics.com/analytics.js" async defer></script>
    </body>
</html>
