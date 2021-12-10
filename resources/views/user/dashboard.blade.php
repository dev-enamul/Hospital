<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <meta name="copyright" content="MACode ID, https://macodeid.com/">

  <title>One Health - Medical Center HTML5 Template</title>

  <link rel="stylesheet" href="{{asset('FontEnd/css/maicons.css')}}">

  <link rel="stylesheet" href="{{asset('FontEnd/css/bootstrap.css')}}">

  <link rel="stylesheet" href="{{asset('FontEnd/vendor/owl-carousel/css/owl.carousel.css')}}">

  <link rel="stylesheet" href="{{asset('FontEnd/vendor/animate/animate.css')}}">

  <link rel="stylesheet" href="{{asset('FontEnd/css/theme.css')}}">
</head>
<body>

  <!-- Back to top button -->
  <div class="back-to-top"></div>

  @include('user.header')
  @include('user.banner')
  @include('user.welcome')
  <!-- .bg-light -->
  </div> <!-- .bg-light -->

  @include('user.doctor')

  @include('user.news') <!-- .page-section -->

  @include('user.appoint')
  
  <!-- .banner-home -->
 @include('user.footer')

<script src="{{asset('FontEnd/js/jquery-3.5.1.min.js')}}"></script>

<script src="{{asset('FontEnd/js/bootstrap.bundle.min.js')}}"></script>

<script src="{{asset('FontEnd/vendor/owl-carousel/js/owl.carousel.min.js')}}"></script>

<script src="{{asset('FontEnd/vendor/wow/wow.min.js')}}"></script>

<script src="{{asset('FontEnd/js/theme.js')}}"></script>
  
</body>
</html>