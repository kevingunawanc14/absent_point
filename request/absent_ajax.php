<?php

require_once '../includes/connect.php';


$username = $_POST["username"];

// check apakah absent sesuai jamnnya  
$pagi = false;
$siang = false;
$malam = false;

// if (date("His") >= 50000 && date("His") <= 70000) {
//     $pagi = true;
// } else if (date("His") >= 110000 && date("His") <= 130000) {
//     $siang = true;
// } else if (date("His") >= 170000 && date("His") <= 190000) {
//     $malam = true;
// }else{
//     exit("Anda Sudah Melakukan Absent Atau Waktu Absent Sudah Terlewat !");
// }


// // check apakah sudah absent sebelumnnya
// $stmt_history = $pdo->query("SELECT * FROM history WHERE id_user = $id_user");
// while ($row = $stmt_history->fetch()) {
//     // change time format from hh:mm:ss -> hhmmss
//     $new_time = date("His", strtotime($row["waktu"]));
//     if ($pagi && $new_time >= 50000 && $new_time <= 70000) {
//         // echo ('<script> location.replace("../game.php?stat=2"); </script>');
//         exit("Anda Sudah Melakukan Absent Atau Waktu Absent Sudah Terlewat !");
//     } else if ($siang && $new_time >= 110000 && $new_time <= 130000) {
//         // echo ('<script> location.replace("../game.php?stat=2"); </script>');
//         exit("Anda Sudah Melakukan Absent Siang Atau Absent Siang Sudah Terlewat !");
//     } else if ($malam && $new_time >= 170000 && $new_time <= 190000) {
//         // echo ('<script> location.replace("../game.php?stat=2"); </script>');
//         exit("Anda Sudah Melakukan Absent Malam Atau Absent Malam Sudah Terlewat !");
//     }
// }


// // insert history
// $sql_insert = "INSERT INTO `history`(`id`, `tanggal`, `waktu`, `rating`, `id_user`) VALUES (NULL,'$tanggal','$waktu',$rating,$id_user)";
// $pdo->exec($sql_insert);

// // update rating
// $sql_update = "UPDATE `user` SET `rating`=(SELECT rating FROM user WHERE id = $id_user)+$rating WHERE id = $id_user";
// $pdo->exec($sql_update);


$sql = 'SELECT * FROM user WHERE nama = ?';
$checksql = $pdo->prepare($sql);
$checksql->execute([$username]);

$row = $checksql->fetch();

$valueResponse = array();

array_push($valueResponse, array(


    "rating"   => "$row[rating]"


));

echo json_encode($valueResponse);
