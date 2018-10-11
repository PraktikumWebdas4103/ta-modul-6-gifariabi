<?php
	include "koneksi.php";
	if (isset($_POST['submit'])) {
		$nama = $_POST['nama'];
		$nim = $_POST['nim'];
		$kelas = $_POST['kelas'];
		$gender = $_POST['gender'];
		$hobi = $_POST['hobi'];
		$fakultas = $_POST['fakultas'];
		$alamat = $_POST['alamat'];
		$password = md5($_POST['password']);

		$a = strlen($nama);
		$n = strlen($nim);

		
			if ($a > 35) {
				echo "Data max 35 karakter<br>";
			}
			if ($n != 10) {
				echo "Data harus 10 digit";
			}
		

		
			$sql = "INSERT INTO mahasiswa SET nama='".$nama."',nim='".$nim."',kelas='".$kelas."',gender='".$gender."',hobi='".$hobi."',fakultas='".$fakultas."',alamat='".$alamat."',password='".$password."'";
			mysqli_query($con,$sql);
			if ($sql) {
				echo "Data Berhasil disimpan";
			}
			else{
				echo "Data Tidak berhasil";
			}
			$query = mysqli_query($con, "SELECT * FROM mahasiswa ORDER BY nama DESC");
		}
	?>
	<table border="1">
		<tr>
			<th>No</th>
			<th>nama</th>
			<th>nim</th>
			<th>kelas</th>
			<th>gender</th>
			<th>hobi</th>
			<th>fakultas</th>
			<th>alamat</th>
			<th>Bantuan</th>
		</tr>
		<?php if(mysqli_num_rows($query)>0){ ?>
		<?php 
			$no=1;
			while ($data = mysqli_fetch_assoc($query)) {
		 ?>
		 <tr>
		 	<td><?php echo $no;?></td>
		 	<td><?php echo $data["nama"];?></td>
		 	<td><?php echo $data["nim"];?></td>
		 	<td><?php echo $data["kelas"];?></td>
		 	<td><?php echo $data["gender"];?></td>
		 	<td><?php echo $data["hobi"];?></td>
		 	<td><?php echo $data["fakultas"];?></td>
		 	<td><?php echo $data["alamat"];?></td>
		 	<td>
		 		<a href="editprofile.php">Edit</a>
		 	</td>
		 </tr>
		 <?php $no++; }?>
		 <?php } ?>
	</table>