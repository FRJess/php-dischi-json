<?php
$albumsString = file_get_contents('dischi.json');
$albums = json_decode($albumsString, true);

header('Content-Type: application/json');

if(isset($_GET['details'])) {
  echo json_encode($albums[$_GET['details']]);  
}else{
  echo json_encode($albums);
}
