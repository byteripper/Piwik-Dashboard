Piwik-Dashboard
===============

Piwik (1.8.2) bietet die Möglichkeit das Dashboard als iframe anzuzeigen.
Mit diesem kleinen Modul kann das Dashboard im Admin Bereich angezigt werden.
Zusammen mit dem OXID-Piwik-Plugin werden auch Auswertungen des Shops angezeigt.

Installation:

Zur Installation sind alle Dateien entsprechend der Verzeichnisstruktur unterhalb von 'copy_this' ausgehend vom Stammverzeichnis des Shops zu kopieren.
Es wird KEINE EINZIGE DATEI des Oxid eShops überschrieben, womit auch die Updatefähigkeit gewährleistet ist.

In der Datei out\admin\tpl\byte_dashboard_piwik.tpl den iframe von Piwik (zu finden unter Widgets -> Widgetize the full dashboard) an der entsprechenden Stelle einfügen.
Damit der Button funktioniert muss noch der Link zu Piwik eingefügt werden.

Da es sich beim Admin-Bereich um einen Passwortgeschützen Bereich handelt kann der Piwik-Link mit dem token_auth erweitert werden.
Damit ist eine Anmeldung in Piwik nicht nötig.