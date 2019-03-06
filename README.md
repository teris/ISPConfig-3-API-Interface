# ISPConfig-3-API-Interface
Simpel API System for ISPConfig Interface

# Vorraussetzung:
-> Voll Installiertes ISPConfig 3 Interface version 3.1.X

-> PHP 5.X oder höher

-> Vollzugriff eines ISPConfig 3 Entferneten Benutzers (SOAP)

# Anpassen / Vorbereitung
Erstelle ein Benutzer in deiner ISPConfig 3 Installation mit allen Rechten.

Editiere nun die datei soap_config.php

<<

$username = 'username';													//ISPConfig Benutzername

$password = 'password';													//ISPConfig Passwort

$soap_location = 'https://localhost:8080/remote/index.php'; 			//Remote URL ISPConfig FQDN inkl. Endparameter

$soap_uri = 'https://localhost:8080/remote/';							//Remote URL ISPConfig FQDN

$domain_id = array(24,7,8); 											//IDs von den Hauptdomains eintragen, welche genutzt werden können.

$login_uri = "https://localhost";										//URL zum Interface

$mysql_uri = "https://mysql.localhost";									//URL zum PhpMyAdmin

$ftp_server = "ftp.localhost";											//IP oder URL zum FTP Server

$mail_from = "SubDomainService <soap@localhost>";						//Absender Mail

>>

# Beispiel und Demo hier
https://soap.orga-consult.eu

# Rückfragen
Mail: soap.help@orga-consult.eu

Web: www.teris-cooper.de & www.orga-consult.eu
