---
title: MAMP (Mac) Documentation > FAQ
description: 
layout: default-2
product: MAMP Mac
language: en
---

## FAQ

### How do I access my preferences?

You can access your preferences through the menu bar. Got to MAMP > Preferences. 

---

#### Is MAMP compatible with Mac OS X 10.11 (El Capitan), Mac OS 10.12 (Sierra), and Mac OS 10.13 (High Sierra)?

Yes, MAMP is compatible with all of these operating systems. 

---

### Where can I download MAMP?

Get the latest version of MAMP from our website [https://www.mamp.info/en/downloads/](https://www.mamp.info/en/downloads/){:target="_blank"}.

---

### Where can I find the log files?

All log files are stored in: `/Applications/MAMP/logs/`.

---

### Which Apache modules are included?

Apache modules are located in the `/Applications/MAMP/Library/modules` folder.

---

### Which PHP modules are included?

To find out which PHP modules are included, use the following procedure:

Start the servers and direct your web browser to http://localhost:8888/MAMP/.
Click on the phpInfo tab at the top of page.

---

<a name="cloud"> </a>

### What does the following warning message mean when I load cloud data?

![MAMP](/en/MAMP-Mac/FAQ/DatabaseWarning.png)

This is only a warning message indicating that the MySQL user associated with the database getting loaded from the cloud already exists on your local machine.

---

### What does the following error message mean when I save cloud data?

![MAMP](/en/MAMP-Mac/FAQ/DatabaseError.png)

The following error message means the database you are attempting to save to the cloud does not have a MySQL user associated with it. You must first associate a user with this database in order to save it to the cloud.


