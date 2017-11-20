---
title: MAMP PRO (Mac) Documentation > How Tos > General > Accessing sites on a LAN
description: 
layout: default-2
product: MAMP PRO Mac
language: en
---

### Accessing your MAMP PRO Hosts On A LAN

You can access your MAMP PRO hosts on a LAN using mobile devices or other Macs.

---

#### Only localhost

If you only have a localhost, and no additional hosts, then accessing your host from a different Mac or mobile device can be done by entering the internal ip of your Mac. 

![MAMP](/en/MAMP-PRO-Mac/How-Tos/General/AccessingOnLAN/localhost.png)

Type in the local ip of Mac with your MAMP PRO installed and running to access your localhost. This can be done from a mobile device or other Mac. 


<div class="alert" role="alert">
Note: You need to include the port Apache is running on. If you run Apache on the default port 80, then you do not need to type in a port number.
</div>


![MAMP](/en/MAMP-PRO-Mac/How-Tos/General/AccessingOnLAN/host.png)

To find your local ip go to System Preferences > Network. You local ip address is shown under "Status". 

![MAMP](/en/MAMP-PRO-Mac/How-Tos/General/AccessingOnLAN/ip.png)

<div class="alert" role="alert">
Note: Depending on your router settings, your local ip address may change periodically.
</div>

---

#### Multiple Hosts

When adding multiple hosts you need to comment out the following two lines in your Apache template file, in order to access your localhost and other hosts, from other Macs and mobile devices. 

![MAMP](/en/MAMP-PRO-Mac/How-Tos/General/AccessingOnLAN/template.png)

You can reach your Apache template file via the MAMP PRO menu, File > Edit Template > Apache > httpd.conf

---

#### Browser On Mobile Device

You can reach hosts via a local ip using your mobile browser

![MAMP](/en/MAMP-PRO-Mac/How-Tos/General/AccessingOnLAN/mobile.png)

#### Using Ports

