<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>rocky</title>

<link href="../datatables/bootstrap.min.css" rel="stylesheet" type="text/css" />
<link href="../datatables/dataTables.bootstrap.css" rel="stylesheet" type="text/css" />

<script type="text/javascript" language="javascript" src="../jquery-1.10.2.min.js"></script>


<script type="text/javascript" language="javascript" src="../jquery.dataTables.min.js"></script>


<script type="text/javascript" language="javascript" src="../dataTables.bootstrap.js"></script>

<!-- Pembuatan id untuk tabel -->
<script type="text/javascript">
$(document). ready(function(){
	$('#tampil').dataTable();
})
</script>
<link href="Assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<link href="Assets/font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
</head>

<body>
<table width="100%" border="1" cellspacing="0" cellpadding="3">
  <tr>
    <td><i class="fa fa-folder fa-2x"></i>Data Barang</td>
  </tr>
  <tr>
    <td height="201"><table width="100%" border="1" cellspacing="0" cellpadding="3"id="tampil" class="table table-bordered">
	<thead>
      <tr>
        <td>Kode</td>
        <td>Nama</td>
        <td>Harga</td>
        <td>Info</td>
        <td>Gambar</td>
        <td>Action</td>
      </tr>
	  <thead>
	  <tbody>
      
      <?php
	  include "koneksi.php";
	  $query = mysql_query("select *from tbl_barang");
	  
	  while($data = mysql_fetch_array($query)){
	  
	  
	  ?>
      
      
      <tr>
        <td height="141"><?php echo $data['kode'] ?></td>
        <td><?php echo $data['nama'] ?></td>
        <td><?php echo $data['harga'] ?></td>
        <td><?php echo $data['info'] ?></td>
        <td><img src="gambar/<?php echo $data['gambar'] ?>" width="100%" height="100" /></td>
        <td><a href="hapus_barang.php?kode=<?php echo $data['kode'] ?>">Hapus</a> -<a href="edit.php?kode=<?php echo $data['kode'] ?>" target="isi"> Edit</a></td>
      </tr>
      <?php
	  
	  }
	  
	  ?>
      
      
      
    </table></td>
  </tr>
</table>
</body>
</html>