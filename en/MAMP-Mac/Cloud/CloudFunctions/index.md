---
title: MAMP (Mac) Documentation > Cloud Functions
description: 
layout: default-2
product: MAMP Mac
language: en
---

### Store and Load

Store and load your host and database data using a cloud provider. Currently Dropbox is available for this option. It is not necessary to install Dropbox software to use this feature, you only need a Dropbox account. After you log into Dropbox and choose your settings you can save and load your hosts using the functionality in the hosts table. More information on your host cloud functions can be found [here](../Hosts/Cloud). 

<div class="alert" role="alert">
Note: Your files will not be synced automatically, you must manually load, store and link your hosts using the load and store commands from the menu.
</div>

---

### Preferences



---

### Before transferring data to the cloud : Always encrypt the data
  
  Use this feature to encrypt your data before moving it to Dropbox. You can encrypt all data before transferring it to the cloud, using the Advanced Encryption Standard (AES) and an encryption key you provide. The key will be stored in the systems keychain. You cannot set the encryption key if there is cloud activity.
  
  <div class="alert" role="alert">
  When you set encryption your files will be stored on Dropbox with a .encryptedzip extension. Previously stored hosts will keep their .zip, unencrypted extension, until the are reloaded to the cloud.
  </div>
  

