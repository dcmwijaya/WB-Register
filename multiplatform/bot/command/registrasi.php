<?php 
require_once 'database/configDB.php';


function registrasi($nama, $email, $pstudi, $telp, $divisi){

    $registrasi = "INSERT INTO registrasi (id, nama, email, pstudi, telp, divisi) VALUES ('','$nama','$email','$pstudi','$telp','$divisi')";
    $result  = mysqli_query(connDB(), $registrasi);

    if ($result) {
    	$message = "✅ Berhasil registrasi";
    }
    else{
    	$message = "❎ Gagal registrasi adanya kesalahan";
    }
    
    return $message;
}

?>