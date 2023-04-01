<?php 
include 'database.php';
$db = new database();
$data_buku = $db->tampil_data();
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<table border="1">
		<tr>
			<th>No</th>
			<th>Judul</th>
			<th>Pengarang</th>
			<th>Penerbit</th>
			<th>Tahun</th>
			<th>Action</th>
		</tr>
		<?php 
		$no = 1;
		foreach($data_buku as $row){
			?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $row['judul']; ?></td>
				<td><?php echo $row['pengarang']; ?></td>
				<td><?php echo $row['penerbit']; ?></td>
				<td><?php echo $row['tahun']; ?></td>
				<td>
					<a href="edit.php?id=<?php echo $row['id_buku']; ?>">Update</a>
					<a href="hapus.php?id=<?php echo $row['id_buku']; ?>">Delete</a>
				</td>
			</tr>
			<?php 
		}
		?>
	</table>
</body>
</html>


