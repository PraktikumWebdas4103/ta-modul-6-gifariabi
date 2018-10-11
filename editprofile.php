<?php
	include 'koneksi.php';
	$no = $_GET['no'];
	$query = "SELECT * FROM mahasiswa WHERE no=$no";
	$hasil = mysqli_query($query);
	$data = mysqli_fetch_query($hasil);
?>
<form action="prosesedit.php" method="POST">
	<table width="500" border="0">
		<tr>
			<td height="21" colspan="7">
				<strong>Form edit</strong>
			</td>
		</tr>
		<tr>
			<td>Nama</td>
			<td>:</td>
			<td><input type="text" name="nama"></td>
		</tr>
		<tr>
			<td>NIM</td>
			<td>:</td>
			<td><input type="text" name="nim"></td>
		</tr>
		<tr>
			<td>Kelas</td>
			<td>:</td>
			<td><input type="radio" name="kelas" value="D3MI41-01" checked>D3MI41-01<br><input type="radio" name="kelas" value="D3MI41-02">D3MI41-02<br><input type="radio" name="kelas" value="D3MI41-03">D3MI41-03<br><input type="radio" name="kelas" value="D3MI41-04">D3MI41-04</td>
		</tr>
		<tr>
			<td>Jenis Kelamin</td>
			<td>:</td>
			<td><input type="radio" name="gender" value="male">Male<br><input type="radio" name="gender" value="female">Female<br><input type="radio" name="gender" value="other">Other</td>
		</tr>
		<tr>
			<td>Hobi</td>
			<td>:</td>
			<td><input type="checkbox" name="hobi" value="Sepeda">Sepeda<br><input type="checkbox" name="hobi" value="Futsal">Futsal</td>
		</tr>
		<tr>
			<td>Fakultas</td>
			<td>:</td>
			<td><select name="fakultas">
				<option value="fit">FIT</option>
				<option value="fri">FRI</option>
				<option value="feb">FEB</option>
				<option value="fkb">FKB</option>
			</select></td>
		</tr>
		<tr>
			<td>Alamat</td>
			<td>:</td>
			<td><input type="textarea" name="alamat"></td>
		</tr>
		<tr>
			<td>Password</td>
			<td>:</td>
			<td><input type="password" name="password"></td>
		</tr>
		<tr>
			<td></td>
			<td></td>
			<td><input type="hidden" name="no" value="<?php echo $data['no']; ?>">
				<input type="submit" name="submit" value="Daftar"><input type="reset" value="Batal"></td>
		</tr>
	</table>
</form>
