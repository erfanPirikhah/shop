<!DOCTYPE html>
<html dir="rtl">
<head>
<meta charset="UTF-8" />
<meta name="format-detection" content="telephone=no" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href="image/favicon.png" rel="icon" />
<title>مارکت شاپ - قالب HTML فروشگاهی</title>
<meta name="description" content="Responsive and clean html template design for any kind of ecommerce webshop">
<!-- CSS Part Start-->
<link rel="stylesheet" type="text/css" href="/blog/assets/js/bootstrap/css/bootstrap.min.css" />
<link rel="stylesheet" type="text/css" href="/blog/assets/js/bootstrap/css/bootstrap-rtl.min.css" />
<link rel="stylesheet" type="text/css" href="/blog/assets/css/font-awesome/css/font-awesome.min.css" />
<link rel="stylesheet" type="text/css" href="/blog/assets/css/stylesheet.css" />
<link rel="stylesheet" type="text/css" href="/blog/assets/css/owl.carousel.css" />
<link rel="stylesheet" type="text/css" href="/blog/assets/css/owl.transitions.css" />
<link rel="stylesheet" type="text/css" href="/blog/assets/css/responsive.css" />
<link rel="stylesheet" type="text/css" href="/blog/assets/css/stylesheet-rtl.css" />
<link rel="stylesheet" type="text/css" href="/blog/assets/css/responsive-rtl.css" />
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans' type='text/css'>
<!-- CSS Part End-->
</head>
<body>
<div class="wrapper-wide">
  <div id="header">
    <!-- Top Bar Start-->
@include('Blog.layout.nav')

<div class="container">
    @yield('content')
</div>    
  <!--Footer Start-->
  @include('Blog.layout.footer') 
 
  <!--Footer End-->
  <!-- Facebook Side Block Start -->
 
<!-- JS Part Start-->
<script type="text/javascript" src="/blog/assets/js/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="/blog/assets/js/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="/blog/assets/js/jquery.easing-1.3.min.js"></script>
<script type="text/javascript" src="/blog/assets/js/jquery.dcjqaccordion.min.js"></script>
<script type="text/javascript" src="/blog/assets/js/owl.carousel.min.js"></script>
<script type="text/javascript" src="/blog/assets/js/custom.js"></script>
<!-- JS Part End-->
</body>
</html>