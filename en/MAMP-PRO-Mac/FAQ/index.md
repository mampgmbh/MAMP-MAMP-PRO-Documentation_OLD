---
title: MAMP PRO (Mac) Documentation
description: 
layout: default-2
product: MAMP PRO Mac
language: en
---

## FAQ

### What is MAMP PRO?

MAMP PRO is the commercial, professional grade version of the classic local server environment for Mac OS X: MAMP. Designed for professional web developers and programmers, MAMP PRO allows easy installation and administration of their development environment under Mac OS X.

---

### Are updates free of charge?

Yes, all updates in the current major version (4.x) are free of charge. To update MAMP PRO from e.g. 4.1.2 to 4.9 just use the serial number you already have. Licenses are good forever, they are not on a subscription basis.

---

### Is MAMP PRO compatible with Mac OS X 10.11 (El Capitan)?

Yes, MAMP PRO is indeed compatible with Mac OS X 10.11 (El Capitan).

---

### Can I use MAMP at the same time as MAMP PRO?

Both applications, MAMP as well as MAMP PRO, are configuration tools for the tools inside the folder MAMP. Though you could run them simultaneously you should not. You may run into sporadic problems, even data loss can occur.

---

### Which PHP modules are included?

To find out which PHP modules are included click on the (i) button in the host section when the servers are running. It will open a web page showing information about the selected PHP software.

---

### Where do I find my registration number?

Open  MAMP PRO > About MAMP PRO in the menu.

---

### Is it possible to add an updated version of PHP?

Compiled binaries of the PHP interpreter can be found at [https://www.mamp.info/en/downloads/](https://www.mamp.info/en/downloads/){:target="_blank"}. Drop this downloaded folder into your `/Applications/MAMP/bin/php` directory. Close and re-open your MAMP PRO application. Your new PHP version should now appear in the PHP drop down menu. MAMP PRO will only support PHP versions from the downloads page.

---

### Can the port assignment be the same for MAMP and MAMP PRO?

You can set the same ports for MAMP and MAMP PRO but it is not recommended to run both applications at the same time.

---

### Where should I store my HTML and PHP pages?

By default, PHP and HTML Pages should be stored inside the MAMP `/Applications/MAMP/htdocs` folder. This folder is called "Document Root". The location of the document root folder can be changed in the host settings. Each additional host should have their own document root folder.

---

### Is the ImageMagick PHP module included?

The ImageMagick PHP module is included by default, but you must enable it inside the php.ini template file. Remove the `;` from the following line. You can reach your template file via File > Edit Template.

`;extension=imagick.so`

---

### Which Apache modules are included?

Apache modules are located in the `/Applications/MAMP/Library/modules` folder.

---

### Is it possible to install MAMP PRO on an external drive?

No, MAMP PRO (as well as MAMP) has to be installed on the system drive.

---

### Will MAMP work if the MAMP folder is not located in the Applications directory?

No. In order to work properly the MAMP folder has to be located in the Applications folder.

---

### Are the amount of virtual hosts aliases limited?

No, with MAMP PRO you can use as many hosts and aliases as you like.

---

### Where can I find the log files?

Your log files are located in `/Applications/MAMP/logs`. You can access the various logs through the MAMP PRO interface.

---

### Where exactly are the MAMP PRO files created or changed?

The following list contains all files which are created and changed by MAMP PRO and are not located within the MAMP PRO folder.

*  **MAMP PRO Settings and Files**  
    * /Library/Application Support/appsolute/MAMP PRO
    * ~/Library/Application Support/appsolute/MAMP PRO
    * ~/Library/Preferences/de.appsolute.mamppro.plist  
  
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
   
   *  **Content Management Systems** 
   
   [DNS-O-Matic](https://dnsomatic.com){:target="_blank"} 
   
   [no-ip](https://no-ip.com){:target="_blank"}    
   
   [dyn](https://dyn.com){:target="_blank"} 
   
   [easydns](https://easydns.com){:target="_blank"}
   
   


