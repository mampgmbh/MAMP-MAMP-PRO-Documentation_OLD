---
title: MAMP-Dokumentation
description: Das ist die MAMP-Dokumentation
---

# 1. Installation

## 1.1 Installationsvoraussetzungen

Für den Betrieb von MAMP müssen die folgenden Voraussetzungen erfüllt sein:

* Betriebssystem: Apple OS X ab Version 10.6.6 oder höher
* Mac mit 64-Bit-CPU (x64) von Intel
* Benutzerkonto, das den Computer verwalten darf (Administrator)

## 1.2 Installation und Aktualisierung

* Laden Sie MAMP von <https://www.mamp.info> herunter.
* Öffnen Sie per Doppelklick die Datei MAMP_MAMP_PRO_3.0.pkg in Ihrem Downloads-Ordner.
* Das Installationsprogramm wird Sie durch den Installationsprozess führen.
* Wenn das Installationsprogramm eine frühere Installation von MAMP findet, wird der vorhandene MAMP-Ordner in `MAMP_current_date` umbenannt.
* Ein vorhandener "htdocs"-Ordner wird in nach `/Programme/MAMP/htdocs` verschoben.
* Überprüfen Sie, ob alle Daten korrekt verschoben wurden, ehe Sie MAMP starten.
* Den alten Ordner `/MAMP_current_date` dürfen Sie löschen. Sie können ihn aber auch behalten, falls Sie zu einem späteren Zeitpunkt noch einmal darauf zurückgreifen möchten.

<div class="alert" role="alert">
<p><strong>Hinweis:</strong></p>
<p>Um MAMP zu installieren, benötigen Sie Administratorrechte.</p>
</div>

Bei der Installation von MAMP wird zusätzlich der Ordner /Programme/MAMP PRO installiert. Sie können diesen Ordner ignorieren, wenn Sie MAMP PRO nicht verwenden möchten.

## 1.2 De-Installation

Sollten Sie MAMP nicht mehr benutzen wollen, genügt es, den MAMP-Ordner zu löschen und alles wird in den Ursprungszustand versetzt (das heißt MAMP modifiziert nichts am Mac-Betriebssystem).

Falls sie auch MAMP PRO verwendet haben, nutzen sie den MAMP-PRO-Uninstaller aus `/Programme/MAMP PRO` zum Löschen.

# 2. Erste Schritte

Nach erfolgreicher Installation können Sie den lokalen Webserver starten. Starten Sie dazu die Anwendung MAMP und klicken Sie auf den Button Server starten. In der Statusanzeige auf der rechten Seite wird angezeigt, ob der Server erfolgreich gestartet wurde. Falls nötig, werden Sie an dieser Stelle nach Ihrem Administrator-Kennwort gefragt.

Der Webserver (Apache) wird standardmäßig auf Port 8888 betrieben, der Datenbankserver (MySQL) auf Port 8889. Wenn Sie Ihre lokale Webseite im Browser öffnen möchten, müssen Sie am Ende der URL den Apache-Port angeben: http://localhost:8888

![MAMP](MAMP.png)

*   **Einstellungen…**  
    Hier legen Sie die Einstellungen von MAMP fest. Siehe Abschnitt Einstellungen für weitere Details.

*   **Webstart öffnen**  
    Hier öffnen Sie die Startseite Ihres lokalen Webservers.

*   **Server starten / Server beenden**  
    Starten oder stoppen Sie hier die MAMP-Serverdienste.
