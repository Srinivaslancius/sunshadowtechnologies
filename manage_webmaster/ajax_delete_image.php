<?php
include_once('admin_includes/config.php');
include_once('admin_includes/common_functions.php');
$id = $_POST['del_id'];
$target_dir = '../uploads/photo_gallery/';
$getImgUnlink = getImageUnlink('gallery_images','photo_gallery','id',$id,$target_dir);
$qry = "DELETE FROM photo_gallery WHERE id ='$id'";
$result = $conn->query($qry);
if(isset($result)) {
   echo "YES";
} else {
   echo "NO";
}
?>