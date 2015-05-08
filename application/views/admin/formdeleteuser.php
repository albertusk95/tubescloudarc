<!doctype html>
<html>
<head>
	<title>Form delete user</title>
	<meta charset="utf-8">

	<link href="<?php echo base_url(); ?>css/bootstrap.min.css" rel="stylesheet">
	
	<script src="<?php echo base_url(); ?>js/jquery-1.11.3.min.js"></script>
    <script src="<?php echo base_url(); ?>js/bootstrap.min.js"></script>
	
</head>
<body>
	<?php echo form_open('deleteuser_controller/deleteuser/'.$Username.'/'.$id_value); ?>
	
	<h1>Delete this user?</h1>
	<table class="table table-hover">
	<thead>
		<tr>
			<td>id</td>
			<td>username</td>
			<td>password</td>
			<td>level</td>
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
	<tfoot>
		<tr>
			<td>
				<input type="submit" value="Delete user" />
			</td>
		</tr>
	</tfoot>
	</table>
	

	</form>
	
</body>
</html>