<?php include_once 'admin_includes/main_header.php'; ?>
<?php

$id = $_GET['bid'];

$qry = "DELETE FROM faq_categories WHERE id ='$id'";
$result = $conn->query($qry);
if(isset($result)) {
   echo "<script>alert('Faq Category Deleted Successfully');window.location.href='faq_categories.php';</script>";
} else {
   echo "<script>alert('Faq Category Not Deleted');window.location.href='faq_categories.php';</script>";
}
?>