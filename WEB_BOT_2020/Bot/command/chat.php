<?php  

namespace ChatTele;

require_once 'database/configDB.php';

date_default_timezone_set('Asia/Jakarta');

function checkDataUser($id_user) {
    $check    = "SELECT * FROM pengakses WHERE id_user = $id_user LIMIT 1";
    $result        = mysqli_query(connDB(), $check);
    return (object) mysqli_fetch_assoc($result);
}

function getDataUser($user) {
    $data   = [
        "id_user"   		=> 	$user->getId(),
        "nama"      		=> 	$user->getFirstName()
    ];
    return (object) $data;
}

function insertNewUser($dataUser) {
    $NewUser    = "INSERT INTO pengakses (id_user, nama) VALUES ($dataUser->id_user, '$dataUser->nama')";
    mysqli_query(connDB(), $NewUser);
}



?>