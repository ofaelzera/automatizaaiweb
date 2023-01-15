<!DOCTYPE html>
<html lang="en">
<head>
    
    @include('site.layout.meta')
    @include('site.layout.styles')
</head>
<body>
    <!-- ======= Header ======= -->
    @include('site.layout.header')
    <!-- End Header -->

    <!-- ======= Hero Section ======= -->
    @yield('hero')
    <!-- End Hero -->
    
    <main id="main">
      @yield('main')
    </main>

    <!-- ======= Footer ======= -->
    @include('site.layout.footer')
    <!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    @include('site.layout.scripts')
</body>
</html>