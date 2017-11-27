<?php include_once 'admin_includes/main_header.php'; ?>
<?php
error_reporting(1);
$rid = $_GET['rid'];
 if (!isset($_POST['submit']))  {
            echo "fail";
    } else  {
          
    $project_name = $_POST['project_name'];
    $location_id = $_POST['location_id'];
    $category_id = $_POST['category_id'];
    $sub_category_id = $_POST['sub_category_id'];
    $fileToUpload = $_FILES["fileToUpload"]["name"];
    $description = $_POST['description'];
    $specification = $_POST['specification'];    
    $status = $_POST['status'];

    if($_FILES["fileToUpload"]["name"]!='') {
              $fileToUpload = uniqid().$_FILES["fileToUpload"]["name"];
              $target_dir = "../uploads/projects_images/";
              $target_file = $target_dir . basename($fileToUpload);
              $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
              //$getImgUnlink = getImageUnlink('images','projects','id',$rid,$target_dir);
                //Send parameters for img val,tablename,clause,id,imgpath for image ubnlink from folder
              if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                    $sql = "UPDATE projects SET project_name = '$project_name',location_id = '$location_id',category_id = '$category_id',sub_category_id = '$sub_category_id',images = '$fileToUpload', description = '$description',specification = '$specification',status = '$status' WHERE id='$rid'";
                    if($conn->query($sql) === TRUE){
                       echo "<script type='text/javascript'>window.location='projects.php?msg=success'</script>";
                    } else {
                       echo "<script type='text/javascript'>window.location='projects.php?msg=fail'</script>";
                    }
                    //echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
                } else { 
                    echo "Sorry, there was an error uploading your file.";
                }
            }  else {
                $sql = "UPDATE projects SET project_name = '$project_name',location_id = '$location_id',category_id = '$category_id',sub_category_id = '$sub_category_id', description = '$description',specification = '$specification',status = '$status' WHERE id='$rid'";
                if($conn->query($sql) === TRUE){
                   echo "<script type='text/javascript'>window.location='projects.php?msg=success'</script>";
                } else {
                   echo "<script type='text/javascript'>window.location='projects.php?msg=fail'</script>";
                }
            }    
      }
?>
<?php $getProjectsData = getDataFromTables('projects',$status=NULL,'id',$rid,$activeStatus=NULL,$activeTop=NULL);
$getProjects = $getProjectsData->fetch_assoc();
 ?>
 <?php $getCategories = getDataFromTables('categories','0',$clause=NULL,$id=NULL,$activeStatus=NULL,$activeTop=NULL);?>
 <?php $getLocations = getDataFromTables('lkp_locations','0',$clause=NULL,$id=NULL,$activeStatus=NULL,$activeTop=NULL);?>
