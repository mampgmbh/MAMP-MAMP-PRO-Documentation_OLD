---
title: MAMP PRO (Mac) Documentation > WordPress Troubleshooting
description: 
layout: default-2
product: MAMP PRO Mac
language: en
---

## WordPress Troubleshooting

### I try to open up my Wordpress site and the web browser says "Cannot connect to server" ?

Confirm you are using the correct ports for your Wordpress site. Wordpress will only function properly with the same Apache port it was originally setup on. It is best to use Apache port 80 for a WordPress website.

---

### My Wordpress site does not work with Nginx.

Nginx does not use a .htaccess file. If your Wordpress site is using a .htaccess file you need to make some modifications to your nginx.conf file. In Wordpress, a .htaccess file is created when you do not use the default permalink setting. You can check your document root for a .htaccess file if you are not sure. Nginx provides a guide on how to setup your directives to [enable Nginx to work with Wordpress](https://www.nginx.com/resources/wiki/start/topics/recipes/wordpress/){:target="_blank"}.

---

### I am receiving an "Error establishing database connection" error.

Confirm your DB_NAME variable in your wp-config.php file corresponds to the database name in your MySQL database. Your wp-config.php file is located in your document root.

define('DB_NAME', 'wordpress');

Confirm your DB_USER in your wp-config.php file corresponds to your MySQL username. By default, MAMP PRO uses the 'root' user.

define('DB_USER', 'root');

Confirm your DB_PASSWORD in you wp-config.php files corresponds to your MySQL database password. By default, MAMP PRO uses 'root' as the password. Your password can be changed on the MySQL tab.

define('DB_PASSWORD', 'root');
