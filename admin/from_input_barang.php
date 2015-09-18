<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Rocky M Nopiansyah</title>
<style type="text/css">
<!--
body,td,th {
	color: #000000;
}
body {
	background-color: #000000;
}
-->
</style></head>

<body>
<form action="simpan.php" method="post" enctype="multipart/form-data" name="form1" id="form1">
  <div align="center">from penjualan
    <table width="55%" height="475" border="10" cellpadding="5" cellspacing="0">
      <tr>
        <td width="49%" bgcolor="#FFCCFF"><div align="center">kode</div></td>
        <td width="51%" bgcolor="#FFFFFF"><label>
          <div align="center">
            <input name="kode" type="text" id="kode" />
          </div>
        </label></td>
      </tr>
      <tr>
        <td bgcolor="#FFCCFF"><div align="center">nama</div></td>
        <td bgcolor="#FFFFFF"><label>
          <div align="center">
            <input name="nama" type="text" id="nama" />
          </div>
        </label></td>
      </tr>
      
      
      
      <tr>
        <td bgcolor="#FFCCFF"><div align="center">info</div></td>
        <td bgcolor="#FFFFFF"><label>
          <div align="center">
            <textarea name="info" id="info">
            </textarea>
          </div>
        </label></td>
      </tr>
      
      <tr>
        <td bgcolor="#FFCCFF"><div align="center">file gambar</div></td>
        <td bgcolor="#FFFFFF"><label></label>
          <label></label><div align="center">
            <label></label>
            <label>
            <input name="file_gambar" type="file" id="file_gambar" />
            </label>
        </div></td>
      </tr>
      <tr>
        <td colspan="2" bgcolor="#0000FF"><label>
          
          <div align="center">
            <input name="simpan" type="submit" id="simpan" value="simpan" />
          </div>
        </label></td>
      </tr>
    </table>
    <p><img src="../../apache_pb2.png" width="727" height="73" /></p>
  </div>
</form>
</body>
</html>
