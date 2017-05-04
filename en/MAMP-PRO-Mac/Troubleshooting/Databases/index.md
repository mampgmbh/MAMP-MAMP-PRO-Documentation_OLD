---
title: MAMP PRO (Mac) Documentation > MySQL and Database Troubleshooting
description: 
layout: default-2
product: MAMP PRO Mac
language: en
---

## MySQL and Database Troubleshooting

### My MySQL Server will not start?

The most common problem with MySQL Server not starting is another mysql service running on the same port. I may also be a mysql process started by MAMP PRO previously did not shut down properly when you quit MAMP PRO. To check this do the following. 

1. Quit MAMP PRO.
2. Open the Activity Monitor located in your /Applications/Utilities folder.
3. Type "mysqld" into the search field on the top right.
4. Quit every process you find after your search.
5. Restart MAMP PRO.
6. If MySQL still refuses to start check the log file for error messages.

### My MySQL Server will not start and I am getting the following error in my mysql error log located in /Applications/MAMP/logs .

10:12:32 1753 [Note] InnoDB: The log sequence numbers 609248312 and 609248312 in ibdata files do not match the log sequence number 609248322 in the ib_logfiles!


1. Quit MAMP PRO.
2. Go to your `/Library/application support/appsolute/MAMP PRO/db/mysql56` directory.
3. Rename both ib_logfile0 and ib_logfile1.

