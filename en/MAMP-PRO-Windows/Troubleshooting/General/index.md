---
title: MAMP PRO (Windows) Documentation > General Troubleshooting
description: 
layout: default-2
product: MAMP PRO Windows
language: en
---

## General Troubleshooting

### The last time I opened Extras there was a Content Management System that is now not available?

This could be due to several reasons. Please check your Internet connection. If it is not working MAMP PRO will use only show Extras that you have previously installed. An Extra will be missing if the PHP version a host uses does not meet the requirements of an Extra. Do you have enough free disk space available? Some Extras can only be installed once per host. e.g. webEdition.

---

### My Apache Server will not start?

The most common problem with Apache Server not starting is another mysql service running on the same port. To check this

1. Quit MAMP PRO.
2. Open the Activity Monitor located in your /Applications/Utilities folder.
3. Type "httpd" into the search field on the top right.
4. Quit every process you find after your search.
5. Restart MAMP PRO.
6. If Apache still refuses to start check the log file for error messages.

---

### When I type http://localhost in my browser it brings me to Google search?

You must include the port number when you type a your localhost url into the browser.

e.g. http://localhost:8888

What appears in your browser window thereafter may be shortened to localhost depending on the browser settings.

You can open up your localhost or additional hosts through the MAMP PRO interface. With your host highlighted, press the ![MAMP](../../First-Steps/BlackArrow.png) button button on the [Hosts > General](../../Settings/Hosts/General#open_host) tab.

---

### Changes to my php.ini file and/or my httpd.conf file are not showing up when I restart MAMP PRO.

You must edit the httpd.conf, nginx.conf, php.ini and my.cnf files through the [Template Editor](../../Menu/File) provided by MAMP PRO. Go to File -> Edit Template to edit template files.

---

<a name="host_permissions"></a> 

### MAMP PRO is not allowing me to set sub-directories of my home(~) directory as a document root?

In most cases, changing your server launch users to "User" will make your permissions less restrictive and allow you to use a wider range of directories as your document root. To change your server launch users go to your [Settings > Ports](../../Settings/Ports) tab and change the "Run Servers As:" option to "User".  

