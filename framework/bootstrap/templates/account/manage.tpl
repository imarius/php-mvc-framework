<?php include HOME . DS . "framework" . DS . "bootstrap" . DS . "templates" . DS . "_includes" . DS . "header.tpl" ?>
<h1><?php echo 'Welcome ' . $_SESSION['username']; ?></h1>
<a href='/account/logout'>logout</a>
<?php include HOME . DS . "framework" . DS . "bootstrap" . DS . "templates" . DS . "_includes" . DS . "footer.tpl" ?>