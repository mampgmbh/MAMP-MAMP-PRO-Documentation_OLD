---
title: MAMP PRO (Mac) Documentation > Settings > Hosts > Cloud
description: 
layout: default-2
product: MAMP PRO Mac
language: en
---

## Settings > Hosts > Cloud (Available in MAMP PRO 4.2 or later) 

Hosts can be saved to and loaded from the cloud. MAMP PRO will save both your document root folder and database data. Your data for each individual host will be saved in a single zip file in your Dropbox. It is not necessary to install Dropbox software to use this feature, you only need a Dropbox account. You can view your [Databases tab](../Databases) to confirm which databases are linked to your host.

![MAMP](/en/MAMP-PRO-Mac/Settings/Hosts/Cloud/cloud.png)

To expand and view your cloud host settings press the "Arrow" button on the bottom right of the hosts table. To view your cloud options press the "Cloud" button.

![MAMP](/en/MAMP-PRO-Mac/Settings/Hosts/Cloud/openCloudHostOptions.png)

---

### Old data

You will receive a warning when your local data is older than your cloud data.

![MAMP](/en/MAMP-PRO-Mac/Settings/Hosts/Cloud/oldDataWarning.png)

The "pencil" icon in your hosts table indicates old local data.

![MAMP](/en/MAMP-PRO-Mac/Settings/Hosts/Cloud/oldData.png)


### Info

Displays information about the current download status of your host. The up arrow represents the latest "Save To" date, and the down arrow represents the latest "Load From" date.

![MAMP](/en/MAMP-PRO-Mac/Settings/Hosts/Cloud/info.png)

### Size
  
Represents the size of your data stored in the cloud.

---


### Cloud Options

![MAMP](/en/MAMP-PRO-Mac/Settings/Hosts/Cloud/cloudOptions.png)

*  **Save to cloud**

    When saving to the cloud, MAMP PRO archives the data from the hosts document root folder and data from the MySQL databases and tables mapped to the host into a single zip file and optionally encrypts it with your encryption key. The archive will be transferred to the cloud afterwords.

*  **Load to cloud**

    Loading data from the cloud is the reverse process: After having loaded the archive, it will be decrypted if necessary, decompressed and the data will be copied to the hosts document root folder and imported back into MySQL. 

*  **Delete from cloud**

    Delete cloud data for a host.  

*  **Link to cloud**

    Connect to an existing host already in the cloud. To link to the cloud you must use the same host name as the host in the cloud. If you cannot remember the name of the host you want to link, then check your Dropbox. The name of the host is exactly the name of the zip file in your `~/Dropbox/Apps/MAMP PRO` folder.
    
*  **Resolve name change**

    You may change the name of your host that is linked to the cloud. When you change the name of your linked host, the new host name must be resolved on all other linked machines.
    
    For instance, when you change a host name from "MyHost2" to "MyHost3", your Dropbox will modify it's stored zip file name from "MyHost2.zip" to "MyHost3.zip". You will then receive the following warning on your other linked computers indicating your data is out of date.
    
    ![MAMP](/en/MAMP-PRO-Mac/Settings/Hosts/Cloud/oldData.png)
    
    You can now resolve the name difference.
    
    ![MAMP](/en/MAMP-PRO-Mac/Settings/Hosts/Cloud/resolveName.png)
    
    ![MAMP](/en/MAMP-PRO-Mac/Settings/Hosts/Cloud/resolveWarning.png)
    
  ---
  
  
  ### Cloud Options
  
  
  *  **Save To Desktop**
  
      This function will save an archive to your desktop. This can help you view what will get transferred, before sending data to the cloud, or determine how much free space you will need in the cloud.
  
  *  **Load To Desktop**
  
      This function will save a decrypted and uncompressed archive to the desktop. This can be useful if you want to peek into the data that is currently stored in the clould for the selected host. 
