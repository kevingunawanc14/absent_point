<?php
    require_once '../includes/connect.php';

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

    // echo date("His");

    // status pagi, siang, malam
        
    $pagi = false; $siang = false; $malam = false;
    if (date("His") >= 50000 && date("His") <= 70000) {
        $pagi = true;
        echo "pagi";
    } else if (date("His") >= 110000 && date("His") <= 130000) {
        $siang = true;
        echo "siang";
    } else if (date("His") >= 170000 && date("His") <= 190000) {
        $malam = true;
        echo "malam";
    
} else {
  
        echo ('<script> location.replace("../game.php?stat=1"); </script>');
    }

    $stmt_history = $pdo->query("SELECT * FROM history WHERE id_user = $id_user");
    while ($row = $stmt_history->fetch()) {
        // change time format from hh:mm:ss -> hhmmss
        $new_time = date("His", strtotime($row["waktu"]));
        if ($pagi && $new_time >= 50000 && $new_time <= 70000) {
            echo ('<script> location.replace("../game.php?stat=2"); </script>');
        } else if ($siang && $new_time >= 110000 && $new_time <= 130000) {
            echo ('<script> location.replace("../game.php?stat=2"); </script>');
        } else if ($malam && $new_time >= 170000 && $new_time <= 190000) {
            echo ('<script> location.replace("../game.php?stat=2"); </script>');
        }
    }

    if ($id_user != -1) {
        // insert history
        $sql_insert = "INSERT INTO `history`(`id`, `tanggal`, `waktu`, `rating`, `id_user`) VALUES (NULL,'$tanggal','$waktu',$rating,$id_user)";
        $pdo->exec($sql_insert);

        // update rating
        $sql_update = "UPDATE `user` SET `rating`=(SELECT rating FROM user WHERE id = $id_user)+$rating WHERE id = $id_user";
        $pdo->exec($sql_update);
        
        echo ('<script> location.replace("game.php?stat=0"); </script>');
    } else {
        echo "ERROR";
    }



?>