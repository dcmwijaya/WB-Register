[![Open Source Love](https://badges.frapsoft.com/os/v1/open-source.svg?style=flat)](https://github.com/ellerbrock/open-source-badges/)
[![License: MIT](https://img.shields.io/badge/License-MIT-blue.svg?logo=github&color=%23F7DF1E)](https://github.com/devancakra/WB-Register)
[![Doi](https://img.shields.io/badge/Doi-http://dx.doi.org/10.30646/sinus.v19i2.531-blue.svg?logo=google-scholar&color=98FB98)](https://p3m.sinus.ac.id/jurnal/index.php/e-jurnal_SINUS/article/view/531)
![GitHub Star](https://img.shields.io/github/stars/devancakra/WB-Register.svg?color=FF69B4)
![GitHub Contributor](https://img.shields.io/github/contributors/devancakra/WB-Register.svg?color=FF8C00)
![GitHub Forks](https://img.shields.io/github/forks/devancakra/WB-Register.svg?color=00CED1)
![GitHub last commit](https://img.shields.io/github/last-commit/devancakra/WB-Register)
![HTML](https://img.shields.io/badge/HTML%20-light.svg?&style=flat&logo=html5&logoColor=%23F7DF1E&color=FF6347)
![CSS](https://img.shields.io/badge/CSS%20-light.svg?&style=flat&logo=css3&logoColor=%23F7DF1E&color=1E90FF)
![JS](https://img.shields.io/badge/Javascript%20-%23323330.svg?&style=flat&logo=javascript&logoColor=%23F7DF1E&color=008080)
![MySQL](https://img.shields.io/badge/-MySQL-darkblue.svg?style=flat&logo=mysql&logoColor=white)
![Bootstrap](https://img.shields.io/badge/-Bootstrap4-purple.svg?&logo=bootstrap&logoColor=white)
![PHP](https://img.shields.io/badge/-PHP-grey.svg?&logo=PHP&logoColor=white)

# WB-Register
<strong>Proyek Akhir Pemrograman Web</strong><br>
Membuat aplikasi multi platform: Website-Bot Register untuk pendaftaran anggota baru komunitas Robotika UPN Veteran Jatim.

<br>

## Fitur / Kerangka Kerja / Peralatan
| Bagian | Deskripsi |
| --- | --- |
| Fitur | Buat, Baca, Perbarui, Hapus, Pencarian, Hitung Data, Validasi, Segarkan Halaman, Pengendalian Masalah |
| Kode | PHP, HTML, CSS, JS, SQL |
| Kerangka Kerja | Bootstrap 4, Botman |
| Peralatan | XAMPP (PHP Versi 7.4) & Ngrok |

<br>

## Unduh & Instal
1. XAMPP dengan PHP versi 7.4 :<br><br>
   ```bash
   https://sourceforge.net/projects/xampp/files/XAMPP%20Windows/7.4.30/xampp-windows-x64-7.4.30-1-VC15-installer.exe/download
   ```
<br>
   
2. Ngrok :<br><br>
   ```bash
   https://bin.equinox.io/c/bNyj1mQVY4c/ngrok-v3-stable-windows-amd64.zip
   ```
<br>

3. Composer :<br><br>
   ```bash
   https://getcomposer.org/Composer-Setup.exe
   ```
    
<br>

## Basis data
1. Buka ``` XAMPP ```, lalu tekan tombol mulai di bagian ``` Apache ``` & ``` MySQL ```. Hal ini bertujuan untuk dapat mendukung website secara optimal.<br>

2. Akses peramban terlebih dahulu untuk membuka panel admin basis data, silakan salin tautan berikut:
         ```
         localhost/phpmyadmin/
         ```.
   
4. Buat basis data bernama ``` wb_register ``` di lokal.<br>

5. Buka basis data ``` wb_register ``` dan Impor basis data ``` WB_Register_db.sql ``` di direktori ``` WB-Register/assets/sql ```.

<br>

## Menjalankan
1. Unduh repositori ini lalu ekstrak.<br>
2. Pindahkan direktori ``` WB-Register ``` ke dalam direktori ``` htdocs ```, yang rinciannya dapat Anda lihat sebagai berikut:
         ```
         C:\xampp\htdocs
         ```.
   
3. Buat akun Ngrok terlebih dahulu di halaman berikut: <strong>https://dashboard.ngrok.com/login</strong><br>
4. Hubungkan akun ngrok dengan cara berikut:<br>
   ```bash
   ngrok config add-authtoken [TOKEN NGROK]
   ```

5. Buka berkas ``` ngrok.yml ``` di dalam direktori ``` C:\Users\[User Name]\AppData\Local\ngrok ``` , kemudian atur tunnel agar dapat digunakan untuk banyak port sekaligus dengan menuliskan perintah berikut di dalamnya:<br>
   ```bash
   version: "2"
   authtoken: [TOKEN NGROK]
   tunnels:
     tunnel-1:
       proto: http
       addr: 80
       schemes: ["https"]
     tunnel-2:
       proto: http
       addr: 80
       schemes: ["http", "https"]
   ```
6. Ketik perintah berikut ke dalam ``` NGROK.exe ``` dan tekan enter:
   ```bash
   ngrok start --all
   ```

7. Salin ``` URL https ``` di ``` NGROK ```, dan tempelkan URL tersebut ke dalam folder (direktori) berikut:<br>
``` WB-Register -> url_ngrok -> generate_url (Catatan: url hanya berlaku untuk dijalankan sesekali) ```
8. Salin ``` API Bot Telegram ``` Anda dari ``` @BotFather ``` dan tempelkan ke dalam folder (direktori) berikut:<br>
``` WB-Register -> multiplatform -> tgbot -> private -> token.txt ```
9. Buka ``` browser ``` Anda, lalu ketikkan perintah dengan aturan berikut untuk menjalankan web:<br>
    ``` [URL Https NGROK]/WB-Register/ ```
    
    • Contoh penulisan:
    ```bash
    https://e6e5-2001-448a-5021-617-ecb0-7d4d-1d9e-27f2.ngrok-free.app/WB-Register/
    ```
    
10. Klik -> ``` Visit Site ```.
       
11. Buka ``` CMD (Command Prompt) ``` dan ketikkan perintah dengan aturan berikut untuk menjalankan bot:<br>
``` curl -d url=[URL Https NGROK]/[Folder Jika Ada]/bot.php -X POST https://api.telegram.org/bot[TOKEN]/setWebhook ```<br>

    • Contoh penulisan:
    ```bash
    curl -d url=https://e6e5-2001-448a-5021-617-ecb0-7d4d-1d9e-27f2.ngrok-free.app/WB-Register/multiplatform/tgbot/bot.php -X POST https://api.telegram.org/bot1496456979:AAE7MCBAeRznBN3G-E4J65GgVYzHo0oZmog/setWebhook
    ```

    • Hasilnya akan muncul (tanda Bot sudah bekerja / aktif): 
         ```
         {"ok":true,"result":true,"description":"Webhook was set"}
         ```
         
12. Jika Anda ingin menyelesaikan sesi webhook yang sedang berjalan, maka buka browser dengan mengetikkan perintah berikut:<br>
    ```bash
    https://api.telegram.org/bot[TOKEN]/setWebhook
    ```
    
<br>

## Permasalahan yang sering muncul
1. Lupa menjalankan apache dan sql yang ada pada XAMPP atau bisa jadi ada permasalahan di pengaturan Ngrok Anda. Contoh permasalahannya dapat anda lihat seperti gambar berikut ini:<br><br>
<img width="960" alt="image" src="https://github.com/devancakra/WB-Register/assets/54527592/13fc5e6c-191d-4863-a491-6283a90dd385"><br><br>
2. Masalah yang biasanya terjadi pada bot telegram berbasis Botman adalah saat pengguna telah meninggalkan bot tersebut dalam rentang waktu yang lama, hal ini dapat mengakibatkan API Token menjadi kadaluarsa. Masalah ini biasanya ditandai dengan keadaan bot telegram yang tidak normal, misalnya ketika pengguna memberikan perintah ``` /start ``` ataupun perintah lainnya, bot ini tetap tidak merespon. Solusi dari permasalahan ini yaitu anda hanya perlu membuat bot telegram yang baru lagi (otomatis dapat API Token yang baru), selanjutnya untuk kode program silakan atur berdasarkan kebutuhan anda masing-masing.<br><br>
3. Jika masalah pada poin 1 tidak teratasi, maka Anda harus :
   
   • Menghapus 3 file yang ada di dalam direktori ``` C:\xampp\htdocs\Cryptodax-Bot ``` yaitu ``` composer.json ```, ``` composer.lock ```, dan ``` vendor ```.

   • Instal depedensi ``` Botman ``` melalui ``` GitBash ``` dengan memberikan perintah seperti berikut:

   ```bash
   composer require "botman/driver-telegram"
   ```

<br>

## Kelompok Pemrograman Website
| NOMOR | NAMA LENGKAP | NPM |
| --- | --- | --- |
| 1 | Devan Cakra Mudra Wijaya | 18081010013 |
| 2 | Tasya Ardhian Nisaa' | 18081010049 |
| 3 | Susy Rahmawati | 18081010048 |

<br>

## Sorotan
<table>
<tr>
<th width="280">Buat</th>
<th width="280">Baca</th>
<th width="280">Perbarui</th>
</tr>
<tr>
<td><img src="https://github.com/devancakra/WB-Register/assets/54527592/92ac8c74-da70-4663-bf5d-21018bbde181" alt="create"></td>
<td><img src="https://github.com/devancakra/WB-Register/assets/54527592/b0f31465-6352-4297-b56d-c69524e509d0" alt="read"></td>
<td><img src="https://github.com/devancakra/WB-Register/assets/54527592/4b7309be-7381-437d-bb88-69fd70a779e3" alt="update"></td>
</tr>
</table>
<table>
<tr>
<th width="420">Hapus</th>
<th width="420">Pencarian</th>
</tr>
<tr>
<td><img src="https://github.com/devancakra/WB-Register/assets/54527592/ff4bcf13-164e-47f6-abaf-dba3f30f9423" alt="delete"></td>
<td><img src="https://github.com/devancakra/WB-Register/assets/54527592/68a5ae62-1861-4609-82ac-738d2ff62ea4" alt="search"></td>
</tr>
</table>
<table>
<tr>
<th colspan="6">Bot Telegram</th>
</tr>
<tr>
<td width="140"><img src="https://github.com/devancakra/WB-Register/assets/54527592/4ae1a9b4-9f34-4da9-86ba-9dabe35d885f" alt="TGbot-1"></td>
<td width="140"><img src="https://github.com/devancakra/WB-Register/assets/54527592/1fbf850d-fd10-4255-9129-eb090de47331" alt="TGbot-2"></td>
<td width="140"><img src="https://github.com/devancakra/WB-Register/assets/54527592/6ad7a7c9-1c19-4cc3-b1dc-d5fe1c441544" alt="TGbot-3"></td>
<td width="140"><img src="https://github.com/devancakra/WB-Register/assets/54527592/63f5c61f-09fe-491c-a6f0-2ac1731f51c9" alt="TGbot-4"></td>
<td width="140"><img src="https://github.com/devancakra/WB-Register/assets/54527592/c6f8cb60-944e-40c9-87e7-4a11d71c4654" alt="TGbot-5"></td>
<td width="140"><img src="https://github.com/devancakra/WB-Register/assets/54527592/fbb1420f-e323-4793-aab1-6f93b953fb0f" alt="TGbot-6"></td>
</tr>
</table>

<br>

## Demonstrasi Aplikasi
Via Telegram: <a href="http://t.me/roboticsupnjt_bot">@roboticsupnjt_bot</a>

<br>

## LISENSI 
LISENSI MIT - Hak Cipta (c) 2021 - Devan Cakra Mudra Wijaya

Dengan ini diberikan izin tanpa biaya kepada siapa pun yang mendapatkan salinan perangkat lunak ini dan file dokumentasi terkait perangkat lunak untuk menggunakannya tanpa batasan, termasuk namun tidak terbatas pada hak untuk menggunakan, menyalin, memodifikasi, menggabungkan, mempublikasikan, mendistribusikan, mensublisensikan, dan/atau menjual salinan Perangkat Lunak ini, dan mengizinkan orang yang menerima Perangkat Lunak ini untuk dilengkapi dengan persyaratan berikut:

Pemberitahuan hak cipta di atas dan pemberitahuan izin ini harus menyertai semua salinan atau bagian penting dari Perangkat Lunak.

DALAM HAL APAPUN, PENULIS ATAU PEMEGANG HAK CIPTA DI SINI TETAP MEMILIKI HAK KEPEMILIKAN PENUH. PERANGKAT LUNAK INI DISEDIAKAN SEBAGAIMANA ADANYA, TANPA JAMINAN APAPUN, BAIK TERSURAT MAUPUN TERSIRAT, OLEH KARENA ITU JIKA TERJADI KERUSAKAN, KEHILANGAN, ATAU LAINNYA YANG TIMBUL DARI PENGGUNAAN ATAU URUSAN LAIN DALAM PERANGKAT LUNAK INI, PENULIS ATAU PEMEGANG HAK CIPTA TIDAK BERTANGGUNG JAWAB, KARENA PENGGUNAAN PERANGKAT LUNAK INI TIDAK DIPAKSAKAN SAMA SEKALI, SEHINGGA RISIKO ADALAH MILIK ANDA SENDIRI.
