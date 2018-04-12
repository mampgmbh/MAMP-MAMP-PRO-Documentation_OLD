---
title: MAMP PRO (Mac) Documentation > Settings > Hosts > Apache
description: 
layout: default-2
product: MAMP PRO Mac
language: en
---

## Settings > Hosts > Apache

Apache options can be set for the selected virtual host in the table. These options are security relevant! More information about configuring your Apache Server can be found at the [Apache website](https://httpd.apache.org/docs/2.2/){:target="_blank"}.

![MAMP](/en/MAMP-PRO-Mac/Settings/Hosts/Apache/Apache.png)

*  **Options for &lt;Directory&gt; directive**  

    *  **Indexes**  
       Activates or deactivates "directory browsing". If there is no index.html, index.php, etc in the document root,
       the content of the folder is displayed when this option is enabled. Without this option, nothing will be displayed
       or an error message will appear.

   *  **Includes**  
       Allows the use of Server Side Includes (SSI).

    *  **FollowSymLinks**  
       Allows the use of symbolic links as reference to documents in other directories. This is an elegant feature if
       you would like references to objects that are outside of the directory tree (e.g. protocol files of the web server),
       but know you want to avoid the hiding of objects through the URL tree.

    *  **SymLinksIfOwnerMatch**  
       Restricted version of "FollowSymLinks". Allows reference to objects via symbolic links only if the owner matches.

    *  **Exec-CGI**  
       Permit CGI execution.

    *  **Multiviews**  
       Allows the use or disabling of dynamic documents depending on the language.

---

*  **Additional parameters for &lt;Directory&gt; directive**  

   *  **Directory Index**  
      Determine which file Apache should serve if no filename is given in an address.
      By default it is either index.html or index.php.

*  **Additional Parameters for &lt;VirtualHost&gt; directive**  
   These directives go directly to the httpd.conf file. 


   *  **Server admin**  
      The email address Apache will send error messages to.

<div class="alert" role="alert">
Note: Watch out for typos, they will otherwise prevent Apache from starting up.
</div>

---

*  **httpd.conf file**  

   You cannot directly edit your httpd.conf file in MAMP PRO. You need to make custom configurations through your httpd.conf template file. More information on how to [configure your httpd template file](../../../Menu/File#edit_templates) can be found in our Menu > File section.

   <i class="fa fa-play-circle-o fa-lg" aria-hidden="true"></i>  [MAMP PRO and httpd.conf, php.ini, my.cnf](https://www.youtube.com/watch?v=tYLykP2CxMM){:target="_blank"}

---

*  **Additional Apache Server Configuration**

   The configuration files in the `/Applications/MAMP/conf/apache/extra/` directory can be included to add extra features or to modify the default configuration of the server. Uncomment, then edit, any of the following configuration files in your httpd.conf template file to make customizations.
   
      *  **Include /Applications/MAMP/conf/apache/extra/httpd-mpm.conf**  
       Configuration information on httpd-mpm.conf can be found [here](https://httpd.apache.org/docs/2.2/en/mpm.html){:target="_blank"}. 
      *  **Include /Applications/MAMP/conf/apache/extra/httpd-multilang-errordoc.conf**  
      *  **Include /Applications/MAMP/conf/apache/extra/httpd-autoindex.conf**  
       Configuration information on httpd-mpm.conf can be found [here](http://httpd.apache.org/docs/2.2/en/mod/mod_autoindex.html){:target="_blank"}. 
      *  **Include /Applications/MAMP/conf/apache/extra/httpd-languages.conf**  
      *  **Include /Applications/MAMP/conf/apache/extra/httpd-info.conf**  
      *  **Include /Applications/MAMP/conf/apache/extra/httpd-manual.conf**  
      *  **Include /Applications/MAMP/conf/apache/extra/httpd-dav.conf**  
      *  **Include /Applications/MAMP/conf/apache/extra/httpd-default.conf**  
     
       
      

