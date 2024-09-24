<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="en">
<!--<![endif]-->

<head>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <link rel="icon" type="image/png" href="img/favicon.png" />

    <meta name="description" content="Name of your web site">
    <meta name="author" content="Marketify">

    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <title>Grax | Home</title>

    <!-- STYLES -->
    <link
        href="https://fonts.googleapis.com/css2?family=Mulish:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">


    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/plugins.css' ) }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/colors.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/darkMode.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/style.css') }}" />
    <!--[if lt IE 9]> <script type="text/javascript" src="js/modernizr.custom.js"></script> <![endif]-->
    <!-- /STYLES -->
    @livewireScripts()

</head>

<body>
    <!-- FOR DARK MODE: Add class "dark" Example: <body class="dark"> -->

    <!-- PRELOADER -->
    <div id="preloader">
        <div class="loader_line"></div>
    </div>
    <!-- /PRELOADER -->

    <!-- WRAPPER ALL -->
    <div class="grax_tm_all_wrap" data-magic-cursor="" data-color="crimson">

        <!-- MAGIC CURSOR VALUES: "", hide -->
        <!-- COLOR VALUES: blue, green, brown, pink, orange, black, white, purple, sky, cadetBlue, crimson, olive, red -->

        <!-- SETTINGS -->
        @include('components.layouts.setting')
        <!-- /SETTINGS -->

        <!-- MODALBOX NEWS -->
        <div class="grax_tm_modalbox_news">
            <div class="box_inner">
                <div class="close">
                    <a href="#"><img class="svg" src="{{ asset('frontend/img/svg/cancel.svg') }}" alt="" /></a>
                </div>
                <div class="description_wrap scrollable">
                </div>
            </div>
        </div>
        <!-- /MODALBOX NEWS -->

        <!-- TOPBAR -->
        @include('components.layouts.header')
        <!-- /TOPBAR -->

        {{ $slot }}

        <!-- COPYRIGHT -->
        @include('components.layouts.footer')
        <!-- /COPYRIGHT -->

        <!-- CURSOR -->
        <div class="mouse-cursor cursor-outer"></div>
        <div class="mouse-cursor cursor-inner"></div>
        <!-- /CURSOR -->

        <!-- START: Page Progress -->
        <div class="progressbar">
            <a href="#"><span class="text">To Top</span></a>
            <span class="line"></span>
        </div>
        <!-- END: Page Progress -->

    </div>
    <!-- / WRAPPER ALL -->

    <!-- SCRIPTS -->
    <script src="{{ asset('frontend/js/jquery.js') }}"></script>
    <!--[if lt IE 10]> <script type="text/javascript" src="js/ie8.js"></script> <![endif]-->
    <script src="{{ asset('frontend/js/plugins.js') }}"></script>
    <script src="{{ asset('frontend/js/init.js') }}"></script>
    <!-- /SCRIPTS -->
    @livewireScripts()

</body>

</html>