---
title: MAMP PRO (Windows) Documentation > General Troubleshooting
description: 
layout: default-2
product: MAMP PRO Windows
language: en
---

## General Troubleshooting




### Changes to my php.ini file and/or my httpd.conf file are not showing up when I restart MAMP PRO.

You must edit the httpd.conf, nginx.conf, php.ini and my.cnf files through the [Template Editor](../../Menu/File) provided by MAMP PRO. Go to File -> Edit Template to edit template files.

---

<a name="host_permissions"></a> 

### MAMP PRO is not allowing me to set sub-directories of my home(~) directory as a document root?

In most cases, changing your server launch users to "User" will make your permissions less restrictive and allow you to use a wider range of directories as your document root. To change your server launch users go to your [Settings > Ports](../../Settings/Ports) tab and change the "Run Servers As:" option to "User".  

