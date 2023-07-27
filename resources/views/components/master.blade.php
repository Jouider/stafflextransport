@props(['title'])
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Stafflex Transport | {{$title}} </title>
    <link rel="icon" type="image/x-icon" href="img/stafflex.ico">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link  href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&family=Roboto:wght@500;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{asset('lib/animate/animate.min.css')}}" rel="stylesheet">
    <link href="{{asset('lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">

    {{-- <!-- Customized Bootstrap Stylesheet --> --}}
    <link rel="stylesheet" href="{{ asset('assets/template/css/bootstrap.min.css') }}">


    {{-- <!-- Template Stylesheet --> --}}
    <link rel="stylesheet" href="{{ asset('assets/template/css/style.css') }}">

</head>

<body>
    {{-- <!-- Spinner Start --> --}}
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-secondary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>

    {{-- <!-- Navbar Start --> --}}
    @include('partials.nav')
    {{-- <!-- Content Start --> --}}
            @include('partials.flashbag')


    {{ $slot}}

 {{-- <!-- Footer Start --> --}}
    @include('partials.footer')

    {{-- <!-- JavaScript Libraries --> --}}
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    {{-- <!-- Template Javascript --> --}}
    <script src="{{ asset('assets/template/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/template/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/template/js/main.js') }}"></script>

</body>

</html>