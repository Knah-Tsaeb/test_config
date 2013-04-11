<?php
$config['couleur'] = 'ffffff';
$config['hauteur'] = '200px';
$config['autreCouleur'] = 'red';
$config['depotVersion'] = 2;

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
          La version 3 modifie la syntaxe/type de donnée du paramètre $config['hauteur']
        </li>
        <li>
          On averti l'utilisateur du changement et on stop l'application par sécurité pour ne pas cassé quelque chose. Une fois que l'utilisateur à mis à jour son fichier de config, tous repard nickel.
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
      echo '<div style="display:block;background-color:#', $config['couleur'], ';width:200px;height:', $config['hauteur'], ';"></div>';
      echo '<div style="display:block;background-color:', $config['autreCouleur'], ';width:', $config['largeur'], 'px;height:', $config['hauteur'], 'px;"></div>';
      ?>
    </div>
  </body>
</html>