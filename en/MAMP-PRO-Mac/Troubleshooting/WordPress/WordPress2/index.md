---
title: MAMP PRO (Mac) Documentation > WordPress Troubleshooting
description: 
layout: default-2
product: MAMP PRO Mac
language: en
---

My Wordpress site does not work with Nginx.

Nginx does not use a .htaccess file. If your Wordpress site is using a .htaccess file you need to make some modifications to your nginx.conf file. In Wordpress, a .htaccess file is created when you do not use the default permalink setting. You can check your document root for a .htaccess file if you are not sure. Nginx provides a guide on how to setup your directives to enable Nginx to work with Wordpress{:target="_blank"}.

