<?php include_once 'admin_includes/main_header.php'; ?>
<?php

$id = $_GET['bid'];

$qry = "DELETE FROM our_history WHERE id ='$id'";
$result = $conn->query($qry);
if(isset($result)) {
   echo "<script>alert('Our History Deleted Successfully');window.location.href='our_history.php';</script>";
} else {
   echo "<script>alert('Our History Not Deleted');window.location.href='our_history.php';</script>";
}
?>