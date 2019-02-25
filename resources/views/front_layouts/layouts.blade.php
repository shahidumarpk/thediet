<!DOCTYPE html>
    <html lang="zxx" class="no-js">
    <head>
        <!-- Mobile Specific Meta -->
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Favicon-->
        <link rel="shortcut icon" href="img/fav.png">
        <!-- Author Meta -->
        <meta name="author" content="colorlib">
        <!-- Meta Description -->
        <meta name="description" content="">
        <!-- Meta Keyword -->
        <meta name="keywords" content="">
        <!-- meta character set -->
        <meta charset="UTF-8">
        <!-- Site Title -->
        <title>Nutritionist </title>
    @include('front_layouts.include.header')    
</head>
<style type="text/css">
/*custom code stylesheet*/
.logoClass{
        position: absolute; top: 50px; z-index: 899; width: 150px; left: 100px
        }
    /*media query*/
@media only screen and (max-width: 768px) {
   
    .only_bigscreen{
      display: none;
    }
    .logoClass{
        position: absolute; top: 10px; z-index: 899; width: 100px; left: 110px
        }
    
 }

</style>
<body>

            <a href="{{url('/')}}" class="classlogo">
                    <img src="{{asset('storage/app/public/page/'.$siteConfig->logo)}}"  class="logoClass">
            </a>
     @yield('content')
    <!-- footer area start -->
    @include('front_layouts.include.footer')
   
    <!-- footer area end -->

    <!-- Scripts -->
      @include('front_layouts.include.footerscripts')

    
</body>

</html>