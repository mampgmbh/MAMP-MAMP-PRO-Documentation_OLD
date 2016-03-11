---
title: MAMP PRO (Mac) Documentation
description: 
layout: default-2
product: MAMP PRO Mac
language: en
---

## Upgrading From MAMP To MAMP PRO

The MAMP installer package has already installed both a version of MAMP and MAMP PRO. The MAMP App is located in `/Applications/MAMP`. MAMP PRO is located in `/Applications/MAMP PRO`.

MAMP and MAMP PRO share many of the same installations of servers, tools and interpreters. MAMP PRO will take over where you left off in MAMP sort of speak. If you upgraded to MySQL 5.6 in MAMP, MAMP PRO will automatically launch with MySQL 5.6 .

<div class="alert" role="alert">
Note: MAMP PRO stores its databases in a different location than the MAMP application.
</div>

---

*  **Open MAMP PRO**  

Click on the MAMPPRO.app icon in `/Applications/MAMP PRO folder`.

*  **Confirm Servers Are Running**

Press the 'Servers' button in the upper right corner to launch you servers. Your servers should lauch indicatd by 'On' under the 'Server and Services' section on the left side of the application.

Your database data is copied from your MAMP database data folder to your MAMP PRO database data location when you launch the servers in MAMP PRO for the first time. It is important to remember MAMP PRO will only copy your data once.

Your MAMP database data is located in 

`/Applications/MAMP/db`

Your MAMP PRO database data is located in 

`/Library/application data/appsolute/MAMP PRO/db`

Problems can occur if you had previously demoed MAMP PRO and launched your servers. Your data was copied over then. You will be looking at an old copy of your database data if you have now decided to purchase MAMP PRO. This can easily be solved by this one trick you just found on the internet.

1. Stop your servers and close any instances of MAMP and MAMP PRO.
2. Open your Mac Finder and navigate to `/Library/application data/appsolute/MAMP PRO`.
3. Rename your `/db` folder to `/db_bak`.
4. Open MAMP PRO and launch your servers.

When MAMP PRO launched it's servers it (re) copied database data from the MAMP location to the MAMP PRO location because it did not detect a `/Library/application data/appsolute/MAMP PRO/db` folder. You should now be looking at your current database data.

---

![MAMP](../Videos/MAMPtv.png) [Upgrading To MAMP PRO - Missing Data](https://www.youtube.com/watch?v=wBnHo1o4W8Q){:target="_blank"}

![MAMP](../Videos/MAMPtv.png) [Upgrading From MAMP To MAMP PRO](https://www.youtube.com/watch?v=KOH8bvfE0a0){:target="_blank"}
    
