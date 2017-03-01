---
title: MAMP PRO (Mac) Documentation > How Tos > General
description: 
layout: default-2
product: MAMP PRO Mac
language: en
---

## How Tos > General


### Activating Output Buffering

1. Start MAMP PRO
2. Select File -> Edit Template -> PHP 5.x.x php.ini / PHP 5.x.x php.ini 
3. Search this line  
   `output_buffering = Off`
4. Change `Off` to `On` or to a maximum number of bytes instead (for example `4096`)
5. Save the file
6. Start servers

---

### Increase the PHP memory limit

1. Start MAMP PRO
2. Stop the server if it's running 
3. Choose Menu > File > Edit Template > PHP 5.x.x php.ini / PHP 5.x.x php.ini
4. The PHP ini file will be opened.
5. If a dialogue box pops up, read it and confirm with OK
6. Search (<kbd>Command</kbd> + <kbd>F</kbd>) for `memory_limit`
7. You should get the following line:  
   `memory_limit = 32M ; Maximum amount of memory a script may consume (8M)' 
8. Now you can change the default value of `32M`. For instance into `64M` or even more (like `128M`)
9. Save (<kbd>Command</kbd> + <kbd>S</kbd>) your changes.
10. Close (<kbd>Command</kbd> - <kbd>W</kbd>) the file.
11. Start the Server.

---

<a name="postfix_log"></a> 

### Show the Postfix log file With a text editor 

<div class="alert" role="alert">
Note: If you want to open the Postfix log file with a text editor, you have to make the file visible.
</div>

1. Open the Terminal.app (Applications/Utilities)
2. Enter the following and hit enter:  
   `defaults write com.apple.finder AppleShowAllFiles -boolean true`
3. Restart the Finder by enter the following and hit enter:  
   `killall Finder`
4. Open the file /private/var/log/mail.log with your editor.

---

### Show the Postfix log file with Console.app (recommended)

1. Open Console.app (Applications/Utilities)
2. Choose View -> Show Log List
3. Open the folder "FILES" in the Log List
4. Open the folder /private/var/log
5. Click the mail.log entry in the Log List
6. On the right side of the window you can see the content of the Postfix log file.

---

### Show Postfix log file using command line

1. Open the Terminal.app (Applications/Utilities)
2. Enter the following prompt and hit enter  
   `tail -f /private/var/log/mail.log`
3. You can now read the Postfix log file within the Terminal. The log file keeps updating as new entries apply.
4. Press <kbd>Ctrl</kbd> + <kbd>C</kbd> to stop the process.

---
