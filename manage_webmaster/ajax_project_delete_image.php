<?php
include_once('admin_includes/config.php');
include_once('admin_includes/common_functions.php');
$id = $_POST['del_id'];
$target_dir = '../uploads/projects_images/';
$getImgUnlink = getImageUnlink('images','projects','id',$id,$target_dir);
$qry = "DELETE FROM projects WHERE id ='$id'";
$result = $conn->query($qry);
if(isset($result)) {
   echo "YES";
} else {
   echo "NO";
}
?>