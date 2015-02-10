<?php include HOME . DS . "framework" . DS . "bootstrap" . DS . "templates" . DS . "_includes" . DS . "header.tpl" ?>

<div class="row">
    <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3" style="margin-top:40px;">
    	<div class="register-container">
		<div class="panel panel-danger" role="alert" style=" display : <?php echo $errorDisplay; ?>">
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

				if(isset($saveError))
				{
					echo '<h2>Error Saving Data. Please try again.</h2>';
				}
			?>
			</div>
		</div>
		<?php 
			if(isset($GreetMessage)) 
			{
				echo '<div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3" style="margin-top:20px;">';
				echo '<div class="panel panel-success" role="alert">';
				echo '<div class="panel-heading">Account Registered!</div>';
				echo '<div class="panel-body">' . $GreetMessage . '<hr><p>Page will redirect in 3 seconds.</p></div></div></div>';
			}
		?>
		<form role="form" action="/account/register" method="post" style="display : <?php echo $formDisplay; ?>">
			<h2>Register <small>Enter account data.</small></h2>
			<hr class="colorgraph">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12">
					<div class="form-group">
                        <input type="text" name="username" id="username" class="form-control input-lg" placeholder="username" tabindex="1">
					</div>
				</div>
			</div>
			<div class="form-group">
				<input type="text" name="display_name" id="display_name" class="form-control input-lg" placeholder="display name" tabindex="3">
			</div>
			<div class="form-group">
				<input type="email" name="email" id="email" class="form-control input-lg" placeholder="email" tabindex="4">
			</div>
			<div class="row">
				<div class="col-xs-12 col-sm-6 col-md-6">
					<div class="form-group">
						<input type="password" name="password" id="password" class="form-control input-lg" placeholder="password" tabindex="5">
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-6">
					<div class="form-group">
						<input type="password" name="password_confirmation" id="password_confirmation" class="form-control input-lg" placeholder="confirm password" tabindex="6">
					</div>
				</div>
			</div>
			<hr class="colorgraph">
			<div class="row">
				<div class="col-xs-12 col-md-6"><input type="submit" name="registerSubmit" value="Register" class="btn btn-info btn-block login" tabindex="7"></div>
				<div class="col-xs-12 col-md-6"><a href="/account/login" class="btn btn-default btn-block login">Sign In</a></div>
			</div>
		</form>
	</div>
	</div>
</div>

<?php include HOME . DS . "framework" . DS . "bootstrap" . DS . "templates" . DS . "_includes" . DS . "footer.tpl" ?>