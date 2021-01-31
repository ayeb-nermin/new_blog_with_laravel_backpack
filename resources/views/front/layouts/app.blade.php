<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>{{config('app.name','Coding Beanie Blog')}}</title>
    <meta content="" name="description">
    <meta content="" name="keywords">
    @include('front.includs.css')
</head>

<body>

    <!-- ======= Navbar ======= -->
    @include('front.includs.navbar')
    <!-- End Navbar -->

    <!-- ======= Hero Section ======= -->
    @include('front.includs.firstbanner')
    <!-- End Hero -->

    <!-- #main section-->
    <main id="main">
        @include('front.pages.about')
        @include('front.pages.portfolio')
        @include('front.pages.journal')
        @include('front.pages.contact')
    </main>
    <!-- End #main -->

    <!-- ======= Footer ======= -->
    @include('front.includs.footer')
    <!-- End Footer -->

    <!-- Vendor JS Files -->
    @include('front.includs.js')

</body>

</html>