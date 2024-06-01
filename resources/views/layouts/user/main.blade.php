<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SISTEM PAKAR</title>
    <!-- Favicon -->
    <link rel="icon" href="/User/assets/img/favicon.ico">
    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css2?family=Jost:wght@500;600;700&family=Open+Sans:wght@400;500&display=swap"
        rel="stylesheet">
    <!-- Icon Font Stylesheet -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css">
    <!-- Libraries Stylesheet -->
    <link rel="stylesheet" href="/User/assets/lib/animate/animate.min.css">
    <link rel="stylesheet" href="/User/assets/lib/owlcarousel/assets/owl.carousel.min.css">
    <!-- Customized Bootstrap Stylesheet -->
    <link rel="stylesheet" href="/User/assets/css/bootstrap.min.css">
    <!-- Template Stylesheet -->
    <link rel="stylesheet" href="/User/assets/css/style.css">
</head>

<body>

    <header class="header-area header-sticky">
        @include('layouts.user.header')
    </header>

    <main id="main" style="min-height: 100vh;">
        {{-- @include('User.layout.sidebar') --}}
        @yield('content')
    </main>

    <footer id="footer">
        @include('layouts.user.footer')
    </footer>

    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i
            class="bi bi-arrow-up"></i></a>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="/User/assets/lib/wow/wow.min.js"></script>
    <script src="/User/assets/lib/easing/easing.min.js"></script>
    <script src="/User/assets/lib/waypoints/waypoints.min.js"></script>
    <script src="/User/assets/lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="/User/assets/lib/counterup/counterup.min.js"></script>
    <!-- Template Javascript -->
    <script src="/User/assets/js/main.js"></script>
</body>

</html>
