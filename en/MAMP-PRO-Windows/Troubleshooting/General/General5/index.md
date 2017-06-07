---
title: MAMP PRO (Windows) Documentation > General Troubleshooting
description: 
layout: default-2
product: MAMP PRO Windows
language: en
---

### My PHP scripts are timing out


If your PHP scripts are timing out you may have to adjust one of the following PHP settings.

Here are the directives which had to be updated and added to PHP template file for used php version :


max_execution_time = 600     ; Maximum execution time of each script, in seconds
max_input_time = 600    ; Maximum amount of time each script may spend parsing request data




If you are using CGI PHP, then you must add this additional variable to prevent PHP from timing out after 30 seconds.

Add this directive to end of template to change default socket timeout:


default_socket_timeout = 600
