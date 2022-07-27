<?php

require_once '../includes/connect.php';


$username = $_POST["username"];
$rating = $_POST["rating"];
$tanggal = date("Y/m/d");
$waktu = date("H:i:s");


// check apakah absent sesuai jamnnya  
$pagi = false;
$siang = false;
$malam = false;

if (date("His") >= 50000 && date("His") <= 70000) {
    $pagi = true;
} else if (date("His") >= 110000 && date("His") <= 130000) {
    $siang = true;
} else if (date("His") >= 170000 && date("His") <= 190000) {
    $malam = true;
} else {
    exit("Anda Sudah Melakukan Absent Atau Waktu Absent Sudah Terlewat !");
}

// ambil id_user
$sql = 'SELECT * FROM user where nama = ?';
$checksql = $pdo->prepare($sql);
$checksql->execute([$username]);

$row = $checksql->fetch();

$id_user = $row['id'];

// check apakah sudah absent sebelumnnya
$sql = 'SELECT * FROM history where id_user = ? and tanggal = ?';
$checksql = $pdo->prepare($sql);
$checksql->execute([$id_user, $tanggal]);



while ($row = $checksql->fetch()) {
    // change time format from hh:mm:ss -> hhmmss
    $new_time = date("His", strtotime($row["waktu"]));

    if ($pagi && $new_time >= 50000 && $new_time <= 70000) {
        // echo ('<script> location.replace("../game.php?stat=2"); </script>');
        exit("Anda Sudah Melakukan Absent Pagi Atau Waktu Absent Pagi Sudah Terlewat !");
    } else if ($siang && $new_time >= 110000 && $new_time <= 130000) {
        // echo ('<script> location.replace("../game.php?stat=2"); </script>');
        exit("Anda Sudah Melakukan Absent Siang Atau Absent Siang Sudah Terlewat !");
    } else if ($malam && $new_time >= 170000 && $new_time <= 190000) {
        // echo ('<script> location.replace("../game.php?stat=2"); </script>');
        exit("Anda Sudah Melakukan Absent Malam Atau Absent Malam Sudah Terlewat !");
    }
}


// insert history
$sql = 'INSERT INTO history (id, tanggal, waktu, rating, id_user) VALUES (NULL, ?, ?, ?, ?)';
$checksql = $pdo->prepare($sql);
$checksql->execute([$tanggal,$waktu,$rating,$id_user]);



// update rating
$sql = 'UPDATE  user 
SET rating= ?
WHERE nama = ? ';

$checksql = $pdo->prepare($sql);
$checksql->execute([$rating, $username]);


$sql = 'SELECT * FROM user WHERE nama = ?';
$checksql = $pdo->prepare($sql);
$checksql->execute([$username]);

$row = $checksql->fetch();

$valueResponse = array();

array_push($valueResponse, array(


    "rating"   => "$row[rating]"


));

echo json_encode($valueResponse);
