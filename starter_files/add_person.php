<?php

    $connection = mysqli_connect("localhost","root","",'contactinfo');
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

?>