<?php 

// $mahasiswa = [
//     [
//     "nama" => "Dede Aminudin N",
//     "nrp" => "173040004",
//     "email" => "dedeamin@mail.unpas.ac.id"
//     ],
//     [
//         "nama" => "Dede Aminudin N",
//         "nrp" => "173040004",
//         "email" => "dedeamin@mail.unpas.ac.id"
//     ];

$dbh = new PDO('mysql:host=localhost;dbname=phpmvc', 'root', '');
$db = $dbh->prepare('SELECT * FROM mahasiswa');
$db->execute();
$mahasiswa = $db->fetchAll(PDO::FETCH_ASSOC);


$data = json_encode($mahasiswa);
echo $data;

?>