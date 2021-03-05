<?php

$connection = mysqli_connect("localhost","root","",'contactinfo');
if(isset($_POST['deletedata']))
{
    $id = $_POST['delet_id'];

    $query = "DELETE FROM user WHERE id='$id'";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        echo '<script> alert("data Deleted"); </script>';
        header('Location: index.php');
    }
    else
    {
        echo '<script> alert("Data Not Deleted"); </script>';
    }
}

?>