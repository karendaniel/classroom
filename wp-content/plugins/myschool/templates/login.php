<form action="<?php echo admin_url('admin-post');?>" method="POST">
<input type="hidden" name="action" value="login">
	<table>
		<tr>
			<td>Username or Email</td>
			<td>:</td>
			<td><input type="text" name="username_email"></td>
		</tr>
		<tr>
			<td>Password</td>
			<td>:</td>
			<td><input type="password" name="password"></td>
		</tr>
	</table>
</form>