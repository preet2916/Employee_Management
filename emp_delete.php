<?php

    $uid=$_GET['uid'];

    $lh = "localhost";
    $un = "root";
    $pass = "";
    $db = "employee_table";

    $conn = new mysqli("$lh","$un","$pass","$db");

    if($conn)
    {
        $query2="DELETE FROM emp_details WHERE id='$uid'";

        $result2=mysqli_query($conn,$query2);

        if($query2)
        {
            header("location:emp_display.php");
        }
        else
        {
            echo "error";
        }
    }
?>