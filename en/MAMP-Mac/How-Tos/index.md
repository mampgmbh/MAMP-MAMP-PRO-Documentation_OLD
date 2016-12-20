---
title: MAMP (Mac) Documentation > How Tos
description: 
layout: default-2
product: MAMP Mac
language: en
---

## How Tos

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


