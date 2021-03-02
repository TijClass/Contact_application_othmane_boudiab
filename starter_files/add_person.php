<?php

    $connection = mysql_connect("localho")

// $con=mysqli_connect(db_SERVER,db_USERNAME,db_PASS,db_NAME);



    $servername ="localhost";
    $username ="root";
    $password ="";
    $dbname ="test";

    // phpinfo();
    // // creat connection
    $conn = mysqli_connect($servername,$username,$password,$dbname);

    if(!$conn){
        die("connection faild : " . mysqli_connect_error());
    }

?>