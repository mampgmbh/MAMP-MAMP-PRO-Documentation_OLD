---
title: MAMP PRO (Mac) Documentation
description: 
layout: default-2
product: MAMP PRO Mac
language: en
---

## Settings

### Hosts

#### General

MAMP PRO uses virtual hosts to allow Apache to serve different websites. The virtual host `localhost` is created by default and cannot be deleted. You can add an unlimited number of hosts allowing you to create one host per project. Every host can have it's own directory to store html, php files, and images. This directory is called Document Root.

The name of a host (server name) must be unique, often it's practical to use a reverse domain naming scheme to easily identify them (e.g. use de.appsolute.mamp instead of mamp.appsolute.de). The unreversed name may conflict with an outside domain name.

To create a new host press the `Plus` button at the bottom left of the screen. Replace the default host name. The second required field to complete the setup of a new host is a location for its files document root.

Click on the folder icon to choose a document root. Use the right arrow button to open the folder in the Finder.

[pic]

The document root is also known as the web root folder. MAMP PRO will automatically add an `index.php` file and a MAMP image to this location when Apache is restarted and the folder is empty.

*  **Name**  
   The server name and port number in combination must be unique within MAMP PRO.
   The host name may only contain letters and/or numbers, as well as dashes ("-");
   but it may not begin or end with a "-" character.
   Names are not case-sensitive (upper and lower-case letters are not distinguished.)

   [pic]

   If the servers are running you can use the right arrow button to open a host in your web browser.

   [pic]

*  **IP address**  
   If this field is left empty or contains an `*` Apache will use one of the computer's IP addresses to access this host.
   If you want to choose which of the IP addresses should be associated with a host, then select it from the pop up menu.

*  **Port#**  
   Determine the port with which the virtual host is accessible. Valid values are from 1 to 65535.
   In most cases the preset value does not need to be changed.

*  **PHP version**  
   Determine which version of PHP a host will use. This can only be set when Individual PHP version
   for every host (CGI) is set in the PHP section of MAMP PRO.

   If you select the Standard PHP version MAMP PRO will automatically adapt this setting if you choose
   a new standard version in the PHP tab. Use a fixed setting to tell MAMP PRO not to alter the PHP version.

   Sounds complicated? Let's take a look at an example: The default version is set to 5.5.9. You have oneHost
   set to PHP version `Default (5.5.9)`, anotherHost set to `5.5.9` and yetAnotherHost set to `5.3.28`.
   If you set the PHP version in the PHP section to `5.4.25`, MAMP PRO will adapt the PHP version of oneHost
   to this version (it is set to always use the standard version). The other 2 hosts will not be changed.

*  **Dynamic DNS**  
   Determines, if this virtual host is accessible with the Dynamic DNS service from the internet.

*  **Use With**  
   This allows you to use these settings with Apache, Nginx, or both.

*  **Name resolution**  
   This will determine how your system will map host names to ip addresses.

    *  **via/etc host file (this Mac only)**  
       The basic mapping mechanism which uses the the file `/etc/hosts`.

    *  **via Xip.io (LAN only)**  
       Allow other computers on your local network to access your web site.
       Using the Share button you can send the Xip.io address to other users.

<div class="alert" role="alert">
Note: The Xip.io addresses will only work in your local network. They are temporary and may become invalid if you restart your Mac. Also make sure that your Internet router is not blocking Xip.io calls by using a DNS Rebind protection. If the router does this you can either deactivate this function, add Xip.io as an exception or not use the router as DNS server in your Macs network settings.
</div>
 
*  **Document root**  
   The location of the documents (HTML/PHP files etc.) of a virtual host is called a document root.

*  **Alias Name**  
   Aliases are additional names for your virtual host. The same constraints apply to these additional names as to the host itself.
   Add aliases with the plus-button.

*  **Access Rights for Document Root Directory**  
   For Apache to be able to access the files inside the document root folder and serve them to a web browser it needs adequate rights.
   If you use the user `www` to start Apache, then this user must have the right to access the files inside the document root folder.
   Typically this is not the case. You can either adapt the access rights or use the current Mac user to start Apache.

   During the development phase of a site it is easier to use the current Mac user to start Apache.
   The user `www` is generally only used on production servers.

   If Apache is reporting "access denied" in its error log or parts of your web pages are missing this might be due to
   access rights problems.

   The rights dialog of MAMP PRO looks complicated at first sight but is actually very powerful. Not only does it show you
   the access rights of the document root folder but also all the rights of all the subdirectories and files inside it.
   A "-" indicates that not all objects have the same rights.

    *  **Owner**  
       The user who owns the directory and all the subdirectories and files in it.

    *  **Group**  
       The group who has access to the directory and all the subdirectories and files in it.

    *  **Access Rights**  
       You can change directory and files access rights separately.

