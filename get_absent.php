<?php
    include "include/connect.php";

    $username = $_SESSION["username"];
    $tanggal = date("Y/m/d");
    $waktu = date("H:i:s");
    $rating = $_GET["poin"];

    $stmt_user = $pdo->query("SELECT * FROM user WHERE nama = '$username'");
    $id_user = -1;
    if ($row = $stmt_user->fetch()) {
        if ($row["nama"] == $username) {
            $id_user = $row["id"];
        }
    }

    if ($id_user != -1) {
        // insert history
        $sql_insert = "INSERT INTO `history`(`id`, `tanggal`, `waktu`, `rating`, `id_user`) VALUES (NULL,'$tanggal','$waktu',$rating,$id_user)";
        $pdo->exec($sql_insert);

        // update rating
        $sql_update = "UPDATE `user` SET `rating`=(SELECT rating FROM user WHERE id = $id_user)+$rating WHERE id = $id_user";
        $pdo->exec($sql_update);
        
        echo ('<script> location.replace("index.php?stat=0"); </script>');
    } else {
        echo "ERROR";
    }
?>