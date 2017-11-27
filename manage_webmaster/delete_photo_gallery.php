<?php include_once 'admin_includes/main_header.php'; ?>
<?php
$id = $_GET['gid'];
$target_dir = '../uploads/photo_gallery/';
$getImgUnlink = getImageUnlink('gallery_images','photo_gallery','gallery_id',$id,$target_dir);
$qry = "DELETE FROM photo_gallery WHERE gallery_id ='$id'";
$result = $conn->query($qry);
if(isset($result)) {
   echo "<script>alert('Photo Gallery Data Deleted Successfully');window.location.href='photo_gallery.php';</script>";
} else {
   echo "<script>alert('Photo Gallery Data Deleted Not Deleted');window.location.href='photo_gallery.php';</script>";
}
?>