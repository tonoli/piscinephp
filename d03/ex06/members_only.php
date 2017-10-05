<?php

if ($_SERVER['PHP_AUTH_USER'] != zaz || $_SERVER['PHP_AUTH_PW'] != jaimelespetitsponeys){

  header('WWW-Authenticate: Basic realm="Espace membres'. utf8_decode($text) .'"');
  header('HTTP/1.0 401 Unauthorized');
  echo ("<html><body>Cette zone est accessible uniquement aux membres du site</body></html>");
  echo "\n";
}
else{
  $imgbinary = file_get_contents("../img/42.png");
  $encode = base64_encode($imgbinary);
  $src = 'data:image/png;base64,' . $encode;
  echo
"<html><body>
Bonjour Zaz<br />
<img src=". $src. ">
</body></html>";
  echo "\n";
}
?>
