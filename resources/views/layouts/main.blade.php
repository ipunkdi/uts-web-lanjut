<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">

        <title>Florist - {{ $title }}</title>
        <meta content="" name="description">
        <meta content="" name="keywords">

        <!-- Favicons -->
        <link href="landing-page/assets/img/favicon.png" rel="icon">
        <link href="landing-page/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

        <!-- Vendor CSS Files -->
        <link href="landing-page/assets/vendor/aos/aos.css" rel="stylesheet">
        <link href="landing-page/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="landing-page/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
        <link href="landing-page/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
        <link href="landing-page/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
        <link href="landing-page/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

        <!-- Template Main CSS File -->
        <link href="landing-page/assets/css/style.css" rel="stylesheet">

        <!-- =======================================================
        * Template Name: Scaffold
        * Updated: Sep 18 2023 with Bootstrap v5.3.2
        * Template URL: https://bootstrapmade.com/scaffold-bootstrap-metro-style-template/
        * Author: BootstrapMade.com
        * License: https://bootstrapmade.com/license/
        ======================================================== -->
    </head>
    <body>
        @include('partials.header')

        <div class="container mt-2">
            @yield('container')
        </div>

        @include('partials.footer')

        <!-- Vendor JS Files -->
        <script src="landing-page/assets/vendor/aos/aos.js"></script>
        <script src="landing-page/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="landing-page/assets/vendor/glightbox/js/glightbox.min.js"></script>
        <script src="landing-page/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
        <script src="landing-page/assets/vendor/swiper/swiper-bundle.min.js"></script>
        <script src="landing-page/assets/vendor/php-email-form/validate.js"></script>

        <!-- Template Main JS File -->
        <script src="landing-page/assets/js/main.js"></script>
    </body>
</html>