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



The resulting mongodb-osx-ssl-xxxx directory will be moved to `/usr/local`, resulting in a `/usr/local/mongodb-osx-ssl-xxxx directory`,  for this How-To. A `~/mongoData` will be created for this How-To.

3. Install MongoDB. You can find installation instructions [here](https://docs.mongodb.com/manual/tutorial/install-mongodb-on-os-x/){:target="_blank"}.

4. Download and install Composer. You can information [here](https://getcomposer.org/doc/00-intro.md){:target="_blank"} and [here](https://getcomposer.org/download/){:target="_blank"}.

5. Once you have installed this, you can use the following code to insert into your database 
[here](http://php.net/manual/de/mongodb.tutorial.library.php){:target="_blank"}.


