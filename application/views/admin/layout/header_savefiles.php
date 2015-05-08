<div>
	<nav class="navbar navbar-inverse">
			<div class="container-fluid">
				<div class="navbar-header">
					<a class="navbar-brand" href="#"><span class="glyphicon glyphicon-save"></span> Save Your Files Here</a>
				</div>
				<div>
					<ul class="nav navbar-nav navbar-right">
					<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"><?php echo $username; ?><span class="caret"></span></a>
						<ul class="dropdown-menu">
						<li class="dropdown-header">User Management</li>
						<li><a href="#adduser">Add user</a></li>
						<li><a href="#edituser">Edit user</a></li>
						<li><a href="#deleteuser">Delete user</a></li>
						<li class="dropdown-header">Others</li>
						<li><a href="#">Configure</a></li>
						<li><a href="<?php echo site_url('admin/c_admin/logout'); ?>">Log out</a></li>
						</ul>
					</li>
					</ul>
				</div>
			</div
	</nav>
</div>