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
![MySQL](https://img.shields.io/badge/-MySQL-darkblue.svg?style=flat&logo=mysql&logoColor=white)
![Bootstrap](https://img.shields.io/badge/-Bootstrap4-purple.svg?&logo=bootstrap&logoColor=white)
![PHP](https://img.shields.io/badge/-PHP-grey.svg?&logo=PHP&logoColor=white)

# WB-Register
<strong>Web Programming Final Project</strong><br>
Creating multiplatform applications: Website-Bot Register for new member registration of UPN Veteran Jatim Robotics community.

<br>

## Features / Framework / Tools
| Part | Description |
| --- | --- |
| Features | Create, Read, Update, Delete, Search, Count Data, Validation, Refresh Page, Error Handling |
| Code | PHP, HTML, CSS, JS, SQL |
| Framework | Bootstrap 4, Botman |
| Tools | XAMPP (PHP Version 7.4) & Ngrok |

<br>

## Download & Install
1. XAMPP with PHP version 7.4 :<br><br>
   ```bash
   https://sourceforge.net/projects/xampp/files/XAMPP%20Windows/7.4.30/xampp-windows-x64-7.4.30-1-VC15-installer.exe/download
   ```
<br>

2. Ngrok :<br><br>
   ```bash
   https://bin.equinox.io/c/bNyj1mQVY4c/ngrok-v3-stable-windows-amd64.zip
   ```
   
<br>

## Database
1. Open XAMPP, then start the Apache & MySQL section. This aims to be able to support the website optimally.<br>
2. Access the browser first in order to open the database admin panel, please copy the following link:
         ```
         localhost/phpmyadmin/
         ```.
3. Create a database called ``` wb_register ``` on local.<br>
4. Open the ``` wb_register ``` database and Import the ``` WB_Register_db.sql ``` in the ``` WB-Register/assets/sql directory ```.

<br>

## Running
1. Download this repository and extract it.<br>
2. Move the ``` WB-Register ``` directory into the htdocs directory, whose details you can find out as follows:
         ```
         C:\xampp\htdocs
         ```.
   
3. Create an Ngrok account first on the following page: <strong>https://dashboard.ngrok.com/login</strong><br>
4. Connect the ngrok account in the following way:<br>
   ```bash
   ngrok config add-authtoken [YOUR NGROK AUTHTOKEN]
   ```

5. Open the ``` ngrok.yml ``` file in the ``` C:\Users\[User Name]\AppData\Local\ngrok ``` directory, then set the tunnels to be used for multiple ports in one go by writing this command in it:<br>
   ```bash
   version: "2"
   authtoken: [YOUR NGROK AUTHTOKEN]
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
6. Type the following command into NGROK.exe and press enter:
   ```bash
   ngrok start --all
   ```

7. Copy the https URL in NGROK, and paste the URL into the following folder (directory):<br>
         ```
         WB-Register -> url_ngrok -> generate_url (Note: url is only valid for one way)
         ```
8. Copy your Telegram Bot API from @BotFather and paste it into the following folder (directory):<br>
         ```
         WB-Register -> multiplatform -> tgbot -> private -> token.txt
         ```
9. Open your browser, then type a command with the following rules to run the web:<br>
         ```
         [URL Https NGROK]/WB-Register/
         ```
    
    • Writing example:
    ```bash
    https://e6e5-2001-448a-5021-617-ecb0-7d4d-1d9e-27f2.ngrok-free.app/WB-Register/
    ```
10. Click -> ``` Visit Site ```.<br>

11. Open CMD (Command Prompt) and type the command with the following rules to run the bot:<br>
``` curl -d url=[URL Https NGROK]/[Folders If Any]/bot.php -X POST https://api.telegram.org/bot[TOKEN]/setWebhook ```

    • Writing example:
    ```bash
    curl -d url=https://e6e5-2001-448a-5021-617-ecb0-7d4d-1d9e-27f2.ngrok-free.app/WB-Register/multiplatform/tgbot/bot.php -X POST https://api.telegram.org/bot1496456979:AAE7MCBAeRznBN3G-E4J65GgVYzHo0oZmog/setWebhook 
    ```

    • The result will appear (Bot sign is already working / active): 
         ```
         {"ok":true,"result":true,"description":"Webhook was set"}
         ```
12. If you want to complete the running webhook session, then please open the browser by typing the following command:<br>
    ```bash
    https://api.telegram.org/bot[TOKEN]/setWebhook
    ```

<br>

## Issues that frequently arise
1. Forgot to run apache and sql in XAMPP or there could be a problem in your Ngrok settings. You can see an example of the problem as shown below:<br><br>
<img width="960" alt="image" src="https://github.com/devancakra/WB-Register/assets/54527592/13fc5e6c-191d-4863-a491-6283a90dd385"><br><br>
2. The problem that usually occurs with Botman-based telegram bots is when the user has left the bot for a long period of time, this can cause the API Token to expire. This problem is usually characterized by an abnormal state of the telegram bot, for example when the user gives the command ``` /start ``` or other commands, this bot still does not respond. The solution to this problem is that you only need to create a new telegram bot again (automatically get a new API Token), then for the program code, please set it based on your own needs.

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
<th width="280">Create</th>
<th width="280">Read</th>
<th width="280">Update</th>
</tr>
<tr>
<td><img src="https://github.com/devancakra/WB-Register/assets/54527592/92ac8c74-da70-4663-bf5d-21018bbde181" alt="create"></td>
<td><img src="https://github.com/devancakra/WB-Register/assets/54527592/b0f31465-6352-4297-b56d-c69524e509d0" alt="read"></td>
<td><img src="https://github.com/devancakra/WB-Register/assets/54527592/4b7309be-7381-437d-bb88-69fd70a779e3" alt="update"></td>
</tr>
</table>
<table>
<tr>
<th width="420">Delete</th>
<th width="420">Search</th>
</tr>
<tr>
<td><img src="https://github.com/devancakra/WB-Register/assets/54527592/ff4bcf13-164e-47f6-abaf-dba3f30f9423" alt="delete"></td>
<td><img src="https://github.com/devancakra/WB-Register/assets/54527592/68a5ae62-1861-4609-82ac-738d2ff62ea4" alt="search"></td>
</tr>
</table>
<table>
<tr>
<th colspan="6">Telegram Bot</th>
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

## Demonstration of Application
Via Telegram: <a href="http://t.me/roboticsupnjt_bot">@roboticsupnjt_bot</a>

<br>

## LICENSE
MIT License - Copyright (c) 2021 - Devan Cakra Mudra Wijaya

Permission is hereby granted without charge to any person obtaining a copy of this software and the software-related documentation files to deal in them without restriction, including without limitation the right to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons receiving the Software to be furnished therewith on the following terms:

The above copyright notice and this permission notice must accompany all copies or substantial portions of the Software.

IN ANY EVENT, THE AUTHOR OR COPYRIGHT HOLDER HEREIN RETAINS FULL OWNERSHIP RIGHTS. THE SOFTWARE IS PROVIDED AS IS, WITHOUT WARRANTY OF ANY KIND, EITHER EXPRESS OR IMPLIED, THEREFORE IF ANY DAMAGE, LOSS, OR OTHERWISE ARISES FROM THE USE OR OTHER DEALINGS IN THE SOFTWARE, THE AUTHOR OR COPYRIGHT HOLDER SHALL NOT BE LIABLE, AS THE USE OF THE SOFTWARE IS NOT COMPELLED AT ALL, SO THE RISK IS YOUR OWN.
