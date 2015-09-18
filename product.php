<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>


<link href="bootstrap.min.css" rel="stylesheet" type="text/css" />
<link href="dataTables.bootstrap.css" rel="stylesheet" type="text/css" />

<script type="text/javascript" language="javascript" src="jquery-1.10.2.min.js"></script>

<script type="text/javascript" language="javascript" src="jquery.dataTables.min.js"></script>


<script type="text/javascript" language="javascript" src="dataTables.bootstrap.js"></script>

<!-- Pembuatan id untuk tabel -->
<script type="text/javascript">
$(document). ready(function(){
	$('#tampil').dataTable();
})
</script>
</head>

<body>
<p>Galery Product</p>
<table width="100%" border="1" cellspacing="0" cellpadding="3" id="tampil" class="table table-bordered">
  <thead>
  <tr>
    <td>Nama</td>
    <td>Harga</td>
    <td>Info/Spesifikasi</td>
    <td>Gambar</td>
    <td>Order</td>
  </tr> 
  </thead>
  
  <tbody>
  <?php 
  //panggil koneksi
  include "koneksi.php";
  //perintah query
  $query=mysql_query("SELECT nama, harga, info, gambar FROM tbl_barang");
  //perulangan menampilkan data
  while($data=mysql_fetch_array($query)){
  
  ?>
  <tr>
    <td> <?php echo $data['nama'] ?></td>
    <td> <?php echo $data['harga'] ?></td>
    <td> <?php echo $data['info'] ?></td>
    <td><img src="admin/gambar/<?php echo $data['gambar'] ?>" width="100%" height="120" /></td>
    <td>Order</td>
  </tr>
  <?php
  }
  ?>
  </tbody>
</table>
<p>&nbsp;</p>
</body>
</html>