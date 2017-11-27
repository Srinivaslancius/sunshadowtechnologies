<?php
include_once('manage_webmaster/admin_includes/config.php');
include_once('manage_webmaster/admin_includes/common_functions.php');
if(isset($_POST['supervisor_email'])) {
	$email=$_POST['supervisor_email'];
	$checkdata=" SELECT email FROM posted_resumes WHERE email='$email' ";
	$query=$conn->query($checkdata);
	if($query->num_rows>0) {
	    echo "Email Already Exist";
	} else {
	}
exit();
}
?>