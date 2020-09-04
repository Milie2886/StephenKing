# StephenKing
Bonjour Eric,

Merci d'avoir téléchargé mon projet ^^

Pour que tout se passe bien, voici les étapes à reproduire : 

- Copier le dossier "stephenKing" où bon te semble (dans un dossier Symfony for exemple)
- Ouvrir le dossier dans ton éditeur de texte préféré (le mieux est d'utiliser VSCode mais je dis ça je dis rien...)
- Ouvrir ton CLI préféré (powershell par exemple) ou dans VSCode, ouvrir le terminal (c'est quand même plus simple)
- Vérifier que tu es bien dans le bon dossier (par exemple pour moi ça donne PS C:\Users\emili\AFPA\Env\SYMFONY\stephenKing> )
	-Si tu es dans le dossier parent, il suffit de faire un petit "cd stephenKing"

Maintenant nous entrons dans le vif du sujet!

La première chose à faire est de vérifier le .env présent dans le dossier principal.

Selon ta configuration, il y aura peut-être des modifications à apporter. A savoir : 
- Ligne 32, il y a toutes les informations de connexion à la base de données. Elle se découpe comme suit :
	-  DATABASE_URL=mysql:// (définition du SGBDR)
	-  root (mon identifant, à modifier s'il est différent chez toi)
	-  : (c'est entre les : et @ qu'il faudra mettre ton mot de passe si tu en as un, sinon pas touche)
	-  @127.0.0.1:3306 (adresse du serveur localhost)
	-  /stephenKing (alors normalement tu ne devrais pas avoir de base "stephenKing" dans ton MySql mais au cas où c'est ici que tu peux modifier le nom)

Voilà pour la configuration de la base de données!

La suite est plus simple. 
Dans ton terminal, tapes les lignes suivantes : 

- symfony console doctrine:database:create
	Cette ligne permet de créer la base de données "stephenKing" dans MySql

- symfony console doctrine:migrations:migrate
  VALIDER en mettant y ou yes
	Cette ligne va aller lire les fichiers Migrations créés et les comparer avec la base de données. 
	Ces fichiers contiennent mes créations de tables (entity), comme tu n'as pas encore mes tables il va donc les ajouter à la BDD

- symfony console doctrine:fixtures:load
  VALIDER en mettant y ou yes
	Enfin cette ligne va importer les datas que j'ai écrit dans les fichiers "fixtures" pour que tu ais exactement la même BDD que moi

Et voilà, tu as la même base de données que moi ^^

Pour ouvrir le site, il te suffit juste d'entrer cette ligne

- symfony serve -d (-d pour garder la main sur la console en meme temps que le serveur)

deux choix s'offrent à toi : 

 - Soit tu CTRL+Clic sur le lien https://127.0.0.1:8000 présent dans le beau message vert de la console
 - Soit tu exécutes la commande : symfony open:local    qui va ouvrir le site sur ton navigateur préféré.

BON VOYAGE AU PAYS DE STEPHEN KING!!
