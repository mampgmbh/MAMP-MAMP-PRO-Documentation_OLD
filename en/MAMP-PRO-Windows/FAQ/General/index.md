---
title: MAMP PRO (Mac) Documentation > FAQ > General
description: 
layout: default-2
product: MAMP PRO Mac
language: en
---

## FAQ - General


### Are updates free of charge?

Yes, all updates in the current major version (4.x) are free of charge. To update MAMP PRO from e.g. 4.1.2 to 4.9 just use the serial number you already have. Licenses are good forever, they are not on a subscription basis.

---

### Is MAMP PRO compatible with Windows 10?

Yes, MAMP PRO is compatible with Windows 10.

---

### Can I use MAMP at the same time as MAMP PRO?

Both applications, MAMP as well as MAMP PRO, are configuration tools for the tools inside the folder MAMP. Though you could run them simultaneously you should not. You may run into sporadic problems, even data loss can occur.

---

### Is it possible to add an updated version of PHP?

You can add additional PHP versions through the user interface.  More information on how to do this can  be  found [here](../../Languages/PHP).

---

### Is the ImageMagick PHP module included?

The ImageMagick PHP module is included by default, but you must enable it using the [PHP tab](../../Languages/PHP) in MAMP PRO. 

---

### Which Apache modules are included?

Apache modules are located in the `C:\MAMP\Library\modules` folder.

---

### Will MAMP work if the MAMP folder is not located in the Applications directory?

No. In order to work properly the MAMP folder has to be located in the Applications folder.

---


---

### Where can I find the log files?

Your log files are located in `C:\MAMP\logs`. You can access the various logs through the MAMP PRO interface.

---

### Where exactly are the MAMP PRO files created or changed?

The following list contains all files which are created and changed by MAMP PRO and are not located within the MAMP PRO folder.

*  **MAMP PRO Settings and Files**  
    * /Library/Application Support/appsolute/MAMP PRO
    * ~/Library/Application Support/appsolute/MAMP PRO
    * ~/Library/Preferences/de.appsolute.mamppro.plist 
    * ~/Library/Preferences/de.living-e_to_appsolute.mampro.plist
    * ~/Library/Preferences/de.appsolute.MAMP.plist
  
*  **MySQL**  
    * /Library/Application Support/appsolute/MAMP PRO/db/mysql  
  
*  **Dynamic DNS**  
    * /Library/LaunchDaemons/de.appsolute.mamp_dyndns.plist
    * ~/Library/LaunchAgents/de.appsolute.mamp_dyndns.plist  
  
*  **Autostart at system start**  
    * /Library/StartupItems/MAMP/MAMP
    * /Library/StartupItems/MAMP/StartupParameters.plist  
  
*  **Postfix**  
    * An existing postfix configuration will be backed up to `/etc/postfix/MAMP_backup` before writing a new config file.  

---

### What are the locations of the configuration files.

The changes you make in the MAMP PRO interface and template files help create real configuration files. The configuration files are created when you start your servers.

*  **PHP**  
/Library/Application Support/appsolute/MAMP PRO/conf/php.ini

*  **MySQL**  
/Applications/MAMP/tmp/mysql/my.cnf

*  **Apache**  
/Library/Application Support/appsolute/MAMP PRO/conf/httpd.conf

*  **Apache-SSL**  
/Library/Application Support/appsolute/MAMP PRO/conf/httpd-ssl.conf

*  **Nginx**  
/Library/Application Support/appsolute/MAMP PRO/conf/nginx.conf

---

### Where can I find more information on the various servers, interpreters, debuggers and other tools that MAMP PRO uses?

Click on the following links for further information on

*  **Servers & Services**  

   [Apache Server](https://httpd.apache.org){:target="_blank"}
  
   [Nginx Server](https://httpd.apache.org){:target="_blank"}

   [MySQL](https://www.mysql.com){:target="_blank"}

*  **Languages**  

   [PHP](http://php.net){:target="_blank"}

   [Ruby](http://www.ruby-lang.org/en/){:target="_blank"}

   [Perl](https://www.perl.org){:target="_blank"}

   [Python](https://www.python.org){:target="_blank"}
   
*  **Cache Options & Debugger**   
  
   [MacGDP](http://www.bluestatic.org/software/macgdbp/){:target="_blank"}

   [APC](http://php.net/manual/en/book.apc.php){:target="_blank"}

   [eaccelerator](http://eaccelerator.net){:target="_blank"}

   [xcache](https://xcache.lighttpd.net){:target="_blank"}

   [opcache](http://php.net/manual/en/book.opcache.php){:target="_blank"}
   
*  **Database Administration**   

   [phpMyAdmin](https://www.phpmyadmin.net){:target="_blank"}

   [Sequel Pro](http://www.sequelpro.com){:target="_blank"}

   [MySQL Workbench](http://mysqlworkbench.org){:target="_blank"}
   
*  **Content Management Systems** 

   [WordPress](https://wordpress.org){:target="_blank"}
   
   [Joomla](https://www.joomla.org){:target="_blank"}
   
   [Drupal](https://www.drupal.org){:target="_blank"}
   
   [webEdition](http://www.webedition.org){:target="_blank"}
   
   [Magento](https://magento.com){:target="_blank"}
   
   [Mediawiki](https://www.mediawiki.org/wiki/MediaWiki){:target="_blank"}
   
   [phpBB](https://www.phpbb.com){:target="_blank"}
   
   [PrestaShop](https://www.prestashop.com){:target="_blank"}
   
   
*  **Dyn DNS Providers**
   
   [DNS-O-Matic](https://dnsomatic.com){:target="_blank"} 
   
   [no-ip](https://no-ip.com){:target="_blank"}    
   
   [dyn](https://dyn.com){:target="_blank"} 
   
   [easydns](https://easydns.com){:target="_blank"}
   
   


