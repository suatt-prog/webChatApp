<?php
    $conn=new mysqli("sql11.freesqldatabase.com","sql11486439","aZte8BkUmm","sql11486439");
    $getir=mysqli_query($conn,"SELECT * FROM verici");
    $sayi=mysqli_num_rows($getir);
    if($sayi==0){
        echo "There is no messages in this group.";
        echo "<br/>";
    }
    if($sayi>0){
        while($row=mysqli_fetch_assoc($getir)){
            echo $row['mesaj'];
            echo " ";
            echo $row['ism'];
            echo "<br/>";
        }
    }
    echo "<a href='index.html' align='center'>Ana Sayfa</a>";
?>