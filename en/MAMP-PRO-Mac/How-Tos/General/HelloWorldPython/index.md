---
title: MAMP PRO (Mac) Documentation > How Tos > General
description: 
layout: default-2
product: MAMP PRO Mac
language: en
---

### Create a Hello World Python Host

1. Confirm the wsgi module is checked on your Apache Server. 
2. Create a standard host, name MyPythonHost.
3. Copy the "hello world" script from [here] https://docs.python.org/2.7/howto/webservers.html , name it test.cgi, put it into your  /Applications/MAMP/cgi-bin folder.
4. From your host, mine was name "python", and I was using Apache port 8888, type the following

http://MyPythonHost:8888/cgi-bin/test.cgi

You should see your hello world. This will help you get started. You can also run your scripts from the command line, and Mac also comes with a Python interpreter, or our MAMP installed one.
