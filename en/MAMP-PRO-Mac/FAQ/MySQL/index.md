---
title: MAMP PRO (Mac) Documentation
description: 
layout: default-2
product: MAMP PRO Mac
language: en
---

## FAQ - MySQL

### Where is my MySQL 5.6 database data in MAMP PRO 4 ?

Your MySQL 5.6 database data is located in /Library/Application Support/appsolute/MAMP PRO/db/mysql56

---

### What data is in my /Library/Application Support/appsolute/MAMP PRO/db/mysql folder ?

This directory contains your pre upgraded mysql data. When you upgrade to MAMP PRO 4 your mysql is duplicated and named mysql56. Your old mysql will never be used, and when you confident all your sites have been successfully upgraded to MySQL 5.6 you can delete this directory.