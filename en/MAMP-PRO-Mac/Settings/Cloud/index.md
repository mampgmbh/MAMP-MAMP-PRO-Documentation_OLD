---
title: MAMP PRO (Mac) Documentation > Settings > Cloud
description: 
layout: default-2
product: MAMP PRO Mac
language: en
---

## Settings > Cloud

Sync your host and database data through a cloud provider.

### Linking your cloud account



---

### Overview

---

![MAMP](cloud.png)

### Use Cloud with service provider

Use Dropbox to move your files to the cloud.

---



*  **Before transferring data to the cloud : Always encrypt the data**
  
  Use this feature to encrypt data ...
  
*  **When authorizing MAMP PRO with Dropbox : Use in-app webview**
  
  View the Dropbox login page directly through the MAMP PRO app
  
*  **Unattended transfers : Prevent sleeping during cloud activity**
  
  Prevent sleeping ...
  
---

*  **Save**

    When saving to the cloud, MAMP PRO archives the data from the hosts document root folder and data from the MySQL databases    and tables mapped to the host into a single zip file and optionally encrypts it with your encryption key. The archive will  afterwoods be transferred to the cloud.

*  **Load**

    Loading data from the cloud is the reverse process: After having loaded the archive, it will be decrypted if necessary, decompressed and the data will be copied to the hosts document root folder and imported back into MySQL. 

*  **Delete**

    If you want to delete a host from the cloud its data can be retrieved using the Dropbox versioning functions.
  
*  **Desktop Folder Icon**

    Show the desktop in Finder.

*  **Link**
  
    

*  **Save**

  If you want to peek into the data that's currently stored in the cloud for the selected host, use this function. The decrypted and uncompressed archive will be saced to the desktop.

*  **Load**

    If you want to know what gets transferred into the cloud, try this function. It also helps you determine how much free space you need in the cloud. The archive will be saved to the desktop.




  



