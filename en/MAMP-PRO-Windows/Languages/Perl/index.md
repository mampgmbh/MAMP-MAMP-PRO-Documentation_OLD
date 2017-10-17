---
title: MAMP PRO (Mac) Documentation > Languages > Perl
description: 
layout: default-2
product: MAMP PRO Mac
language: en
---

## Languages > Perl

Perl is a high-level, general-purpose, interpreted, dynamic programming language. A version 5 of Perl is included with MAMP PRO. MAMP PRO installs Perl in your `C:\MAMP\bin\perl\bin` directory.

![MAMP](/en/MAMP-PRO-Windows/Languages/Perl/Perl.png)

*  **Make Perl directly available on the command line**  
   Check this option to make the current Perl version available on the command line. You can verify this by checking your System PATH in Advanced System Settings > Environment Variables > System Variables.
   
   
{% highlight php %}

alias perl='/Applications/MAMP/Library/bin/perl'
alias cpan='/Applications/MAMP/Library/bin/cpan'

{% endhighlight %} 
   
---

More information on how to [connect to MySQL using Perl](../../How-Tos/MySQL/#perl_connect) can be found in our How To section.
