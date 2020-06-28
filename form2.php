<!DOCTYPE html>
<html>
<head>
	<title>Soal nomor.2</title>
	<h1>Soal Nomor 2</h1>
	<style type="text/css">
		h1 {text-align: center;}
		table {width: 500px; margin: auto;}
	</style>
	
		
	
</head>
<body>
	<table border="1">
		<tr>
	<td>NAMA </td>
	<td><input type="text" name="nama"value="<?=isset($_POST['nama']) ? $_POST['nama'] : ''?>"/></td>
		</tr>
		<tr>
	<td>ID pegawai </td>
	<td><input type="text" name="ID" value="<?=isset($_POST['ID']) ? $_POST['ID'] : ''?>"/></td>
		<tr>
	<td>JENIS KELAMIN </td>
	<td><input type="radio" name="Jk" value="<?=isset($_POST['jk']) ? $_POST['jk'] : ''?>"/> Laki-Laki
					<input type="radio" name="jk" value="<?=isset($_POST['jk']) ? $_POST['jk'] : ''?>"/> perempuan
					</td>
		</tr>
	<td>Departemen </td>
	<td><select name="Departemen">
		<option value="<?=isset($_POST['r&d']) ? $_POST['r&d'] : ''?>"/>R&D</option>
		<option value="<?=isset($_POST['Purchasing']) ? $_POST['Purchasing'] : ''?>"/>Purchasing</option>
		<option value="<?=isset($_POST['GA']) ? $_POST['GA'] : ''?>"/>GA</option>
		<option value="<?=isset($_POST['HRD']) ? $_POST['HRD'] : ''?>"/>HRD</option>
	</select>
		</td>
		</tr>
		<tr>

	<td>Jabatan </td>
	<td><input type="checKbox" name="Jabatan" value="<?=isset($_POST['pns']) ? $_POST['pns'] : ''?>"/>PNS
			<input type="checKbox" name="pekerjaan" value="<?=isset($_POST['Supervivor']) ? $_POST['Supervivor'] : ''?>"/>Supervivor
			<input type="checKbox" name="pekerjaan" value="<?=isset($_POST['Senior']) ? $_POST['Senior'] : ''?>"/>Senior Manager
			<input type="checKbox" name="pekerjaan" value="<?=isset($_POST['Senior']) ? $_POST['Senior'] : ''?>"/>Senior Staf
			<input type="checKbox" name="pekerjaan" value="<?=isset($_POST['Manager']) ? $_POST['Manager'] : ''?>"/>Manager
			<input type="checKbox" name="pekerjaan" value="<?=isset($_POST['Manager']) ? $_POST['Manager'] : ''?>"/>staf
			</td>
			</tr>
			<tr>
	<td>Tanggal Masuk </td>
	<td><input type="date" name="tanggal" value="<?=isset($_POST['date']) ? $_POST['date'] : ''?>"/></td>
	<td><input type="submit" name="submit" value="Simpan"/></td>
		</tr>
		<tr>
</table>
<?php
if (isset($_POST['submit'])) {
	echo 'Nama Anda  : ' . $_POST['nama'] . '<br/>';
	echo 'Id pegawai : ' . $_POST['ID'] . '<br/>';
	echo 'Jenis Kelamin  : ' . $_POST['jk'] . '<br/>';
	echo 'Departemen  : ' . $_POST['departemen'] . '<br/>';
	echo 'Jabatan  : ' . $_POST['jabatan'] . '<br/>';
	echo 'tanggal masuk : ' . $_POST['date'];
}?>
</body>

</html>