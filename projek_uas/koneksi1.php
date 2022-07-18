<?php
$host = 'localhost';
$user = 'root';
$pass = '';
$db   = 'apotek_bersama';
$koneksi = mysqli_connect($host, $user, $pass, $db);

mysqli_select_db($koneksi, $db);
?>




<?php
$host = 'localhost';
$user = 'root';
$pass = '';
$db   = 'apotek_bersama';
$koneksi = mysql_connect($host, $user, $pass);
$select = mysqli_select_db($db, $koneksi);

if($select){
    echo 'Berhasil Koneksi Ke Database';
}
else{
    echo 'Gagal Koneksi Ke Database';
}

?>


<?php 

		include "koneksi.php";

		$no=1;
		$ambildata=mysql_query($koneksi,"SELECT * FROM data_obat");
		while ($tampil =mysql_fetch_array($ambildata)) {
		echo "
		<tr>
			<td>$no</td>
			<td> $tampil[id_transaksi]</td>
			<td> $tampil[tgl]</td>
			<td> $tampil[keterangan]</td>
			<td>  $tampil[obat_masuk]</td>
			<td>  $tampil[obat_keluar]</td>
			<td>  $tampil[sisa]</td>
			<td>  $tampil[pelaksana]</td>
		</tr>";

		$no++;

		}
		?>