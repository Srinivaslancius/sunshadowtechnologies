<?php include_once 'admin_includes/main_header.php'; ?>
<?php
 $getBannersData = getDataFromTables('testimonials',$status=NULL,$clause=NULL,$id=NULL,$activeStatus=NULL,$activeTop=NULL);  
$id = $_GET['bid'];
//echo $music_number;
$target_dir = '../uploads/testimonial_images/';
$getImgUnlink = getImageUnlink('image','testimonials','id',$id,$target_dir);
$qry = "DELETE FROM testimonials WHERE id ='$id'";
$result = $conn->query($qry);
if(isset($result)) {
   echo "<script>alert('Banner Deleted Successfully');window.location.href='testimonials.php';</script>";
} else {
   echo "<script>alert('Banner Not Deleted');window.location.href='testimonials.php';</script>";
}
?>