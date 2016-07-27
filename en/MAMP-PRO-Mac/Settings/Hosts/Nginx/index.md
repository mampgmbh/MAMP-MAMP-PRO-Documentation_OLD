---
title: MAMP PRO (Mac) Documentation
description: 
layout: default-2
product: MAMP PRO Mac
language: en
---

## Settings > Hosts > Nginx

Nginx options can be set for the selected virtual host in the table. These options are security relevant!

![MAMP](Nginx.png)

*  **Directory index**  

   Determine which file Apache should serve if no filename is given in an address. By default it is either index.html or index.php.
   
*  **AutoIndex**

   Activates or deactivates "directory browsing". If there is no index.html, index.php, etc in the document root, the content of the folder is displayed when this option is enabled. Without this option, nothing will be displayed or an error message will appear.

*  **Access Limits**  

    *  **allow**  
    *  **deny**  
    
*  **Additional parameters for &lt;server&gt;**

Add additional parameters to the &lt;server&gt; directive here.  

<div class="alert" role="alert">
Note: Watch out for typos, they will otherwise prevent Nginx from starting up.
</div>

