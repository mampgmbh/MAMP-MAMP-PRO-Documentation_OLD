---
title: MAMP PRO (Mac) Documentation
description: 
layout: default-2
product: MAMP PRO Mac
language: en
---

## Settings > Ports

Server programs, when addressed via the network, need to be assigned to a certain network port. This way, multiple server programs may run on one server machine. Every service has a default port: The Apache web server typically uses port 80, the MySQL database server utilises port 3306.

These ports are configurable. The default configuration for MAMP PRO uses ports 8888, 8889 and 8890. That way, the MAMP servers can run alongside other servers installed on your Mac. Should ports 8888, 8889 or 8890 be in use by a different application, please change the values accordingly.

The button `Set ports to 80, 443 & 3306` will set the ports to the value commonly used on the internet. The button `Set default MAMP ports` will reset the ports for Apache, Nginx and MySQL to 8888, 8889 and 8890.

![MAMP](Ports.png)

*  **Run servers as:**  
   Production servers typically use www/msql to run Apache, Nginx and MySQL. These users may not have the right to access your files, therefore it’s generally a good idea to run them under your own username.  
   
   <div class="alert" role="alert">
   Note: You should only start the servers with your own user name when the machine is adequately protected against
   malicious attacks from the internet. Malicious scripts on your server may enable unlimited access to your personal data.
   </div>

*  **Start servers at system start**  
   Apache, Nginx and MySQL are started during startup of the OS, this means that the services are available before a user
   has logged into the system.

*  **Start servers at startup of MAMP PRO**  
   The services will start automatically at startup of MAMP PRO.

*  **Stop servers at shutdown of MAMP PRO**  
   The services will be stopped automatically when MAMP PRO shuts down.

*  **Delete log files at server startup**
   The log files will be emptied before startup of the services. That way only current entries will be in the log files.
