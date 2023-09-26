<?php

if (isset($_POST['submit'])) {
    // echo "<pre>";
    // print_r($_FILES['myImg']);
    // echo "</pre>";

    // echo $_FILES['myImg']['tmp_name'];

    $img_name = $_FILES['myImg']['name'];
    $extension = $_FILES['myImg']['type'];
    $tmp_name = $_FILES['myImg']['tmp_name'];
    $error = $_FILES['myImg']['error'];
    $size = $_FILES['myImg']['size'];

    // echo $extension;

    if ($error === 0) {
        if ($size > 1250000) {
            $err = "Img size should be less than 1.25 MB";

            header("location:dash.php?$err");
        } else {
            $allowed_extension = array('png', 'jpg', 'jpeg');

            $img_ex = pathinfo($img_name, PATHINFO_EXTENSION);

            // echo $img_ex;


            if (in_array($img_ex, $allowed_extension)) {


                $new_img_name = uniqid('IMG-', true) . '.' . $img_ex;

                $path = 'uploads/' . $new_img_name;

                move_uploaded_file($tmp_name, $path);


                
            } else {
                $err = "Img extension should be either png or jpg or jpeg";

                header("location:dash.php?$err");
            }
        }


    } else {
        $err = "Something went wrong while uploading img";

        header("location:dash.php?error=$err");
    }
}
?>