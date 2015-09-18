<?php
$kode = $_REQUEST['kode'];

echo $kode;

include"../koneksi.php";

$hapus=mysql_query("delete from tbl_barang where kode = '$kode'");

if($hapus){
	echo "data terhapus";
}else{
	echo "data gagal terhapus";
}

?>
	<script>
	alert('Data Berhasil di hapus');
	location.href ='view.php';
	</script>
<?php

?>