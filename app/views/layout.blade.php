<!DOCTYPE html>
<html lang="zh-tw" class="han-la">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>taichunmin.idv.tw</title>

    <!-- han -->
    <link href="Han-2.3.0/han.css" rel="stylesheet">

    <!-- Bootstrap -->
    <link href="bootstrap-3.2.0/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    @section('css')
      @include('site-css')
    @show
  </head>
  <body>
  @include('google-analytics')
  @include('navbar')

  <div class="container-fluid">
  @yield('content-fluid', '')
  </div>

  <div class="container">
  @yield('content', '')
  </div>

  @section('js')
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="Han-2.3.0/js/han.js"></script>
    <script src="bootstrap-3.2.0/js/bootstrap.min.js"></script>
  @show
  </body>
</html>
