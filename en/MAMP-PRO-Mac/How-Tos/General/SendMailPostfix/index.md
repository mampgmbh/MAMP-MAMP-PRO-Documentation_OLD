---
title: MAMP PRO (Mac) Documentation > How Tos > General
description: 
layout: default-2
product: MAMP PRO Mac
language: en
---

### How Do I Send Email Using Postfix?

The way we to transport emails over the internet is by using a Mail Transfer Agent (MTA) with its Simple Mail Transfer Protocol (SMTP). We use Postfix as our MTA, because we can easily setup our mail the way we want, i.e. with our MAMP PRO hosts instead of appsolute.de or gmail.com. Most of the email providers have a strong filter in their systems, which allows to pass only emails with some default headers. 

1. Add a new host in MAMP PRO, call it  "hostmailer". 
2. In the Postfix tab, check the box "Include Postfix service in GroupStart".
3. Set "domain of outgoing emails" to: hostmailer.com .
4. Save and restart the servers.
5. Open the hostmailer page and add to the browser path input: hostmailer/email/script.php .
6. After a few minutes you should receive your email (check if it didn’t go to spam).

---







