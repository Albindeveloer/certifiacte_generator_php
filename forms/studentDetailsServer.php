<?php

// Starting the session, necessary
// for using session variables

    if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 


// Declaring and hoisting the variables
$stname = "";
$stemail = "";


$stdept_id = "";
$stbatch_id="";
$stcourse_id="";

$errors = array();


include ('connection.php');

// Registration code
if (isset($_POST['reg_student'])) {

	// Receiving the values entered and storing
	// in the variables
	// Data sanitization is done to prevent
	// SQL injections
	$stname = mysqli_real_escape_string($conn, $_POST['StName']);
    $stcsem = mysqli_real_escape_string($conn, $_POST['StCsem']);
    $stphone = mysqli_real_escape_string($conn, $_POST['StPhone']);
    $stdob = mysqli_real_escape_string($conn, $_POST['StDOB']);
    $staddress =  $_POST['Staddress'];
    $ststatus = mysqli_real_escape_string($conn, $_POST['StStatus']);
	$stemail = mysqli_real_escape_string($conn, $_POST['StEmail']);
    $stdept_id = mysqli_real_escape_string($conn, $_POST['StDept_id']);
	$stbatch_id = mysqli_real_escape_string($conn, $_POST['StBatch_id']);
	$stcourse_id = mysqli_real_escape_string($conn, $_POST['StCourse_id']);
	$stpassword = mysqli_real_escape_string($conn, $_POST['StPwd']);
	

	// Ensuring that the user has not left any input field blank
	// error messages will be displayed for every blank input
	if (empty($stname)) { array_push($errors, "Username is required"); }
    if (empty($stcsem)) { array_push($errors, "Username is required"); }
    if (empty($stphone)) { array_push($errors, "Username is required"); }
    if (empty($stdob)) { array_push($errors, "Username is required"); }
    if (empty($staddress)) { array_push($errors, "Username is required"); }
    if (empty($ststatus)) { array_push($errors, "Username is required"); }
	if (empty($stemail)) { array_push($errors, "Email is required"); }
    
    if (empty($stdept_id)) { array_push($errors, "dept_id is required"); }
	if (empty($stbatch_id)) { array_push($errors, "batch_id is required"); }
	if (empty($stcourse_id)) { array_push($errors, "course_id is required"); }
	if (empty($stpassword)) { array_push($errors, "Password is required"); }

	

	$sql = "SELECT * FROM student WHERE batch_id='$stbatch_id' AND course_id='$stcourse_id' AND studemail='$stemail' LIMIT 1";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
		array_push($errors, "the user already exists");
    }



	// If the form is error free, then register the user
	if (count($errors) == 0) {
		
		// Password encryption to increase data security
		$password = md5($stpassword);
		
		$file_name=$_FILES['Stprofilepic']['name'];                            //array ayittan varune
		$temp_path=$_FILES['Stprofilepic']['tmp_name'];

		$new_file_name=time().$file_name;                                  //timevach name koduthu

		move_uploaded_file($temp_path,"./uploads/student/".$new_file_name);                    //temppath,evidekano

    

		$query = "INSERT INTO student (studname,spwd,batch_id,course_id,dept_id,studdob,studaddress,studemail,studphone,Csem,status,s_avatar)
				VALUES('$stname', '$password', '$stbatch_id', '$stcourse_id','$stdept_id','$stdob','$staddress','$stemail','$stphone','$stcsem','$ststatus','$new_file_name')";

                echo $query;
		
		$rs=mysqli_query($conn, $query);

		

	
	
		// Page on which the user will be
		// redirected after logging in
        if($rs){
            header('location: ./facultCheckLogin.php');
        }else{
            echo "ERROR: Could not able to execute $query. " . mysqli_error($conn);
        }

		// Inserting data into table
				
	}
	
    
}

?>