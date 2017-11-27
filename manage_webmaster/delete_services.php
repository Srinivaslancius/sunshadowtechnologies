<?php include_once 'admin_includes/main_header.php'; ?>
<?php
 $getBannersData = getDataFromTables('services',$status=NULL,$clause=NULL,$id=NULL,$activeStatus=NULL,$activeTop=NULL);  
$id = $_GET['bid'];
//echo $music_number;
$target_dir = '../uploads/service_images/';
$getImgUnlink = getImageUnlink('image','services','id',$id,$target_dir);
$qry = "DELETE FROM services WHERE id ='$id'";
$result = $conn->query($qry);
if(isset($result)) {
   echo "<script>alert('Service Data Deleted Successfully');window.location.href='services.php';</script>";
} else {
   echo "<script>alert('Service Data Not Deleted');window.location.href='services.php';</script>";
}
?>