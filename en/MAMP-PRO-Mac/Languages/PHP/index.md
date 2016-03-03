---
title: MAMP PRO (Mac) Documentation
description: 
layout: default-2
product: MAMP PRO Mac
language: en
---

## Languages > PHP

PHP is a popular web scripting programming language. MAMP PRO installs several versions of the PHP script interpreter.

![MAMP](php.png)

*  **Default version**  
   Choose which PHP version to use.  

    *  **Make this version also available on the command line**  

---

*  **Mode**  
   Choose whether to use identical PHP versions for all hosts (module mode) or on a host by host basis (CGI mode).  

    *  **Identical PHP version for all hosts (module mode)**  
    *  **Individual PHP version for every host (CGI mode)**  
       In CGI Mode the PHP settings will be identical for all hosts – except for the PHP version.
       Navigate to the Hosts section to change the PHP version for each individual host.
       More information on how to change the PHP version for an individual host is covered in the "Hosts" section.  

---

*  **Cache module to speed up PHP execution**  
   PHP has several cache extensions that can help speed up execution in certain circumstances.
   This is set to "off" by default. Enabling a cache extension does not necessarily translate to greater execution speed.  

   *  **off**  
   *  **APC**  
      See [http://php.net/manual/de/book.apc.php](http://php.net/manual/en/book.apc.php){:target="_blank"}
      for more information.
   *  **eAccelerator**  
      See [http://eaccelerator.net](http://eaccelerator.net){:target="_blank"}
      for more information.
   *  **XCache**  
      See [https://xcache.lighttpd.net](https://xcache.lighttpd.net){:target="_blank"}
      for more information.
   *  **OPCache**  
      See [http://php.net/manual/en/book.opcache.php](http://php.net/manual/en/book.opcache.php){:target="_blank"}
      for more information.

---

*  **Debugger**  

    *  **Activate Xdebug**  
       Activate Xdebug to allow PHP to create debugging information during script execution.
       By default, Xdebug uses localhost and port 9000 in the PHP.ini file.

    *  **Open MacGDBp**  
       With Xdebug activated you can open the MacGDBp debugger to enable PHP debugging.
       By default, MacGDBp expects debugging information on port 9000 of localhost.
       See [http://www.bluestatic.org/software/macgdbp/](http://www.bluestatic.org/software/macgdbp/){:target="_blank"}
       for more information.  

---

*  **What to log**  
   Determine which error types should be reported.  

    *  **Display startup errors**  
       Log PHP errors that occur when Apache loads the PHP module.  

    *  **All errors and warnings**  
       All errors will be reported.  

    *  **Errors**  
       Script errors that make the further execution of the current PHP script impossible.  

    *  **Warnings**  
       General errors in the PHP environment.  

    *  **Notices**  
       Possible problems, that do not concern PHP, but which could be a notice of an error in a script.  

    *  **Other**  
       Report further error types through constants. Please turn to the PHP documentation for further information.

---

*  **Log Errors**  
   Determine if these errors should be recorded in a log file and/or displayed in the web browser window.
