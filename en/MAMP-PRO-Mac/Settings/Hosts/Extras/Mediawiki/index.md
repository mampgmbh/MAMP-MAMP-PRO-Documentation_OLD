---
title: MAMP PRO (Mac) Documentation > Settings > Hosts > Extras > Mediawiki
description: 
layout: default-2
product: MAMP PRO Mac
language: en
---

## Settings > Hosts > Extras > Mediawiki

MediaWiki is a free software open source wiki package written in PHP, originally for use on Wikipedia. It is now also used by several other projects of the non-profit Wikimedia Foundation and by many other wikis. You can find more information about MediaWiki [here](https://www.mediawiki.org){:target="_blank"}.

![MAMP](/en/MAMP-PRO-Mac/Settings/Hosts/Extras/MediaWiki/MediaWiki.png)

*  **Name of Wiki:**  
   Your Wiki a descriptive name.

*  **Email address:**  
   Your email address.
   <div class="alert" role="alert">
   Note: You must enter a valid email address to setup a Mediawiki installation.
   </div>
*  **Directory:**  
   The installation directory. If it is left blank the Mediawiki files will be copied directly to the document root folder. If you provide a name, a subdirectoy will be created and your Mediawiki files will be placed in this directory. 
   <div class="alert" role="alert">    
   Note: Do not install over a previous installation of Mediawiki! Files will be overwritten without warning.  
   </div>

*  **Table prefix:**  
   Mediawiki can use a table prefix to manage multiple forums in a single database.

*  **Database name:**  
   Set the name of your database schema which will be added to your local database.  
   After installation you can view this database using phpMyAdmin, Sequel Pro, or MySQLWorkbench. 
 
*  **Username:**  
   Use this username to log into the admin area of your Mediawiki installation.  
   <div class="alert" role="alert">
   Note: You will need this username to login into your new of Mediawiki blog, please write this down.
   </div>

*  **Password:**  
   Use this password to log into the admin area of your MediaWikin installation.  
   <div class="alert" role="alert">   
   Note: You will need this password to login into your new Mediawiki blog, please write this down.
   </div>

When you are done filling out all the required fields Mediawiki will be downloaded into your host directory. A database will be created using the database name you entered.

![MAMP](/en/MAMP-PRO-Mac/Settings/Hosts/Extras/MediaWiki/MediaWikiInstalled.png)

The <document root> indicates you installed Mediawiki directly in the document root and not a subfolder. mediawiki_1 indicates the database name and (wiki_) indicates the table prefix name. You can go directly to your host site by pressing the 'manage...' button






