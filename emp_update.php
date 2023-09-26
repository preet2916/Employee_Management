<?php

    $uid = $_GET["uid"];

    $lh="localhost";
    $un="root";
    $ps="";
    $db="employee_table";

    $con=new mysqli($lh,$un,$ps,$db);

    if($con)
    {
        $query = "SELECT * FROM emp_details where id = $uid";

        $result=mysqli_query($con,$query);

        $data = mysqli_fetch_assoc($result);

        $name=$data['emp_name'];
        $phone=$data['emp_phone'];
        $email=$data['emp_email'];
        $salary=$data['emp_salary'];
        $department=$data['emp_department'];
    }


    if(isset($_POST['emp_update']))
    {
        $name1=$_POST['emp_name'];
        $phone1=$_POST['emp_phone'];
        $email1=$_POST['emp_email'];
        $salary1=$_POST['emp_salary'];
        $department1=$_POST['emp_department'];

        if($con)
        {
            //echo "Connection Succesfull"; 
            
            $query1 = "UPDATE emp_details SET emp_name = '$name1', 
                       emp_phone = '$phone1', emp_email = '$email1',
                       emp_salary = '$salary1',emp_department = '$department1' where id='$uid'";

            $result1 = mysqli_query($con,$query1);
            if($result1)
            {
                echo "Inserted Successfully";
                header("location:emp_display.php");
            }
        }
        else
        {
            echo "Unsuccessfull";
        }
    }
?>


<?php
 include 'dashboard_web.php';
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Add Employee Details</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <style>
        .a-1{
            color:white !important;
        }
        .c-1{
            margin-top: 80px;
        }
        label,h3{
            color:white;
        }
        body{
            background-image: url(https://cdn.wallpapersafari.com/96/48/F1KCu6.jpg);
            background-repeat: no-repeat;
            background-size: cover;
        }
        .alert1{
            margin-bottom: 0;
        }
        @media (max-width:1400px){
            .b1{
                padding: 10px 20px !important;
                margin-bottom: 20px;
            }
            .alert1{      
                padding: 10px !important;
            }
        }
        @media (min-width:768px){
            .button1{
                float: right;
            }
        }
    </style>
  </head>
  <body>
    
    <div class="container c-1">

    <form method="post">
    <h3 class="text-center my-4">Update Employee Details</h3>

    <div class="mb-3">
    <label for="emp_name" class="form-label">Employee Name</label>
    <input type="text" class="form-control" id="emp_name" name="emp_name" pattern="[A-Za-z]{3,20}" value="<?php echo $name ?>" autocomplete="off">
    </div>

    <div class="mb-3">
    <label for="emp_phone" class="form-label">Employee Phone</label>
    <input type="tel" class="form-control" id="emp_phone" name="emp_phone" value="<?php echo $phone ?>" autocomplete="off">
    </div>
    <!-- <div class="form-check">
        <input class="form-check-input" type="radio" name="emp_type" id="flexRadioDefault1" value="Project Manager">
        <label class="form-check-label" for="flexRadioDefault1">Project Manager</label>
    </div> -->
    <div class="mb-3">
    <label for="emp_email" class="form-label">Employee Email</label>
    <input type="email" class="form-control" id="emp_email" aria-describedby="emailHelp" name="emp_email" value="<?php echo $email ?>" autocomplete="off">
    </div>

    <div class="mb-3">
    <label for="emp_salary" class="form-label">Employee Salary</label>
    <input type="number" class="form-control" id="emp_salary" name="emp_salary" value="<?php echo $salary ?>" autocomplete="off" minlength="0" maxlength="10">
    </div>

    <label for="emp_department" class="form-label mt-3 mb-3">Employee Department</label>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="emp_department" id="flexRadioDefault1" value="HR">
        <label class="form-check-label mb-1" for="flexRadioDefault1"> HR department</label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="emp_department" id="flexRadioDefault2" value="Marketing" >
        <label class="form-check-label mb-1" for="flexRadioDefault2">Marketing department</label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="emp_department" id="flexRadioDefault3" value="Sales">
        <label class="form-check-label mb-1" for="flexRadioDefault3">Sales department</label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="emp_department" id="flexRadioDefault4" value="Engineering">
        <label class="form-check-label mb-4" for="flexRadioDefault4">Engineering department</label>
    </div>
    
    <!-- <div class="d-flex justify-content-between pb-3"> -->
    <div class="row pb-3">
        <div class="col-xxl-6">
    <button type="submit" style="background-color:black;color:white;padding: 20px 20px;" class="btn b1" name="emp_update">Update Employee</button>
        </div>
        <div class="col-xxl-6">
        </div>
    </div>
    </div>
    </form>
    </div>

  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </body>
</html>