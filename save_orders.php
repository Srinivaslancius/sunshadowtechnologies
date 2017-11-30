<?php 
include "manage_webmaster/admin_includes/config.php";
include "manage_webmaster/admin_includes/common_functions.php"; 

if(isset($_POST["submit"]) && $_POST["submit"]!="") {
	// echo "<pre>"; print_r($_POST); die;	
	$title = $_POST["title"];
	$price = $_POST["price"];
	$user_email = $_POST["user_email"];
	$user_name = $_POST["user_name"];
	$mobile = $_POST["user_mobile"];

        $getAllSiteSettingsData = getAllData('site_settings');
          $getSiteSettingsData = $getAllSiteSettingsData->fetch_assoc();
                    

	//Sending mail
	//$dataem = $getSiteSettingsData['email'];
	$to = $getSiteSettingsData['email'];
	//$to = "$dataem";
	$subject = "User Place Order Information";

	$message = "<html><head><title>Place Order Information</title></head>
	<body>
		<table rules='all' style='border-color: #666;' cellpadding='10'>
			<tr style='background: #eee;'><td><strong>Product Name:</strong> </td><td>" . strip_tags($_POST['title']) . "</td></tr>
			<tr style='background: #eee;'><td><strong>Product Price:</strong> </td><td>" . strip_tags($_POST['price']) . "</td></tr>
			<tr style='background: #eee;'><td><strong>User Name:</strong> </td><td>" . strip_tags($_POST['user_name']) . "</td></tr>
			<tr style='background: #eee;'><td><strong>User Email:</strong> </td><td>" . strip_tags($_POST['user_email']) . "</td></tr>
			<tr style='background: #eee;'><td><strong>User Mobile:</strong> </td><td>" . strip_tags($_POST['user_mobile']) . "</td></tr>
		</table>
	</body>
	</html>
	";
	
	// Always set content-type when sending HTML email
	$headers = "MIME-Version: 1.0" . "\r\n";
	$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

	// More headers
	$headers .= 'From: '.$name.'<'.$email.'>'. "\r\n";
	// $headers .= 'Cc: myboss@example.com' . "\r\n";

	if(mail($to,$subject,$message,$headers)) {
    echo  "<script>alert('Mail Sent successfully');window.location.href('products.php');</script>";
}

	//Saving Orders
	

    

}

?>