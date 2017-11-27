<?php include_once 'admin_includes/main_header.php'; ?>
<?php
 $getBannersData = getDataFromTables('service_details',$status=NULL,$clause=NULL,$id=NULL,$activeStatus=NULL,$activeTop=NULL);  
$id = $_GET['bid'];
//echo $music_number;
$target_dir = '../uploads/service_details_images/';
$getImgUnlink = getImageUnlink('bank_logo','service_details','id',$id,$target_dir);
$qry = "DELETE FROM service_details WHERE id ='$id'";
$result = $conn->query($qry);
if(isset($result)) {
   echo "<script>alert('Service Details Deleted Successfully');window.location.href='service_details.php';</script>";
} else {
   echo "<script>alert('Service Details Not Deleted');window.location.href='service_details.php';</script>";
}
?>