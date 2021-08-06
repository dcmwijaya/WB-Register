# Multiplatform-Bot-Register-With-Website-PHP-Native-Ngrok
1. Download NGROK.exe di halaman resminya.

2. Taruh semua project termasuk NGROK.exe di direktori XAMPP anda (htdocs), biasanya berada pada :
   C:\xampp\htdocs

3. Nyalakan XAMPP -> apache & mySQL.

4. Copy API Bot Telegram Anda lalu pastekan ke :
   WEB_BOT_2020 -> Bot -> private -> token.txt

5. Ketikan pada NGROK.exe ini lalu enter :
   ngrok http 80

6. Ambil url https yang ada pada NGROK :
   [https://24c3407dbd51.ngrok.io] -> http://localhost:80
   
   *catatan : ambil url yang ada didalam tanda [], yang diambil hanya ini saja -> https://24c3407dbd51.ngrok.io

7. Copy URL Https NGROK lalu pastekan ke :
   WEB_BOT_2020 -> WebKelola -> localhost -> url_ngrok.txt

   *catatan : url berlaku sekali jalan.

8. Taruh di notepad/word dan sesuaikan dengan formatnya ini :
   curl -d url=[URL Https NGROK]/[Folder Jika Ada]/bot.php -X POST https://api.telegram.org/bot[API BOT Telegram Anda]/setWebhook 

   *contoh pengisian :
   curl -d url=https://24c3407dbd51.ngrok.io/WEB_BOT_2020/Bot/bot.php -X POST https://api.telegram.org/bot1496456979:AAE7MCBAeRznBN3G-E4J65GgVYzHo0oZmog/setWebhook 

9. Copy *contoh pengisian tadi ke CMD lalu Enter
   Hasilnya akan muncul : {"ok":true,"result":true,"description":"Webhook was set"}

10.Bot sudah berfungsi (aktif).

11.Langkah selanjutnya yaitu WEB Kelola, yaitu cukup anda Copy paste kan URL Ngrok tadi ke web browser(Chrome/Mozilla/Etc) dengan ketentuan sebagai berikut :
   [URL Https NGROK]/WEB_BOT_2020/WebKelola/index.php

   *contoh penulisan :
   https://24c3407dbd51.ngrok.io/WEB_BOT_2020/WebKelola/index.php

12.Lalu Enter maka WEB KELOLA akan berfungsi sebagaimana mestinya.

13.Uji cobalah... 

14.Selesai.. BOT & WEB dapat berjalan menggunakan local NGROK

<br>

## KELOMPOK PEMWEB
| NO | NAMA ANGGOTA TIM | NPM |
| --- | --- | --- |
| 1 | Devan Cakra Mudra Wijaya | 18081010013 |
| 2 | Tasya Ardhian Nisaa' | 18081010049 |
| 3 | Susy Rahmawati | 18081010048 |

<br>