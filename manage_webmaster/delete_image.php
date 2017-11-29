<?php
include_once('admin_includes/config.php');
include_once('admin_includes/common_functions.php');
$id = $_POST['del_id'];
//echo $music_number;
$target_dir = '../uploads/case_studies_pdfs/';
$getImgUnlink = getImageUnlink('industry_pdfs','industry_pdfs','id',$id,$target_dir);
$qry = "DELETE FROM industry_pdfs WHERE id ='$id'";
$result = $conn->query($qry);
if(isset($result)) {
   echo "YES";
} else {
   echo "NO";
}
?>