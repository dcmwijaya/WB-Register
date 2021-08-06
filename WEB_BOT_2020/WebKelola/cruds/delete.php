<?php 
include '../config/config.php';
include '../config/url_config.php';

if(isset($_POST['deletedata'])){
		$id = $_POST['delete_id'];

		$query = mysqli_query($conn,"DELETE FROM registrasi WHERE id='$id' ");

		if($query && $conn != null){
			$query = mysqli_query($conn,"SET @num := 0");
			$query = mysqli_query($conn,"UPDATE registrasi SET id = @num := (@num+1)");
			$query = mysqli_query($conn,"ALTER TABLE registrasi AUTO_INCREMENT =1");
			header("Location: $url/WEB_BOT_2020/WebKelola/index.php");
		}
		else{
			header("Location: $url/WEB_BOT_2020/WebKelola/index.php");
		}
}

?>