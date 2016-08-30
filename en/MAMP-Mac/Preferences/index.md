---
title: MAMP (Mac) Documentation
description: 
layout: default-2
product: MAMP Mac
language: en
---

## Preferences

### Start/Stop

![MAMP](StartStop.png)

*   **Start Servers**  
   The Apache/Nginx and MySQL services will start automatically when you launch MAMP.

*   **Check for MAMP PRO**  
   You will be prompted whether you want to start MAMP or MAMP Pro when this option is selected.

*   **Open Webstart Page**  
   The Webstart page will automatically open at the startup of MAMP when you select this option. See the Open Webstart Page section for more information on the MAMP start page.

*   **Stop Servers**  
   The Apache/NGinx and MySQL services will be stopped automatically when you quit MAMP.

*   **My Favorite Link**  
   A link to this address will appear on the top menu of your Webstart page.

---

### Ports

![MAMP](Ports.png)

Server programs, when addressed via the network, need to be assigned to a certain network port. This way, multiple server programs may run on one server machine. Every service has a default port: The Apache web server typically uses port 80, the MySQL database server utilises port 3306.

These ports are configurable. The default configuration for MAMP uses ports 8888 and 8889, and 7888 . That way, the MAMP servers can run alongside other servers installed on your Mac. Should ports 7888, 8888 or 8889 be in use by a different application, please change the values accordingly.

The button Set Web & MySQL ports to 80 & 3306 will set the ports to the value commonly used on the internet. The button Set MAMP ports to default will reset the ports for Apache, Nginx and MySQL to 8888, 7888 and 8889.

If you want MAMP to be available via the Internet please make sure that the configured ports are opened in your firewall.

---

### PHP

![MAMP](PHP.png)

*   **Standard Version**  
   Choose whether PHP 5.6.26 or PHP 7.0.10 is used. The available PHP versions depend on the installed version of MAMP.

*   **Cache**  
   Caching can speed up the execution of your PHP code. The default caching option is off. OPcache is only available with PHP    5.5.x, eAccelerator only with versions before 5.5.

---

### Web Server

![MAMP](WebServer.png)

*   **Web Server**
   Choose either the Apache or Nginx web server.

*   **Document Root** 
   Click on  to select where your html/PHP files and images are stored. This directory is called the document root. The default document root in MAMP is: `/Applications/MAMP/htdocs`.

---

### MySQL

![MAMP](MySQL.png)

The MySQL database server is a popular database used on production servers. MAMP comes installed with MySQL 5.6.x

---

### Open WebStart Page

![MAMP](WebStart.png)

The default MAMP start page provides links to access utilities such as phpMyAdmin, phpInfo, SQLite Manager, phpLiteAdmin, FAQ, MyFavoriteLink and the MAMP Website.

When the My Favorite Link text box is filled in, a link will appear at the top of the MAMP start page with the title 'My Favorite Link'. The My Favorite Link page can be changed using Preferences…. When using the default setting (`/MAMP/`), you will be directed to the MAMP utilities start page using the Alias definition `/MAMP/`.

If this field is left blank, you will be taken to your default document root (http://localhost:8888 in the `/Applications/MAMP/htdocs`). If you enter /subDirectory in this field, you will be taken to the `/Applications/MAMP/htdocs/subDirectory` folder via your default web browser (http://localhost:8888/subDirectory).
