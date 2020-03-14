<html>
<head>
<title>Rest Web Services</title>
</head>
<body>
<?php
if (isset ($_POST['nama'])) {
$url = 'https://kahf13.000webhostapp.com/pkl2.php';
//$data = "[{\"nama\":\".$_POST['nama'].\",\"pengasuh\":\".$_POST['pengasuh'].\",\"alamat\":\".$_POST['alamat'].\",\"kontak\":\".$_POST['kontak'].\"}]";//
$data="{\"nama\":\"".$_POST['nama']."\",\"pengasuh\":\"".$_POST['pengasuh']."\",\"alamat\":\"".$_POST['alamat']."\",\"kontak\":\"".$_POST['kontak']."\"}";
echo "datanya ".$data;
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
$response = curl_exec($ch);
echo "response ".$response;
curl_close($ch);
}
?>
<form method="POST" action="tambahpkl1.php">
<table>
<tr>
<td>Nama Panti</td>
<td><input type="text" name="nama" id="nama"></td>
</tr>
<tr>
<td>Nama Pengasuh</td>
<td><input type="text" name="pengasuh" id="pengasuh"></td>
</tr>
<tr>
<td>Alamat</td>
<td><input type="text" name="alamat" id="alamat"></td>
</tr>
<tr>
<td>Kontak</td>
<td><input type="text" name="kontak" id="kontak"></td>
</tr>
<tr>
<tr>
<td><input type="submit" name="submit" id="submit" value="Tambah"></td>
<td></td>
</tr>
</table>
</form>
</body>
</html>