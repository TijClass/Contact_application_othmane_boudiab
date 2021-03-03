<?php

    $connection = mysqli_connect("localhost","root","",'contactinfo');
    // echo "you are in person </br>";
    // print_r($_POST);
    if(isset($_POST['addperson']))
    {
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $email = $_POST['email'];
        $adress = $_POST['adress'];
        $phone = $_POST['phone'];
        $group = $_POST['group'];

        $query ="INSERT INTO `user` (`id`,`fname`,`lname`,`email`,`adress`,`phone`,`group`) VALUES (null ,'$fname','$lname','$email','$adress','$phone','$group')";
        $query_run = mysqli_query($connection, $query);
        if($query_run)
        {
            echo '<script> alert("Data Saved"); </script>';
            header('location: index.php');
        }
        else
        {
            die($query);
        }
    }

// $con=mysqli_connect(db_SERVER,db_USERNAME,db_PASS,db_NAME);



    // $servername ="localhost";
    // $username ="root";
    // $password ="";
    // $dbname ="test";

    // // phpinfo();
    // // // creat connection
    // $conn = mysqli_connect($servername,$username,$password,$dbname);

    // if(!$conn){
    //     die("connection faild : " . mysqli_connect_error());
    // }

?>