<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link href="Assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<link href="Assets/font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
body {
	background-color: #CCCCFF;
}
-->
</style></head>

<body>
<?php
$kode =$_REQUEST['kode'];

echo $kode;
include"../koneksi.php";

$query = mysql_query("select * from tbl_barang where kode = '$kode'");
$data=mysql_fetch_array($query);



?>

<table width="55%" height="230" border="1" align="center" cellpadding="3" cellspacing="0">
  <tr>
    <td><div align="center"><i class="fa fa-edit fa-2x"></i>Form Edit Barang</div></td>
  </tr>
  <tr>
    <td><form action="update_barang.php" method="post" enctype="multipart/form-data" name="form1" id="form1">
      <div align="center">
        <table width="100%" border="1" cellspacing="0" cellpadding="3">
          <tr>
            <td width="21%">Kode Barang</td>
              <td width="79%"><input name="txt_kode" type="text" id="txt_kode" value="<?php echo $data['kode'] ?>" readonly="readonly" /></td>
            </tr>
          <tr>
            <td>Nama Barang</td>
              <td><input name="txt_nama" type="text" id="txt_nama" value="<?php echo $data['nama'] ?>" size="30" maxlength="30" /></td>
            </tr>
          <tr>
            <td>Harga</td>
              <td><input name="txt_harga" type="text" id="txt_harga" value="<?php echo $data['harga'] ?>" /></td>
            </tr>
          <tr>
            <td>Info</td>
              <td><textarea name="txt_info" id="txt_info" cols="45" rows="5"><?php echo $data['info'] ?></textarea></td>
            </tr>
          <tr>
            <td>File Gambar</td>
              <td><input type="file" name="file_gambar" id="filefield" value="<?php echo $data['gambar'] ?>" /></td>
            </tr>
          <tr>
            <td colspan="2"><input type="submit" name="button" id="button" value="Submit" /> <input type="submit" name="button2" id="button2" value="Reset" /></td>
            </tr>
        </table>
      </div>
    </form></td>
  </tr>
</table>
</body>
</html>