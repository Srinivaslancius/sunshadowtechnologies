<?php include_once 'admin_includes/main_header.php'; ?>
<?php
$id = $_GET['bid'];
 if (!isset($_POST['submit']))  {
            echo "fail";
    } else  {
      
        $title = $_POST['title'];
        $description = $_POST['description'];
        $year = $_POST['year'];
        $status = $_POST['status'];
            
                 $sql = "UPDATE our_history SET title ='$title', description='$description', year='$year', status='$status' WHERE id = '$id' ";
                  if($conn->query($sql) === TRUE){

                     echo "<script type='text/javascript'>window.location='our_history.php?msg=success'</script>";
                  } else {
                     echo "<script type='text/javascript'>window.location='our_history.php?msg=fail'</script>";
                  }
                  //echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
      }
?>
<div class="site-content">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h3 class="m-y-0">Content Pages</h3>
          </div>
          <div class="panel-body">
            <div class="row">
              <?php $getOurHistoryData = getDataFromTables('our_history',$status=NULL,'id',$id,$activeStatus=NULL,$activeTop=NULL);
              $getData = $getOurHistoryData->fetch_assoc(); ?>
              <div class="col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3">
                <form data-toggle="validator" method="POST" enctype="multipart/form-data">
                  <div class="form-group">
                    <label for="form-control-2" class="control-label">Title</label>
                    <input type="text" class="form-control" id="form-control-2" name="title" required value="<?php echo $getData['title'];?>">
                    <div class="help-block with-errors"></div>
                  </div>
                  <div class="form-group">
                    <label for="form-control-2" class="control-label">Description</label>
                    <textarea name="description" class="form-control" id="description" data-error="Please enter a valid email address." required><?php echo $getData['description'];?></textarea>
                    <div class="help-block with-errors"></div>
                  </div>
                  <div class="form-group">
                    <label for="form-control-2" class="control-label">Year</label>
                    <input type="text" class="form-control" id="form-control-2" name="year" required value="<?php echo $getData['year'];?>">
                    <div class="help-block with-errors"></div>
                  </div>
                  <?php $getStatus = getDataFromTables('user_status',$status=NULL,$clause=NULL,$id=NULL,$activeStatus=NULL,$activeTop=NULL);?>
                  <div class="form-group">
                    <label for="form-control-3" class="control-label">Choose your status</label>
                    <select id="form-control-3" name="status" class="custom-select" data-error="This field is required." required>
                      <option value="">Select Status</option>
                      <?php while($row = $getStatus->fetch_assoc()) {  ?>
                          <option <?php if($row['id'] == $getData['status']) { echo "Selected"; } ?> value="<?php echo $row['id']; ?>"><?php echo $row['status']; ?></option>
                      <?php } ?>
                   </select>
                    <div class="help-block with-errors"></div>
                  </div>
                  <button type="submit" name="submit" class="btn btn-primary btn-block">Submit</button>
                </form>
              </div>
            </div>
            <hr>
          </div>
        </div>
      </div>
<?php include_once 'admin_includes/footer.php'; ?>
<!-- Below script for ck editor -->
<!-- <script src="//cdn.ckeditor.com/4.5.9/standard/ckeditor.js"></script> -->
<script src="//cdn.ckeditor.com/4.7.0/full/ckeditor.js"></script>
<script>
    CKEDITOR.replace( 'description' ); 
</script>
<style type="text/css">
    .cke_top, .cke_contents, .cke_bottom {
        border: 1px solid #333;
    }
</style>