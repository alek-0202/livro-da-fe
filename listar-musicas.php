<?php
$dir = 'musicas/';
$musicas = [];

foreach (glob($dir . "*.{mp3,ogg,wav}", GLOB_BRACE) as $arquivo) {
  $musicas[] = $arquivo;
}

header('Content-Type: application/json');
echo json_encode($musicas);
