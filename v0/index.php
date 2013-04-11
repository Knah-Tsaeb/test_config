<?php
$config['couleur'] = "000000";
$config['largeur'] = 200;
$config['hauteur'] = 200;
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
          Si je supprime le fichier config.php, l'application fonctionne normalement, pas de problème.
        </li>
        <li>
          <a href="../v1/index.php">On passe à la version 1</a>
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
      echo '<div style="display:block;background-color:#', $config['couleur'], ';width:', $config['largeur'], 'px;height:', $config['hauteur'], 'px;"></div>';
      ?>
    </div>
  </body>
</html>