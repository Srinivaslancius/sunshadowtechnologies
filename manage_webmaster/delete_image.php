<?php
include_once('admin_includes/config.php');
include_once('admin_includes/common_functions.php');
$id = $_POST['del_id'];
//echo $music_number;
$target_dir = '../uploads/case_studies_images/';
$getImgUnlink = getImageUnlink('industry_images','industry_images','id',$id,$target_dir);
$qry = "DELETE FROM industry_images WHERE id ='$id'";
$result = $conn->query($qry);
if(isset($result)) {
   echo "YES";
} else {
   echo "NO";
}
?>