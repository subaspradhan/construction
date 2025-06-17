<!DOCTYPE html>
<html lang="en-US">
  <head>
    <!-- Basic Page Needs -->
    <meta charset="utf-8" />
    <title>{{ config('app.name', 'Laravel') }}</title>
   

    <!-- Mobile Specific Metas -->
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, maximum-scale=1"
    />
 <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
      integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <!-- Theme Style -->
   <link rel="stylesheet" type="text/css" href="{{asset('frontend/style.css')}}" />

    <!-- Favicon and touch icons  -->
    <link rel="shortcut icon" href="{{asset('frontend/assets/icon/favicon.png')}}" />
    <link
      rel="apple-touch-icon-precomposed"
      href="assets/icon/apple-touch-icon-158-precomposed.png"
    />

  </head>

  <body class="page no-sidebar header-style-1 menu-has-search menu-has-cart">
    <div id="wrapper" class="">
      <div id="page" class="clearfix">
        <div id="site-header-wrap">

          <!-- Header -->
        @include('frontend.include.header2')
          <!-- /#site-header -->
        </div>
        <!-- /#site-header-wrap -->

        <!-- Main Content -->

        @yield('content')

        <!-- Main Content end -->

        <!-- Footer -->
       @include('frontend.include.footer')
      </div>
      <!-- /#page -->
    </div>
    <!-- /#wrapper -->

    <a id="scroll-top">TOP</a>

    <!-- Javascript -->
   <script type="text/javascript" src="{{asset('frontend/assets/js/jquery.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('frontend/assets/js/bootstrap.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('frontend/assets/js/animsition.js')}}"></script>
    <script type="text/javascript" src="{{asset('frontend/assets/js/plugins.js')}}"></script>
    <script type="text/javascript" src="{{asset('frontend/assets/js/countTo.js')}}"></script>
    <script type="text/javascript" src="{{asset('frontend/assets/js/fitText.js')}}"></script>
    <script type="text/javascript" src="{{asset('frontend/assets/js/flexslider.js')}}"></script>
    <script type="text/javascript" src="{{asset('frontend/assets/js/vegas.js')}}"></script>
    <script type="text/javascript" src="{{asset('frontend/assets/js/owlCarousel.js')}}"></script>
    <script type="text/javascript" src="{{asset('frontend/assets/js/cube.portfolio.js')}}"></script>
    <script type="text/javascript" src="{{asset('frontend/assets/js/main.js')}}"></script>
  </body>
</html>
