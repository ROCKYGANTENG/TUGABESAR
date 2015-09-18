<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<style type="text/css">
<!--
body,td,th {
	color: #660033;
}
body {
	background-color: #0000FF;
}
.style1 {color: #FFFFFF}
-->
</style></head>

<body>
<form action="s_penjualan.php" method="post" enctype="multipart/form-data" name="form1" id="form1">
  <div align="center">
    <p>from penjualan</p>
    <table width="56%" height="196" border="1" cellpadding="0" cellspacing="0">
      <tr>
        <td width="50%"><div align="center" class="style1">no faktur </div></td>
        <td width="50%"><label>
          <div align="center">
            <input name="no_faktur" type="text" id="no_faktur" />
            </div>
        </label></td>
      </tr>
      <tr>
        <td><div align="center" class="style1">nama pembeli </div></td>
        <td><label>
          <div align="center">
            <input name="nama_pembeli" type="text" id="nama_pembeli" />
            </div>
        </label></td>
      </tr>
      
      <tr>
        <td><div align="center" class="style1">kode</div></td>
        <td><label>
          <div align="center">
            <input name="kode" type="text" id="kode" />
          </div>
        </label></td>
      </tr>
      <tr>
        <td><div align="center" class="style1">jumlah beli </div></td>
        <td><label>
          <div align="center">
            <input name="jumlah_beli" type="text" id="jumlah_beli" />
            </div>
        </label></td>
      </tr>
      <tr>
        <td><div align="center" class="style1">file gambar </div></td>
        <td><label>
          <div align="center">
            <input name="file_gambar" type="file" id="file_gambar" />
            </div>
        </label></td>
      </tr>
      <tr>
        <td><div align="center" class="style1">total</div></td>
        <td><label>
          <div align="center">
            <input name="total" type="text" id="total" />
            </div>
        </label></td>
      </tr>
      <tr>
        <td><label>
          <div align="center">
            <input name="s_penjualan" type="submit" id="s_penjualan" value="simpan" />
            </div>
        </label></td>
        <td><label>
          <div align="center">
            <input name="reset" type="reset" id="reset" value="Reset" />
            </div>
        </label></td>
      </tr>
    </table>
    <p>&nbsp;</p>
  </div>
</form>
</body>
</html>
