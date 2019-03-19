# Web Advanced 2018-2019
## PE WP1

### Uitleg uitwerking

Coming soon!

### Troubleshoot
#### unserialize(): Error at offset 0 of 40 bytes
Als je ooit de volgende foutmelding krijgt:

![alt text][img_unserializeException]

verwijder dan je cookies, en herlaad de pagina. 
Deze exception heeft te maken met bepaalde sessie-informatie die niet
meer up-to-date is, wegens een verandering in de backend (bijvoorbeeld 
na een 'composer install' of 'composer update'').

### Credits

Yusuf Destan, Peter Janssen, Ben Merken & Sander Vlayen @ Hogeschool PXL, Hasselt, 2019.

[img_unserializeException]:Images/unserializeException.png "unsezialize Exception"
