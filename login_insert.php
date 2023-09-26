<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</head>
<body>
    
</body>
</html>
<?php

    //name of your login submit button
    if(isset($_POST['login']))
    {
        // echo "Okay";

        $username=$_POST['username'];
        // $email=$_POST['email'];
        // $contact=$_POST['contact'];
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
            
            //table name will be your registration table 
            $query="SELECT * FROM registration WHERE username ='$username' AND password ='$password'";

            // to execute query..
            $result=mysqli_query($con,$query);
            $last = mysqli_fetch_assoc($result);

            if($last)
            {
                $session_id = $last['id'];
                session_start();
                $_SESSION['user_id']=$session_id;
                // echo "Inserted Successfully";
                //To redirect user to particular page..
                header("location:dashboard_web.php");
            }

            else
            {
                header('Location: login_form_web.php?error=login_failed');
                exit;
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
