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

  </body>
</html>