<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
    <style>
html,body,.intro {
  height: 100%;
}

.form-1{
    margin-top : -6px;
}

table td,table th {
  text-overflow: ellipsis;
  white-space: nowrap;
  overflow: hidden;
}
.card-1{
    margin-top : 5px;
}

thead th,
tbody th {
  color: #fff;
}

tbody td {
  font-weight: 500;
  color: rgba(255,255,255,.65);
}

@media (min-width:768px){
            .card-body{
                padding : 0 2rem !important;
            }
            .card-1{
                margin: 13% 0 6% 0;
            }
        }

@media (max-width: 767px){
    .card-1{
        margin : 25% 0 6% 0 !important;
    }
}

.card {
  border-radius: .5rem;
}
.form-1 button:hover{
            background-image: linear-gradient(to right, white 0%, black  51%, white 100%) !important;
        }
        .intro{
            background-color: rgba(0,0,0,.25);
            background-image: url('https://mdbootstrap.com/img/Photos/new-templates/tables/img2.jpg');
        }
    </style>
  </head>
  <body>
    <?php
        include 'dashboard_web.php';
    ?>
    <section class="intro">
        <div class="bg-image" >
          <div class="mask d-flex align-items-center h-100" >
            <div class="container">
              <div class="row justify-content-center">
                <div class="col-12">
                  <div class="card bg-dark shadow-2-strong card-1">
                    <div class="card-body">
                      <div class="table-responsive">
                        <table class="table table-dark table-borderless table-hover mb-0 text-left">
                          <thead>
                            <tr>
                              <td scope="col">Name</td>
                              <td scope="col">Phone</td>
                              <td scope="col">Email</td>
                              <td scope="col">Salary</td>
                              <td scope="col">Department</td>
                              <td scope="col">Image</td>
                              <!-- <td scope="col">Price</td>
                              <td scope="col">Action</td> -->
                            </tr>
                          </thead>
                          <tbody>
                                <?php

                                    $lh="localhost";
                                    $un="root";
                                    $ps="";
                                    $db="employee_table";

                                    $con=new mysqli($lh,$un,$ps,$db);

                                    if($con){

                                        $query="SELECT * FROM emp_details";

                                        $result=mysqli_query($con,$query);

                                        if($result)
                                        {
                                            while($rows=mysqli_fetch_assoc($result))
                                            {
                                                $id=$rows['id'];
                                                $name=$rows['emp_name'];
                                                $phone=$rows['emp_phone'];
                                                $email=$rows['emp_email'];
                                                $salary=$rows['emp_salary'];
                                                $department=$rows['emp_department'];

                                                echo '<tr>
                                                    <td>'.$name.'</td>    
                                                    <td>'.$phone.'</td>    
                                                    <td>'.$email.'</td>    
                                                    <td>'.$salary.'</td>    
                                                    <td>'.$department.'</td> '; ?>

                                                      <td>
                                                          <img src="upload/<?= $rows['emp_image'] ?>" alt="" height="100" width="100">
                                                      </td>


                                                      <?php
                                                    echo'<td>
                                                        <form class="d-flex form-1">
                                                            <a href="emp_update.php ?uid='. $id .' " style="color : white;"><button class="btn btn-sm btn-outline-secondary" type="button" style="margin-top: 5px;background-image: linear-gradient(to right,  #FF512F 0%, #DD2476  51%, #FF512F  100%);color: white;">U</button></a>
                                                            <a  href="emp_delete.php ?uid='. $id .'" style="color : white;"><button class="btn btn-sm btn-outline-secondary" type="button" style="margin-top: 5px;background-image: linear-gradient(to right, #FF512F 0%, #DD2476  51%, #FF512F  100%);color: white;margin-left : 11px;">D</button></a>
                                                        </form>
                                                    </td> 
                                                </tr>';
                                            }
                                        }
                                    }

                                    else
                                    {
                                        echo 'error';
                                    }
                                ?>
                            </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>    
    <script>
        // var x;
        // var y = "yes";
        // x = function func() {
        // prompt('Do you really want to update the data "yes" or "no" ?');
        // };
        // if (x == y) {
        // //Change the page here
        // console.log("Correct");
        // } else {
        // console.log('sorry, try again!')
        // };
    </script>
    </body>
</html>
