---
title: MAMP PRO (Windows) Documentation > Servers and Services > Postfix
description: 
layout: default-2
product: MAMP PRO Windows
language: en
---

## Servers and Services > Postfix

Sometimes you may need to send an email using PHP, to do so you have to configure and start Postfix. An easy way getting Postfix to run is using the configuration tool built into MAMP PRO. 

![MAMP](/en/MAMP-PRO-Windows/Servers-and-Services/Postfix/smtp.png)

*  **Include Postfix service in GroupStart**  

   Check to include Postfix in the GroupStart. When activated Postfix will automatically start/stop when the Servers button is   pressed.

---

*  **Set domain of outgoing e-mails to**

   If you want to use the PHP function `mail()` for sending emails to your own email address (like mail@johndoe.com) you
   just need to add the value "johndoe.com" (without quotes and the according domain name) into this field. 
   
   <div class="alert" role="alert">
   Note: Only if you want to send e-mail to others you will need to fill
   in the other fields. In this case make sure that your e-mail provider allows the use of a Smart host.
   </div>
---

*  **Use a smart host for routing**  

    *  **Server name**  
       Fill in your server name for outgoing emails. This could be for instance "smtp.johndoe.com" (without quotes).
       Ask your provider if you are unsure about the server name.  

    *  **Authentication**  
       Unencrypted: Your username and password will be sent unencrypted.
       
       MD5 Challenge-Response: MD5 Challenge Response Authentication will be used.

    *  **User name**  
       Add the user name of your mail account.  

    *  **Password**  
       Add the password for your email user account.  

  
  MAMP PRO will move your existing main.cf and master.cf files to `/private/etc/postfix/MAMP_backup` when you include Postfix using the Groupstart in MAMP PRO. When you stop uncheck Groupstart your original postfix files will be moved back to `/private/etc/postfix`.
  
  <div class="alert" role="alert">
   Note: Some providers do not allow Smart-Hosts, like Google Mail.
   </div>

---

*  **Path to Postfix log file**  

   More information on how to [Show your Postfix log file](../../How-Tos/General/#postfix_log) can be found in our How To section.
