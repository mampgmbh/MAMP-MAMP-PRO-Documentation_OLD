## 9. Troubleshooting

##### The last time I opened Extras there was a Content Management System that is now not available?

This could be due to several reasons. Please check your Internet connection. If it is not working MAMP PRO will use only show Extras that you have previously installed. An Extra will be missing if the PHP version a host uses does not meet the requirements of an Extra. Do you have enough free disk space available? Some Extras can only be installed once per host. e.g. webEdition.

##### My Content Management System stopped working without any indication of what is wrong?

Most content management systems store the host location, including the port number, in their database. If an CMS is setup with an Apache port of 8888, then this port must be used every time the CMS is used. Changing the port may result in a blank screen in your browser, and a vague error message.

##### I setup up Wordpress and it is asking for a username and password?

Your default Wordpress username and password when setup through MAMP PRO are admin/admin.

##### My Apache Server will not start?

The most common problem with Apache Server not starting is another mysql service running on the same port. To check this

Quit MAMP PRO.
Open the Activity Monitor located in your /Applications/Utilities folder.
Type "httpd" into the search field on the top right.
Quit every process you find after your search.
Restart MAMP PRO.
If Apache still refuses to start check the log file for error messages.

##### When I type http://localhost in my browser it brings me to Google search?

You must include the port number when you type a your localhost url into the browser.

e.g. http://localhost:8888

What appears in your browser window thereafter may be shortened to localhost depending on the browser settings.

##### Changes to my php.ini file and/or my httpd.conf file are not showing up when I restart MAMP PRO.

You must edit the httpd.conf, php.ini and my.cnf files through the Template Editor provided by MAMP PRO. Go to File -> Edit Template to edit template files.

##### My MySQL Server will not start?

The most common problem with MySQL Server not starting is another mysql service running on the same port. To check this 

Quit MAMP PRO.
Open the Activity Monitor located in your /Applications/Utilities folder.
Type "mysqld" into the search field on the top right.
Quit every process you find after your search.
Restart MAMP PRO.
If MySQL still refuses to start check the log file for error messages.


