<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>TechNews - HTML and CSS Template</title>
    <link href=" {{ asset("assets/img/favicon.png") }}" rel=icon>
    <link href=" {{ asset("https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,500") }}" rel='stylesheet' type='text/css'>
    <link href=" {{ asset("assets/css/bootstrap.min.css") }}" rel="stylesheet">
    <link href=" {{ asset("assets/fonts/font-awesome/font-awesome.min.css") }}"  rel="stylesheet">
    @yield('seo')
    <link href=" {{ asset("assets/css/mobile-menu.css") }}" rel="stylesheet">
    <link href=" {{ asset("assets/css/owl.carousel.css") }}" rel="stylesheet">
    <link href=" {{ asset("assets/css/owl.theme.default.min.css") }}" rel="stylesheet">
    <link href=" {{ asset("assets/css/style.css") }}"  rel="stylesheet">
</head>
    <body id="page-top" data-spy="scroll" data-target=".navbar">

        <div id="main-wrapper">
            <div id="preloader">
                <div id="status">
                    <div class="status-mes"></div>
                </div>
            </div>
            <div class="uc-mobile-menu-pusher">
            <div class="content-wrapper">
            <section id="header_section_wrapper" class="header_section_wrapper">
                <div class="container">
                    <div class="header-section">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="left_section">
                                                        <span class="date">
                                                            Sunday .
                                                        </span>
                                    <!-- Date -->
                                                        <span class="time">
                                                            30 December . 2020
                                                        </span>

                                </div>
                                <!-- Left Header Section -->
                            </div>
                            <div class="col-md-4">
                                <div class="logo">
                                    <a href="/"><img src="assets/img/logo.png" alt="Tech NewsLogo"></a>
                                </div>
                            </div>

                        </div>
                    </div>


                    <div class="navigation-section">
                        <nav class="navbar m-menu navbar-default">
                            <div class="container">
                                <!-- Brand and toggle get grouped for better mobile display -->
                                <div class="navbar-header">
                                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                                            data-target="#navbar-collapse-1"><span class="sr-only">Toggle navigation</span> <span
                                            class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span>
                                    </button>
                                </div>
                            </div>
                        </nav>
                    </div>

        @yield('content')

        <script src="{{ asset("assets/js/bootstrap.min.js") }}"></script>
        <script src="{{ asset("assets/js/jquery-2.1.4.min.js") }}"></script>
        <script src="{{ asset("assets/js/mobile-menu.js") }}"></script>
        <script src="{{ asset("assets/js/owl.carousel.min.js") }}"></script>
        <script src="{{ asset("assets/js/script.js") }}"> </script>
    </body>
</html>
