<html>
  <head>
    <title>PHP Test</title>
  </head>
  <body>
<h1>La structure de Symfony</h1>
     <h2>La POO</h2>
<p>
  Symfony utilise la POO (Programmation Orienté Objet), c'est à dire que tout est objet PHP. Pour relier les objets entre eux, PHP utilise "autoload et namespace".
  Ainsi, pour utiliser une classe il faut que la page de celle-ci soit identifiée par son chemin d'accès et que la classe qui l'appelle possède le mot "use" suivi du chemin d'accès. Pour une entité, ce sera "namespace App\Entity" et dans le controlleur en haut sous son namespace l'entité sera appellée avec "use App\Entity\Nom_Entité".

  Notez que App représente le dossier src\qui fait partie de la structure de Symfony depuis Symfony4, cette modification de nom est possible grace à la PSR4 intégré dans l'autoload du fichier "composer.json" .
  Notez avce l'exemple ci-dessous toutes les classes appelées grâce à l'auto-loader de composer
Grace à l'utilisation des namespaces et de "use", il n'est plus nécessaire d'utiliser require ou include </p>

    <h2> Le MVC </h2>
<p>
  Une fois que l'on acompris ce qu'est la POO , il faut ensuite comprendre ce qu'est MVC(Model, Vue, Controller) MVC est une architecture qui sert a découper l'application en modules avec trois grandes responsabilités
 * Les models : gèrent l'accès aux données.
  *Les vues : sont les interfaces grapghiques , ce que verra l'utilisateur.
  Les contrôleurs : ont pour objectif de retourner une réponce.

  Le controlleur , comme son nom l'indique, conytrole tout mais n'a pas pour autant beaucoup de code, il va aller chercher le sinformations dont il a besoin pour retourner sda reponse.
</p>

    <h2>Arborescence de Symfony 5 etv 6 </h2>
<p>
  Depuis Symfony 4, le Framework a énormément évolué et a adopté une architecture plus moderne.
  Faisons le tour sur cette structure.
  
* Assets :Ce dossier contient tous les assets nécessaires pour le frontend, c'est à dire principalement les ressources graphiques : CSS, JS, IMAGES, VIDEOS, etc.

* Bin Ce dossier contient les exécutables de votre projet ou de ses dépendances comme pour vider le cache Symfony ou mettre à jour la base de données. En tapant la commande php bin/console, vous connaitrez toutes les fonctionnalités proposées.

  * Config : Ce dossier contient toute la configuration des packages et routes . Vous les trouverez le plus souvent en "YAML" , mais ils peuvent aussi etre en php, ou en XML.C'est donc ici que l'on configurera la connexion à la base de données , que l'on personnalisera un service ou le système de sécurité .

  * Migrations : Dans ce dossier vous trouverez les différentes migrations que Doctrine a gébérées dans la base de données .

  * Public :Ce dossier est le point d'entrée du site / il contient le fichier "index.php" qui est le front controller, c'est à dire le premier fichier appelé par le client . A coté on retrouve également les ressources compilées du dossier assets, des fichiers publics comme le sitemap, le robots.txt ou encore l' "htaccess" .

  * Src : Ce dossier contient tout le code source PHP de votre projet . En plus de votre logique métier, on y retrouvera l'arborescence classique que propose Symfony :
  +++ Controller : contient tous les contollers (les vrais moteur de code qui retournent cdes réponses au types voulus)
  +++ Entity : contient les entités qui correspondent aux tables de labase de données .
  +++ Repository : contient les requetes que Doctrine utilise pour intéragir avec la base de données .
  

  
  
</p>

  </body>
</html>