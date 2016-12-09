 <?php
//by ritaseptitantia
 require_once('lib/DBCLASS.php');
 require_once('lib/m_siswa.php');
 
 if(!isset($_POST['kirim'])){
	 exit ('Access Forbiden');
	 
 }
 $siswa = new Siswa();
 if($_FILES['in_foto']['error']==0){
 
if(!copy($_FILES['in_foto']['tmp_name'], 'img/'.$_POST['in_nis'].'.png')){
	exit('Error Upload FIle');
	}
 }
	$data ['input_name'] = $_POST ['in_name'];
	$data ['input_email'] = $_POST ['in_email'];
	$data ['input_nationality'] = $_POST ['in_nation'];
	$data ['foto'] ='img/'.$_POST['in_nis'].'.png';
	
	$siswa->updateSiswa($_POST['in_nis'], $data);
	
	echo"Data siswa berhasil diupdate <br />";
	echo"<a href='usiswa.php?a=".$_POST['in_nis']."'>Detail Siswa </a>"
 ?>
