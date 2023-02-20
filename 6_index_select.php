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
        echo "รหัสพนักงาน = ".$row["id"]."<br>";
        echo "ชื่อพนักงาน = ".$row["fname"]."<br>";
        echo "อายุ = ".$row["fname"]."<br>";
        echo "แผนก = ".$row["age"]."<br>";
        echo "แผนก = ".$row["department"]."<br>";
        echo "<hr>";
        }
    }

catch(PDOException $e){
    echo $e->getMessage();
}
?>