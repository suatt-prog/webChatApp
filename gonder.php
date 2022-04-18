<?php
    $ism=$_POST["isim"];
    $mesaj=$_POST["mesaj"];
    $ism="-".$ism;
    $conn=new mysqli("sql11.freesqldatabase.com","sql11486439","aZte8BkUmm","sql11486439");
    $stmt=$conn->prepare("INSERT INTO verici(mesaj,ism) VALUES(?,?)");
    $stmt->bind_param("ss",$mesaj,$ism);
    $stmt->execute();
    if(1){
        include "index.html";
    }
?>