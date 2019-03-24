# Web Advanced 2018-2019
## PE WP1

### Uitleg uitwerking

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

[HIER KOMEN DE NOG OVERIGE VOORBEELDEN VAN csrf_field()]

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
[img_cipherExceptionSolution]:Images/cipherExceptionSolution.PNG
[img_tokenMismatchException]:Images/tokenMismatchException.PNG
[img_CSRFSolution]:Images/CSRFSolution.PNG
[img_updateBeer]:Images/updateBeer.PNG