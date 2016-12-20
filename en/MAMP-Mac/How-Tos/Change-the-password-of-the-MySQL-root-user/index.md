---
title: MAMP (Mac) Documentation > How Tos > Change the password of the MySQL root user
description: 
layout: default-2
product: MAMP Mac
language: en
---

## How Tos > Change the password of the MySQL root user

Open the Mac OS Terminal Application located in your /Applications/Utilities directory. 

Enter the following command line:

`/Applications/MAMP/Library/bin/mysqladmin -u root -p password [NewPassword]`

Replace [NewPassword] with your new password.

Please bear in mind that you also have to change the phpMyAdmin configuration and probably your own php scr"+"ipts to use the newly created MySQL password. For changing the phpMyAdmin configuration edit the following file and update the password.

`/Applications/MAMP/bin/phpMyAdmin/config.inc.php`
