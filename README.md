# mvc_php_from_scratch
0 - Mettre en place les outils nécessaire (IDE, SGBD)
1 - Mettre en place la structure du projet (MVC)
2 - Concevoir la base de donnée
3 - Utiliser Composer (maintenir les differentes librairies externe dans le dossier vendor) 
	et Autoloading (chargement automatique des Class sans les appeler)
	- curl -sS https://getcomposer.org/installer | php 
		(ie installer le(obtenir le file composer.phar) et utiliser la commande php pour l'executer) (ex: php composer.phar).
	- Créer le file composer.json 
		pour l'information des dependances nécessaires ...
		- entete (comme : name, licence...)
		- autoload
		- require :
			- orm : redbean 
	- php composer.phar install

Fonctinnement du lancement du projet : PoINT D'ENTREE  BooTSTRAP AUToLoADING

5 - créer le fichier core/bootstrap.php (fichier de démarrage )
6 - créer le fichier web/app.php (point d'entrée du projet)
7 - créer le fichier de configuration : core/config.inc.php (information de la bdd et l'orm redbean)
8 - Travailler avec git (gig init), mentionner aussi le .gitignore
