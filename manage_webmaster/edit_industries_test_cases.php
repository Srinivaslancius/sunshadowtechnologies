<?php include_once 'admin_includes/main_header.php'; ?>
<?php
$id = $_GET['did'];
 if (!isset($_POST['submit']))  {
            echo "fail";
    } else  {
      
        $industry_id = $_POST['industry_id'];
        $description = $_POST['description'];
        $fileToUpload = $_FILES["fileToUpload"]["name"];
        $status = $_POST['status'];
    
          if($_FILES["fileToUpload"]["name"]!='' ) {

            $fileToUpload = $_FILES["fileToUpload"]["name"];
              $target_dir = "../uploads/indusrty_pdf_images/";
              $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
              $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
              $getImgUnlink = getImageUnlink('pdf_image','industries_test_cases','id',$id,$target_dir);
            if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {

                 $sql = "UPDATE `industries_test_cases` SET industry_id ='$industry_id', description='$description', pdf_image='$fileToUpload', status='$status' WHERE id = '$id' ";
                  if($conn->query($sql) === TRUE){

                     echo "<script type='text/javascript'>window.location='industries_test_cases.php?msg=success'</script>";
                  } else {
                     echo "<script type='text/javascript'>window.location='industries_test_cases.php?msg=fail'</script>";
                  }
                  //echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
              } else {
                  echo "Sorry, there was an error uploading your file.";
              }
           }else {
              $sql = "UPDATE `industries_test_cases` SET industry_id ='$industry_id', description='$description', status='$status' WHERE id = '$id' ";
              if($conn->query($sql) === TRUE){
                 echo "<script type='text/javascript'>window.location='industries_test_cases.php?msg=success'</script>";
              } else {
                 echo "<script type='text/javascript'>window.location='industries_test_cases.php?msg=fail'</script>";
            }
          }


      }
?>
    <div class="site-content">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h3 class="m-y-0">Industries Test Cases</h3>
          </div>
          <div class="panel-body">            
            <div class="row">
              <div class="col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3">
                <form data-toggle="validator" method="post" enctype="multipart/form-data">

                  <?php $getIndustry = getDataFromTables('industries_test_cases','0','id',$id,$activeStatus=NULL,$activeTop=NULL);
                        $getIndName = $getIndustry->fetch_assoc();
                  ?>  
                  <?php $getIndustry = getDataFromTables('industries','0',$clause=NULL,$id=NULL,$activeStatus=NULL,$activeTop=NULL); ?>
                  <div class="form-group">
                    <label for="form-control-3" class="control-label">Choose your Industry</label>
                    <select id="form-control-3" name="industry_id" class="custom-select" data-error="This field is required." required>
                      <option value="">Select Industry</option>

                      <option value="">Select State</option>
                      <?php while($row = $getIndustry->fetch_assoc()) {  ?>
                          <option <?php if($row['id'] == $getIndName['industry_id']) { echo "Selected"; } ?> value="<?php echo $row['id']; ?>"><?php echo $row['title']; ?></option>
                      <?php } ?>
                      
                   </select>
                    <div class="help-block with-errors"></div>
                  </div>
                  <div class="form-group">
                    <label for="form-control-2" class="control-label">Description</label>
                    <textarea name="description" class="form-control" id="description" placeholder="Description" data-error="Please enter Description." required><?php echo $getIndName['description'];?></textarea>
                    <div class="help-block with-errors"></div>
                  </div>
                  <div class="form-group">
                    <label for="form-control-4" class="control-label">Pdf Name</label>
                    <input type="text" value="<?php echo $getIndName['pdf_image'] ?>"/>
                    <label class="btn btn-default file-upload-btn">
                        Choose file...
                        <input id="form-control-22" class="file-upload-input" type="file" accept=".pdf,.doc" name="fileToUpload" id="fileToUpload"  multiple="multiple" >
                      </label>
                  </div>
                  <?php $getStatus = getDataFromTables('user_status',$status=NULL,$clause=NULL,$id=NULL,$activeStatus=NULL,$activeTop=NULL);?>
                  <div class="form-group">
                    <label for="form-control-3" class="control-label">Choose your status</label>
                    <select id="form-control-3" name="status" class="custom-select" data-error="This field is required." required>
                      <option value="">Select Status</option>
                      <?php while($row = $getStatus->fetch_assoc()) {  ?>
                          <option <?php if($row['id'] == $getIndName['status']) { echo "Selected"; } ?> value="<?php echo $row['id']; ?>"><?php echo $row['status']; ?></option>
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
   <script src="js/multi_image_upload.js"></script>
   <link rel="stylesheet" type="text/css" href="css/multi_image_upload.css">
   <!-- Below script for ck editor -->
<script src="//cdn.ckeditor.com/4.7.0/full/ckeditor.js"></script>
<script>
    CKEDITOR.replace( 'description' );
</script>
<style type="text/css">
    .cke_top, .cke_contents, .cke_bottom {
        border: 1px solid #333;
    }
</style>