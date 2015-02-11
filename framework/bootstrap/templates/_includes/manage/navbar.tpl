<link rel="stylesheet" href="/static/css/manage.css">

<nav class="navbar navbar-default navbar-xs" role="navigation">
  <!-- Brand and toggle get grouped for better mobile display -->
  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="#"><b><?php echo $_SESSION['username']; ?></b> Account Control Panel</a>
  </div>

  <!-- Collect the nav links, forms, and other content for toggling -->
  <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
    <ul class="nav navbar-nav">
      <li><a href="/"><i class="glyphicon glyphicon-home"></i> Store front home</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="/account/logout"><i class="glyphicon glyphicon-adjust"></i> Log out</a></li>
      <li><a href="#"><i class="glyphicon glyphicon-user"></i> Change Password</a></li>
    </ul>
  </div><!-- /.navbar-collapse -->
</nav>