<?php 
include '../config/config.php';
include '../config/url_config.php';

if(isset($_POST['updatedata'])){
		$id = $_POST['update_id'];
		$nama = $_POST['nama'];
		$email = $_POST['email'];
		$pstudi = $_POST['pstudi'];
		$telp = $_POST['telp'];
		$divisi = $_POST['divisi'];

		$query = mysqli_query($conn,"UPDATE registrasi SET nama='$nama', email='$email', pstudi='$pstudi', telp='$telp', divisi='$divisi' WHERE id='$id' ");

		if($query && $conn != null){
			header("Location: $url/Bot-Website-Register/index.php");
		}
		else{
			header("Location: $url/Bot-Website-Register/index.php");
		}
}

?>