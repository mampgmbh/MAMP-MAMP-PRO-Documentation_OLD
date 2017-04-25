---
title: MAMP PRO (Mac) Documentation > Settings > Hosts > Cloud
description: 
layout: default-2
product: MAMP PRO Mac
language: en
---

## Settings > Hosts > Cloud

Hosts can be synched via the cloud.

![MAMP](/en/MAMP-PRO-Mac/Settings/Hosts/Cloud/cloud.png)

### Info

Information about the current download status if this host is being synced.

### Size
  
This Represents the size of the data stored in the cloud.

---

![MAMP](/en/MAMP-PRO-Mac/Settings/Hosts/Cloud/cloudOptions.png)

*  **Save to cloud**

    When saving to the cloud, MAMP PRO archives the data from the hosts document root folder and data from the MySQL databases and tables mapped to the host into a single zip file and optionally encrypts it with your encryption key. The archive will afterwords be transferred to the cloud.

*  **Load to cloud**

    Loading data from the cloud is the reverse process: After having loaded the archive, it will be decrypted if necessary, decompressed and the data will be copied to the hosts document root folder and imported back into MySQL. 

*  **Delete from cloud**

    Delete cloud data for a host.  

*  **Link to cloud**

    Connect to an existing host already in the cloud. To link to a cloud you must use the same host name as the host in the cloud. If you cannot remember the name of the host you want to link, then check your Dropbox. The name of the host is exactly the name of the zip file in your `~/Dropbox/Apps/MAMP PRO` folder.