<?php include_once 'admin_includes/main_header.php'; ?>
<?php
$id = $_GET['uid'];
$qry = "DELETE FROM association WHERE id ='$id'";
$result = $conn->query($qry);
if(isset($result)) {
   echo "<script>alert('Association Item Deleted Successfully');window.location.href='association.php';</script>";
} else {
   echo "<script>alert('Association Item Not Deleted');window.location.href='association.php';</script>";
}
?>