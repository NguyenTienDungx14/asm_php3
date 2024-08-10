<!DOCTYPE html>
<html lang="en">

<head>
    @include('clients.layouts.partials.head')
</head>

<body class="index-page">

<header id="header" class="header d-flex align-items-center fixed-top">
    @include('clients.layouts.partials.header')
</header>

<main class="main">

    <!-- Hero Section -->
    @include('clients.layouts.partials.bg')
    <!-- /Hero Section -->

    <!-- About Section -->
{{--    @include('clients.layouts.partials.about')--}}
   <!-- /About Section -->

    <!-- Clients Section -->
    @include('clients.layouts.partials.clients')
    <!-- /Clients Section -->

    <!-- Features Section -->
    @include('clients.layouts.partials.features')
    <!-- /Features Section -->

    <!-- Services Section -->
    @include('clients.layouts.partials.service-section')
    <!-- /Services Section -->

    <!-- Call To Action Section -->
    @include('clients.layouts.partials.call-to-action')
    <!-- /Call To Action Section -->

    <!-- Portfolio Section -->
    @include('clients.layouts.partials.portfolio')
    <!-- /Portfolio Section -->

    <!-- Stats Section -->
    @include('clients.layouts.partials.starts')
    <!-- /Stats Section -->

    <!-- Testimonials Section -->
    @include('clients.layouts.partials.testimonials')
    <!-- /Testimonials Section -->

    <!-- Team Section -->
    @include('clients.layouts.partials.team')
    <!-- /Team Section -->

    <!-- Contact Section -->
    @include('clients.layouts.partials.contact')
    <!-- /Contact Section -->

</main>

<footer id="footer" class="footer dark-background">
    @include('clients.layouts.partials.footer')
</footer>

<!-- Scroll Top -->
<a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<!-- Preloader -->
<div id="preloader"></div>

@include('clients.layouts.partials.js')
</body>

</html>
