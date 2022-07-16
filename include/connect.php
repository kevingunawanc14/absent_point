<?php
<<<<<<< Updated upstream
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "absent_point";

//Create Connection
$conn = "mysql:host=$servername;dbname=$dbname;charset=UTF8";

try {
	$pdo = new PDO($conn, $username, $password);

	if ($pdo) {
		echo "";
	}
} catch (PDOException $e) {
	echo $e->getMessage();
}





=======
    $host = 'localhost';
    $db = 'absent_point';
    $user = 'root';
    $pass = '';
    $charset = 'utf8mb4';

    $dsn = "mysql:host=$host;dbname=$db;charset=$charset;";
    $options = [
        PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC, 
        PDO::ATTR_EMULATE_PREPARES   => false,
    ];
    try {
        $pdo = new PDO($dsn, $user, $pass, $options);
    } catch (\PDOException $e) {
        throw \PDOException($e->getMessage(), $e->getCode());
    }

    session_start();
    date_default_timezone_set('Asia/Jakarta');
>>>>>>> Stashed changes
?>