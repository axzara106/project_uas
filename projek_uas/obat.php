<html>
<head>
<title> Menampilkan Laporan Obat </title>
</head>
<body>
	<h1>Laporan Persediaan Obat</h1>
	<table>
		<tr>
			<th>No</th>
			<th>Tanggal</th>
			<th>Keterangan</th>
			<th>Obat Masuk</th>
			<th>Obat Keluar</th>
			<th>Sisa</th>
			<th>Pelaksana</th>
		</tr>
		<?php 

		include "koneksi.php";

		$no =1;
		$data =mysqli_query($koneksi,"SELECT * FROM laporan_obat");
		while ($hasil =mysqli_fetch_array($data)) {
			
            ?>
		<tr>
			<td><?php echo $no++; ?></td>
			<td><?php echo $hasil['tgl'] ; ?></td>
			<td><?php echo $hasil['keterangan'] ; ?></td>
			<td><?php echo $hasil['obat_masuk'] ; ?></td>
			<td><?php echo $hasil['obat_keluar'] ; ?></td>
			<td><?php echo $hasil['sisa'] ; ?></td>
			<td><?php echo $hasil['pelaksana'] ; ?></td>
		</tr>
		<?php 
		}
		 ?>
		</table>
</body>

</html>