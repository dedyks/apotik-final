<?php

try {
    $conn = new PDO("sqlsrv:server = tcp:apotik.database.windows.net,1433; Database = apotik", "dedy", "Kenapa29051997");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "berhasil";
}
catch (PDOException $e) {
    print("Error connecting to SQL Server.");
    die(print_r($e));
}

// SQL Server Extension Sample Code:
$connectionInfo = array("UID" => "dedy@apotik", "pwd" => "Kenapa29051997", "Database" => "apotik", "LoginTimeout" => 30, "Encrypt" => 1, "TrustServerCertificate" => 0);
$serverName = "tcp:apotik.database.windows.net,1433";
$conn = sqlsrv_connect($serverName, $connectionInfo);



?>