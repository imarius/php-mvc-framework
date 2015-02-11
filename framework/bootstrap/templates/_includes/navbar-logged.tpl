<ul class="nav navbar-nav navbar-right">
  <li><a href="/basket/index">
  	<span class="glyphicon glyphicon-shopping-cart"></span> <span class="badge">0</span></a>
  </li>
  <li><a href="/account/logout">Log out</a></li>
  <li class="dropdown">
     <a href="/account/login" class="dropdown-toggle" data-toggle="dropdown"><?php echo $_SESSION['allUserData']['username']; ?><b class="caret"></b></a>
     <ul class="dropdown-menu" style="padding: 15px;min-width: 250px;">
        <li>
           <div class="row">
              <div class="col-md-12">
              	<?php 
              		if(isset($_SESSION['allUserData']['avatar']))
                     	include HOME . DS . "framework" . DS . "bootstrap" . DS . "templates" . DS . "_includes" . DS . "avatar.tpl";
              	?>
              	<p class="text-center"><?php echo $_SESSION['email']; ?></p>

                 <!-- <form class="form" role="form" method="post" action="/account/login">
                    <div class="form-group">
                       <input type="text" name="username" class="form-control" placeholder="username" required>
                    </div>
                    <div class="form-group">
                       <input type="password" name="password" class="form-control" placeholder="passowrd" required>
                    </div>
                    <div class="form-group">
                       <input type="hidden" name="formLocation" value="<?php echo $_SERVER['REQUEST_URI']; ?>"></input>
                       <input type="submit" name="loginSubmit" class="btn btn-success btn-block" value="Sign In"></input>
                    </div>
                 </form> -->
                 <hr/>
                 <div class="text-center">
                 	<a href="/account/manage" class="btn btn-info">Manage Account</a>
                 </div>
              </div>
           </div>
     </ul>
  </li>
</ul>