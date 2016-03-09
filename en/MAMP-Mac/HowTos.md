
## How Tos

### How can I change the password of the MySQL root user?

Open the Mac OS Terminal Application located in /Applications/Utilities directory. 

Enter the following command line:

`/Applications/MAMP/Library/bin/mysqladmin -u root -p password [NewPassword]`

replace [NewPassword] with your new password.

Please bear in mind that you also have to change the phpMyAdmin configuration and probably your own php scr"+"ipts to use the newly created MySQL password. For changing the phpMyAdmin configuration edit the file

`/Applications/MAMP/bin/phpMyAdmin/config.inc.php` 

and update the password.

---

### Check the Default Storage Engine of MySQL

Open MAMP
Start the servers
Open Terminal.app located in the `/Applications/Utilities` directory.

Enter the following line into the terminal and hit Enter

`cd /Applications/MAMP/Library/bin`

Hit Enter

`./mysql --host=localhost -u root -proot`

Enter the following line into the MySQL prompt and hit Enter

`USE information_schema;`

Enter the following line into the MySQL prompt and hit Enter

`SELECT * FROM engines;`

A table with the Storage Engines of MySQL will show up. Inside the Support column the Default Storage Engine has the value DEFAULT.

Enter the following line into the MySQL prompt and hit Enter

`exit;`

---

### Set the MySQL Default Storage Engine

The MySQL server of MAMP uses the Default Storage Engine MyISAM. If you want to change this, you have to change the configuration file of the MySQL server. With this tutorial we want to show you how to change the Default Storage Engine to InnoDB.

Stop the MAMP Server if it is running.
Use a text editor to create a file named my.cnf and save it to the /Applications/MAMP/conf folder.
Add the following lines into the file:
`[mysqld]default-storage-engine = InnoDB`
Save the file and close your editor.
Start the MAMP servers. Use MySQL command line.

---

### Set the MySQL Default Storage Engine using the command line

Start MAMP

Start the servers

Open Terminal.app (/Applications/Utilities)

Type in and hit Enter

`cd /Applications/MAMP/Library/bin`
Type in and hit Enter

`./mysql --host=localhost -u root -proot`
Now you can use the MySQL command line. For example to show all your databases with:
`show databases;`

---

### Connect to MySQL from PHP

The following example shows how to connect to a MySQL database using the mysqli() library:

`<?php
 DEFINE('DB_USERNAME', 'root');
 DEFINE('DB_PASSWORD', 'root');
 DEFINE('DB_HOST', 'localhost');
 DEFINE('DB_DATABASE', 'performance_schema');

 $mysqli = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_DATABASE);

 if (mysqli_connect_error()) {
  die('Connect Error ('.mysqli_connect_errno().') '.mysqli_connect_error());
 }

 echo 'Connected successfully.';

 $mysqli->close();
`

---
