---
title: MAMP PRO (Mac) Documentation > How Tos > MySQL
description: 
layout: default-2
product: MAMP PRO Mac
language: en
---

### Install and run MongoDB

Install MongoDB and use MAMP PRO PHP to access it. Installing and running MongoDB takes several steps.

<div class="alert" role="alert">
Note: We cannot provide support for installing or maintaining MongoDB.
</div>

---

1. First compile a mongoDB extension using PECL. We have a How-To guide on how to compile your own [mongoDB extension](http://documentation.mamp.info/en/MAMP-PRO-Mac/How-Tos/General/PECL/){:target="_blank"}.

2. Download the [MongoDB Community Edition](https://www.mongodb.com/download-center#community){:target="_blank"}. After downloading you should find a mongodb-osx-xxxx.tgz file. Uncompress this file and you should have the following directory structure. 

  ![MAMP](/en/MAMP-PRO-Mac/How-Tos/MySQL/InstallMongoDB/mongoDBStructure.png)

  The resulting mongodb-osx-ssl-xxxx directory will be moved to `/usr/local`, resulting in a `/usr/local/mongodb-osx-ssl-xxxx    directory` for this How-To. A `~/mongoData` will be created to hold MongoDB data for this How-To.

3. Install MongoDB. You can find installation instructions [here](https://docs.mongodb.com/manual/tutorial/install-mongodb-on-os-x/){:target="_blank"}.

  Open your terminal and navigate to `/usr/local/mongodb-osx-ssl-xxxx/bin` directory. Run mongod and set your data directory to `~/data`.
  
  {% highlight php %}
  ./mongod --dbpath ~/data
  {% endhighlight %}
  
  
4. Download and install Composer. Information on downloading composer can be found [here](https://getcomposer.org/doc/00-intro.md){:target="_blank"}.

  Download the "Installer" file from the above link. Next create a host. In a new terminal navigate to the document root of   your new host. Move the Install file which you downloaded from the Composer website to your document root. Run the following commands in your terminal found in the Composer documentation [here](https://getcomposer.org/download/){:target="_blank"}.
 
  {% highlight php %}
  php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
    php -r "if (hash_file('SHA384', 'composer-setup.php') === '669656bab3166a7aff8a7506b8cb2d1c292f042046c5a994c43155c0be6190fa0355160742ab2e1c88d40d5be660b410') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"
  php composer-setup.php
  php -r "unlink('composer-setup.php');"
  {% endhighlight %}
  
 In your terminal type the following in your terminal.
    
    
    {% highlight php %}
    php composer.phar require mongodb/mongodb
    {% endhighlight %}
    
    
 Your document root should now look like the following.
    
    
![MAMP](/en/MAMP-PRO-Mac/How-Tos/MySQL/InstallMongoDB/documentRoot.png)
    

5. Once you have installed this, you can use the following code to insert into your database 
[here](http://php.net/manual/de/mongodb.tutorial.library.php){:target="_blank"}.


