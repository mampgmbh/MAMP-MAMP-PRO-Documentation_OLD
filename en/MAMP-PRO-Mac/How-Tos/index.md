---
title: MAMP PRO (Mac) Documentation
description: 
layout: default-2
product: MAMP PRO Mac
language: en
---

## How Tos

### Activating Output Buffering

1. Start MAMP PRO
2. Select File -> Edit Template -> PHP 5.x.x php.ini / PHP 5.x.x php.ini 
3. Search this line  
   `output_buffering = Off`
4. Change `Off` to `On` or to a maximum number of bytes instead (for example `4096`)
5. Save the file
6. Start servers

---

### Check the Default Storage Engine of MySQL

1. Open MAMP
2. Start the servers
3. Open Terminal.app (/Applications/Utilities)
4. Enter the following line into the terminal and hit enter:  
   `cd /Applications/MAMP/Library/bin`
5. Enter the following line into the terminal and hit enter:  
   `./mysql --host=localhost -u root -proot`
6. Enter the following line into the MySQL prompt and hit enter:  
  `USE information_schema;`
7. Enter the following line into the MySQL prompt and hit enter:  
   `SELECT * FROM engines;`
8. A table with the Storage Engines of MySQL will show up. Inside the Support column the Default Storage Engine
   has the value `DEFAULT`.
9. Enter the following line into the MySQL prompt and hit enter:  
   `exit;`

---

### Increase the PHP memory limit

1. Start MAMP PRO
2. Stop the server if it's running 
3. Choose Menu > File > Edit Template > PHP 5.x.x php.ini / PHP 5.x.x php.ini
4. The PHP ini file will be opened.
5. If a dialogue box pops up, read it and confirm with OK
6. Search (<kbd>Command</kbd> + <kbd>F</kbd>) for `memory_limit`
7. You should get the following line:  
   `memory_limit = 32M ; Maximum amount of memory a script may consume (8M)' 
8. Now you can change the default value of `32M`. For instance into `64M` or even more (like `128M`)
9. Save (<kbd>Command</kbd> + <kbd>S</kbd>) your changes.
10. Close (<kbd>Command</kbd> - <kbd>W</kbd>) the file.
11. Start the Server.

---

### Set the MySQL Default Storage Engine

The MySQL server of MAMP PRO uses the Default Storage Engine MyISAM. If you want to change this, you have to change the configuration file of the MySQL server. With this tutorial we want to show you how to manage this. As Default Storage Engine we are using InnoDB.

1. Start MAMP PRO.
2. Stop the MAMP PRO server if it is running. 
3. Select File > Edit Template > MySQL my.cnf 
4. An editor window appears.
5. If a warning message appears confirm with OK.
6. Find the section `[mysqld]`
7. Beneath the last line of this section add this line:  
   `default-storage-engine = InnoDB`
8. The section `[mysqld]` now looks like this:  
   IMAGE
9. Save (<kbd>Apple</kbd> + <kbd>S</kbd>) all changes made on "my.cnf"
10. Close the editor window (<kbd>Apple</kbd> + <kbd>W</kbd>)
11. Start the MAMP PRO servers.

---

### Show the Postfix log file With a text editor

<div class="alert" role="alert">
Note: If you want to open the Postfix log file with a text editor, you have to make the file visible.
</div>

1. Open the Terminal.app (Applications/Utilities)
2. Enter the following and hit enter:  
   `defaults write com.apple.finder AppleShowAllFiles -boolean true`
3. Restart the Finder by enter the following and hit enter:  
   `killall Finder`
4. Open the file /private/var/log/mail.log with your editor.

---

### Show the Postfix log file with Console.app (recommended)

1. Open Console.app (Applications/Utilities)
2. Choose View -> Show Log List
3. Open the folder "FILES" in the Log List
4. Open the folder /private/var/log
5. Click the mail.log entry in the Log List
6. On the right side of the window you can see the content of the Postfix log file.

---

### Show Postfix log file using command line

1. Open the Terminal.app (Applications/Utilities)
2. Enter the following prompt and hit enter  
   `tail -f /private/var/log/mail.log`
3. You can now read the Postfix log file within the Terminal. The log file keeps updating as new entries apply.
4. Press <kbd>Ctrl</kbd> + <kbd>C</kbd> to stop the process.

---

### Connect to MySQL from PHP

The following example shows how to connect to a MySQL database using the `mysqli()` library:

{% highlight php %}
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
{% endhighlight %}

---

### How do I install PEAR?

1. Open up a terminal and type the following (replace X.X.X with your version of PHP).  
   `$ echo "export PATH=/Applications/MAMP/bin/php/phpX.X.X/bin:$PATH" >> ~/.profile`
2. Close your terminal session and open up another one.
3. Type the following in the terminal window.  
   `$ which PHP`
3. You should see a path to one of your PHP installations.  
4. Type the following in the terminal window.  
   `$ pear`

---

### Using MySQL command line

To use the MySQL command line, perform the following steps:

1. Start MAMP PRO
2. Start the servers
3. Open Terminal.app (Applications -> Utilities)
4. Type in an hit enter:  
   `cd /Applications/MAMP/Library/bin`
5. Type in and hit enter:  
   `./mysql --host=localhost -u root -proot`
6. Now you can use the MySQL command line. For example to show all your databases with:  
   `show databases;`

---

### <a name="connect_using_sequel_pro"></a>How To Connect to MySQL using Sequel Pro

1. Sequel Pro can be launched via the MAMP PRO interface in the ‘MySQL’ tab. Click on the Sequel Pro icon at the bottom of the tab. The instance of Sequel Pro launched from the MAMP PRO interface resides in your Applications/MAMP folder. If your MAMP PRO download package did not come with Sequel Pro you can download it here.

2. To connect to your databases you have to fill in several required fields. Navigate to the ‘Socket’ tab.

---

### <a name="upgrade_to_mamp_pro_missing_databases"></a>How To Transfer Your Databases From MAMP To MAMP PRO 

Occasionally ...