<div class="site-content">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h3 class="m-y-0">Projects</h3>
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
                        <option value="<?php echo $row['id']; ?>" <?php if($row['id'] == $getProjects['category_id']) { echo "selected=selected"; }?> ><?php echo $row['category_name']; ?></option>
                    <?php } ?>
                   </select>
                    <div class="help-block with-errors"></div>
                  </div>

                  <?php $getSubCategories =  getDataFromTables('sub_categories',$status=NULL,$clause=NULL,$id=NULL,$activeStatus=NULL,$activeTop=NULL); ?>
                  <div class="form-group">
                    <label for="form-control-3" class="control-label">Select Sub Category</label>
                    <select id="sub_category_id" name="sub_category_id" class="custom-select" data-error="This field is required." required onChange="getSubSubCategories(this.value);">
                       <option value="">Select Sub Category</option>
                      <?php while($row = $getSubCategories->fetch_assoc()) {  ?>
                      <option <?php if($row['id'] == $getProjects['sub_category_id']) { echo "Selected"; } ?> value="<?php echo $row['id']; ?>"><?php echo $row['sub_category_name']; ?></option>
                      <?php } ?>
                   </select>
                    <div class="help-block with-errors"></div>
                  </div>
                  <?php $getSubSubCategories =  getDataFromTables('sub_sub_categories',$status=NULL,$clause=NULL,$id=NULL,$activeStatus=NULL,$activeTop=NULL); ?>
                  <!-- <div class="form-group">
                    <label for="form-control-3" class="control-label">Select Sub Sub Category</label>
                    <select id="sub_sub_category_id" name="sub_sub_category_id" class="custom-select" data-error="This field is required." required >
                       <option value="">Select Sub Sub Category</option>
                      <?php while($row = $getSubSubCategories->fetch_assoc()) {  ?>
                      <option <?php if($row['id'] == $getProjects['sub_sub_category_id']) { echo "Selected"; } ?> value="<?php echo $row['id']; ?>"><?php echo $row['sub_sub_category_name']; ?></option>
                      <?php } ?>
                   </select>
                    <div class="help-block with-errors"></div>
                  </div> -->
                  <div class="form-group">
                    <label for="form-control-3" class="control-label">Choose Location</label>
                    <select id="form-control-3" name="location_id" class="custom-select" data-error="This field is required." required>
                      <option value="">Select Location</option>
                      <?php while($row1 = $getLocations->fetch_assoc()) {  ?>
                        <option <?php if($row1['id'] == $getProjects['location_id']) { echo "Selected"; } ?> value="<?php echo $row1['id']; ?>"><?php echo $row1['location_name']; ?></option>
                      <?php } ?>
                   </select>
                    <div class="help-block with-errors"></div>
                  </div>
                  <div class="form-group">
                    <label for="form-control-2" class="control-label">Project Name</label>
                    <input type="text" class="form-control" id="form-control-2" name="project_name" required value="<?php echo $getProjects['project_name'];?>">
                    <div class="help-block with-errors"></div>
                  </div>
                  <div class="form-group">
                    <label for="form-control-2" class="control-label">Description</label>
                    <textarea name="description" class="form-control" id="description" placeholder="Description" data-error="Please enter Description." required><?php echo $getProjects['description'];?></textarea>
                    <div class="help-block with-errors"></div>
                  </div>

                  <div class="form-group">
                    <label for="form-control-2" class="control-label">Specifications</label>
                    <textarea name="specification" class="form-control" id="specification" placeholder="specification" data-error="Please enter Specifications." required><?php echo $getProjects['specification'];?></textarea>
                    <div class="help-block with-errors"></div>
                  </div>
                  
                 <div class="form-group">
                    <label for="form-control-4" class="control-label">Image</label>
                    <img src="<?php echo $base_url . 'uploads/projects_images/'.$getProjects['images'] ?>"  id="output" height="100" width="100"/>
                    <label class="btn btn-default file-upload-btn">
                        Choose file...
                        <input  class="file-upload-input" type="file" accept="image/*" name="fileToUpload" id="fileToUpload"  onchange="loadFile(event)"  multiple="multiple" >
                      </label>
                  </div>
                  <?php $getStatus = getDataFromTables('user_status',$status=NULL,$clause=NULL,$id=NULL,$activeStatus=NULL,$activeTop=NULL);?>
                  <div class="form-group">
                    <label for="form-control-3" class="control-label">Choose your status</label>
                    <select id="form-control-3" name="status" class="custom-select" data-error="This field is required." required>
                      <option value="">Select Status</option>
                      <?php while($row = $getStatus->fetch_assoc()) {  ?>
                          <option <?php if($row['id'] == $getProjects['status']) { echo "Selected"; } ?> value="<?php echo $row['id']; ?>"><?php echo $row['status']; ?></option>
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
<script src="//cdn.ckeditor.com/4.7.0/full/ckeditor.js"></script>
<script>
    CKEDITOR.replace( 'description' );
    CKEDITOR.replace( 'specification' ); 
</script>

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
function getSubSubCategories(val) {
    $.ajax({
    type: "POST",
    url: "get_sub_sub_categories.php",
    data:'sub_category_id='+val,
    success: function(data){
        $("#sub_sub_category_id").html(data);
    }
    });
}
</script>