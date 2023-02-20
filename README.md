# PHP_Project
#### index_connection.php
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
![index_connection](https://github.com/nobpanatSRRU/PHP_Project/blob/main/image/1_index_connection.png?raw=true)

#### index_insert.php
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
![index_insert](https://github.com/nobpanatSRRU/PHP_Project/blob/main/image/2_index_insert.png?raw=true)
