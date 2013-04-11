<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <div>
      C'est codé à l'arrache, juste pour l'exemple et encore il est débile l'exemple. Ca me semble pas très contraignant à mettre en place. Avec ce système on se fait plus chié avec le fichier de config.
      <ul>
        <li>
          Seul le fichier index.php est versionné.
        </li>
        <li>
          Les paramètres sont définie en dur au début de index.php
        </li>
        <li>
          <a href="v0/index.php">On passe à la version 0</a>
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