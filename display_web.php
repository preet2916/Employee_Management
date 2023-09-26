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
                              <td scope="col">Username</td>
                              <td scope="col">Email</td>
                              <td scope="col">Contact</td>
                              <td scope="col">Password</td>
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

                                        $query="SELECT * FROM registration";

                                        $result=mysqli_query($con,$query);

                                        if($result)
                                        {
                                            while($rows=mysqli_fetch_assoc($result))
                                            {
                                                $id=$rows['id'];
                                                $username=$rows['username'];
                                                $email=$rows['email'];
                                                $contact=$rows['contact'];
                                                $password=$rows['password'];

                                                echo '<tr>
                                                    <td>'.$username.'</td>    
                                                    <td>'.$email.'</td>    
                                                    <td>'.$contact.'</td>    
                                                    <td>'.$password.'</td>    
                                                    <td>
                                                        <form class="d-flex form-1">
                                                            <a href="update_web.php ?uid='. $id .' " style="color : white;"><button class="btn btn-sm btn-outline-secondary" type="button" style="margin-top: 5px;background-image: linear-gradient(to right,  #FF512F 0%, #DD2476  51%, #FF512F  100%);color: white;">U</button></a>
                                                            <a  href="delete_web.php ?uid='. $id .'" style="color : white;"><button class="btn btn-sm btn-outline-secondary" type="button" style="margin-top: 5px;background-image: linear-gradient(to right, #FF512F 0%, #DD2476  51%, #FF512F  100%);color: white;margin-left : 11px;">D</button></a>
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
                            <!-- <tr>
                              <td scope="row">1.</td>
                                <td><img src="https://static.toiimg.com/photo/51892394.cms" class="img-fluid"></td>
                                <td>Pizza</td>
                                <td>Made with the flavorful Del Monte sauce and soft olive <br>and corn kernels, this recipe will surely appeal to your indulgent cravings.</td>
                                <td>Rs.179</td>
                                <td>
                                    <form class="d-flex form-1">
                                        <button class="btn btn-sm btn-outline-secondary" type="button" style="margin-top: 5px;background-image: linear-gradient(to right,  #FF512F 0%, #DD2476  51%, #FF512F  100%);color: white;">D</button>
                                        <button class="btn btn-sm btn-outline-secondary" type="button" style="margin-top: 5px;background-image: linear-gradient(to right, #FF512F 0%, #DD2476  51%, #FF512F  100%);color: white;margin-left : 11px;"><a href="editproduct.php" style="color:white;">E<a></button>
                                    </form>
                                </td>
                            </tr>
                            <tr>
                                <td scope="row">2.</td>
                                <td><img src="https://www.awesomecuisine.com/wp-content/uploads/2009/05/french-fries.jpg" class="img-fluid"></td>
                                <td>French Fries</td>
                                <td>french fries, also called chips, finger chips, fries, or French pommes frites, side dish <br> or snack typically made from deep-fried potatoes that have been cut into various shapes.</td>
                                <td>Rs.120</td>
                                <td>
                                    <form class="d-flex form-1">
                                        <button class="btn btn-sm btn-outline-secondary" type="button" style="margin-top: 5px;background-image: linear-gradient(to right,  #FF512F 0%, #DD2476  51%, #FF512F  100%);color: white;">D</button>
                                        <button class="btn btn-sm btn-outline-secondary" type="button" style="margin-top: 5px;background-image: linear-gradient(to right, #FF512F 0%, #DD2476  51%, #FF512F  100%);color: white;margin-left : 11px;"><a href="editproduct.php" style="color:white;">E<a></button>
                                    </form>
                                </td>
                            </tr>
                            <tr>
                                <td scope="row">3.</td>
                                <td><img src="https://www.thespruceeats.com/thmb/UnVh_-znw7ikMUciZIx5sNqBtTU=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/steamed-momos-wontons-1957616-hero-01-1c59e22bad0347daa8f0dfe12894bc3c.jpg" class="img-fluid" style="color:white;"></td>
                                <td>Momos</td>
                                <td>Momos are a popular street food in northern parts of India. These are also known <br> as Dim Sum and are basically dumplings made from flour with a savory stuffing.</td>
                                <td>Rs.80</td>
                                <td>
                                    <form class="d-flex form-1">
                                        <button class="btn btn-sm btn-outline-secondary" type="button" style="margin-top: 5px;background-image: linear-gradient(to right,  #FF512F 0%, #DD2476  51%, #FF512F  100%);color: white;">D</button>
                                        <button class="btn btn-sm btn-outline-secondary" type="button" style="margin-top: 5px;background-image: linear-gradient(to right, #FF512F 0%, #DD2476  51%, #FF512F  100%);color: white;margin-left : 11px;"><a href="editproduct.php" style="color:white;">E<a></button>
                                    </form>
                                </td>
                            </tr>
                            <tr>
                                <td scope="row">4.</td>
                                <td><img src="https://www.nehascookbook.com/wp-content/uploads/2022/10/Schezwan-frankiee-WS.jpg" class="img-fluid"></td>
                                <td>Frankie</td>
                                <td>This delicious frankie recipe is a snack that everyone will enjoy and is a <br>popular vegetarian street food option across India. </td>
                                <td>Rs.50</td>
                                <td>
                                    <form class="d-flex form-1">
                                        <button class="btn btn-sm btn-outline-secondary" type="button" style="margin-top: 5px;background-image: linear-gradient(to right,  #FF512F 0%, #DD2476  51%, #FF512F  100%);color: white;">D</button>
                                        <button class="btn btn-sm btn-outline-secondary" type="button" style="margin-top: 5px;background-image: linear-gradient(to right, #FF512F 0%, #DD2476  51%, #FF512F  100%);color: white;margin-left : 11px;"><a href="editproduct.php" style="color:white;">E<a></button>
                                    </form>
                                </td>
                            </tr>
                            <tr>
                                <td scope="row">5.</td>
                                <td><img src="https://b.zmtcdn.com/data/pictures/chains/7/3501627/4e0c0bafb3fe233938991cf1af655e79.jpg" class="img-fluid"></td>
                                <td>Burger</td>
                                <td>A burger is a flat round mass of minced meat or vegetables, which is fried and <br>often eaten in a bread roll.</td>
                                <td>Rs.105</td>
                                <td>
                                    <form class="d-flex form-1">
                                        <button class="btn btn-sm btn-outline-secondary" type="button" style="margin-top: 5px;background-image: linear-gradient(to right,  #FF512F 0%, #DD2476  51%, #FF512F  100%);color: white;">D</button>
                                        <button class="btn btn-sm btn-outline-secondary" type="button" style="margin-top: 5px;background-image: linear-gradient(to right, #FF512F 0%, #DD2476  51%, #FF512F  100%);color: white;margin-left : 11px;"><a href="editproduct.php" style="color:white;">E<a></button>
                                    </form>
                                </td>
                            </tr> -->
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
