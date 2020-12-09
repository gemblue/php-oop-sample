<?php
require '../config.php';
require '../database/Mapel.php';

$mapel = new Mapel;
$results = $mapel->getAll();
?>

Disini halaman home

<br/><br/>

<a href="http://localhost/oop/pages/add.php">Tambah</a>

<br/><br/>

<table border="1">
    <tr><th>Nama</th></tr>

    <?php foreach($results as $result) :?>
        <tr><td><?php echo $result['nama']?></td></tr>
    <?php endforeach;?>
</table>