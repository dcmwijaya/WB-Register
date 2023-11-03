<?php 
include 'config/config.php';

$inputsrdata = @$_POST['inputsrdata'];
$searchdata = @$_POST['searchdata'];

if($searchdata){
	if($inputsrdata != ""){
		$query = mysqli_query($conn,"SELECT * FROM registrasi WHERE nama like '%$inputsrdata%' OR email like '%$inputsrdata%' OR pstudi like '%$inputsrdata%' OR telp like '%$inputsrdata%' OR divisi like '%$inputsrdata%'") OR die(mysql_error());
	}else{
		$query = mysqli_query($conn,"SELECT * FROM registrasi") OR die(mysql_error());
	}
}else{
	$query = mysqli_query($conn,"SELECT * FROM registrasi") OR die(mysql_error());
}