<?php
    session_start();
    session_destroy();
    header("location:login_form_web.php");
?>