#### Apache

Apache options can be set for the selected virtual host in the table. These options are security relevant!

*  **Options for <Directory> directive**  

    *  **Indexes**  
       Activates or deactivates "directory browsing". If there is no index.html, index.php, etc in the document root,
       the content of the folder is displayed when this option is enabled. Without this option, nothing will be displayed
       or an error message will appear.

    *  **Includes**  
       Allows the use of Server Side Includes (SSI).

    *  **FollowSymLinks**  
       Allows the use of symbolic links as reference to documents in other directories. This is an elegant feature if
       you would like to reference to objects, that are outside of the directory tree (e.g. protocol files of the web server),
       but know you want to avoid the hiding of objects through the URL tree.

    *  **SymLinksIfOwnerMatch**  
       Restricted version of "FollowSymLinks". Allows reference to objects via symbolic links only if the owner matches.

    *  **Exec-CGI**  
       Permit CGI execution.

    *  **Multiviews**  
       Allows the use or disabling of dynamic documents depending on the language.

##### Directory Index

Determine which file Apache should serve if no filename is given in a address. By default it is either index.html or index.php.

##### Server admin

The email address Apache will send error messages to.

*  **Additional parameters for <Directory>** 

*  **Additional Parameters for <VirtualHost>**  
   These directives go directly to the httpd.conf file. 

<div class="alert" role="alert">
Note: Watch out for typos, they will otherwise prevent Apache from starting up.
</div>

#### Nginx

#### SSL

To encrypt traffic from Apache to a web browser you can use SSL.

Use "Create self-signed certificate" if you want to test SSL functionality.

If you want to secure a productive server you should get the Certificate file and the Certificate key file from a Certified Authority (CA).

#### Extras

MAMP PRO allows you to easily add popular packages to your hosts which we call Extras. Extras will always be loaded from the appsolute servers if you have an Internet connection. Over time more Extras will become available.

<div class="alert" role="alert">
Note: The availability of an Extra will be affected by your hosts PHP version, Internet connection, cached Extras and available disk space.To add an Extra, press the plus button on the lower left side of the ‘Extras’ panel. The plus button has a red circle around it if you have no Extras installed.
</div>

##### 4.1.5.1 Wordpress

_Name of the blog:_
Name your blog.

_Email address:_
Your email address.

Note: You must enter a valid email address to setup a Wordpress installation.
Directory:

The installation directory. If it is left blank the Wordpress files will be copied directly to the document root folder.

Note: Do not install over a previous installation of Wordpress! Files will be overwritten without warning
Database name:

Set the name of your database schema which will be added to your local database. After installation you can view this database for this instance of Wordpress using phpMyAdmin, Sequel Pro, or MySQLWorkbench. 
 
_Username:_
The Wordpress admin.

Note: You will need this username to login into your new of Wordpress blog, please write this down.
 
_Password:_
The Wordpress admins default password.

Note: You will need this password to login into your new Wordpress blog, please write this down.
 

##### 4.1.5.2 Joomla

Joomla installations can share a single MySQL database if you provide a unique table prefix during installation. To use an existing database enter the name of the database and a unique table prefix. To create a new database use a unique database name, table prefix must not be empty.

_Table prefix:_

Set the name of your database schema prefix. Joomla offers the ability to manage multiple websites using a single database schema. 

_Database name:_

Set the name of your database schema which will be added to your local database. After installation you can view this database for this instance of Joomla using phpMyAdmin, Sequel Pro, or MySQLWorkbench. 

##### 4.1.5.3 webEdition

webEdition will always be installed in a folder called webedition inside the document root folder.

_Table prefix:_
Set the name of your database schema prefix. webEdition offers the ability to manage multiple websites using a single database schema.

_Database name:_
Set the name of your database schema which will be added to your local database. After installation you can view this database for this instance of webEdition using phpMyAdmin, Sequel Pro, or MySQLWorkbench. 

 

Note: When a Content Management System is setup the host name and Apache port number is stored in its database. Going forward the Apache port in MAMP PRO cannot be changed. A change in the Apache port will result in breaking the CMS, returning only a vague error message. Content Management Systems usually provide a mechanism for changing the host and port names. If changes are made in the CMS, then they must also be made in MAMP PRO.
