<?php include_once 'admin_includes/main_header.php'; ?>
<?php
 $getBannersData = getDataFromTables('downloads',$status=NULL,$clause=NULL,$id=NULL,$activeStatus=NULL,$activeTop=NULL);  
$id = $_GET['uid'];
//echo $music_number;
$target_dir = '../uploads/downloads_pdf_images/';
$getImgUnlink = getImageUnlink('pdf_image','downloads','id',$id,$target_dir);
$qry = "DELETE FROM downloads WHERE id ='$id'";
$result = $conn->query($qry);
if(isset($result)) {
   echo "<script>alert('Download File Deleted Successfully');window.location.href='downloads.php';</script>";
} else {
   echo "<script>alert('Download File Not Deleted');window.location.href='downloads.php';</script>";
}
?>