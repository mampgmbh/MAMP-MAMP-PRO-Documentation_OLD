---
title: MAMP PRO (Mac) Dokumentation
description: 
layout: default-2
product: MAMP PRO Mac
language: de
---

## Tools

*  **Start/Stop Servers:**

Start and start the active servers.

*  **WebStart:**

Open the WebStart page.

---

*  **Extras:**

Dieses Menu führt Sie zur Extras-Ansicht des zuletzt benutzten virtuellen Hosts.

---

*  **Default Storage Engine von MySQL einstellen**

Der MySQL-Server von MAMP nutzt die Default Storage Engine MyISAM. Möchten Sie dies ändern, müssen Sie die Konfigurationsdatei des MySQL-Servers erweitern. Die folgende Anleitung zeigt, wie Sie die Default Storage Engine auf InnoDB setzen.

Stoppen Sie die MAMP-Server, falls diese aktiv sind.
Erstellen Sie mit einem geeigneten Texteditor (etwa TextWrangler von BareBones.com) eine Datei namens my.cnf und sichern Sie diese im Verzeichnis /Programme/MAMP/conf/.
Fügen folgenden Inhalt in diese Datei ein:
 [mysqld]default-storage-engine = InnoDB
Speichern Sie die Datei my.cnf und schließen Sie den Texteditor.
Starten Sie die MAMP-Server.
Hinweis: Speichern Sie als reine Textdatei (Endung txt), nicht im Word- oder RTF-Format.


#### MySQL-Datenbanken überprüfen 

Mit diesem Tool können Sie Ihre MYSQL-Datenbanken überprüfen. Dazu muss der MySQL-Server aktiv sein.

 

#### MySQL-Datenbanken reparieren

Mit diesem Tool können Sie Ihre MYSQL-Datenbanken mit Hilfe von mysqlcheck reparieren.

 

#### MySQL-Datenbanken aktualisieren

Aktualisieren Sie Ihre Datenbanken.

 

#### MySQL-Datenbanken sichern

Machen Sie ein Backup Ihrer Datenbanken. Der Server muss aus sein, um diese Funktion zu nutzen.

 

#### hosts-Datei anzeigen

Die hosts-Datei befindet sich im Verzeichnis /etc. Sie ordnet Hostnamen IP-Adressen zu.

In der hosts-Datei sind sämtliche Hostnamen verzeichnet. Alle Hostnamen, die von MAMP PRO erstellt wurden, sind durch # MAMP PRO - Do not remove this entry! gekennzeichnet.

 

#### System Apache/WebSharing starten

Aktiviert den Apache-Server von OS X.


