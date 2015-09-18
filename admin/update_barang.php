<?php
include"../koneksi.php";

$kode=$_REQUEST['txt_kode'];
$nama = $_REQUEST['txt_nama'];
$harga = $_REQUEST['txt_harga'];
$info = $_REQUEST['txt_info'];
$gambar = $_FILES['file_gambar']['name'];

$pindah = move_uploaded_file($_FILES['file_gambar']['tmp_name'],'gambar/'.$gambar);

$update = mysql_query("update tbl_barang set nama='$nama', harga='$harga',info='$info', gambar='$gambar'  where kode='$kode'");

if($update){
	echo "Data Berhasil Dirubah";
}else{
	echo " Data Tidak Berhasil Dirubah";
}



?>
	<script>
	alert('Data Berhasil di Simpan');
	location.href ='view.php';
	</script>
<?php

?>