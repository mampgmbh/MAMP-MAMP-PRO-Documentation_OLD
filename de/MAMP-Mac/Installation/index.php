---
title: MAMP (Mac) Dokumentation - Installation
description: Installation
layout: default-2
product: MAMP Mac
language: de
---

## Installation

### Installationsvoraussetzungen

Für den Betrieb von MAMP müssen die folgenden Voraussetzungen erfüllt sein:

- Betriebssystem: Apple OS X ab Version 10.10.5 oder höher
- Mac mit 64-Bit-CPU (x64) von Intel
- Benutzerkonto, das den Computer verwalten darf (Administrator)

### Installation und Aktualisierung

1. Laden Sie MAMP von <https://www.mamp.info> herunter.
2. Öffnen Sie per Doppelklick die Datei MAMP_MAMP_PRO_4.0.pkg in Ihrem Downloads-Ordner.
3. Das Installationsprogramm wird Sie durch den Installationsprozess führen.
  
<div class="alert" role="alert">
<p><strong>Hinweis:</strong>
Um MAMP zu installieren, benötigen Sie Administratorrechte.</p>
</div>
  
Bei der Installation von MAMP wird zusätzlich der Ordner /Programme/MAMP PRO installiert. Sie können diesen Ordner ignorieren, wenn Sie MAMP PRO nicht verwenden möchten.
  
### Upgrade From MAMP 3
 
1. Laden Sie MAMP von <https://www.mamp.info> herunter.
2. Öffnen Sie per Doppelklick die Datei MAMP_MAMP_PRO_4.0.pkg in Ihrem Downloads-Ordner.
3. Das Installationsprogramm wird Sie durch den Installationsprozess führen.  
4. Der vorhandene MAMP-Ordner in `MAMP_current_date` umbenannt.
5. Ein vorhandener "htdocs"-Ordner wird in nach `/Programme/MAMP/htdocs` verschoben.
6. Überprüfen Sie, ob alle Daten korrekt verschoben wurden, ehe Sie MAMP starten. Den alten Ordner `/MAMP_current_date` dürfen Sie löschen. Sie können ihn aber auch behalten, falls Sie zu einem späteren Zeitpunkt noch einmal darauf zurückgreifen möchten.

![MAMP](UpgradeMySQLNotice.png)
  
Confirm that all data has been transferred correctly before starting MAMP. Your `/Applications/MAMP_current_date` folder can now be deleted. You may however keep it, so you can fall back to your original setup.

---

### Upgrading Your Database Data

When you first start your servers in MAMP you will be asked to upgrade your database data.

![MAMP](UpgradeMessage.png)

Press Upgrade to upgrade your database data.

![MAMP](UpgradeComplete.png)

---
  
### De-Installation

Sollten Sie MAMP nicht mehr benutzen wollen, genügt es, den MAMP-Ordner zu löschen und alles wird in den Ursprungszustand versetzt (das heißt MAMP modifiziert nichts am Mac-Betriebssystem).

Falls sie auch MAMP PRO verwendet haben, nutzen sie den MAMP-PRO-Uninstaller aus `/Programme/MAMP PRO` zum Löschen.

