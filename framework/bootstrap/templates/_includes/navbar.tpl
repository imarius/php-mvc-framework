<div class="row">
      <div class="col-md-12">
         <nav class="navbar navbar-default" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
               <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
               <span class="sr-only">Toggle navigation</span>
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
               </button>
               <a class="navbar-brand" href="/">Store Front</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
               <ul class="nav navbar-nav">
                  <li class="active"><a href="http://www.jquery2dotnet.com">Home</a></li>
                  <li><a href="http://www.jquery2dotnet.com">About Us</a></li>
                  <li class="dropdown">
                     <a href="http://www.jquery2dotnet.com" class="dropdown-toggle" data-toggle="dropdown">Pages <b class="caret"></b></a>
                     <ul class="dropdown-menu">
                        <li><a href="http://www.jquery2dotnet.com">Action</a></li>
                        <li><a href="http://www.jquery2dotnet.com">Another action</a></li>
                        <li><a href="http://www.jquery2dotnet.com">Something else here</a></li>
                        <li class="divider"></li>
                        <li><a href="http://www.jquery2dotnet.com">Separated link</a></li>
                        <li class="divider"></li>
                        <li><a href="http://www.jquery2dotnet.com">One more separated link</a></li>
                     </ul>
                  </li>
               </ul>
               <?php 
                  if(isset($_SESSION['uid']))
                  {
                     include HOME . DS . "framework" . DS . "bootstrap" . DS . "templates" . DS . "_includes" . DS . "navbar-logged.tpl";
                  }
                  else
                  {
                     include HOME . DS . "framework" . DS . "bootstrap" . DS . "templates" . DS . "_includes" . DS . "navbar-unlogged.tpl";
                  }
               ?>
            </div>
         </nav>
      </div>
   </div>