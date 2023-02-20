<?php
//เชื่อมต่อฐานข้อมูล
$dsn = "mysql:host=localhost;dbname=mydb";
$username = "root";
$password = "";

//เตรียมข้อมูล Prepare Statement
$fnameEdit = "ชาติชาย";
$ageEdit = 35 ;
$departmentEdit = "ไอทีซับพอร์ต";
$id=1;

try{
    $obj = new PDO($dsn, $username, $password);
    $sql = "UPDATE employees SET fname=?,age=?,department=? WHERE id=?";
    $stmt=$obj->prepare($sql);
    $stmt->bindParam(1,$fnameEdit);
    $stmt->bindParam(2,$ageEdit);
    $stmt->bindParam(3,$departmentEdit);
    $stmt->bindParam(4,$id);
    $stmt->execute();
    echo "อัพเดทข้อมูลเรียบร้อยแล้ว";
    }

catch(PDOException $e){
    echo $e->getMessage();
}
?>