<?php include_once 'admin_includes/main_header.php'; ?>
<?php
$id = $_GET['nid'];
 if (!isset($_POST['submit']))  {
            echo "fail";
    } else  {
      
        $title = $_POST['title'];
        $description = $_POST['description'];
        $fileToUpload = $_FILES["fileToUpload"]["name"];
        $status = $_POST['status'];
    
        
          if($_FILES["fileToUpload"]["name"]!='' ) {

            $fileToUpload = $_FILES["fileToUpload"]["name"];
              $target_dir = "../uploads/news_images/";
              $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
              $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
              $getImgUnlink = getImageUnlink('banner','news','id',$id,$target_dir);
            if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {

                 $sql = "UPDATE `news` SET title ='$title', banner='$fileToUpload', description='$description',status='$status' WHERE id = '$id' ";
                  if($conn->query($sql) === TRUE){

                     echo "<script type='text/javascript'>window.location='news.php?msg=success'</script>";
                  } else {
                     echo "<script type='text/javascript'>window.location='news.php?msg=fail'</script>";
                  }
                  //echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
              } else {
                  echo "Sorry, there was an error uploading your file.";
              }
           }else {
              $sql = "UPDATE `news` SET title ='$title',description='$description',status='$status' WHERE id = '$id' ";
              if($conn->query($sql) === TRUE){
                 echo "<script type='text/javascript'>window.location='news.php?msg=success'</script>";
              } else {
                 echo "<script type='text/javascript'>window.location='news.php?msg=fail'</script>";
            }
          }


      }
?>
<div class="site-content">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h3 class="m-y-0">News</h3>
          </div>
          <div class="panel-body">
            <div class="row">
              <?php $getNewsData = getDataFromTables('news',$status=NULL,'id',$id,$activeStatus=NULL,$activeTop=NULL);
              $getNewsData1 = $getNewsData->fetch_assoc(); ?>
              <div class="col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3">
                <form data-toggle="validator" method="POST" enctype="multipart/form-data">
                  <div class="form-group">
                    <label for="form-control-2" class="control-label">Title</label>
                    <input type="text" class="form-control" id="form-control-2" name="title" required value="<?php echo $getNewsData1['title'];?>">
                    <div class="help-block with-errors"></div>
                  </div>
                  <div class="form-group">
                    <label for="form-control-2" class="control-label">Description</label>
                    <textarea name="description" class="form-control" id="description" data-error="Please enter a valid email address." required><?php echo $getNewsData1['description'];?></textarea>
                    <div class="help-block with-errors"></div>
                  </div>
                  <div class="form-group">
                    <label for="form-control-4" class="control-label">Image</label>
                    <img src="<?php echo $base_url . 'uploads/news_images/'.$getNewsData1['banner'] ?>"  id="output" height="100" width="100"/>
                    <label class="btn btn-default file-upload-btn">
                        Choose file...
                        <input id="form-control-22" class="file-upload-input" type="file" accept="image/*" name="fileToUpload" id="fileToUpload"  onchange="loadFile(event)"  multiple="multiple" >
                      </label>
                  </div>
                  <?php $getStatus = getDataFromTables('user_status',$status=NULL,$clause=NULL,$id=NULL,$activeStatus=NULL,$activeTop=NULL);?>
                  <div class="form-group">
                    <label for="form-control-3" class="control-label">Choose your status</label>
                    <select id="form-control-3" name="status" class="custom-select" data-error="This field is required." required>
                      <option value="">Select Status</option>
                      <?php while($row = $getStatus->fetch_assoc()) {  ?>
                          <option <?php if($row['id'] == $getNewsData1['status']) { echo "Selected"; } ?> value="<?php echo $row['id']; ?>"><?php echo $row['status']; ?></option>
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
