<?php
$dsn='mysql:dbname=cst2020;host=localhost;charset=utf8';
$user='root';
$password= 'root';
try{
    $dbh =new PDO($dsn,$user,$password);
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // $sql = "SELECT * FROM sort where done =0";
    // $stmt=$dbh->prepare($sql);
    // $stmt->execute();
    // $count = $stmt->rowCount();
    // while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
    //     $data[]=$row;
    // }
}catch(PDOException $e){
    print ($e->getMessage());
    die();
}?>