<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="{{ url('/') }}"><span class="fa fa-home fa-lg"></span> 筆記國度</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="{{ url('/about-me') }}"><span class="fa fa-info-circle fa-fw"></span> 關於我</a></li>
        <li><a href="{{ url('/experiences') }}"><span class="fa fa-history fa-fw"></span> 經歷</a></li>
        <li><a href="{{ url('/skills') }}"><span class="fa fa-bar-chart-o fa-rotate-90 fa-fw"></span> 技能</a></li>
        <li><a href="{{ url('/works') }}"><span class="fa fa-file-code-o fa-fw"></span> 作品集</a></li>
        <li><a href="{{ url('/about-site') }}"><span class="fa fa-puzzle-piece fa-fw"></span> 關於本站</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container -->
</nav>
