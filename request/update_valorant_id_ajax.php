<?php

require_once '../includes/connect.php';


$username = $_POST["username"];
$valorant_id = $_POST["valorant_id"];


$sql = 'UPDATE  `user`
        SET `valorant_id` = ?
        WHERE `nama` = ?;';



$checksql = $pdo->prepare($sql);
$checksql->execute([$valorant_id, $username]);



echo $valorant_id;







?>