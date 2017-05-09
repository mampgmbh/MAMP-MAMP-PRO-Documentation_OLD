---
title: MAMP PRO (Mac) Documentation > How Tos > MySQL
description: 
layout: default-2
product: MAMP PRO Mac
language: en
---

### Upgrade MySQL to version 5.7

You cannot upgrade the MAMP PRO instance of MySQL. However you can install a separate instance of MySQL 5.7 on your Mac. 




1. Download the [MySQL 5.7 Mac OS X 10.12 (x86, 64-bit), DMG Archive](https://dev.mysql.com/downloads/mysql/5.7.html). 

2. Complete the installation of MySQL 5.7.

3. Start your MySQL 5.7 server in System Preferences.

![MAMP](/en/MAMP-PRO-Mac/How-Tos/MySQL/InstallMySQL57/MySQLRunning.png)



Once you have successfully installed MAMP PRO you can run both instances of MySQL, or just your new MySQL 5.7. 

#### MySQL 5.7 data default location

The default location for your database data is `/usr/local/mysql/data`.



Only use Groupstart for Apache Serrver if you don't want your built in MySQL to run.

Make sure they run on different ports

#### Install Wordpress with MySQL 5.7

Create an empty database in MySQL, this example uses the default name "wordpress". Confirm you are using port 3306 to connect to MySQL.

![MAMP](/en/MAMP-PRO-Mac/How-Tos/MySQL/InstallMySQL57/wordpressinstallation.png)




