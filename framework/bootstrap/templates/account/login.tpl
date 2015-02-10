<?php include HOME . DS . "framework" . DS . "bootstrap" . DS . "templates" . DS . "_includes" . DS . "header.tpl" ?>

<div class="container">
	<div class="login-container">
			<div class="" style="display: <?php echo $errorDisplay; ?>">
				<div class="panel panel-danger" role="alert">
					<div class="panel-heading">There ware the following errors:</div>
					<div class="panel-body">
						<?php 
							if(isset($errors)) 
							{
								echo'<ul>';

								foreach ($errors as $error)
								{
									echo '<li><span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span> ' . $error . '</li>';
								}

								echo '</ul>';
							} 
						?>
					</div>
				</div>
			</div>
            <div class="form-box">
                <form action="/account/login" method="POST">
                    <input name="username" type="text" placeholder="username">
                    <input name="password" type="password" placeholder="password">
                    <button class="btn btn-info btn-block login" type="submit" name="loginSubmit">Login</button>
                </form>
            </div>
        </div>
        
</div>

<?php include HOME . DS . "framework" . DS . "bootstrap" . DS . "templates" . DS . "_includes" . DS . "footer.tpl" ?>