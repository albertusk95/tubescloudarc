<!doctype html>
<html>
<head>
	<title>Form Edit User</title>
	<meta charset="utf-8">

	<link href="<?php echo base_url(); ?>css/bootstrap.min.css" rel="stylesheet">
	
	<script src="<?php echo base_url(); ?>js/jquery-1.11.3.min.js"></script>
    <script src="<?php echo base_url(); ?>js/bootstrap.min.js"></script>
	
</head>
<body>
	<?php echo form_open('edituser_controller/edituser/'.$Username); ?>
	
	<h1>Form Edit</h1>
	<table class="table table-hover">
	<thead>
		<tr>
			<td>id_lama</td>
			<td>username_lama</td>
			<td>password_lama</td>
			<td>level_lama</td>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td>
				<?php echo $ID; ?>
			</td>
			<td>
				<?php echo $Username; ?>
			</td>
			<td>
				<?php echo $Password; ?>
			</td>
			<td>
				<?php echo $Level; ?>
			</td>
		</tr>
	</tbody>
	</table>
	
	
	<table class="table table-hover">
	<thead>
		<tr>
			<td>id_baru</td>
			<td>username_baru</td>
			<td>password_baru</td>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td><input type="text" name="idbaru" placeholder="id_baru" value="<?php echo $ID; ?>" readonly="readonly"/></td>
			<td><input type="text" name="usernamebaru" placeholder="usernamebaru"/></td>
			<td><input type="text" name="passwordbaru" placeholder="passwordbaru"/></td>
		</tr>
		<tr>
			<td colspan=4><input type="submit" value="Edit User"></td>
		</tr>
	</tbody>
	</table>
	</form>
	
</body>
</html>