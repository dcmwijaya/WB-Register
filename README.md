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

# Bot-Website-Register
Web Programming Final Project - Creating multiplatform applications: Bot-Website Register for new member registration of UPN Veteran Jatim Robotics community.

<br>

## Features / Framework / Tools
| Part | Description |
| --- | --- |
| Features |  |
| Framework |  |
| Tools | XAMPP (PHP Version 7.4) & Ngrok |

<br>

## Download & Install
1.XAMPP with PHP version 7.4 :
```bash
https://sourceforge.net/projects/xampp/files/XAMPP%20Windows/7.4.30/xampp-windows-x64-7.4.30-1-VC15-installer.exe/download
```
2.Ngrok :
```bash
https://bin.equinox.io/c/bNyj1mQVY4c/ngrok-v3-stable-windows-amd64.zip
```

<br>

## Database
1.Open XAMPP, then start the Apache & MySQL section. This aims to be able to support the website optimally.<br>
2.Access the browser first in order to open the database admin panel, please copy the following link:
```bash
localhost/phpmyadmin/
```
3.Create a database called "WB_Register" on local.<br>
4.Open the "WB_Register" database and Import the database (WB_Register_db.sql) in the Bot-Website-Register/assets/sql directory.<br>
5.Then open the XAMP file (php.ini) -> remove semicolon (;) in front of extension=intl -> save.

<br>

## Running
1. Download this repository.<br>
2. Copy semua file yang ada didalam folder yang telah di download tadi lalu pastekan ke -> C:\xampp\htdocs
3. Copy API Bot Telegram Anda lalu pastekan kedalam folder (direktori) : Bot-Website-Register -> multiplatform -> bot -> private -> token.txt
5. Ketikan pada NGROK.exe -> ngrok http 80 -> lalu tekan enter
6. Ambil url https yang ada pada NGROK, misal : https://24c3407dbd51.ngrok.io
7. Copy URL https NGROK tersebut lalu pastekan kedalam folder (direktori) : WEB_BOT_2020 -> WebKelola -> localhost -> url_ngrok.txt (catatan : url berlaku sekali jalan)
8. Lalu buka CMD (Command Prompt)
9. Ketikan pada CMD -> curl -d url=[URL Https NGROK]/[Folder Jika Ada]/bot.php -X POST https://api.telegram.org/bot[API-BOT-Telegram-Anda]/setWebhook -> lalu tekan enter

   *Contoh pengisian :
   ```bash
   curl -d url=https://24c3407dbd51.ngrok.io/WEB_BOT_2020/Bot/bot.php -X POST https://api.telegram.org/bot1496456979:AAE7MCBAeRznBN3G-E4J65GgVYzHo0oZmog/setWebhook 
   ```
      
   *Hasilnya akan muncul (Tanda Bot sudah berfungsi/aktif) : 
   ```bash
   {"ok":true,"result":true,"description":"Webhook was set"}
   ```
10. Langkah selanjutnya yaitu WEB Kelola, yaitu cukup anda Copy paste kan URL Ngrok tadi ke web browser(Chrome/Mozilla/Etc) dengan ketentuan sebagai berikut :
    ```bash
    [URL https NGROK]/WEB_BOT_2020/WebKelola/index.php
    ```
    
    *Contoh penulisan :
    ```bash
    https://24c3407dbd51.ngrok.io/WEB_BOT_2020/WebKelola/index.php
    ```

<br>

## Website Programming Group
| NUMBER | FULL NAME | NPM |
| --- | --- | --- |
| 1 | Devan Cakra Mudra Wijaya | 18081010013 |
| 2 | Tasya Ardhian Nisaa' | 18081010049 |
| 3 | Susy Rahmawati | 18081010048 |

<br>

## Highlight
<table>
<tr>
<th width="280"></th>
<th width="280"></th>
<th width="280"></th>
</tr>
<tr>
<td><img src="" alt=""></td>
<td><img src="" alt=""></td>
<td><img src="" alt=""></td>
</tr>
</table>
<table>
<tr>
<th width="280"></th>
<th width="280"></th>
<th width="280"></th>
</tr>
<tr>
<td><img src="" alt=""></td>
<td><img src="" alt=""></td>
<td><img src="" alt=""></td>
</tr>
</table>
<table>
<tr>
<th width="280"></th>
<th width="280"></th>
<th width="280"></th>
</tr>
<tr>
<td><img src="" alt=""></td>
<td><img src="" alt=""></td>
<td><img src="" alt=""></td>
</tr>
</table>

<br>

## LICENSE
MIT License - Copyright (c) 2021 - Devan Cakra Mudra Wijaya

Permission is hereby granted without charge to any person obtaining a copy of this software and the software-related documentation files to deal in them without restriction, including without limitation the right to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons receiving the Software to be furnished therewith on the following terms:

The above copyright notice and this permission notice must accompany all copies or substantial portions of the Software.

IN ANY EVENT, THE AUTHOR OR COPYRIGHT HOLDER HEREIN RETAINS FULL OWNERSHIP RIGHTS. THE SOFTWARE IS PROVIDED AS IS, WITHOUT WARRANTY OF ANY KIND, EITHER EXPRESS OR IMPLIED, THEREFORE IF ANY DAMAGE, LOSS, OR OTHERWISE ARISES FROM THE USE OR OTHER DEALINGS IN THE SOFTWARE, THE AUTHOR OR COPYRIGHT HOLDER SHALL NOT BE LIABLE, AS THE USE OF THE SOFTWARE IS NOT COMPELLED AT ALL, SO THE RISK IS YOUR OWN.
