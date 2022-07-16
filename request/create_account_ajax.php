<?php


$username = $_POST["username"];
$password = $_POST["password"]; 




// cek panjang password max 20
if(strlen($password) > 20){
    exit("Password Terlalu Panjang Max 20 Karakater");
}

//cek panjang username max 20
if(strlen($username) > 20){
    exit("Username Terlalu Panjang Max 20 Karakater");
}



// cek username
$sql = 'SELECT * FROM user';
$checksql = $pdo->prepare();
$checksql->execute();

$row = $checksql->fetch();


while ($row = $checksql->fetch()) {

    // cek username
    if ($row['nama'] ==  $username) {
        echo "Maaf Username Tersebut Sudah Terpakai";
        exit("");
    }

}


// add username,password ke database
$sql = 'INSERT INTO `user`(`id`, `nama`, `password`, `rank`, `rating`) VALUES (NULL, ?, ?, ?, ?)';
$checksql = $pdo->prepare($sql);
$checksql->execute([$username, $password, 0]);




?>