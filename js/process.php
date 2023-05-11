<?php

$file = "my_data.json";
$array = array();
// ambil data
$ambilData = file_get_contents($file);
$decodeData = json_decode($ambilData, true);

$data = array(
    "nama" => $_POST['nama'],
    "gender" => $_POST['gender'],
    "email" => $_POST['email'],
    "alamat" => $_POST['alamat'],
    "program" => $_POST['program'],
    "tahun" => $_POST['tahun']
);

array_push($decodeData, $data);
$json = json_encode($decodeData, JSON_PRETTY_PRINT);
file_put_contents($file, $json);
?>