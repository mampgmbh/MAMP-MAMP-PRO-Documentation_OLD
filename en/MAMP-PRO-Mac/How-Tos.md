## 10. How Tos

##### 8.1 Activating Output Buffering

Start MAMP PRO
Select File -> Edit Template -> PHP 5.x.x php.ini / PHP 5.x.x php.ini 
Search this line "output_buffering = Off”
Change "Off" to "On" or to a maximum number of bytes instead (for example "4096")
Save the file
Start Servers

##### 8.2 Check the Default Storage Engine of MySQL

Open MAMP
Start the servers
Open Terminal.app (/Applications/Utilities)
Enter the following line into the terminal and hit Enter:
cd /Applications/MAMP/Library/bin
Hit Enter 
./mysql --host=localhost -u root -proot
Enter the following line into the MySQL prompt and hit enter:
USE information_schema;
Enter the following line into the MySQL prompt and hit enter:  
SELECT * FROM engines;
A table with the Storage Engines of MySQL will show up. Inside the Support column the    Default Storage Engine has the value "DEFAULT".


Enter the following line into the MySQL prompt and hit enter:
exit;

##### 8.3 Increase the PHP memory limit

Start MAMP PRO
Stop the server if it's running 
Choose Menu > File > Edit Template > PHP 5.x.x php.ini / PHP 5.x.x php.ini
  
The PHP ini file will be opened.
If a dialogue box pops up, read it and confirm with OK
Search (Command-F) for "memory_limit" (without quotes)
You should get the following line:
memory_limit = 32M ; Maximum amount of memory a script may consume (8M)
Now you can change the default value of 32M. For instance into 64M or even more (like 128M)
Save (Command-S) your changes.
Close (Command-W) the file.
Start the Server.

##### 8.4 Set the MySQL Default Storage Engine

The MySQL server of MAMP PRO uses the Default Storage Engine MyISAM. If you want to change this, you have to change the configuration file of the MySQL server. With this tutorial we want to show you how to manage this. As Default Storage Engine we are using InnoDB.

Start MAMP PRO.
Stop the MAMP PRO server if it is running. 
Select File > Edit Template > MySQL my.cnf 

An editor window appears.
If a warning message appears confirm with OK.
Find the section "[mysqld]"
Beneath the last line of this section add this line:
default-storage-engine = InnoDB
The section "[mysqld]" now looks like this:


Save (Apple + S) all changes made on "my.cnf"
Close the editor window (Apple + W)
Start the MAMP PRO servers.

##### 8.5 Show the Postfix log file With a text editor

Note: If you want to open the Postfix log file with a text editor, you have to make the file visible. 
Open the Terminal.app (Applications/Utilities)
Enter the following and hit Enter
defaults write com.apple.finder AppleShowAllFiles -boolean true
Restart the Finder by enter the following and hit Enter

Killall Finder
Open the file /private/var/log/mail.log with your editor.


##### 8.6 Show the Postfix log file With Console.app (recommended)

Open Console.app (Applications/Utilities)
Choose View -> Show Log List
Open the folder "FILES" in the Log List
Open the folder /private/var/log
Click the mail.log entry in the Log List
On the right side of the window you can see the content of the Postfix log file.

##### 8.7 Show Postfix Logfile Using MySQL command line

Open the Terminal.app (Applications/Utilities)
Enter the following prompt and hit Enter

tail -f /private/var/log/mail.log
You can now read the Postfix log file within the Terminal. The log file keeps updating as new entries apply.
Press "Ctrl + c" to stop the process.

##### 8.8 Connect to MySQL from PHP

The following example shows how to connect to a MySQL database using the mysqli() library:

<?php
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
?>

##### 8.9 How do I install PEAR?

Open up a terminal and type the following (replace X.X.X with your version of PHP).

$ echo "export PATH=/Applications/MAMP/bin/php/phpX.X.X/bin:$PATH" >> ~/.profile
Close your terminal session and open up another one. Type the following in the terminal window.

$ which PHP
You should see a path to one of your PHP installations.

Type the following in the terminal window.

$ pear

##### 8.10 Using MySQL command line

To use the MySQL command line, perform the following steps:

Start MAMP PRO
Start the servers
Open Terminal.app (Applications -> Utilities)
Type in an hit enter.
cd /Applications/MAMP/Library/bin
Type in and hit enter.
./mysql --host=localhost -u root -proot
Now you can use the MySQL command line. For example to show all your databases with

show databases;.
