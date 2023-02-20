<?php
//เชื่อมต่อฐานข้อมูล
$dsn = "mysql:host=localhost;dbname=mydb";
$username = "root";
$password = "";

//เตรียมข้อมูล Prepare Statement
$fnameValue = "น้อยหน่า";
$ageValue = 25;
$departmentValue = "คอนเทนต์เมเนเจอร์";

try{
    $obj = new PDO($dsn, $username, $password);
    //การบันทึกข้อมูล
    $sql="INSERT INTO employees(fname,age,department) VALUES(?,?,?)";
    $stmt=$obj->prepare($sql);
    $stmt->bindParam(1,$fnameValue,PDO::PARAM_STR);
    $stmt->bindParam(2,$ageValue,PDO::PARAM_INT);
    $stmt->bindParam(3,$departmentValue,PDO::PARAM_STR);
    $stmt->execute();
        echo "บันทึกข้อมูลเรียบร้อยแล้ว";
    }

catch(PDOException $e){
    echo $e->getMessage();
}
?>