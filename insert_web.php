<!-- submit.php -->

<?php
    if(isset($_POST['register']))
    {
        // echo "Okay";

        $username=$_POST['username'];
        $email=$_POST['email'];
        $contact=$_POST['contact'];
        $password=$_POST['password'];

        // echo $uname;
        // echo $clg;

        // to create connection with db..
        $lh="localhost";
        $un="root";
        $ps="";
        $db="employee_table";

        $con=new mysqli($lh,$un,$ps,$db);

        if($con)
        {
            // echo 'successfully connected';

            $query="INSERT INTO registration(username,email,contact,password) VALUES('$username','$email','$contact','$password')";

            // to execute query..
            $result=mysqli_query($con,$query);

            if($result)
            {
                // echo "Inserted Successfully";

                //To redirect user to particular page..
                header("location:registration_web.php?done=registration_done");
                exit;
            }

            else
            {
                echo "Something went wrong";
            }
        }
        else{
            // echo 'failed to connect';
            die($con);
        }
    }
    else{
        echo "Error";
    }
?>
