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

### Are updates free of charge?

Yes, all updates in the current major version (3.x) are free of charge. To update MAMP PRO from e.g. 3.1.2 to 3.9 just use the serial number you already have. Licenses are good forever, they are not on a subscription basis.

### Is MAMP PRO compatible with Mac OS X 10.11 (El Capitan)?

Yes, MAMP PRO is indeed compatible with Mac OS X 10.11 (El Capitan).

### Can I use MAMP at the same time as MAMP PRO?

Both applications, MAMP as well as MAMP PRO, are configuration tools for the tools inside the folder MAMP. Though you could run them simultaneously you should not do it. You would run into sporadic problems, even data loss may occur.

### Which PHP modules are included?

To find out which PHP modules are included click on the (i) button in the host section when the servers are running. It will open a web page showing information about the selected PHP software.

### Where do I find my registration number?

Open the dialog File/About MAMP PRO, it is shown there.

### Is it possible to add an updated version of PHP?

Compiled binaries of the PHP interpreter can be found at [https://www.mamp.info/en/downloads/](https://www.mamp.info/en/downloads/){:target="_blank"}. Drop this downloaded folder into your `/Applications/MAMP/bin/php` directory. Close and re-open your MAMP PRO application. Your new PHP version should now appear in the PHP drop down menu. MAMP PRO will only support PHP versions from the downloads page.

### Can the port assignment be the same for MAMP and MAMP PRO?

You can set the same ports for MAMP and MAMP PRO but it is not recommended to run both applications at the same time.

### Can I use MAMP at the same time as MAMP PRO?

Both applications, MAMP as well as MAMP PRO, are configuration tools for the tools inside the folder MAMP. Though you could run them simultaneously you should not do it. You would run into sporadic problems, even data loss may occur.

### Where should I store my HTML and PHP pages?

By default, PHP and HTML Pages should be stored inside the MAMP `/Applications/MAMP/htdocs` folder. This folder is called "Document Root". The location of the document root folder can be changed in the host settings.

### Is the ImageMagick PHP module included?

The ImageMagick PHP module is included by default, but you must enable it inside the php.ini template file. Remove the `;` from the following line. You can reach your template file via File > Edit Template.

`;extension=imagick.so`

### Which Apache modules are included?

Apache modules are located in the `/Applications/MAMP/Library/modules` folder.

### Is it possible to install MAMP PRO on an external drive?

No, MAMP PRO (as well as MAMP) has to be installed on the system drive.

### Will MAMP work if the MAMP folder is not located in the Applications directory?

No. In order to work properly the MAMP folder has to be located in the Applications folder.

### Are the amount of virtual hosts aliases limited?

No, with MAMP PRO you can use as many hosts and aliases as you like.

### Where can I find the log files?

Clicking the black right arrow will open the log file in the Console application.

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
