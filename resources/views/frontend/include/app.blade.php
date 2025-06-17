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

  <body
    class="front-page no-sidebar site-layout-full-width menu-has-cart header-sticky header-style-5"
  >
    <div id="top"></div>
    <div id="wrapper" class="animsition">
      <div id="page" class="clearfix">
        <div id="site-header-wrap">
          <!-- Header -->
          @include('frontend.include.header')
        </div>
        @yield('content')

        <!-- Footer -->
        @include('frontend.include.footer')
      </div>
      <!-- /#page -->
    </div>
  

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

    <!-- Revolution Slider -->
    <script
      type="text/javascript"
      src="{{asset('frontend/includes/rev-slider/js/jquery.themepunch.tools.min.js')}}"
    ></script>
    <script
      type="text/javascript"
      src="{{asset('frontend/includes/rev-slider/js/jquery.themepunch.revolution.min.js')}}"
    ></script>
    <script type="text/javascript" src="{{asset('frontend/assets/js/rev-slider.js')}}"></script>
    <script
      type="text/javascript"
      src="{{asset('frontend/includes/rev-slider/js/extensions/revolution.extension.actions.min.js')}}"
    ></script>
    <script
      type="text/javascript"
      src="{{asset('frontend/includes/rev-slider/js/extensions/revolution.extension.carousel.min.js')}}"
    ></script>
    <script
      type="text/javascript"
      src="{{asset('frontend/includes/rev-slider/js/extensions/revolution.extension.kenburn.min.js')}}"
    ></script>
    <script
      type="text/javascript"
      src="{{asset('frontend/includes/rev-slider/js/extensions/revolution.extension.layeranimation.min.js')}}"
    ></script>
    <script
      type="text/javascript"
      src="{{asset('frontend/includes/rev-slider/js/extensions/revolution.extension.migration.min.js')}}"
    ></script>
    <script
      type="text/javascript"
      src="{{asset('frontend/includes/rev-slider/js/extensions/revolution.extension.navigation.min.js')}}"
    ></script>
    <script
      type="text/javascript"
      src="{{asset('frontend/includes/rev-slider/js/extensions/revolution.extension.parallax.min.js')}}"
    ></script>
    <script
      type="text/javascript"
      src="{{asset('frontend/includes/rev-slider/js/extensions/revolution.extension.slideanims.min.js')}}"
    ></script>
    <script
      type="text/javascript"
      src="{{asset('frontend/includes/rev-slider/js/extensions/revolution.extension.video.min.js')}}"
    ></script>
  </body>
</html>
