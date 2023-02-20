<?php
//เชื่อมต่อฐานข้อมูล
$dsn = "mysql:host=localhost;dbname=mydb";
$username = "root";
$password = "";

//เตรียมข้อมูล Prepare Statement
$fnameValue = "โจโจ้";
$ageValue = 25;
$departmentValue = "ฝ่ายการตลาด";

try{
    $obj = new PDO($dsn, $username, $password);
    //การบันทึกข้อมูล
    $sql="INSERT INTO employees(fname,age,department) VALUES(:fname,:age,:department)";
    $stmt=$obj->prepare($sql);
    $stmt->bindParam(":fname",$fnameValue);
    $stmt->bindParam(":age",$ageValue);
    $stmt->bindParam(":department",$departmentValue);
    $stmt->execute();
        echo "บันทึกข้อมูลเรียบร้อยแล้ว";
    }

catch(PDOException $e){
    echo $e->getMessage();
}

?>