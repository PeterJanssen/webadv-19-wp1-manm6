# Web Advanced 2018-2019
## PE WP1

### Uitleg uitwerking

### Aanmaken database
Voor dit project maken wij gebruik van een database met bieren in.
 
Deze database bevat één tabel die we aanmaken in de migrations folder van het project onder de folder database.

![alt text][img_migration]

Deze tabel wordt ook geseed met dummy data in de seeds folder van het project onder de folder database.

![alt text][img_seed] 
 
Voor deze database aan te maken doen we het volgende in een server.

Log in de mysql server met een login en ww en voer het volgende commando uit.

![alt text][img_database aanmaken]

Met dit commando creëren we een database met een naam bv. beerDB.

Hierna moeten we de .env file aanpassen in het project. Hierin moeten we verwijzen naar welke database we gaan gebruiken en waar deze zich bevindt. 
Deze .env kan nog niet bestaan maar bij het aanmaken van het project maakt Laravel een .env.example aan.
Kopieer deze en hernoem ze naar .env. En maak hier de volgende aanpassingen aan (gebruik de database naam die je daarnet meegegeven hebt bij het creëren ervan, poort, username en wachtwoord kunnen verschillen).

![alt text][img_env]

Als dit allemaal gedaan is maken we de tabel aan en inserten we de dummy data met het volgende commando in de server.

![alt text][img_creer database]

Deze tabel ziet er in mysql als volgt uit.

![alt text][img_tabel]

