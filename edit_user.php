<!DOCTYPE html>
<html>
<head>
	<title>Membuat CRUD dengan CodeIgniter | MalasNgoding.com</title>
</head>
<body>
	<center>
		<h1>Membuat CRUD dengan CodeIgniter | MalasNgoding.com</h1>
		<h3>Edit Data</h3>
	</center>
	<?php foreach($user as $u){ ?>
	<form action="<?php echo base_url(). 'index.php/user/update'; ?>" method="post">
		<table style="margin:20px auto;">
			<tr>
				<td>nama lengkap</td>
				<td>
					<input type="hidden" name="id" value="<?php echo $u->id ?>">
					<input type="text" name="nama_lengkap" value="<?php echo $u->nama_lengkap ?>">
				</td>
			</tr>
			<tr>
				<td>username</td>
				<td><input type="text" name="username" value="<?php echo $u->username ?>"></td>
			</tr>
			<tr>
				<td>password</td>
				<td><input type="text" name="password" value="<?php echo $u->password ?>"></td>
			</tr>
            <tr>
				<td>email</td>
				<td><input type="text" name="email" value="<?php echo $u->email ?>"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Simpan"></td>
			</tr>
		</table>
	</form>	
	<?php } ?>
</body>
</html>