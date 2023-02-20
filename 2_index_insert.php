<?php
//เชื่อมต่อฐานข้อมูล
$dsn = "mysql:host=localhost;dbname=mydb";
$username = "root";
$password = "";

try{
    $obj = new PDO($dsn, $username, $password);
    //การบันทึกข้อมูล
    $sql="INSERT INTO employees(fname,age,department) VALUES('สมชาย','30','ไอที')";
    $result = $obj->exec($sql);
    if($result) {
        echo "บันทึกข้อมูลเสร็จแล้ว";
    }
}

catch(PDOException $e){
    echo $e->getMessage();
}
?>