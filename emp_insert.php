<?php

if (isset($_POST['emp_insert'])) {

  //echo "connection succesfully !";

  // echo "<pre>";
  // print_r($_FILES['img']);
  // echo "</pre>"; 


  $name=$_POST['emp_name'];
  $phone=$_POST['emp_phone'];
  $email=$_POST['emp_email'];
  $salary=$_POST['emp_salary'];
  $department=$_POST['emp_department'];
  // $eimg=$_POST['image'];

  $img_name = $_FILES['emp_image']['name'];
  $extension = $_FILES['emp_image']['type'];
  $tmp_name = $_FILES['emp_image']['tmp_name'];
  $error = $_FILES['emp_image']['error'];
  $size = $_FILES['emp_image']['size'];

  $lh = "localhost";
  $un = "root";
  $ps = '';
  $db = 'employee_table';

  $conn = new mysqli($lh, $un, $ps, $db);

  if ($conn) {
    echo "database";


    echo " values inserted";

    if ($error === 0) {
      if ($size > 12500000) {
        $err = "Img size should be less than 1.25 MB";
        header("location:dashboard_web.php?$err");
      } else {
        $allowed_extention = array('png', 'jpg', 'jpeg');
        $img_ex = pathinfo($img_name, PATHINFO_EXTENSION);

        // echo $img_ex;
        if (in_array($img_ex, $allowed_extention)) {

          $new_img_name = uniqid('IMG-', true) . '.' . $img_ex;
          $path = 'upload/' . $new_img_name;
          move_uploaded_file($tmp_name, $path);
          $query = "INSERT INTO emp_details(emp_name,emp_phone,emp_email,emp_salary,emp_department,emp_image) VALUES ('$name','$phone','$email','$salary','$department','$new_img_name')";
          $result = mysqli_query($conn, $query);
          if ($result) {

            header("location:emp_display.php");
          }
        } else {
          $err = "Img extension should be either png or jpg or jpeg";

        }

      }

    } else {
      $err = "something went wrong while uploading !";
      header("location:dashboard_web.php?error=$err");
    }

  } else {
    echo "Something went wrong";
  }
} else {
  die($conn);
}


?>