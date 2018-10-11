<?php
	include "koneksi.php";
	$no = $_POST['no'];
	$nama = $_POST['nama'];
	$nim = $_POST['nim'];
	$kelas = $_POST['kelas'];
	$gender = $_POST['gender'];
	$hobi = $_POST['hobi'];
	$fakultas = $_POST['fakultas'];
	$alamat = $_POST['alamat'];

	$query = "UPDATE mahasiswa SET nama='$nama', nim='$nim', kelas='$kelas', gender='$gender', hobi='$hobi', fakultas = '$fakultas', alamat='$alamat'";
	$hasil = mysqli_query($query);
	if ($hasil) {
		include "aksi.php";
		echo "Edit Data Sukses";
	}