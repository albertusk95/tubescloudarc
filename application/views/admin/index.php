<html>
<head>
<title>My Form</title>
 <link href="css/bootstrap.min.css" rel="stylesheet">

 <style type="text/css">
	.header {
		color : red;
		border-radius : 3px;
		background-color : yellow;
	}
 </style>
	
 </head>
<body>

<!--
	<?php echo validation_errors(); ?>
-->
	<?php echo form_open('form'); ?>
<nav class="navbar navbar-inverse">
		<div class="container-fluid">
			<div class="navbar-header">
				<a class="navbar-brand" href="#">MyCloudStorageARC</a>
			</div>
			<div>
				<ul class="nav navbar-nav navbar-right">
				<li><a href="#registrations"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
				<li><a href="#logins"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
				</ul>
			</div>
		</div>
	</nav>
	
	<div class="header">HEADER</div>
	
<h5>Username</h5>

<input type="text" name="username" value="<?php echo set_value('username'); ?>" size="50" />
<br>
<?php echo form_error('username','<font color="red">','</font>'); ?>
<br>

<h5>Password</h5>
<?php echo form_error('password','<font color="blue">','</font>'); ?>
<input type="text" name="password" value="<?php echo set_value('password'); ?>" size="50" />

<h5>Password Confirm</h5>
<?php echo form_error('passconf'); ?>
<input type="text" name="passconf" value="<?php echo set_value('passconf'); ?>" size="50" />

<h5>Email Address</h5>
<?php echo form_error('email'); ?>
<input type="text" name="email" value="<?php echo set_value('email'); ?>" size="50" />

<div><input type="submit" value="Submit" /></div>

</form>

<!-- AKHIR CONTENT - dari sini kebawah jgn dihapus -->
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery-1.11.3.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
	

</body>
</html>