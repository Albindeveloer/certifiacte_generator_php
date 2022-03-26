<?php

// Starting the session, necessary
// for using session variables

    if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 


    $errors = array();
    $_SESSION['success'] = "";

    include ('connection.php');

    if (isset($_POST['login_student'])) {

        $stemail=$_POST['StudentEmail'];
        $stpwd=$_POST['StudentPassword'];
        $batch_id=$_POST['Batch_id'];
        $course_id=$_POST['Course_id'];

        if (empty($stemail)) { array_push($errors, "email is required"); }
        if (empty($stpwd)) { array_push($errors, "password is required"); }
        if (empty($batch_id)) { array_push($errors, "battch is required"); }
        if (empty($course_id)) { array_push($errors, "course is required"); }
        
        if (count($errors) == 0) {

            $password = md5($stpwd);

    $sql = "SELECT * FROM student WHERE batch_id='$batch_id' AND course_id='$course_id' AND studemail='$stemail' AND spwd='$password' LIMIT 1";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        
        $row = mysqli_fetch_row($result);
        print_r($row);

        $st_id=$row[0];
        $stname=$row[1];
        $batch_id=$row[3];
		$course_id=$row[4];
        $dept_id=$row[5];
        $stavatar=$row[12];

        $_SESSION['st_id'] = $st_id;
        $_SESSION['stname'] = $stname;
		$_SESSION['stavatar']=$stavatar;
		$_SESSION['stbatch_id']=$batch_id;
		$_SESSION['stcourse_id']=$course_id;
		$_SESSION['stdept_id']=$dept_id;

        $_SESSION['success'] = "You have logged in";


       header('location: ./studentHeader.php');
    }else{

        array_push($errors, "No such user");
    }


    }

    }


?>