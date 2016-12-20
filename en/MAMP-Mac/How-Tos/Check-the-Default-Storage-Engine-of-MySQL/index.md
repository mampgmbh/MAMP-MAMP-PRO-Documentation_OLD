---
title: MAMP (Mac) Documentation > How Tos > Check the Default Storage Engine of MySQL
description: 
layout: default-2
product: MAMP Mac
language: en
---

## How Tos > Check the Default Storage Engine of MySQL

- Open MAMP
- Start the servers
- Open Terminal.app located in the `/Applications/Utilities` directory.
- Enter the following line into the terminal and hit Enter 
    `cd /Applications/MAMP/Library/bin`
- Enter the following line into the MySQL prompt and hit Enter 
    `./mysql --host=localhost -u root -proot`
- Enter the following line into the MySQL prompt and hit Enter 
    `USE information_schema;`
- Enter the following line into the MySQL prompt and hit Enter 
    `SELECT * FROM engines;`
- A table with the Storage Engines of MySQL will show up. Inside the Support column the Default Storage Engine has the value DEFAULT.
- Enter the following line into the MySQL prompt and hit Enter 
    `exit;`
