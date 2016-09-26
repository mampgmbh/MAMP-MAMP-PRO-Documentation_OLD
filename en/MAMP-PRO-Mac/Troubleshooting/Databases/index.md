---
title: MAMP PRO (Mac) Documentation
description: 
layout: default-2
product: MAMP PRO Mac
language: en
---

## MySQL and Database Troubleshooting

### My MySQL Server will not start?

The most common problem with MySQL Server not starting is another mysql service running on the same port. To check this 

1. Quit MAMP PRO.
2. Open the Activity Monitor located in your /Applications/Utilities folder.
3. Type "mysqld" into the search field on the top right.
4. Quit every process you find after your search.
5. Restart MAMP PRO.
6. If MySQL still refuses to start check the log file for error messages.
