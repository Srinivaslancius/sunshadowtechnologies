<?php include_once 'admin_includes/main_header.php'; ?>
<?php
 $getBannersData = getDataFromTables('industries_test_cases',$status=NULL,$clause=NULL,$id=NULL,$activeStatus=NULL,$activeTop=NULL);  
$id = $_GET['uid'];
//echo $music_number;
$target_dir = '../uploads/indusrty_pdf_images/';
$getImgUnlink = getImageUnlink('pdf_image','industries_test_cases','id',$id,$target_dir);
$qry = "DELETE FROM industries_test_cases WHERE id ='$id'";
$result = $conn->query($qry);
if(isset($result)) {
   echo "<script>alert('Industry Test Case Deleted Successfully');window.location.href='industries_test_cases.php';</script>";
} else {
   echo "<script>alert('Industry Test Case Not Deleted');window.location.href='industries_test_cases.php';</script>";
}
?>