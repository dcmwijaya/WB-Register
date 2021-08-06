<?php 
include '../config/config.php';
include '../config/url_config.php';

if(isset($_POST['insertdata'])){
		$nama = $_POST['nama'];
		$email = $_POST['email'];
		$pstudi = $_POST['pstudi'];
		$telp = $_POST['telp'];
		$divisi = $_POST['divisi'];

		$query = mysqli_query($conn,"INSERT INTO registrasi VALUES ('','$nama','$email','$pstudi','$telp','$divisi')");

		if($query && $conn != null){
			header("Location: $url/WEB_BOT_2020/WebKelola/index.php");
		}
		else{
			header("Location: $url/WEB_BOT_2020/WebKelola/index.php");
		}
}

?>