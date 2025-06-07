BREEZD WRISTBAND
----------------

Beschrijving
------------
De Breezd Wristband is een slimme armband ontwikkeld voor gebruikers die hun nicotinegebruik op een eenvoudige, visuele en motiverende manier willen opvolgen. De armband synchroniseert met de Breezd database en toont in realtime hoeveel "puffs" je vandaag al hebt genomen tegenover je ingestelde dagelijkse doel.

Teamverdeling
-------------
Dit project is tot stand gekomen door samenwerking tussen drie ontwikkelaars:

- Andres Cochez: voornamelijk verantwoordelijk voor de ontwikkeling van de armband (hardware, programmatie en verbinding met databank).
- Jonas Van Roy en Jelle De Boeck: voornamelijk verantwoordelijk voor de ontwikkeling van de applicatie (web en database-integratie).
  *Natuurlijk elkaar ondersteund en geholpen waar mogelijk was.

Proces en uitdagingen
---------------------
De ontwikkeling van de armband was een leerrijk proces met veel vallen en opstaan. Doorheen de ontwikkeling zijn er meerdere stappen genomen:

- Verschillende sensoren getest: Niet elke sensor gaf het gewenste resultaat.
- Hardwareproblemen: Sensoren werden soms stuk gemaakt, computer gecrasht en er moest meermaals opnieuw begonnen worden.
- Beperkingen: Telkens opnieuw afwegen wat technisch mogelijk was binnen de tijd en middelen.
- Eindbeslissing: Uiteindelijk is gekozen voor twee complementaire sensoren:
  - MPU6050 bewegingssensor: om de typische beweging van de arm naar de mond met een vape te detecteren.
  - KY-038 geluidsensor: om het zuiggeluid van de vape te detecteren ter bevestiging van een puff.

Deze combinatie zorgde voor een betrouwbare detectie van vape-puffs.

De puffs worden:
- Weergegeven op een OLED-schermpje op de armband.
- Geregistreerd in de centrale Breezd-database via een WiFi-verbinding.
- De data is direct beschikbaar in de app.

De armband bevat ook:
- Een drukknop om het toestel in te schakelen.
- Alle sensoren worden aangestuurd met een ESP32-microcontroller.

Functies
--------
- Realtime puff-tracking met dubbele sensorbevestiging.
- Synchronisatie met de Breezd puff-tracking database.
- Weergave op OLED-display: vandaag / doel.
- Verbonden met app via WiFi.
- Gebruiksvriendelijke activering via een drukknop.

Systeemvereisten
----------------
- Een geregistreerd Breezd-account.
- WiFi-verbinding.
- Toegang tot de Breezd server en puff_tracker database.

In deze repository zijn drie files terug te vinden. 
- Een file met de arduino code voor de werking van de armband.
- Een file met php code voor het ophalen van de puffs (vandaag) en het ingestelde doel uit de Breezd database.
- Een file met php code voor de geregistreerde puffs die met de armband zijn waargenomen door te sturen naar de database.

  
