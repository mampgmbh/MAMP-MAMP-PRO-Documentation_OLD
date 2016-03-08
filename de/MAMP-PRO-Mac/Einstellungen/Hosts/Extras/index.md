---
title: MAMP PRO (Mac) Dokumentation
description: 
layout: default-2
product: MAMP PRO Mac
language: de
---

## Einstellungen > Hosts > Extras
MAMP PRO ermöglicht Ihnen das einfache Hinzufügen von sogenannten Extras zu Ihren virtuellen Hosts. Bei bestehender Internetverbindung werden alle Extras von unseren Servern geladen. Die Anzahl der Extras wird ständig erweitert.

Um ein Extra zu installieren, wählen Sie zunächst den virtuellen Host aus auf dem das Extra installiert werden soll. Klicken Sie anschließend "+"-Button (ohne installierte Extras ist der rot umrandet) und wählen Sie das Extra, das Sie installieren möchten. Füllen Sie nun die notwendigen Felder aus und klicken Sie abschließend auf Installieren.

![MAMP](Extras.png)

<div class="alert" role="alert">
Hinweis: Die Verfügbarkeit eines Extras kann abhängig sein von:
der PHP-Version des Host
dem Vorhandensein einer Internetverbindung
den bereits zwischengespeicherten Extras
Ihrem verfügbaren Festplattenplatz
</div>

---
![MAMP](WordPress.png)

### WordPress

  *  **Name des Blogs:** 
     Geben Sie Ihrem Blog einen aussagekräftigen Namen.

  *  **E-Mail-Adresse:** 
     An diese E-Mail-Adresse wird Ihre Wordpress-Installation Fehlermeldungen verschicken.
     *Hinweis: Um Wordpress zu installieren, ist die Eingabe einer gültigen E-Mail-Adresse erforderlich.*

  *  **Verzeichnis:** 
     Wenn Sie Wordpress direkt im Stammverzeichnis des Hosts installieren möchten, dann lassen Sie dieses Feld leer.

     Möchten Sie Wordpress lieber in einen eigenen Ordner installieren, dann geben Sie diesen Ordnernamen an. Dieser Ordner       darf   noch nicht im Stammverzeichnis des Hosts existieren, denn er wird automatisch angelegt.

     *Hinweis: Installieren Sie Wordpress nicht über eine bereits vorhandene Installation. Diese wird ansonsten     überschrieben!*

  *  **Datenbank-Name:** 
     Eine Datenbank mit diesem Name darf auf dem MySQL-Server noch nicht existieren. Sie wird automatisch angelegt.

  *  **Benutzername:** 
     Es wird automatisch der Benutzername admin verwendet.

     *Hinweis: Nutzen Sie diesen Nutzernamen, um sich später auf Ihrem Wordpress-Blog einzuloggen.*

  *  **Passwort:** 
     Es wird automatisch das Passwort admin verwendet.

     *Hinweis: Nutzen Sie dieses Passwort, um sich später auf Ihr Wordpress-Blog einzuloggen. Sie können es im Admin-Bereich      von Wordpress ändern.*

---
![MAMP](Joomla.png)

### Joomla
Installationen von Joomla können sich eine einzige MySQL-Datenbanken teilen, sofern Sie jede Joomla-Installation einen anderen Tabellen-Präfix benutzet. Um eine bereits vorhandene Datenbank zu verwenden, geben Sie den Namen der Datenbank an und wählen Sie einen neuen Tabellen-Präfix. Um eine neue Datenbank zu nutzen, wählen einen individuellen Datenbanknamen. Ein Tabellen-Präfix muss gewählt werden, das Eingabefeld darf nicht leer bleiben.

  *  **Tabellen-Präfix:** 
     Durch die Verwendung von unterschiedlichen Tabellen-Präfixen kann Joomla Daten für mehrere Websites in einer einzigen        Datenbank verwalten.

  *  **Datenbank-Name:** 
     Auf dem MySQL-Server darf noch keine Datenbank mit dem selben Datenbanknamen vorhanden sein. Die Datenbank wird      automatisch erzeugt.

---
![MAMP](webEdition.png)
## webEdition
Das CMS webEdition wird immer im Ordner /webEdition innerhalb des Stammverzeichnisses installiert.

  *  **Tabellen-Präfix:** 
     Durch Verwendung unterschiedlicher Tabellen-Präfixe kann webEdition Daten für mehrere Websites in einer einzigen     Datenbank verwalten.

  *  **Databank-Name:** 
     Auf dem MySQL-Server darf noch keine Datenbank mit dem selben Datenbanknamen vorhanden sein. Die Datenbank wird automatisch erzeugt.
