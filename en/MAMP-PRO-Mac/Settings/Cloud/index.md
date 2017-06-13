---
title: MAMP PRO (Mac) Documentation > Settings > Cloud
description: 
layout: default-2
product: MAMP PRO Mac
language: en
---

## Settings > Cloud (Available in MAMP PRO 4.2 or later)

Store and Load your host and database data using a cloud provider. Currently Dropbox is available for this option.

![MAMP](/en/MAMP-PRO-Mac/Settings/Cloud/cloud.png)

---

### Use Cloud with service provider

When you check this option you will be asked to log into your Dropbox account. When you have completed the login process your Dropbox will be linked to MAMP PRO. Your files will be stored in `~/Dropbox/Apps/MAMP PRO` when in the cloud. You need to individually link each host to Dropbox. Your files are not synced, you must explicitly load, store and link your hosts.

![MAMP](/en/MAMP-PRO-Mac/Settings/Cloud/dropbox.png)

---

### Before transferring data to the cloud : Always encrypt the data
  
  Use this feature to encrypt your data before moving it to Dropbox.
  
### When authorizing MAMP PRO with Dropbox : Use in-app webview
  
  View the Dropbox login page directly through the MAMP PRO app.
  
### Unattended transfers : Prevent sleeping during cloud activity
  
  Prevent sleeping when transferring data to and from the cloud.
  
---
 
### Path to log file
 
 The path to your cloud log file. Your cloud activity log is located in `Applications/MAMP PRO/logs`
 
 
 ---
 
 ### Cloud Activity

You can spot cloud related activity when you see the following:

The elephant logos in the toolbar and menubar are green. 

![MAMP](/en/MAMP-PRO-Mac/Settings/Cloud/menuBar.png)

![MAMP](/en/MAMP-PRO-Mac/Settings/Cloud/toolBar.png)

The "Cloud" entry in the sidebar.


More information on how to enable cloud activity can be found [here](../Hosts/Cloud). 

![MAMP](/en/MAMP-PRO-Mac/Settings/Cloud/sideBar.png)




