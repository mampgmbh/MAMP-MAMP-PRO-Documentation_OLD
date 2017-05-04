---
title: MAMP PRO (Mac) Documentation > WordPress Troubleshooting
description: 
layout: default-2
product: MAMP PRO Mac
language: en
---

## WordPress Troubleshooting

### I try to open up my Wordpress site and the web browser says "Cannot connect to server" ?

Confirm you are using the correct ports for your Wordpress site. Wordpress will only function properly with the same Apache port it was originally setup on. It is best to use Apache port 80 for a WordPress website.

---

### My Wordpress site does not work with Nginx.

Nginx does not use a .htaccess file. If your Wordpress site is using a .htaccess file you need to make some modifications to your nginx.conf file. In Wordpress, a .htaccess file is created when you do not use the default permalink setting. You can check your document root for a .htaccess file if you are not sure. Nginx provides a guide on how to setup your directives to -[enable Nginx to work with Wordpress](https://www.nginx.com/resources/wiki/start/topics/recipes/wordpress/){:target="_blank"}.



