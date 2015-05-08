<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>My Cloud Storage</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
	
	<style type="text/css">
		.mainpage > div {
			display: none;
		}

		.mainpage > div:target {
			display: block;
		}
	</style>
	
  </head>

  <body>
<!-- AWAL CONTENT  -- hapus dari sini kebawah (sampai AKHIR CONTENT) -->

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
	
	<div class="container">

	<div class="mainpage">
  
		<div class="general" id="registrations">
			
			<?php echo form_open('form'); ?>
			
			<table border=0 align="center">	
				<tr>
					<td align="center" colspan=3><h2>Form Registrasi</h2></td>
				</tr>
				<tr>
					<td align="left"><h2>Username</h2></td> <td width=50></td>
					<td><input type="text" id="text-registrasi" size=30 name="username_signup" value="<?php echo set_value('username_signup'); ?>"/> 
					<?php echo form_error('username_signup'); ?> 
					</td>
				</tr>
				<tr>
					<td align="left"><h2>Password</h2></td> <td width=50></td>
					<td><input type="text" id="text-registrasi" size=30 name="password_signup" value="<?php echo set_value('password_signup'); ?>"/> 
					<?php echo form_error('password_signup'); ?> 
					</td>
				</tr>
				<tr>
					<td align="left"><input type="submit" id="button-registrasi" value="SUBMIT" name="submission"></td>
	
					</form>
				</tr>
			</table>
			</form> 
		</div>
		
		<div class="general" id="logins">
			<form action="login-desktop.php" method="post">
			<h1>FORM LOGIN</h1><hr>
			<table border=0 align="center">	
				<tr>
					<td align="left"><h2>Username</h2></td> <td width=50></td>
					<td><input type="text" size=30 name="username_login" id="text-login"></td>
				</tr>
				<tr>
					<td align="left"><h2>Password</h2></td> <td width=50></td>
					<td><input type="text" size=30 name="password_login" id="text-login"></td>
				</tr>
				<tr>
					<td align="left"><input type="submit" id="button-login" value="LOGIN" name="submission_login"></td>
				</tr>
			</table>
			</form>
		</div>
	
	</div>
	
	
  <div class="row">
    <div class="col-sm-4">
      <h3>Column 1</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
      <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
    </div>
    <div class="col-sm-4">
      <h3>Column 2</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
      <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
    </div>
    <div class="col-sm-4">
      <h3>Column 3</h3>        
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
      <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
    </div>
  </div>
</div>

<!-- AKHIR CONTENT - dari sini kebawah jgn dihapus -->
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery-1.11.3.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
	
  </body>
</html>
