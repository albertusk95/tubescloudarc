<?php echo form_open("auth/cek_login"); ?>
			
			<table border=0 align="center">	
				<tr>
					<td><h1 id="create-account">Login</h1></td>
				</tr>
			</table>
			<table border=0 align="center">
				<tr>
					<td align="left" width = 100>Username</td> <td width=50></td>
					<td><input type="text" placeholder="Email Address" id="text-registrasi" size=30 name="username" value="<?php echo set_value('username'); ?>"/> 
					<br>
						<?php 
							echo form_error('username','<font color="red">','</font>'); 
						?> 
					</td>
				</tr>
			</table>
			<br>
			<table border=0 align="center">
				<tr>
					<td align="left" width=100>Password</td> <td width=50></td>
					<td><input type="text" placeholder="Password" id="text-registrasi" size=30 name="password" value="<?php echo set_value('password'); ?>"/> 
					<br>
					<?php echo form_error('password','<font color="red">','</font>'); ?> 
					</td>
				</tr>
			</table>
			<br>
			<table border=0 align="center">
				<tr>
					<td align="left" colspan=3>
					<button type="submit" class="btn btn-primary btn-lg btn-block">
					Login
					</button>
					</td>
					
				</tr>
			</table>
</form>