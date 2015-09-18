<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link href="Assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<link href="Assets/font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
</head>

<body>
<table width="100%" border="1" cellspacing="0" cellpadding="3">
  <tr>
    <td><i class="fa fa-pencil fa-2x"></i>Form Input Barang</td>
  </tr>
  <tr>
    <td><form action="simpan.php" method="post" enctype="multipart/form-data" name="form1" id="form1">
      <table width="100%" border="1" cellspacing="0" cellpadding="3">
        <tr>
          <td width="21%">Kode Barang</td>
          <td width="79%"><input type="text" name="txt_kode" id="txt_kode" /></td>
        </tr>
        <tr>
          <td>Nama Barang</td>
          <td><input name="txt_nama" type="text" id="txt_nama" size="30" maxlength="30" /></td>
        </tr>
        <tr>
          <td>Harga</td>
          <td><input type="text" name="txt_harga" id="txt_harga" /></td>
        </tr>
        <tr>
          <td>Info</td>
          <td><textarea name="txt_info" id="txt_info" cols="45" rows="5"></textarea></td>
        </tr>
        <tr>
          <td>File Gambar</td>
          <td><input type="file" name="file_gambar" id="file_gambar" /></td>
        </tr>
        <tr>
          <td colspan="2"><input type="submit" name="button" id="button" value="Submit" /> <input type="submit" name="button2" id="button2" value="Reset" /></td>
          </tr>
      </table>
    </form></td>
  </tr>
</table>
</body>
</html>