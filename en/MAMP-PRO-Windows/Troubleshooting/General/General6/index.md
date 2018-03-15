---
title: MAMP PRO (Windows) Documentation > General Troubleshooting
description: 
layout: default-2
product: MAMP PRO Windows
language: en
---

## Uninstall and completely delete MAMP PRO and MAMP


This procedure will delete all Mamp and Mamp Pro files created by installation procedure, all configurations, settings, essential hosts information, serial keys, executables, libraries; so please use it with caution.

Note: This assumes that your Windows OS was installed by default on C:\ drive. If it was not on C:\ drive please adjust paths accordingly.

Procedure is following:

- If you have MAMP PRO icon on desktop, right click on icon and check location of MAMP PRO executable (most probably it is in C:\MAMPPRO\). Write down folder location.
- If MAMP PRO is located in C:\MAMPPRO\, MAMP is located on same folder level (most probably C:\MAMP\). Write down also location of MAMP folder.
- Uninstall MAMP & MAMP PRO by using supplied unistall program. You can find uninstall program in Control Panel Add/Remove applet.
- after uninstalling, delete installation folders for MAMP and MAMP PRO (probably they are C:\MAMP\ and C:\MAMPPRO\)

After deleting all Mamp and Mamp Pro folders go to folder:

C:\Users\Public\Documents\Appsolute\

delete folder 'MAMPPRO'.

Then go to the following folder:

C:\Users\[username]\AppData\Roaming\Appsolute\

also delete folder 'MAMPPRO'.

Note: You should instead of [username] use your local username on computer (try to browse with Windows Explorer).

If private folders are not visible you should open Folder Options from Control Panel:
Control panel->Folder Options->View-> check 'Show hidden files, folders and drives'

