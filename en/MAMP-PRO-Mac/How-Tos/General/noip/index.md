---
title: MAMP PRO (Mac) Documentation > How Tos > General > Dynamic DNS with noip.com
description: 
layout: default-2
product: MAMP PRO Mac
language: en
---

You can set up dynamic dns with a free or paid account using noip.com. Your site will be visible to the internet when you set up dynamic dns correctly. 

Note: We cannot provide support for setting up your dynamic dns with MAMP PRO.



1. In MAMP PRO, the host must (as an example we take 'mygreathost') that will later be
accessible from the Internet, functioning properly. Check this by clicking in the host 
configuration on the right arrow next to the field "Name" on the Hosts tab. 
In the web browser, the host must appear.




2. Create an account on noip.com here https://www.noip.com.
3. Create a hostname in the noip.com. In this example the a host called 'testhostforclients.ddns.net' has been created.

[]


4. Setup port forwarding. If the server is connected to the Internet via a router, then a so-called port 
forwarding (http://en.wikipedia.org/wiki/Port_forwarding) must be set on this router. 
Other terms may be used for this such as "port sharing".

Unfortunately, there is no universal protocol or method to set port forwarding. 
Terminology and methods differ from router to router. The following sets the forwarded port to 8888 on a speedport router.

[]

5. Start your servers in MAMP PRO, including your DNS service.


You should now be able to view your website from the internet. To test if your site is working properly, turn off Wifi on your mobile device, and try accessing your site. 

![MAMP](/en/MAMP-PRO-Mac/How-Tos/General/buildResult.png) 
4. A mongodb.so extension should now be in your `/Applications/MAMP/bin/php/php7.0.15/lib/php/extension/no-debug-non-zts` folder.

