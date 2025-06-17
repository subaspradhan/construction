<!DOCTYPE html>
<html lang="en" data-theme="light">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>{{ config('app.name', 'Laravel') }}</title>
  <link rel="icon" type="image/png" href="{{asset('backend/assets/images/favicon.png')}}" sizes="16x16">
  <!-- remix icon font css  -->
  <link rel="stylesheet" href="{{asset('backend/assets/css/remixicon.css')}}">
  <!-- Summernote css -->
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs5.min.css" rel="stylesheet">
<!-- BootStrap css -->
  <link rel="stylesheet" href="{{asset('backend/assets/css/lib/bootstrap.min.css')}}">
  <!-- Apex Chart css -->
  <link rel="stylesheet" href="{{asset('backend/assets/css/lib/apexcharts.css')}}">
  <!-- Data Table css -->
  <link rel="stylesheet" href="{{asset('backend/assets/css/lib/dataTables.min.css')}}">
 
  <!-- Date picker css -->
  <link rel="stylesheet" href="{{asset('backend/assets/css/lib/flatpickr.min.css')}}">
  <!-- Calendar css -->
  <link rel="stylesheet" href="{{asset('backend/assets/css/lib/full-calendar.css')}}">
  <!-- Vector Map css -->
  <link rel="stylesheet" href="{{asset('backend/assets/css/lib/jquery-jvectormap-2.0.5.css')}}">
  <!-- Popup css -->
  <link rel="stylesheet" href="{{asset('backend/assets/css/lib/magnific-popup.css')}}">
  <!-- Slick Slider css -->
  <link rel="stylesheet" href="{{asset('backend/assets/css/lib/slick.css')}}">
  <!-- prism css -->
  <link rel="stylesheet" href="{{asset('backend/assets/css/lib/prism.css')}}">
  <!-- file upload css -->
  <link rel="stylesheet" href="{{asset('backend/assets/css/lib/file-upload.css')}}">
  
  <link rel="stylesheet" href="{{asset('backend/assets/css/lib/audioplayer.css')}}">
  <!-- main css -->
  <link rel="stylesheet" href="{{asset('backend/assets/css/style.css')}}">
</head>
  <body>
@include('backend.include.sidebar')

<main class="dashboard-main">
  
  @include('backend.include.header')
  @yield('content')

  @include('backend.include.footer')
</main>
  
  <!-- jQuery library js -->
  <script src="{{asset('backend/assets/js/lib/jquery-3.7.1.min.js')}}"></script>
  <!-- Bootstrap js -->
  <script src="{{asset('backend/assets/js/lib/bootstrap.bundle.min.js')}}"></script>
  <!-- Apex Chart js -->
  <script src="{{asset('backend/assets/js/lib/apexcharts.min.js')}}"></script>
  <!-- Data Table js -->
  <script src="{{asset('backend/assets/js/lib/dataTables.min.js')}}"></script>
  <!-- Iconify Font js -->
  <script src="{{asset('backend/assets/js/lib/iconify-icon.min.js')}}"></script>
  <!-- jQuery UI js -->
  <script src="{{asset('backend/assets/js/lib/jquery-ui.min.js')}}"></script>
  <!-- Vector Map js -->
  <script src="{{asset('backend/assets/js/lib/jquery-jvectormap-2.0.5.min.js')}}"></script>
  <script src="{{asset('backend/assets/js/lib/jquery-jvectormap-world-mill-en.js')}}"></script>
  <!-- Popup js -->
  <script src="{{asset('backend/assets/js/lib/magnifc-popup.min.js')}}"></script>
  <!-- Slick Slider js -->
  <script src="{{asset('backend/assets/js/lib/slick.min.js')}}"></script>
  <!-- prism js -->
  <script src="{{asset('backend/assets/js/lib/prism.js')}}"></script>
  <!-- file upload js -->
  <script src="{{asset('backend/assets/js/lib/file-upload.js')}}"></script>
  <!-- audioplayer -->
  <script src="{{asset('backend/assets/js/lib/audioplayer.js')}}"></script>
  
  <!-- main js -->
  <script src="{{asset('backend/assets/js/app.js')}}"></script>

<script src="{{asset('backend/assets/js/homeOneChart.js')}}"></script>
<!-- Summernote js -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.18/summernote-bs4.min.js"></script>

</body>

</html>