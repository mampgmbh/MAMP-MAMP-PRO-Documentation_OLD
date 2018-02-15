---
title: MAMP PRO (Windows) Documentation > Upgrading from version 4.xx to version 4.xx
description: 
layout: default-2
product: MAMP PRO Windows
language: en
---

## Upgrading from version 4.xx to version 4.xx

1. Download MAMP PRO from [www.mamp.info/downloads](https://www.mamp.info){:target="_blank"}.
2. Double click on the `setup_MAMP_MAMP_PRO_4.xx.setup` file in your `Downloads` folder to start the installation process.
3. When upgrading MAMP PRO 4 your existing `C:\MAMP\htdocs\` folder will be preserved. Your existing `C:\Users\Public\Documents\Appsolute\MAMPPRO\db\` folder will be preserved by default(used by MAMP PRO). You can delete your database data to make a completely clean install of MAMP PRO 4.

![MAMP](/en/MAMP-PRO-Mac/Installation/MAMP-PRO-4xx-4xx-Upgrade/InstallDeleteDatabases.png)

4. If there has been a change to the configuration of Apache, PHP, or MySQL (A directive was modified or a new one added)    between versions of MAMP PRO and you have already made changes to your current configuration (resulting in the creation of a template file in `~/Library/application support/appsolute/MAMP PRO/templates`), MAMP PRO will ask you to save off your old templates when you upgrade.

![MAMP](/en/MAMP-PRO-Mac/Installation/MAMP-PRO-4xx-4xx-Upgrade/Templates.png)
  
Save your template files. You can use these saved template files as a guide of your previous modifications. New         (re) modifications need to be made through the MAMP PRO interface (File > Edit Templates), just as you had done previously in MAMP PRO.


