<?php
//เชื่อมต่อฐานข้อมูล
$dsn = "mysql:host=localhost;dbname=mydb";
$username = "root";
$password = "";

try{
    $obj = new PDO($dsn,$username,$password);
    echo "เชื่อมต่อฐานข้อมูลสำเร็จ";
}
catch(PDOException $e){
    echo $e->getMessage();
}

?>