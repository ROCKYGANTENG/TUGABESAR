
<?php
include "koneksi.php";
if (isset($_POST['s_penjualan']))

{	
	$no_faktur = $_REQUEST['no_faktur'];
	$nama_pembeli = $_REQUEST['nama_pembeli'];
	$tanggal = $_REQUEST['tanggal'];
	$kode = $_REQUEST['kode'];
	
	$jumlah_beli = $_REQUEST['jumlah_beli'];
	$filegambar= $_FILES['file_gambar']['name'];
	$total = $_REQUEST['total'];
	
$PINDAH= move_uploaded_file($_FILES['file_gambar']
['tmp_name'],'gambar/'.$filegambar);
	
	mysql_query("insert into tbl_pembeli 
	values ('$no_faktur', '$nama_pembeli', '$tanggal','$kode','$jumlah_beli','$filegambar','$total')") or die ("Simpan Error");
	

?>
	<script>
	alert('Data Berhasil di Simpan');
	location.href ='view_penjualan.php';
	</script>
<?php
}
?>