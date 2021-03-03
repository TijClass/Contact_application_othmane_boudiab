<?php
$connection = mysqli_connect("localhost","root","",'contactinfo');
// $db = mysqli_select_db($connection,'contactinfo');

if(isset($_POST['updatedata']))
{
    $id = $_POST['up_id'];

    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $adress = $_POST['adress'];
    $phone = $_POST['phone'];
    $group = $_POST['group'];

    $query = " UPDATE `user` SET `fname`='$fname', `lname`='$lname', `email`='$email', `adress`='$adress', `phone`='$phone', `group`='$group' WHERE `id`='$id' ";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        echo '<script> alert("data updated"); </script>';
        header('Location: index.php');
    }
    else
    {
        echo '<script> alert("data not updated"); </script>';
    }
}

?>