<?php
session_start();
mysql_connect ('localhost','root','') or die (mysql_error ());
mysql_select_db ('db_si12c');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel='shortcut icon' type='image icon' href='../../images/pln.jpg'/>
<title>db_si12c</title>
</head>

<body>
<div class='container-fluid' style='margin-top:20px;'>

	<div class='row-fluid'>

    <div class="span10">
    <div class='well' fixed center;'>

<p style='margin-top:10px'>
		
<?php
			// inisialisasi bagian WHERE dari query pencarian			
			echo "<table><tr> 
			<td>
			<center><p>
			<h3><big> view </big></h3>
			</p></center>
        
			
			</td></tr> </table><br>";

			// query untuk mencari file berdasarkan kategori
			$query = 	"SELECT * FROM tbl_pembeli WHERE tbl_pembeli.no_faktur=no_faktur";
			$hasil = mysql_query($query) or die(mysql_Error());

			
		 echo "<center><table class='class='list' width='100%' border='1'>";
		  echo"<tr>
		    	<th>No</th>
		    	
	<th>no_faktur</th>
	<th>nama_pembeli</th>
	<th>tanggal</th>
	<th>kode</th>
	<th>jumlah_beli</th>
	<th>gambar</th>
	<th>total</th>
	      </tr>";

			$no=1;
			while ($data = mysql_fetch_array($hasil)){
			echo"<tr>
		      <td height='35' class='left' align='center'>".$no.". </td>
		<td>".$data['no_faktur']."</td>
		<td>".$data['nama_pembeli']."</td>
		<td>".$data['tanggal']."</td>
		<td>".$data['kode']."</td>
		<td>".$data['jumlah_beli']."</td>
		<td>".$data['gambar']."</td>
		<td>".$data['total']."</td>
		
			 </tr>";
			$no++;
			
			 
			} 
			echo "</table></center>"; 
			   
			 $vw="<script language=javascript> 
			 function prints() { 
			 bV = parseInt(navigator.appVersion); 
			 if (bV >= 4) window.print();} 
			 prints(); 
			 </script>"; 
			 echo $vw; 
?>
		
	</div>
    </div>
</div>
</body>
</head>
</html>

