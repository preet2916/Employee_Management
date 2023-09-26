<?php
  session_start();

  if(!isset($_SESSION['user_id'])){
    header("location:login_form_web.php");
  }
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
    <style>

        body{
          background-image: url(https://img.freepik.com/free-vector/round-podium-empty-stage-illuminated-by-spotlights_107791-4152.jpg);
          background-size: cover;
          background-repeat: no-repeat;
        }
        .button-1:hover{
            background-image: linear-gradient(to right, white 0%, black  51%, white 100%) !important;
        }
        .nav-1{
            background-color: black;
        }
        .ul-1 li {
            margin-right: 24px;
        }
        .nav-1 a{
            color: white;
        }
        @media (min-width : 768px){
            .ul-1{
                margin-left : auto;
            }

        }
        @media (max-width : 767px){
            
        }

        .a-1:hover{
            color: red;
        }
       
    </style>
  </head>
  <body>
    
    <!-- navbar -->
    <nav class="navbar navbar-expand-md nav-1 fixed-top ">
  <div class="container">
    <a class="navbar-brand a-1" href="dashboard_web.php">Dashboard</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fa fa-bars" aria-hidden="true" style="color: white;"></i>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ul-1">
        <li class="nav-item">
          <a class="nav-link active a-1" aria-current="page" href="emp_details.php">Add Employee</a>
        </li>
        <li class="nav-item">
        <form>
            <button class="btn btn-sm btn-outline-secondary button-1" type="button" style="margin-top: 5px;background-image: linear-gradient(to right, #FF512F 0%, #DD2476  51%, #FF512F  100%);color: white;"><a href="emp_display.php" style="text-decoration: none;">Display Data</a></button>
        </form>
        </li>
        <li class="nav-item">
        <form>
            <button class="btn btn-sm btn-outline-secondary button-1" type="button" style="margin-top: 5px;background-image: linear-gradient(to right, #FF512F 0%, #DD2476  51%, #FF512F  100%);color: white;"><a href="logout.php" style="text-decoration: none;">Log out</a></button>
        </form>
        </li>
      </ul>
    </div>
  </div>
    </nav>
<!--     
    <div class="sec-1 text-center">
      <h1>Welcome to the Dashboard</h1>
    </div> -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  </body>
</html>