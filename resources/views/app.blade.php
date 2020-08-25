<!DOCTYPE html>
<!--[if lt IE 7]>      
<html class="no-js lt-ie9 lt-ie8 lt-ie7">
<![endif]-->
<!--[if IE 7]>         
<html class="no-js lt-ie9 lt-ie8">
<![endif]-->
<!--[if IE 8]>         
<html class="no-js lt-ie9">
<![endif]-->
<!--[if gt IE 8]><!--> 
<html class="no-js">
   <!--<![endif]-->
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
      <title>Magalla Magazine, News HTML</title>
      <meta name="description" content="Magalla Magazine and News Template on Themeforest">
      <meta name="viewport" content="width=device-width">
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <link rel="stylesheet" href="css/bootstrap-theme.css">
      <link rel="stylesheet" href="css/normalize.css">
      <link rel="stylesheet" href="fonts/font-awesome/css/font-awesome.min.css">
      <link rel="stylesheet" href="css/main.css">
      <link rel="stylesheet" href="css/responsive.css">
      <link rel="stylesheet" href="css/elements.css">
      <link rel="stylesheet" href="css/calendar.css">
      <link rel="stylesheet" href="css/prettyPhoto.css">
      <!--[if gt IE 7]>
      <link rel="stylesheet" type="text/css" href="css/ie.css" />
      <![endif]-->
      <script src="js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
   </head>
   <body>
       @include('header')
       @yield('content')
       @include('footer')
       @include('jslinks')
   </body>
</html>