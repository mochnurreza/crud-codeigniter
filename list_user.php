<!DOCTYPE html>
<html>
<head>
	<title>Membuat CRUD dengan CodeIgniter</title>
</head>
<body>
	<center><h1>Membuat CRUD dengan CodeIgniter | MalasNgoding.com</h1></center>
	<center><?php echo anchor('user/tambah','Tambah Data'); ?></center>
	<table style='margin:20px auto;' border='1'>
		<tr>
			<th>No</th>
			<th>Nama Lengkap</th>
			<th>Userame</th>
			<th>Password</th>
			<th>Email</th>
		</tr>
		<?php 
		$no = 1;
		foreach($user as $u){ 
		?>
		<tr>
			<td><?php echo $no++ ?></td>
			<td><?php echo $u->nama_lengkap ?></td>
			<td><?php echo $u->username ?></td>
			<td><?php echo $u->password ?></td>
            <td><?php echo $u->email ?></td>
			<td>
			      <?php echo anchor('user/edit/'.$u->id,'Edit'); ?>
                    <?php echo anchor('user/hapus/'.$u->id,'Hapus'); ?>
			</td>
		</tr>
		<?php } ?>
	</table>
</body>
</html>