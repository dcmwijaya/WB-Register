<?php include 'config/config.php';

$jumlah = mysqli_num_rows(mysqli_query($conn,"SELECT * FROM registrasi"));
?>