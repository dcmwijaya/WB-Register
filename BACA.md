[![Open Source Love](https://badges.frapsoft.com/os/v1/open-source.svg?style=flat)](https://github.com/ellerbrock/open-source-badges/)
[![License: MIT](https://img.shields.io/badge/License-MIT-blue.svg?logo=github&color=%23F7DF1E)](https://github.com/devancakra/Api-Region-Huruf-Hijaiyah)
[![Doi](https://img.shields.io/badge/Doi-http://dx.doi.org/10.30646/sinus.v19i2.531-blue.svg?logo=google-scholar&color=98FB98)](https://p3m.sinus.ac.id/jurnal/index.php/e-jurnal_SINUS/article/view/531)
![GitHub Star](https://img.shields.io/github/stars/devancakra/Multiplatform-Bot-Register-With-Website-PHP-Native-Ngrok.svg?color=FF69B4)
![GitHub Contributor](https://img.shields.io/github/contributors/devancakra/Multiplatform-Bot-Register-With-Website-PHP-Native-Ngrok.svg?color=FF8C00)
![GitHub Forks](https://img.shields.io/github/forks/devancakra/Multiplatform-Bot-Register-With-Website-PHP-Native-Ngrok.svg?color=00CED1)
![GitHub last commit](https://img.shields.io/github/last-commit/devancakra/Multiplatform-Bot-Register-With-Website-PHP-Native-Ngrok)
![HTML](https://img.shields.io/badge/HTML%20-light.svg?&style=flat&logo=html5&logoColor=%23F7DF1E&color=FF6347)
![CSS](https://img.shields.io/badge/CSS%20-light.svg?&style=flat&logo=css3&logoColor=%23F7DF1E&color=1E90FF)
![JS](https://img.shields.io/badge/Javascript%20-%23323330.svg?&style=flat&logo=javascript&logoColor=%23F7DF1E&color=008080)
![MySQL](https://img.shields.io/badge/-MySQL-tosca.svg?style=flat&logo=mysql&logoColor=white)
![Bootstrap](https://img.shields.io/badge/-Bootstrap4-purple.svg?&logo=bootstrap&logoColor=white)
![PHP](https://img.shields.io/badge/-PHP-grey.svg?&logo=PHP&logoColor=white)

# WB-Register
<strong>Proyek Akhir Pemrograman Web</strong><br>
Membuat aplikasi multi platform: Website-Bot Register untuk pendaftaran anggota baru komunitas Robotika UPN Veteran Jatim.

<br>

## Fitur / Kerangka Kerja / Peralatan
| Bagian | Deskripsi |
| --- | --- |
| Fitur | Buat, Baca, Perbarui, Hapus, Pencarian, Hitung Data, Validasi, Segarkan Halaman |
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

## Basis data
1. Buka XAMPP, lalu tekan tombol mulai di bagian Apache & MySQL. Hal ini bertujuan untuk dapat mendukung website secara optimal.<br>
2. Akses peramban terlebih dahulu untuk membuka panel admin basis data, silakan salin tautan berikut:
         ```
         localhost/phpmyadmin/
         ```
3. Buat basis data bernama ``` wb_register ``` di lokal.<br>
4. Buka basis data ``` wb_register ``` dan Impor basis data ``` WB_Register_db.sql ``` di direktori ``` WB-Register/assets/sql ```.

<br>

## Menjalankan
1. Unduh repositori ini lalu ekstrak.<br>
2. Pindahkan direktori ``` WB-Register ``` ke dalam direktori htdocs, yang rinciannya dapat Anda lihat sebagai berikut:
         ```
         C:\xampp\htdocs
         ```
   
3. Buat akun Ngrok terlebih dahulu di halaman berikut: <strong>https://dashboard.ngrok.com/login</strong><br>
4. Hubungkan akun ngrok dengan cara berikut:<br>
   ```bash
   ngrok config add-authtoken [YOUR NGROK AUTHTOKEN]
   ```
   
5. Ketik perintah berikut ke dalam NGROK.exe dan tekan enter:
   ```bash
   ngrok http 80
   ```

6. Salin URL https di NGROK, dan tempelkan URL tersebut ke dalam folder (direktori) berikut:<br>
``` WB-Register -> url_ngrok -> generate_url (Catatan: url hanya berlaku untuk dijalankan sesekali) ```
7. Salin API Bot Telegram Anda dari @BotFather dan tempelkan ke dalam folder (direktori) berikut:<br>
``` WB-Register -> multiplatform -> tgbot -> private -> token.txt ```
8. Buka browser Anda, lalu ketikkan perintah dengan aturan berikut untuk menjalankan web:<br>
    ``` [URL Https NGROK]/WB-Register/index.php ```
    
    • Contoh penulisan:
    ```bash
    https://e6e5-2001-448a-5021-617-ecb0-7d4d-1d9e-27f2.ngrok-free.app/WB-Register/index.php
    ```
    
9. Klik -> ``` Visit Site ```.
       
10. Buka CMD (Command Prompt) dan ketikkan perintah dengan aturan berikut untuk menjalankan bot:<br>
``` curl -d url=[URL Https NGROK]/[Folder Jika Ada]/bot.php -X POST https://api.telegram.org/bot[TOKEN]/setWebhook ```<br>

    • Contoh penulisan:
    ```bash
    curl -d url=https://e6e5-2001-448a-5021-617-ecb0-7d4d-1d9e-27f2.ngrok-free.app/WB-Register/multiplatform/tgbot/bot.php -X POST https://api.telegram.org/bot1496456979:AAE7MCBAeRznBN3G-E4J65GgVYzHo0oZmog/setWebhook
    ```

    • Hasilnya akan muncul (tanda Bot sudah bekerja / aktif): 
         ```
         {"ok":true,"result":true,"description":"Webhook was set"}
         ```
         
11. Jika Anda ingin menyelesaikan sesi webhook yang sedang berjalan, maka buka browser dengan mengetikkan perintah berikut:<br>
    ```bash
    https://api.telegram.org/bot[TOKEN]/setWebhook
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
<th colspan="3">Bot Telegram</th>
</tr>
<tr>
<td width="280"><img src="" alt="TGbot-1"></td>
<td width="280"><img src="" alt="TGbot-2"></td>
<td width="280"><img src="" alt="TGbot-3"></td>
</tr>
</table>

<br>

## LISENSI 
LISENSI MIT - Hak Cipta (c) 2021 - Devan Cakra Mudra Wijaya

Dengan ini diberikan izin tanpa biaya kepada siapa pun yang mendapatkan salinan perangkat lunak ini dan file dokumentasi terkait perangkat lunak untuk menggunakannya tanpa batasan, termasuk namun tidak terbatas pada hak untuk menggunakan, menyalin, memodifikasi, menggabungkan, mempublikasikan, mendistribusikan, mensublisensikan, dan/atau menjual salinan Perangkat Lunak ini, dan mengizinkan orang yang menerima Perangkat Lunak ini untuk dilengkapi dengan persyaratan berikut:

Pemberitahuan hak cipta di atas dan pemberitahuan izin ini harus menyertai semua salinan atau bagian penting dari Perangkat Lunak.

DALAM HAL APAPUN, PENULIS ATAU PEMEGANG HAK CIPTA DI SINI TETAP MEMILIKI HAK KEPEMILIKAN PENUH. PERANGKAT LUNAK INI DISEDIAKAN SEBAGAIMANA ADANYA, TANPA JAMINAN APAPUN, BAIK TERSURAT MAUPUN TERSIRAT, OLEH KARENA ITU JIKA TERJADI KERUSAKAN, KEHILANGAN, ATAU LAINNYA YANG TIMBUL DARI PENGGUNAAN ATAU URUSAN LAIN DALAM PERANGKAT LUNAK INI, PENULIS ATAU PEMEGANG HAK CIPTA TIDAK BERTANGGUNG JAWAB, KARENA PENGGUNAAN PERANGKAT LUNAK INI TIDAK DIPAKSAKAN SAMA SEKALI, SEHINGGA RISIKO ADALAH MILIK ANDA SENDIRI.
