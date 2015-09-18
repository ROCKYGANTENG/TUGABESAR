<?php
include"koneksi.php";
{
$kode = $_REQUEST['kode'];
$nama = $_REQUEST['nama'];
$harga = $_REQUEST['harga'];
$produk = $_REQUEST['produk'];
$ukuran = $_REQUEST['ukuran'];
$info = $_REQUEST['info'];
$jumlah = $_REQUEST['jumlah'];
$filegambar = $_FILES['file_gambar']['name'];


$pindah = move_uploaded_file($_FILES['file_gambar']['tmp_name'],'gambar/'.$filegambar);

$simpan = mysql_query("insert into tbl_barang values('$kode','$nama','$harga','$produk','ukuran','$info','$jumlah','$filegambar')")or die ("Simpan Error");



?>
	<script>
	alert('Data Berhasil di Simpan');
	location.href ='from_input_barang.php';
	</script>
<?php
}
?>


