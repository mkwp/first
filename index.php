<html>
	<head>
		<link rel="stylesheet" media="screen" href="css/jquery.dataTables.css"/>
		<script type="text/javascript" src="js/jquery.js"></script>
		<script type="text/javascript" src="js/jquery.dataTables.js"></script>
	
	</head>
	
	<body>
	
		<table id="example" class="display" cellspacing="0" width="100%">
			<thead>
				<tr>
					<th>No</th>
					<th>Nim Mahasiswa</th>
					<th>Nama Mahasiswa</th>
					<th>Alamat Mahasiswa</th>
					<th> Aksi </th>
				</tr>
			</thead>
			<tbody>
		<?php
			require('nyambung.php');
			
			$query = $koneksi->query("SELECT * FROM mahasiswa");
			$no=1;
			foreach($query as $data) { ?>
			
				<tr>
					<td align="center"><?php echo $no ?></td>
					<td align="center"><?php echo $data['nim_mahasiswa'] ?></td>
					<td align="center"><?php echo $data['nm_mahasiswa'] ?></td>
					<td align="center"><?php echo $data['alamat_mahasiswa'] ?></td>
					<td align="center"><a href="edit.php?edit=<?php echo $data['nim_mahasiswa']; ?>">EDITE</a> <a href="edit.php?edit=<?php echo $data['nim_mahasiswa']; ?>">HAPUS</a></td>
				</tr>

				
			<?php $no++; ?>
			<?php };?>

	
		
			</tbody>
		</table>
		
		
		<script>
			
			$(document).ready(function() {
				$('#example').dataTable();
			});
		</script>
	</body>
</html>