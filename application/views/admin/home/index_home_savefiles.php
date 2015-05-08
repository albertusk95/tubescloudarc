<div class="container-isi">
	
	<div class="row">
		<div class="col-sm-3" id="one">
			<div class="layer">
				<table class="table table-hover">
				<tbody>
				<tr>
					<td>
						<a href="#newfolder" data-toggle="tooltip" data-placement="right" title="membuat folder baru">
							New Folder
						</a>
					</td>
				</tr>
				<tr>
					<td>
						<a href="#upload" data-toggle="tooltip" data-placement="right" title="upload file baru">
							Upload
						</a>
					</td>
				</tr>
				<tr>
					<td>
						<a href="#download" data-toggle="tooltip" data-placement="right" title="download file">
							Download
						</a>
					</td>
				</tr>
				<tr>
					<td>
						<a href="#delete" data-toggle="tooltip" data-placement="right" title="menghapus file/folder">
							Delete
						</a>
					</td>
				</tr>
				<tr>
					<td>
						<a href="#rename" data-toggle="tooltip" data-placement="right" title="me-rename file">
							Rename
						</a>
					</td>
				</tr>
				<tr>
					<td>
						<a href="#showtabel" data-toggle="tooltip" data-placement="right" title="menampilkan tabel">
							Lihat tabel
						</a>
					</td>
				</tr>
				</tbody>
				</table>
			</div>
		
			<script>
				$(document).ready(function(){
				$('[data-toggle="tooltip"]').tooltip();   
				});
			</script>
		
		</div>
	
		<div class="col-sm-9"> <!-- tempat menampilkan aksi setiap pilihan -->
			
			
			<div class="main-target">
				
				<div id="deleteuser">
					<div class="jumbotron">
						<h2>User Management - Delete user</h2>
						
						<?php echo form_open("deleteuser"); ?>
						
						Masukan nomor tabel yang ingin dihapus :
						<input type="text" name="notabeldelete">
						<input type="submit" name="nomortabeldelete" value="Delete user">
						
						<table class="table table-hover">
							<thead>
							<tr>
								<td>ID</td>
								<td>Username</td>
								<td>Password</td>
								<td>Level</td>
							</tr>
							</thead>
							
							<tbody>
							
								<?php
								$connect = mysqli_connect("localhost","root","");
								mysqli_select_db($connect, "codeigniter") or die("Database tidak ditemukan");
								if (mysqli_connect_error())
								{
								echo "Koneksi gagal!: " . mysqli_connect_error();
								}
								$sql = mysqli_query ($connect,"SELECT * FROM login_session");
								
								while ($baris = mysqli_fetch_array($sql)) {
									?>
								<tr>
									<td><?php echo $baris['id']; ?> </td>
									<td><?php echo $baris['username']; ?> </td>
									<td><?php echo $baris['password']; ?> </td>
									<td><?php echo $baris['level']; ?> </td>
								</tr>
								<?php
								}
								mysqli_close($connect);
								?>
							</tbody>
						</table>
						
						</form>
					</div>
				</div>
				
				<div id="edituser">
					<div class="jumbotron">
						<h2>User Management - Edit user</h2>
						
						<?php echo form_open("edituser"); ?>
						
						Masukan nomor tabel yang ingin diedit :
						<input type="text" name="notabeledit">
						<input type="submit" name="nomortabeledit" value="Edit user">
						
						<table class="table table-hover">
							<thead>
							<tr>
								<td>ID</td>
								<td>Username</td>
								<td>Password</td>
								<td>Level</td>
							</tr>
							</thead>
							
							<tbody>
							
								<?php
								$connect = mysqli_connect("localhost","root","");
								mysqli_select_db($connect, "codeigniter") or die("Database tidak ditemukan");
								if (mysqli_connect_error())
								{
								echo "Koneksi gagal!: " . mysqli_connect_error();
								}
								$sql = mysqli_query ($connect,"SELECT * FROM login_session");
								
								while ($baris = mysqli_fetch_array($sql)) {
									?>
								<tr>
									<td><?php echo $baris['id']; ?> </td>
									<td><?php echo $baris['username']; ?> </td>
									<td><?php echo $baris['password']; ?> </td>
									<td><?php echo $baris['level']; ?> </td>
								</tr>
								<?php
								}
								mysqli_close($connect);
								?>
							</tbody>
						</table>
						</form>
					</div>
				</div>
				
				<div id="adduser">
					<div class="jumbotron">
					
					<?php echo form_open("adduser/cek_register"); ?>
					<h2>User Management - Add user</h2>
					<table border=0>
						<tr>
							<td>Username</td>
							<td><input type="text" name="newuser" value="<?php echo set_value('newuser'); ?>">
							<br>
							<?php echo form_error('newuser','<font color="red">','</font>'); ?>
							</td>
						</tr>
						<tr>
							<td>Password</td>
							<td><input type="text" name="passnewuser" value="<?php echo set_value('passnewuser'); ?>">
							<br>
							<?php echo form_error('passnewuser','<font color="red">','</font>'); ?>
							</td>
						</tr>
						<tr>
							<td colspan="2"><input type="submit" value="SUBMIT"></td>
						</tr>
					</table>
					
					</form>
					
					</div>
				</div>
				
				<div id="personalize">
					
					
					
				</div>
				
				<div id = "newfolder"> <!-- menampilkan form New Folder -->
				
				
				
				</div>
				
				<div id="upload"> <!-- menampilkan form untuk upload file-->
				
				
				
				</div>
				
				<div id="download"> <!-- menampilkan form untuk mendownload file/ folder -->
				
				
				
				</div>
				
				<div id="delete"> <!-- menampilkan form untuk delete file/folder-->
				
				
				
				</div>
				
				<div id="rename"> <!-- menampilkan form untuk merename folder/file -->
				
				
				
				</div>
				
				<div id="showtabel"> <!-- menampilkan tabel folder dan file si user -->
					
					
					
				</div>
				
				
			
			</div>
		</div>
		
	</div>	

	<div class="row">
	
	</div>
	
</div>



				
			