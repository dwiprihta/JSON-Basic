<?php
// $mahasiswa=[
//     [
//         "nama"=>"dwi prihtapambudi",
//         "nrp"=>"12011523005",
//         "email"=>"prihta@gmail.com"
//     ],
//     [
//         "nama"=>"dwi ernawati",
//         "nrp"=>"12011523005",
//         "email"=>"prihta@gmail.com"
//     ]
// ];

$dbh= new PDO('mysql:host=localhost;dbname=db_arsip', 'root','');
$db=$dbh->prepare('SELECT * FROM tbl_pegawai');
$db->execute();
$mahasiswa =$db->fetchAll(PDO::FETCH_ASSOC);
$data=json_encode($mahasiswa);
echo $data;
?>
