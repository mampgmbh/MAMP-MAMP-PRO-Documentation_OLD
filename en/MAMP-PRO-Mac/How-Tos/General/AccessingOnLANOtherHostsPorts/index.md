---
title: MAMP PRO (Mac) Documentation > How Tos > General > Accessing localhost on a LAN using ports
description: 
layout: default-2
product: MAMP PRO Mac
language: en
---

### Accessing MAMP PRO hosts on A LAN using ports

You can access MAMP PRO hosts, other than localhost, on a LAN using mobile devices or other Macs.

<div class="alert" role="alert">
Note: You may have to additionally configure your router and Mac Preferences in order to access your hosts across your network. We do not provide support for this.
</div>

---

![MAMP](/en/MAMP-PRO-Mac/How-Tos/General/AccessingOnLAN/host.png)

To find your local ip go to System Preferences > Network. Your local ip address is shown under "Status". 

![MAMP](/en/MAMP-PRO-Mac/How-Tos/General/AccessingOnLAN/ip.png)

<div class="alert" role="alert">
Note: Depending on your router settings, your local ip address may change periodically.
</div>

---

#### Multiple Hosts

When adding multiple hosts you need to comment out the following two lines in your Apache template file, in order to access your localhost, from other Macs and mobile devices. 

![MAMP](/en/MAMP-PRO-Mac/How-Tos/General/AccessingOnLAN/template.png)

You can reach your Apache template file via the MAMP PRO menu, File > Edit Template > Apache > httpd.conf

---

#### From A Mobile Device

You can reach your localhost via a local ip using your mobile browser.

![MAMP](/en/MAMP-PRO-Mac/How-Tos/General/AccessingOnLAN/mobile.png)






