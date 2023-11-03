<?php

use BotMan\BotMan\BotMan;
use BotMan\BotMan\BotManFactory;
use BotMan\BotMan\Drivers\DriverManager;
use BotMan\Drivers\Telegram\TelegramDriver;
use BotMan\BotMan\Messages\Attachments\Image;
use BotMan\BotMan\Messages\Attachments\Video;
use BotMan\BotMan\Messages\Outgoing\OutgoingMessage;

require_once 'vendor/autoload.php';
require_once 'database/configDB.php';

$configs = [
    "telegram" => [
        "token" => file_get_contents("private/token.txt")
    ]
];

DriverManager::loadDriver(TelegramDriver::class);

$botman = BotManFactory::create($configs); 

// Command no @ to bot
$botman->hears("/start", function (BotMan $bot) {
    $user = $bot->getUser();
    $firstname = $user->getFirstName();
    $lastname = $user->getLastName();
    $id_user = $user->getId();

    $bot->reply("Selamat Datang 💁‍♂️\nDi Layanan Registrasi Online 📝\nAnggota Baru Robotics Community 🤖\n\nYth. Atas Nama :\n------------------------------------------------------------\n🤵 $firstname $lastname\n🆔 $id_user\n------------------------------------------------------------\n\nKetikkan perintah /help untuk mengetahui menu yang tersedia");
    include "command/RecordPengakses.php";
});

$botman->hears("/help", function (Botman $bot) {
    $user = $bot->getUser();
    $firstname = $user->getFirstName();
    $id_user = $user->getId();
    
    $bot->reply("/informasi 🔵 Seputar informasi");
    $bot->reply("/registrasi 🔵 Daftar anggota baru");
});

$botman->hears("/informasi", function (BotMan $bot) {
    $user = $bot->getUser();
    $firstname = $user->getFirstName();
    $id_user = $user->getId();
    $bot->reply("🤖 Seputar informasi\n------------------------------------------------------------\nRobotics Community adalah komunitas yang bergerak di bidang riset robotika, IoT (Internet of Things) dan segala hal yang berkaitan dengan pendalaman ilmu pengetahuan di bidang elektronika, mekanika, komunikasi, manajemen, dan perangkat lunak komputer.\n------------------------------------------------------------\n\n\n📝 History\n------------------------------------------------------------\nPada awalnya komunitas ini bernama 'Robotic Research Group', namun pada awal November 2017 berganti nama menjadi 'Robotics Community', Bermula dari obrolan mengenai robot, akhirnya beberapa dosen dan mahasiswa memutuskan untuk membuat grup guna mempertemukan para peminat robotika. Forum ini diciptakan tak hanya khusus penggemar robot, namun juga semua orang yang tertarik dan ingin belajar\n------------------------------------------------------------\n\n\n📞 Narahubung\n------------------------------------------------------------\nInstagram : bit.ly/robotics_upnjatim\nLine : @szl5114b\n------------------------------------------------------------\n");
});

$botman->hears("/registrasi", function (BotMan $bot) {
    $user = $bot->getUser();
    $firstname = $user->getFirstName();
    $id_user = $user->getId();

    $bot->reply("🤖 Divisi Robotics Community\n===============================\n1. MENFO\n2. MEKATRONIKA\n3. PROGRAM\n===============================\n\n✍️ Format registrasi anggota baru\n------------------------------------------------------------\n/reg NAMA_EMAIL_STUDI_TLP_DIVISI\n------------------------------------------------------------\n\n📝 Contoh\n------------------------------------------------------------\n/reg ABI_abi@gmail.com_INFORMATIKA_085775424472_MENFO\n------------------------------------------------------------\n\nSilahkan mendaftar sekarang sesuai dengan format diatas..");
});

$botman->hears("/reg {nama}_{email}_{pstudi}_{telp}_{divisi}", function (Botman $bot, $nama, $email, $pstudi, $telp, $divisi) {
    $user = $bot->getUser();
    $firstname = $user->getFirstName();
    $id_user = $user->getId();
    
    $nama = $nama;
    $email = $email;
    $pstudi = $pstudi;
    $telp = $telp;
    $divisi = $divisi;
    
    include "command/registrasi.php";

    $message = registrasi($nama, $email, $pstudi, $telp, $divisi);
    $bot->reply($message);

});