En bevat volgende data (de uri bevat zeer lange strings die we niet kunnen tonen, deze uri's worden later gebruik voor de images te weergeven in de html).

![alt text][img_tabelContent]

#### Beveiliging tegen SQL-injectie

SQL-injectie aanvallen kunnen voorkomen, wanneer input in online formulieren niet wordt gefilterd.
Wanneer je strings die een gebruiker als input geeft rechtstreeks naar je databank verzendt (denk
bijvoorbeeld aan "DROP TABLE [naam];"): 

![alt text][img_sqlInjection]

Stel je je applicatie bloot aan een aanval. Om je best te
bewapenen tegen SQL-injectie, kun je, indien je queries gebruikt in je backend, er best voor zorgen 
dat je SQL queries in de backend gebruikmaken van parameters, zodat de input eerst wordt omgezet in
string-literals, die dan , zodat de interne logica van de input niet wordt gecontroleerd:

![alt text][img_sqlInjectionPrevention]

De Object Relational Mapper (ORM) van Laravel, Eloquent, gebruikt PHP Data Object (PDO) intern parameter
binding om SQL-injectie in te dammen. Allen zijn valide mogelijkheden om SQL-injectie tegen te gaan. 
Wij hebben ervoor gekozen de input van formulieren om objecten te maken van klassen in de backend,
die de records weerspiegelen in onze database, en 

Om bijvoorbeeld een specifiek bier te wijzigen in de database, geeft de gebruiker de informatie in
in de velden van het invulformulier, en klikt op "Submit":

![alt text][img_updateBeerForm]

Vervolgens worden de velden opgezet naar nieuwe properties van een bestaand bierobject, dat daarna
wordt opgeslagen in de databank:

![alt text][img_updateBeerProperties1]
![alt text][img_updateBeerProperties2]

Dit alles wordt verwezenlijkt met de interne SQL-injectie preventie van Laravels Eloquent ORM.

#### Beveiliging tegen CSRF-aanvallen
Cross-Site Request Forgery, of CSRF-aanvallen, kunnen optreden, wannneer een gebruiker
op een gemanipuleerde URL klikt, wanneer de gebruiker een sessie met de server heeft opgezet. 
Denk bijvoorbeeld aan een link naar een banking app, waarbij een geldtransactie wordt
doorgespeeld van het saldo van de gebruiker naar de rekening van diegene die de gemanipuleerde
URL heeft doogespeeld. Dit is allemaal mogelijk, omdat de gebruiker een vertrouwde sessie met
de server heeft opgezet.
Laravel heeft hiertegen ingebouwde bescherming, in de vorm van de TokenMismatchException:

![alt text][img_tokenMismatchException]

Wanneer we een webpagina opvragen van een Laravel-webapplicatie, stuurt de server naast de 
view voor de opgevraagde webpagina in de respons-body ook een CSRF-token mee, die moet 
teruggezonden worden aan de server, bij een volgend request. Indien de token
niet wordt teruggezonden aan de server, zal de server de request weigeren.
Dit kunnen we in Laravel realiseren, door een method call naar csrf_field() binnen de 'form'
HTML tags:

![alt text][img_CSRFSolution]

In onze applicatie staan deze bijvoorbeeld in de formulieren in de updateBeer.blade.php view:

![alt text][img_updateBeer]

### Clean code seminarie
#### PHPMD
PHPMD kan gebruikt worden om de code "clean" te houden. Download de .phar file van de officiële
PHPMD website:

![alt text][img_phpmdsite]

Zet deze phpmd.phar file in de root-folder van het project:

![alt text][img_phpmdpharlocation]

Navigeer vervolgens naar de folder waar het phpmd.phar archief staat, en open hier een prompt.

![alt text][img_phpmdcommands]

Aldus wordt in de "working directory" een HTML-bestand gegenereerd met alle problemen die PHPMD heeft gevonden.
Hier kan je naar navigeren in je browser:

![alt text][img_phpmdreport]

### Troubleshoot
#### unserialize(): Error at offset 0 of 40 bytes
Als je ooit de volgende foutmelding krijgt:

![alt text][img_unserializeException]

verwijder dan je cookies, en herlaad de pagina. 
Deze exception heeft te maken met bepaalde sessie-informatie die niet
meer up-to-date is, wegens een verandering in de backend (bijvoorbeeld 
na een 'composer install' of 'composer update'').

#### 

Bij deze exception:

![alt text][img_cipherException]

voer volgende twee commando's uit in de root folder van de je Laravel project:

![alt text][img_cipherExceptionSolution]

### Credits

Yusuf Destan, Peter Janssen, Ben Merken & Sander Vlayen @ Hogeschool PXL, Hasselt, 2019.

[img_unserializeException]:Images/unserializeException.PNG "unsezialize Exception"
[img_cipherException]:Images/cipherException.PNG "cipher Exception"
[img_cipherExceptionSolution]:Images/cipherExceptionSolution.PNG "cipher Exception solution"
[img_tokenMismatchException]:Images/tokenMismatchException.PNG "tokenMismatchException"
[img_CSRFSolution]:Images/CSRFSolution.PNG "CSRF solution"
[img_updateBeer]:Images/updateBeer.PNG "updateBeer.blade.php"
[img_sqlInjection]:Images/sqlInjection.PNG "SQL-injecton"
[img_sqlInjectionPrevention]:Images/sqlInjectionPrevention.PNG "SQL- injection prevention"
[img_updateBeerForm]:Images/updateBeerForm.PNG "update beer form"
[img_updateBeerProperties1]:Images/updateBeerProperties1.PNG "update beer properties"
[img_updateBeerProperties2]:Images/updateBeerProperties2.PNG "update beer properties"
[img_migration]:Images/migration.PNG
[img_seed]:Images/seed.PNG
[img_database aanmaken]:Images/database%20aanmaken.PNG
[img_env]:Images/env.PNG
[img_creer database]:Images/creer%20database.PNG
[img_tabel]:Images/tabel.PNG
[img_tabelContent]:Images/tabelContent.PNG
[img_phpmdsite]:Images/phpmdsite.PNG "PHPMD site"
[img_phpmdcommands]:Images/phpmdcommands.PNG "PHPMD commands"
[img_phpmdreport]: Images/phpmdreport.PNG "PHPMD report"
