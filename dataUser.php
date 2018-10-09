<form action="" method="POST">
	<body bgcolor="#aac4e7">
		<center>
			<br>
			<h3> <font face="Verdana"><font color="white"> Data User </font></font></h3>
	</body>
</form>


<?php 
	include 'ulep.php';

	if(isset($_POST['login'])){
 		$nama = $_POST['nama'];
 		$nim = $_POST['nim'];
 		$kelas = $_POST['kelas'];
 		$jk = $_POST['jk'];
 		$hobi = $_POST['hobi'];
 		$fakultas = $_POST['fakultas'];
 		$alamat = $_POST['alamat'];

 	echo "<table bgcolor=#ffb6ae><br>
 			<tr bgcolor=#dfdbf9><td>Nama</td>
 			<td> NIM </td>
 			<td> Kelas </td>
 			<td> Jenis Kelamin </td>
 			<td> Hobi </td>
 			<td> Fakultas </td>
 			<td> Alamat </td></tr>";
 	echo "<tr bgcolor=#dfdbf9><td>Nama</td>
 			<td>".$nama."</td>
 			<td>".$nim."</td>
 			<td>".$kelas."</td>
 			<td>".$jk."</td>
 			<td>".$hobi."</td>
 			<td>".$fakultas."</td>
 			<td>".$fakultas."</td>
 			</tr>";
 		}
 	?>