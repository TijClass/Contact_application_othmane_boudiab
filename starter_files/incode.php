<?php
    $connection = mysqli_connect("localhost","root","",'contactinfo');
    $db = mysqli_select_db($connection,'contactinfo');

    $query = "SELECT * FROM `contactinfo`";
    $query_run = mysqli_query($connection, $query);
?>
<?php
    if($query_run)
    {
        foreach($query_run as $row)
        {
?>

            echo $row['id'];
            echo $row['fname'];
            echo $row['lname'];
            echo $row['email'];
            echo $row['adress'];
            echo $row['phone'];
            echo $row['group'];
<?php
        }
    }
    else
    {
        echo 'no record found';
    }
?>