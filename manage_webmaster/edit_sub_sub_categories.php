<?php include_once 'admin_includes/main_header.php'; ?>
<?php
$id = $_GET['bid'];
 if (!isset($_POST['submit']))  {
            echo "fail";
    } else  {
        $category_id = $_POST['category_id'];
        $sub_category_id = $_POST['sub_category_id'];
        $sub_sub_category_name = $_POST['sub_sub_category_name'];
        $status = $_POST['status'];
        $sql = "UPDATE sub_sub_categories SET category_id='$category_id',sub_category_id='$sub_category_id', sub_sub_category_name = '$sub_sub_category_name',status='$status' WHERE id='$id' ";
        if($conn->query($sql) === TRUE){
         echo "<script type='text/javascript'>window.location='sub_sub_categories.php?msg=success'</script>";
      } else {
         echo "<script type='text/javascript'>window.location='sub_sub_categories.php?msg=fail'</script>";
      }

      }
?>
<?php $getSubCategoriesData = getDataFromTables('sub_sub_categories',$status=NULL,'id',$id,$activeStatus=NULL,$activeTop=NULL);
      $getSubSubCategories = $getSubCategoriesData->fetch_assoc();
      $getCategories = getDataFromTables('categories','0',$clause=NULL,$id=NULL,$activeStatus=NULL,$activeTop=NULL);

      $getsubCategoriesData = getDataFromTables('sub_categories','0',$clause=NULL,$id=NULL,$activeStatus=NULL,$activeTop=NULL);

 ?>
<div class="site-content">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h3 class="m-y-0">Sub Sub Categories</h3>
          </div>
          <div class="panel-body">            
            <div class="row">
              <div class="col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3">
                <form data-toggle="validator" method="post" enctype="multipart/form-data">
                  <div class="form-group">
                    <label for="form-control-3" class="control-label">Choose your Category</label>
                    <select id="form-control-3" name="category_id" class="custom-select" data-error="This field is required." required onChange="getSubCategories(this.value);">
                      <option value="">Select Category</option>
                      <?php while($row = $getCategories->fetch_assoc()) {  ?>
                        <option value="<?php echo $row['id']; ?>" <?php if($row['id'] == $getSubSubCategories['category_id']) { echo "selected=selected"; }?> ><?php echo $row['category_name']; ?></option>
                    <?php } ?>
                    </select>
                    <div class="help-block with-errors"></div>
                  </div>
                  
                  <div class="form-group">
                    <label for="form-control-3" class="control-label">Select Sub Category</label>
                    <select id="sub_category_id" name="sub_category_id" class="custom-select" data-error="This field is required." required onChange="getSubSubCategories(this.value);">
                       <option value="">Select Sub Category</option>
                      <?php while($row = $getsubCategoriesData->fetch_assoc()) {  ?>
                      <option <?php if($row['id'] == $getSubSubCategories['sub_category_id']) { echo "Selected"; } ?> value="<?php echo $row['id']; ?>"><?php echo $row['sub_category_name']; ?></option>
                      <?php } ?>
                   </select>
                    <div class="help-block with-errors"></div>
                  </div>

                  <div class="form-group">
                    <label for="form-control-2" class="control-label">Sub Category Name</label>
                    <input type="text" class="form-control" id="form-control-2" name="sub_sub_category_name" required value="<?php echo $getSubSubCategories['sub_sub_category_name'];?>">
                    <div class="help-block with-errors"></div>
                  </div>
                  <?php $getStatus = getDataFromTables('user_status',$status=NULL,$clause=NULL,$id=NULL,$activeStatus=NULL,$activeTop=NULL);?>
                  <div class="form-group">
                    <label for="form-control-3" class="control-label">Choose your status</label>
                    <select id="form-control-3" name="status" class="custom-select" data-error="This field is required." required>
                      <option value="">Select Status</option>
                      <?php while($row = $getStatus->fetch_assoc()) {  ?>
                          <option <?php if($row['id'] == $getSubSubCategories['status']) { echo "Selected"; } ?> value="<?php echo $row['id']; ?>"><?php echo $row['status']; ?></option>
                      <?php } ?>
                   </select>
                    <div class="help-block with-errors"></div>
                  </div>
                  <button type="submit" name="submit" value="Submit"  class="btn btn-primary btn-block">Submit</button>
                </form>
              </div>
            </div>
            <hr>
          </div>
        </div>
      </div>
      <?php include_once 'admin_includes/footer.php'; ?>
   <script src="js/tables-datatables.min.js"></script>
    <script type="text/javascript">
      function getSubCategories(val) {
          $.ajax({
          type: "POST",
          url: "get_sub_categories.php",
          data:'category_id='+val,
          success: function(data){
              $("#sub_category_id").html(data);
          }
          });
      }
    </script>