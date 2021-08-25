<!DOCTYPE html>
<html>

<head>
  <base href="{{ URL::to('/') }}" />
  <title>{{setting('site.title')}}</title>
  <meta charset="utf-8" />
  <meta name="description" content="@yield('description')" />
  <meta name="keywords" content="@yield('keywords')" />
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
  <!-- responsive use only -->
  <link href="css/style.css" rel="stylesheet" type="text/css" />
  <link href="css/responsive.css" rel="stylesheet" type="text/css" />
  <!-- responsive use only -->
  <link href="css/swiper.min.css" rel="stylesheet" type="text/css" />
  <link href="css/aos.css" rel="stylesheet" type="text/css" />
  <link href="css/fancybox.css" rel="stylesheet" type="text/css" />
  @stack('styles')
</head>

<body>
  
  <div id="page">
    @include('parts.header')
    <div id="wrapper" class="slide-right">


      
      <main id="content">
        @yield('content')
      </main>
        @include('parts.footer')
    </div>
  </div>
  {{-- <button class="scroll-up"> <img src="images/arrow.png"> </button> --}}

  <!--[if lt IE 9]> <script src="js/html5shiv.js"></script> <![endif]-->
  <script src="js/jquery.js" type="text/javascript"></script>
  <script src="js/common.js" type="text/javascript"></script>
  <script src="js/swiper.min.js" type="text/javascript"></script>
  <script src="js/aos.js" type="text/javascript"></script>
  <script src="js/masonry.js" type="text/javascript"></script>
  <script src="js/jquery.fancybox.min.js" type="text/javascript"></script>
  
  @stack('scripts')
</body>

</html>