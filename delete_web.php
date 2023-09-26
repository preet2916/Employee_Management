<?php

    $uid=$_GET['uid'];

    $lh = "localhost";
    $un = "root";
    $pass = "";
    $db = "employee_table";

    $conn = new mysqli("$lh","$un","$pass","$db");

    if($conn)
    {
        $query2="DELETE FROM registration WHERE id='$uid'";

        $result2=mysqli_query($conn,$query2);

        if($query2)
        {
            header("location:display_web.php");
        }
        else
        {
            echo "error";
        }
    }
?>