
## How Tos

### Change the password of the MySQL root user?

Open the Mac OS Terminal Application located in your /Applications/Utilities directory. 

Enter the following command line:

`/Applications/MAMP/Library/bin/mysqladmin -u root -p password [NewPassword]`

Replace [NewPassword] with your new password.

Please bear in mind that you also have to change the phpMyAdmin configuration and probably your own php scr"+"ipts to use the newly created MySQL password. For changing the phpMyAdmin configuration edit the following file and update the password.

`/Applications/MAMP/bin/phpMyAdmin/config.inc.php` 

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

The MySQL server of MAMP uses the Default Storage Engine MyISAM. If you want to change this to a different storage engine such as InnoDB you have to change the configuration file of the MySQL server.

1. Stop the MAMP Servers that are running.

2. Use a text editor to create a file named my.cnf and save it to the /Applications/MAMP/conf folder.

3. Add the following lines into the file:

    `[mysqld]default-storage-engine = InnoDB`

4. Save the file and close your editor.

5. Start the MAMP servers.

---


### Connect to MySQL from PHP

The following example shows how to connect to a MySQL database using the mysqli() library:

<?php

$user = 'root';

$password = 'root';

$db = 'inventory';

$host = 'localhost';

$port = 8889;

$link = mysqli_init();

$success = mysqli_real_connect(
   $link, 
   $host, 
   $user, 
   $password, 
   $db,
   $port
);

?>

---
