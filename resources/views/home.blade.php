<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('partials.head')
</head>
<body>

<div class="fh5co-loader"></div>

<div id="page">

    @include('partials.header')

    @include('partials.aboutme')

    @include('partials.resume')

    @include('partials.services')

    @include('partials.skills')

    @include('partials.work')

    @include('partials.contact')

</div>

<div id="fh5co-footer">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <p>&copy; 2021. All Rights Reserved.</p>
            </div>
        </div>
    </div>
</div>

<div class="gototop js-top">
    <a href="#" class="js-gotop"><i class="icon-arrow-up22"></i></a>
</div>

<!-- jQuery -->
<script src="{{asset('js/jquery.min.js')}}"></script>
<!-- jQuery Easing -->
<script src="{{asset('js/jquery.easing.1.3.js')}}"></script>
<!-- Bootstrap -->
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<!-- Waypoints -->
<script src="{{asset('js/jquery.waypoints.min.js')}}"></script>
<!-- Stellar Parallax -->
<script src="{{asset('js/jquery.stellar.min.js')}}"></script>
<!-- Easy PieChart -->
<script src="{{asset('js/jquery.easypiechart.min.js')}}"></script>

<!-- Main -->
<script src="{{asset('js/main.js')}}"></script>

</body>
</html>
