<?php

require '../config.php';
require '../database/Mapel.php';

$nama = $_POST['nama'];

$mapel = new Mapel;
$results = $mapel->insert($nama);

header('Location: home.php');