// ------------------------------------------------------------pembatas---------------------------------------------------------- 
// Command with @ to bot
$botman->hears("/start@registrasi_robotics_bot", function (BotMan $bot) {
    $user = $bot->getUser();
    $firstname = $user->getFirstName();
    $lastname = $user->getLastName();
    $id_user = $user->getId();

    $bot->reply("Selamat Datang 💁‍♂️\nDi Layanan Registrasi Online 📝\nAnggota Baru Robotics Community 🤖\n\nYth. Atas Nama :\n------------------------------------------------------------\n🤵 $firstname $lastname\n🆔 $id_user\n------------------------------------------------------------\n\nKetikkan perintah /help untuk mengetahui menu yang tersedia");
    include "command/RecordPengakses.php";
});

$botman->hears("/help@registrasi_robotics_bot", function (Botman $bot) {
    $user = $bot->getUser();
    $firstname = $user->getFirstName();
    $id_user = $user->getId();
    
    $bot->reply("/informasi 🔵 Seputar informasi");
    $bot->reply("/registrasi 🔵 Daftar anggota baru");
});

$botman->hears("/informasi@registrasi_robotics_bot", function (BotMan $bot) {
    $user = $bot->getUser();
    $firstname = $user->getFirstName();
    $id_user = $user->getId();
    $bot->reply("🤖 Seputar informasi\n------------------------------------------------------------\nRobotics Community adalah komunitas yang bergerak di bidang riset robotika, IoT (Internet of Things) dan segala hal yang berkaitan dengan pendalaman ilmu pengetahuan di bidang elektronika, mekanika, komunikasi, manajemen, dan perangkat lunak komputer.\n------------------------------------------------------------\n\n\n📝 History\n------------------------------------------------------------\nPada awalnya komunitas ini bernama 'Robotic Research Group', namun pada awal November 2017 berganti nama menjadi 'Robotics Community', Bermula dari obrolan mengenai robot, akhirnya beberapa dosen dan mahasiswa memutuskan untuk membuat grup guna mempertemukan para peminat robotika. Forum ini diciptakan tak hanya khusus penggemar robot, namun juga semua orang yang tertarik dan ingin belajar\n------------------------------------------------------------\n\n\n📞 Narahubung\n------------------------------------------------------------\nInstagram : bit.ly/robotics_upnjatim\nLine : @szl5114b\n------------------------------------------------------------\n");
});

$botman->hears("/registrasi@registrasi_robotics_bot", function (BotMan $bot) {
    $user = $bot->getUser();
    $firstname = $user->getFirstName();
    $id_user = $user->getId();

    $bot->reply("🤖 Divisi Robotics Community\n===============================\n1. MENFO\n2. MEKATRONIKA\n3. PROGRAM\n===============================\n\n✍️ Format registrasi anggota baru\n------------------------------------------------------------\n/reg NAMA_EMAIL_STUDI_TLP_DIVISI\n------------------------------------------------------------\n\n📝 Contoh\n------------------------------------------------------------\n/reg ABI_abi@gmail.com_INFORMATIKA_085775424472_MENFO\n------------------------------------------------------------\n\nSilahkan mendaftar sekarang sesuai dengan format diatas..");
});

$botman->hears("/reg@registrasi_robotics_bot {nama}_{email}_{pstudi}_{telp}_{divisi}", function (Botman $bot, $nama, $email, $pstudi, $telp, $divisi) {
    $user = $bot->getUser();
    $firstname = $user->getFirstName();
    $id_user = $user->getId();
    
    $nama = $nama;
    $email = $email;
    $pstudi = $pstudi;
    $telp = $telp;
    $divisi = $divisi;
    
    include "command/registrasi.php";

    $message = registrasi($nama, $email, $pstudi, $telp, $divisi);
    $bot->reply($message);

});

// command not found
$botman->fallback(function (BotMan $bot) {
    $message = $bot->getMessage()->getText();
    $bot->reply("[ PEMBERITAHUAN ]\n\nPerintah :\n===============================\n$message\n===============================\n\nKeterangan : TIDAK TERSEDIA");
});


$botman->listen();