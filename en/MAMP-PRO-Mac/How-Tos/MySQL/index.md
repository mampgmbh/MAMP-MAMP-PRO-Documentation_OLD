---
title: MAMP PRO (Mac) Documentation > How Tos > MySQL
description: 
layout: default-2
product: MAMP PRO Mac
language: en
---

## How Tos > General

<a name="php_connect_mysql"></a> 

### Connect to MySQL from PHP (PHP <= 5.5.x)

{% highlight php %}

$user = 'root';
$password = 'root';
$db = 'inventory';
$host = 'localhost';
$port = 8889;

$link = mysql_connect(
   "$host:$port", 
   $user, 
   $password
);
$db_selected = mysql_select_db(
   $db, 
   $link
);

{% endhighlight %}

or using an UNIX Socket:

{% highlight php %}

$user = 'root';
$password = 'root';
$db = 'inventory';
$socket = 'localhost:/Applications/MAMP/tmp/mysql/mysql.sock';

$link = mysql_connect(
   $socket, 
   $user, 
   $password
);
$db_selected = mysql_select_db(
   $db, 
   $link
);

{% endhighlight %}

---

<a name="php_connect_mysqli"></a> 

### Connect to MySQL from PHP (PHP >= 5.6.x)

{% highlight php %}

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

{% endhighlight %}

or using an UNIX Socket:

{% highlight php %}

$user = 'root';
$password = 'root';
$db = 'inventory';
$host = '127.0.0.1';
$port = 8889;
$socket = 'localhost:/Applications/MAMP/tmp/mysql/mysql.sock';

$link = mysqli_init();
$success = mysqli_real_connect(
   $link, 
   $host,
   $user, 
   $password, 
   $db,
   $port,
   $socket
);

{% endhighlight %}

---

<a name="python_connect"></a>

### How to connect to MySQL using Python 

{% highlight php %}

import mysql.connector

config = {
  'user': 'root',
  'password': 'root',
  'host': 'localhost:8889',
  'database': 'inventory',
  'raise_on_warnings': True,
}

link = mysql.connector.connect(**config)

{% endhighlight %}


or using an UNIX Socket:

{% highlight php %}

import mysql.connector

config = {
  'user': 'root',
  'password': 'root',
  'unix_socket': '/Applications/MAMP/tmp/mysql/mysql.sock',
  'database': 'inventory',
  'raise_on_warnings': True,
}

link = mysql.connector.connect(**config)

{% endhighlight %}

---

<a name="perl_connect"></a> 

### Connect To MySQL using Perl 

{% highlight php %}

use DBI;
 
my $user = 'root';
my $password = 'root';
my $db = 'inventory';

my $link = DBI->connect(
   "DBI:mysql:database=$db", 
   $user, 
   $password
);

{% endhighlight %}

or connecting via network:

{% highlight php %}

use DBI;
 
my $user = 'root';
my $password = 'root';
my $db = 'inventory';
my $host = 'localhost';
my $port = 8889;

my $link = DBI->connect(
   "DBI:mysql:database=$db;host=$host;port=$port", 
   $user, 
   $password
);

{% endhighlight %}

<a name="connect_using_sequel_pro"></a>

---

### Connect to MySQL using Sequel Pro

1. Sequel Pro can be launched via the MAMP PRO interface in the ‘MySQL’ tab. Click on the Sequel Pro icon at the bottom of the tab. The instance of Sequel Pro launched from the MAMP PRO interface resides in your Applications/MAMP folder. If your MAMP PRO download package did not come with Sequel Pro you can download it here.

2. To connect to your databases you have to fill in several required fields. Navigate to the ‘Socket’ tab.

   ![MAMP](SequelProInterface.png)


   *  **Name:** This is the host name. The default host is ‘localhost’.

   *  **Username:** This is your MySQL username. Your MySQL username will be ‘root’ if you have not changed the default             username setup in MAMP PRO.

   *  **Password:** This is your MySQL password.Your MySQL username password will be ‘root’ if you have not changed the             default password setup in MAMP PRO.

3. Press Connect.

4. You can access your individual databases by clicking on the ‘Choose Database…’ Drop down menu.

   ![MAMP](SequelProDatabaseList.png)

---
<a name="upgrade_to_mamp_pro_missing_databases"></a>

### How to transfer database data from MAMP to MAMP PRO

1. Stop your servers and close any instances of MAMP and MAMP PRO.
2. Open your Mac Finder and navigate to `/Library/application data/appsolute/MAMP PRO`.
3. Rename your `/db` folder to `/db_bak`.
4. Open MAMP PRO and launch your servers.

When MAMP PRO launched it's servers it (re) copied database data from the MAMP location to the MAMP PRO location because it did not detect a `/Library/application data/appsolute/MAMP PRO/db` folder. You should now be looking at your current database data.

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

