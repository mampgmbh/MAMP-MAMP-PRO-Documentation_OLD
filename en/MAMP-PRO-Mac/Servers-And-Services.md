## Servers And Services

### Apache

The Apache Web Server installed by MAMP PRO comes with many modules pre-installed.

#### Apache Modules

The web server modules can be activated or deactivated depending on your needs. Module Description provides information pertaining to features and functions of the selected module.

If you want to use the PHP scripting language you must activate the php_module, if you want to use Python you need mod_wsgi module, Perl needs perl_module.

If you want to be able to switch to CGI mode and use multiple PHP versions you must activate cgi_module.

### Nginx

#### Activate Nginx Server

#### Use Nginx as a Proxy for Apache

#### Path To Nginx log file

### MySQL

The MySQL database server is a popular database used on production servers. An installation of MySQL is installed on your computer by MAMP PRO.

#### Change password of user “root”

The Head Database Administrator is called root. This user has unlimited access to all databases. Therefore you should set the password to one only you know.

Note: The default password of root is “root". To make things even more confusing there is also a user root inside Mac OS X. Don’t confuse them. You can also use one of the MySQL administration tools to create other MySQL users if you do not want to use almighty root.
 
#### Allow network access to MySQL

If the checkbox for Allow network access to MySQL is not checked, network access to the database is prohibited, even from programs installed locally.

Note: This is an advanced feature not need for local development.
 

#### Only from this Mac

Only programs installed on this Mac can access MySQL via network functions.

#### From other computers

MySQL will answer any network request, even from computers on the internet, depending on you network settings.

#### Path to MySQL log file

Errors occurring at startup or during execution of the MySQL server will be saved in this log file.

#### Administer MySQL 

MAMP PRO comes pre-installed with several MySQL administration tools.

phpMyAdmin is a web-based administrational tool. It allows you to change data and perform administrative duties like creating new databases.

Sequel Pro is a native Mac application. It allows you to create and visualise database schemas in addition to administrative duties.

MySQL Workbench is also a native Mac application from the makers of MySQL. It allows you to visually create database schemas in addition to administrative duties.

 

### Dynamic DNS

If you would like to make your hosts accessible from the internet (Don’t forget about security then!), but do not have a domain name that points to your Mac, you will need a Dynamic DNS Service. 

If your network is connected to the internet via a router and it can handle Dynamic DNS Services, then you don’t need to configure it with MAMP PRO. 

Otherwise you will need to register with a Dynamic DNS Service and enter the username and password into the appropriate fields. Then you will need to tell MAMP PRO when to inform the Dynamic DNS provider about a change in your Macs IP address. It may be necessary when you restart your computer or a DSL/Cable modem re/establishes a connection.

Note: To use the Dynamic DNS functions, you will need to register with one of the supported providers. This is independent of MAMP PRO and is not a service provided by appsolute GmbH.


#### User name

Enter the user name that was given to you by the provider of the Dynamic DNS Service.

#### Password

Enter the password that was given to you by the provider of the Dynamic DNS Service.

####Activate Dynamic DNS Service 

##### Never (don’t use Dynamic DNS Service)

Deactivate the "Dynamic DNS" service.

##### Automatically, when Apache starts and quits

Starts the "Dynamic DNS" service with the start of the Apache server.

##### Permanently (as a System Service running in the background)

Starts the "Dynamic DNS" service with the operating system. Only use this when your servers are running 24/7.

#### Path to Dynamic DNS Log file

All the events of the Dynamic DNS service will be recorded in a log file.

 

### Postfix


Sometimes you may need to send an email with PHP. To do so you have to configure and start Postfix. An easy way getting Postfix to run is using the configuration tool built into MAMP PRO.

#### Set domain of outgoing e-mails to
If you want to use the PHP function mail() for sending emails to your own email address (like mail@johndoe.com) you just need to open MAMP PRO, go to Server -> Postfix and add the value "johndoe.com" (without quotes and the according domain name) into the field "Domain of outgoing mail”. Only if you want to send e-mail to others you will need to fill in the other fields. In this case make sure that your e-mail provider allows the use of a Smart host.

#### Server name
Fill in your server name for outgoing emails. This could be for instance "smtp.johndoe.com" (without quotes). Ask your provider if you are unsure about the server name.

#### User
Add the user name of your mail account.

#### Password
Add the password for your email user account.

#### Authentication
Leave to “None"

Note: Some providers do not allow Smart-Hosts, like Google Mail.


