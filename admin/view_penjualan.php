
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<style type="text/css">
<!--
body,td,th {
	color: #000000;
}
body {
	background-color: #FFFFFF;
}
.style1 {color: #000000}
.style2 {color: #0000CC}
.style3 {color: #0000FF}
-->
</style></head>

<body>
<table width="100%" border="1" cellspacing="0" cellpadding="3">
  <tr>
    <td><div align="center" class="style2">data barang penjualan</div></td>
  </tr>
  <tr>
    <td><table width="100%" border="1" cellspacing="0" cellpadding="3">
      <tr>
        <td bgcolor="#FF0000"><div align="center" class="style2">no faktur</div></td>
        <td bgcolor="#FF0000"><div align="center" class="style1">nama pembeli</div></td>
        <td bgcolor="#FF0000"><div align="center" class="style1">kode</div></td>
        <td bgcolor="#FF0000"><div align="center" class="style3">jumlah beli</div></td>
        <td bgcolor="#FF0000"><div align="center" class="style3">gambar</div></td>
		<td bgcolor="#FF0000"><div align="center" class="style1">total</div></td>
        </tr>
<?php	
include "koneksi.php";
$query=mysql_query ("select*from tbl_pembeli");
while($data=mysql_fetch_array ($query)){

?>
	  
      <tr>
        <td align="center"><?php echo $data ['no_faktur']?></td>
        <td align="center"><?php echo $data ['nama_pembeli']?></td>
        <td align="center"><?php echo $data ['kode']?></td>
        <td align="center"><?php echo $data ['jumlah_beli']?></td>
        <td><div align="center"><img src="gambar/<?php echo $data['gambar']?>" width="100" height="100" /></div></td>
		<td align="center">Rp <?php echo $data ['total']?></td>
      </tr>
	  <?php
	  }
?>
    </table></td>
  </tr>
</table>
<form id="form1" name="form1" method="post" action="cetak_penjulan.php">
  <div align="right">
    <input name="PRINT" type="submit" id="PRINT" value="PRINT" />
  </div>
  <div align="right"><a href="INDEX.PHP" target="ISI">back to home</a>
  </div>
</form>
</body>
</html>
