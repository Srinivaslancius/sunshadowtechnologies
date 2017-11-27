<?php include_once 'admin_includes/main_header.php'; ?>
<?php
$id = $_GET['uid'];
 if (!isset($_POST['submit']))  {
            echo "fail";
    } else  {
            $service_id = $_POST['service_id'];
            $bank_name = $_POST['bank_name'];
            $interest_rate_range = $_POST['interest_rate_range'];
            $process_fee_range = $_POST['process_fee_range'];
            $loan_amount = $_POST['loan_amount'];
            $description = $_POST['description'];
            $tenture_range = $_POST['tenture_range'];
            if($_FILES["bank_logo"]["name"]!='') {
              $bank_logo = $_FILES["bank_logo"]["name"];
              $target_dir = "../uploads/service_details_images/";
              $target_file = $target_dir . basename($_FILES["bank_logo"]["name"]);
              $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
              $getImgUnlink = getImageUnlink('bank_logo','service_details','id',$id,$target_dir);
                //Send parameters for img val,tablename,clause,id,imgpath for image ubnlink from folder
              if (move_uploaded_file($_FILES["bank_logo"]["tmp_name"], $target_file)) {
                   $sql = "UPDATE `service_details` SET service_id = '$service_id',bank_name = '$bank_name',interest_rate_range = '$interest_rate_range',process_fee_range= '$process_fee_range', loan_amount = '$loan_amount', tenture_range = '$tenture_range',bank_logo = '$bank_logo',description= '$description',status='$status' WHERE id = '$id' ";
                    if($conn->query($sql) === TRUE){
                      echo "<script type='text/javascript'>window.location='service_details.php?msg=success'</script>";
                    } else {
                      echo "<script type='text/javascript'>window.location='service_details.php?msg=fail'</script>";
                    }
                    //echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
                } else {
                    echo "Sorry, there was an error uploading your file.";
                }
            }  else {
                $sql = "UPDATE `service_details` SET service_id = '$service_id', bank_name = '$bank_name', interest_rate_range = '$interest_rate_range', process_fee_range= '$process_fee_range', loan_amount = '$loan_amount', tenture_range = '$tenture_range', description= '$description',status='$status' WHERE id = '$id' ";
                if($conn->query($sql) === TRUE){
                  echo "<script type='text/javascript'>window.location='service_details.php?msg=success'</script>";
                } else {
                  echo "<script type='text/javascript'>window.location='service_details.php?msg=fail'</script>";
                }
            }
          }
?>
<?php $getSubCategoriesData = getDataFromTables('service_details',$status=NULL,'id',$id,$activeStatus=NULL,$activeTop=NULL);
$getSubCategories = $getSubCategoriesData->fetch_assoc();
$getCategories = getDataFromTables('services','0',$clause=NULL,$id=NULL,$activeStatus=NULL,$activeTop=NULL);
 ?>
<div class="site-content">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h3 class="m-y-0">Service Details</h3>
          </div>
          <div class="panel-body">
            <div class="row">
              <div class="col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3">
                <form data-toggle="validator" method="POST" enctype="multipart/form-data">
                  <div class="form-group">
                    <label for="form-control-3" class="control-label">Choose your Service</label>
                    <select id="form-control-3" name="service_id" class="custom-select" data-error="This field is required." required>
                      <option value="">Select Category</option>
                      <?php while($row = $getCategories->fetch_assoc()) {  ?>
                        <option value="<?php echo $row['id']; ?>" <?php if($row['id'] == $getSubCategories['service_id']) { echo "selected=selected"; }?> ><?php echo $row['name']; ?></option>
                    <?php } ?>
                   </select>
                    <div class="help-block with-errors"></div>
                  </div>
                  <div class="form-group">
                    <label for="form-control-2" class="control-label">Bank Name</label>
                    <input type="text" class="form-control" id="form-control-2" name="bank_name" required value="<?php echo $getSubCategories['bank_name'];?>">
                    <div class="help-block with-errors"></div>
                  </div>
                  <div class="form-group">
                    <label for="form-control-2" class="control-label">Interest rate Range</label>
                    <input type="text" class="form-control" id="form-control-2" name="interest_rate_range" required value="<?php echo $getSubCategories['interest_rate_range'];?>">
                    <div class="help-block with-errors"></div>
                  </div>
                  <div class="form-group">
                    <label for="form-control-2" class="control-label">Process Fee Range</label>
                    <input type="text" class="form-control" id="form-control-2" name="process_fee_range" required value="<?php echo $getSubCategories['process_fee_range'];?>">
                    <div class="help-block with-errors"></div>
                  </div>
                  <div class="form-group">
                    <label for="form-control-2" class="control-label">Loan Amount</label>
                    <input type="text" class="form-control" id="form-control-2" name="loan_amount" required value="<?php echo $getSubCategories['loan_amount'];?>">
                    <div class="help-block with-errors"></div>
                  </div>
                  <div class="form-group">
                    <label for="form-control-2" class="control-label">Tenture Range</label>
                    <input type="text" class="form-control" id="form-control-2" name="tenture_range" required value="<?php echo $getSubCategories['tenture_range'];?>">
                    <div class="help-block with-errors"></div>
                  </div>
                  <div class="form-group">
                    <label for="form-control-2" class="control-label">Description</label>
                    <textarea name="description" class="form-control" id="description" data-error="Please enter a valid email address." required><?php echo $getSubCategories['description'];?></textarea>
                    <div class="help-block with-errors"></div>
                  </div>
                  <div class="form-group">
                    <label for="form-control-4" class="control-label">Bank Logo</label>
                    <img src="<?php echo $base_url . 'uploads/service_details_images/'.$getSubCategories['bank_logo'] ?>"  id="output" height="100" width="100"/>
                    <label class="btn btn-default file-upload-btn">
                        Choose file...
                        <input id="form-control-22" class="file-upload-input" type="file" accept="image/*" name="bank_logo" id="bank_logo"  onchange="loadFile(event)"  multiple="multiple" >
                      </label>
                  </div>
                  <?php $getStatus = getDataFromTables('user_status',$status=NULL,$clause=NULL,$id=NULL,$activeStatus=NULL,$activeTop=NULL);?>
                  <div class="form-group">
                    <label for="form-control-3" class="control-label">Choose your status</label>
                    <select id="form-control-3" name="status" class="custom-select" data-error="This field is required." required>
                      <option value="">Select Status</option>
                      <?php while($row = $getStatus->fetch_assoc()) {  ?>
                          <option <?php if($row['id'] == $getSubCategories['status']) { echo "Selected"; } ?> value="<?php echo $row['id']; ?>"><?php echo $row['status']; ?></option>
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