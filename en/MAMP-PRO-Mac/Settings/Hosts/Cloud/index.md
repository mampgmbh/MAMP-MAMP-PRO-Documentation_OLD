---
title: MAMP PRO (Mac) Documentation > Settings > Hosts > Cloud
description: 
layout: default-2
product: MAMP PRO Mac
language: en
---

## Settings > Hosts > Cloud (Available in MAMP PRO 4.2 or later) 

Hosts can be stored into and loaded from the cloud. MAMP PRO will save both your document root folder and database data. Your data for each individual host is saved in a single zip file in `~/Dropbox/Apps/MAMP PRO`.

![MAMP](/en/MAMP-PRO-Mac/Settings/Hosts/Cloud/cloud.png)


To expand and view your host settings press the "Arrow" button. To view your cloud options press the "Cloud" button.

![MAMP](/en/MAMP-PRO-Mac/Settings/Hosts/Cloud/openCloudHostOptions.png)

---

### Old data

You will see the following icon when your local data is older than the date stored on the cloud.



### Info

Information about the current download status of your host. The up arrow represents the latest "Save To" date, and the down arrow represents the latest "Load From" date.

![MAMP](/en/MAMP-PRO-Mac/Settings/Hosts/Cloud/info.png)

### Size
  
Represents the size of your data stored in the cloud.

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
    
*  **Resolve name change**

      Resolve name changes of your hosts. 
