<?php

$albumString = file_get_contents('dischi.json');

$albums = json_decode($albumString, true);

header('Content-Type: application/json');
echo json_encode($albums);
