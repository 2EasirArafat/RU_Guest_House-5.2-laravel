
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Ru Guest house website</title>

    <!-- Bootstrap core CSS -->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Bootstrap theme -->
   <link href="css/bootstrap-theme.min.css" rel="stylesheet">
   <link rel="stylesheet" type="text/css" href="{{asset('css/login_style.css')}}">
   <link href="css/style.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
   <!-- <link href="../../assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">-->

    <!-- Custom styles for this template -->
   <!-- <link href="theme.css" rel="stylesheet">-->

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
   <!-- <script src="../../assets/js/ie-emulation-modes-warning.js"></script>-->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>


    <![endif]-->

    </head>

  <body>

      <!--Fixed Navigation bar started-->
<div class="navbar navbar-default navbar-inverse navbar-fixed-top">

    <div class="container">

      <a class="navbar-brand" href="#"><img src="Rajshahi-University-logo.jpg" width="35px" height="35px"/></a>
      <a class="navbar-brand" href="#">RU Guest House </a>

      <ul class="nav navbar-nav navbar-right">

    <li class="active"> <a href="{{url('/')}}">Home </a> </li>
    <li> <a href="{{url('/login')}}">Sign in</a> </li>
    <li> <a href="#">Gallary</a></li>
    <li> <a href="#">Direction</a></li>
    <li> <a href="#">Contract Us</a></li>

    </ul>
    </div>

</div>

      <!--Fixed Navigation bar ended-->

      <div class="container">
      
       @yield('content')
       <!--Start of Paragraph container-->
       </div>
       

<hr>


            <footer class="container-fluid bg-4 text-center">
            <p>@ 2017 RU guest house management system All rights reserved by <a href="#">Easir Arafat</a></p> 
            </footer>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery-3.2.1.min.js"></script>

    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
