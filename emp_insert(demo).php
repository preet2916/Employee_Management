<!-- submit.php -->

<?php
    if(isset($_POST['emp_insert(demo)']))
    {
        // echo "Okay";

        $name=$_POST['emp_name'];
        $phone=$_POST['emp_phone'];
        $email=$_POST['emp_email'];
        $salary=$_POST['emp_salary'];
        $department=$_POST['emp_department'];
        // echo $uname;
        // echo $clg;

        $img_name = $_FILES['emp_image']['name'];
        $extension = $_FILES['emp_image']['type'];
        $tmp_name = $_FILES['emp_image']['tmp_name'];
        $error = $_FILES['emp_image']['error'];
        $size = $_FILES['emp_image']['size'];

        // to create connection with db..
        $lh="localhost";
        $un="root";
        $ps="";
        $db="employee_table";

        $con=new mysqli($lh,$un,$ps,$db);

        if($con)
        {
            // echo 'successfully connected';

                if ($error === 0) {
                    if ($size > 1250000) {
                        $err = "Img size should be less than 1.25 MB";
            
                        header("location:dashbord_web.php?$err");
                    } 
                    else {
                        $allowed_extension = array('png', 'jpg', 'jpeg');
            
                        $img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
            
                        // echo $img_ex;
            
            
                        if (in_array($img_ex, $allowed_extension)) {
            
            
                            $new_img_name = uniqid('IMG-', true) . '.' . $img_ex;
            
                            $path = 'upload/' . $new_img_name;
            
                            move_uploaded_file($tmp_name, $path);
            
                            
                        $query="INSERT INTO emp_details(emp_name,emp_phone,emp_email,emp_salary,emp_department,emp_image) VALUES('$name','$phone','$email','$salary','$department','$new_img_name')";

                        // to execute query..
                        $result=mysqli_query($con,$query);

                        if($result)
                        {
                            header("location:dasboard_web.php");
                        } else {
                            $err = "Img extension should be either png or jpg or jpeg";
            
                            header("location:dashboard_web.php?$err");
                        }
                    }
            
                }
                // else {
                //     $err = "Something went wrong while uploading img";
            
                //     header("location:dash.php?error=$err");
                // }
                // echo "Inserted Successfully";

                //To redirect user to particular page..
                header("location:emp_details.php?doneemp=employee_has_been_register");
                exit;
            }

            // else
            // {
            //     echo "Something went wrong";
            // }
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
