<?php
$config['couleur'] = 'ffffff';
$config['hauteur'] = 200;
$config['autreCouleur'] = 'red';
$config['depotVersion'] = 1;

if (file_exists('config.php') && is_file('config.php')) {
  include ('config.php');
}
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <div>
      <ul>
        <li>
          Seul le fichier index.php est versionné.
        </li>
        <li>
          Les paramètres sont définie en dur au début de index.php
        </li>
        <li>
          Mais je n'aime pas les paramètres par défaut, donc j'utilise mon fichier config.php.
        </li>
        <li>
          La version 2 supprime le paramètre $config['largeur']
        </li>
        <li>
          Ce paramètre existe dans le fichier config.php, mais aucun problème l'appli fonctionne on juste un peu de code mort dans un fichier de config
        </li>
        <li>
          <a href="../v3/index.php">On passe à la version 3</a>
        </li>
      </ul>
    </div>
    <div>
      <?php
      if (isset($config['userVersion']) && $config['depotVersion'] !== $config['userVersion']) {
        die('Attention la syntaxe d\'un paramètre entre votre version (' . $config['userVersion'] . ') et la nouvelle version (' . $config['depotVersion'] . ') à changé. </br>
      Veuillez vous reporter à la documentation pour plus d\'information.</br>
      Une fois les changements effectués pensez à modifier "$config[\'userVersion\'] = ' . $config['depotVersion'] . '" dans le fichier config.php');
      }
      echo '<div style="display:block;background-color:#', $config['couleur'], ';width:200px;height:', $config['hauteur'], 'px;"></div>';
      echo '<div style="display:block;background-color:', $config['autreCouleur'], ';width:', $config['largeur'], 'px;height:', $config['hauteur'], 'px;"></div>';
      ?>
    </div>
  </body>
</html>