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

    <form method="post" action="emp_insert.php" enctype="multipart/form-data">
    <h3 class="text-center my-4">Add Employee Details</h3>

    <div class="mb-3">
    <label for="emp_name" class="form-label">Employee Name</label>
    <input type="text" class="form-control" id="emp_name" name="emp_name" pattern="[A-Za-z]{3,20}" autocomplete="off">
    </div>

    <div class="mb-3">
    <label for="emp_phone" class="form-label">Employee Phone</label>
    <input type="tel" class="form-control" id="emp_phone" name="emp_phone" autocomplete="off">
    </div>
    <!-- <div class="form-check">
        <input class="form-check-input" type="radio" name="emp_type" id="flexRadioDefault1" value="Project Manager">
        <label class="form-check-label" for="flexRadioDefault1">Project Manager</label>
    </div> -->
    <div class="mb-3">
    <label for="emp_email" class="form-label">Employee Email</label>
    <input type="email" class="form-control" id="emp_email" aria-describedby="emailHelp" name="emp_email" autocomplete="off">
    </div>

    <div class="mb-3">
    <label for="emp_salary" class="form-label">Employee Salary</label>
    <input type="number" class="form-control" id="emp_salary" name="emp_salary" autocomplete="off" minlength="0" maxlength="10">
    </div>

    <label for="emp_department" class="form-label mt-3 mb-3">Employee Department</label>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="emp_department" id="flexRadioDefault1" value="HR">
        <label class="form-check-label mb-1" for="flexRadioDefault1"> HR department</label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="emp_department" id="flexRadioDefault2" value="Marketing">
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
    <div class="mb-3">
    <label for="emp_image" class="form-label">Employee Image</label>
    <input type="file" name="emp_image" id="emp_image">
    </div>
    
    <!-- <div class="d-flex justify-content-between pb-3"> -->
    <div class="row pb-3">
        <div class="col-xxl-6">
    <button type="submit" style="background-color:black;color:white;padding: 20px 20px;" class="btn b1" name="emp_insert">Add Employee</button>
        </div>
        <div class="col-xxl-6">
    <?php
            if(isset($_GET['doneemp']))
            {
                echo '<div class="sec-1" style="background-color:black !important ; color :white !important; border-radius : 5px !important ; "><div class="alert fade show alert1" role="alert">
                <strong>You have been register!</strong> Click on the <b>Display data</b> button to show your data.
                <button type="button" data-bs-dismiss="alert" aria-label="Close" class="button1">  <i class="fa fa-times" aria-hidden="true"></i></button>
                </div></div>';
            }
        ?>
        </div>
    </div>
    </div>
    </form>
    </div>

  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </body>
</html>