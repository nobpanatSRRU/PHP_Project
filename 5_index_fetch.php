<?php
//เชื่อมต่อฐานข้อมูล
$dsn = "mysql:host=localhost;dbname=mydb";
$username = "root";
$password = "";

try{
    $obj = new PDO($dsn, $username, $password);
    //การแสดงข้อมูล
    $sql="SELECT * FROM employees";
    $result=$obj->query($sql);

    while($row=$result->fetch(PDO::FETCH_ASSOC)){
        echo "รหัสพนักงาน = ".$row["id"];
        echo " ชื่อพนักงาน = ".$row["fname"];
        echo " อายุ = ".$row["age"];
        echo " แผนก = ".$row["department"];
        echo "<hr>";

        }
    }

catch(PDOException $e){
    echo $e->getMessage();
}
?>