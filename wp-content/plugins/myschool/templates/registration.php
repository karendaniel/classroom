<h1><?php echo $this->title;?></h1>
<form id="registration" action="<?php echo admin_url('admin-post');?>" method="POST" action="#">
<input type="hidden" name="action" value="registration">

	<table>
	<tr>
		<td>NRIC Number</td>
		<td>:</td>
		<td><input type="text" name="nric"></td>
	</tr>
	<tr>
		<td>Full Name as per NRIC</td>
		<td>:</td>
		<td><input type="text" name="fullname"></td>
    </tr>
    <tr>
		<td>Display Name</td>
		<td>:</td>
		<td><input type="text" name="displayname"></td>
    </tr>
    <tr>
		<td>Email</td>
		<td>:</td>
		<td><input type="email" name="email"></td>
    </tr>
    <tr>
		<td>Password</td>
		<td>:</td>
		<td><input type="password" name="password"></td>
    </tr>
    <tr>
		<td>School Name</td>
		<td>:</td>
		<td><input type="text" name="schoolname"></td>
    </tr>
    <tr>
		<td>Contact No</td>
		<td>:</td>
		<td><input type="text" name="contactno"></td>
    </tr>
    <tr>
		<td>Occupation</td>
		<td>:</td>
		<td><input type="text" name="occupation"></td>
    </tr>
    <tr>
		<td colspan="3">
			<input type="submit" value="Register" id="">
			<?php echo wp_nonce_field('registration', '_mynonce');?>
		</td>
	</tr>
</table>
</form>