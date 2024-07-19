<?php
    $conn = mysqli_connect("localhost","root","","db_pengelolaan_sampah");
    if(!$conn){
        echo "gagal connect";
    }
?>