<?php include_once 'admin_includes/main_header.php'; ?>

<?php 
error_reporting(0);
$id = $_GET['pid'];
if (!isset($_POST['submit']))  {
            echo "";
} else  {
    //Save data into database
    
    $industry_id = $_POST['industry_id'];
    $title= $_POST['title'];
    $description = $_POST['description'];
    $fileToUpload = uniqid().$_FILES["fileToUpload"]["name"];
    $status = $_POST['status'];
    $created_at = date("Y-m-d h:i:s");
    $status = $_POST['status'];
    

    if($_FILES["fileToUpload"]["name"]!='') {
              $fileToUpload = $_FILES["fileToUpload"]["name"];
              $target_dir = "../uploads/inustries_case_studies_images/";
              $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
              $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
              $getImgUnlink = getImageUnlink('image','industry_case_studies','id',$id,$target_dir);
                //Send parameters for img val,tablename,clause,id,imgpath for image ubnlink from folder
              if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                    $sql1 = "UPDATE `industry_case_studies` SET industry_id = '$industry_id',title = '$title',description = '$description',image = '$fileToUpload',status='$status' WHERE id = '$id' ";
                    if($conn->query($sql1) === TRUE){
                       echo "Record updated successfully";
                    } else {
                       echo "Record not updated successfully";
                    }
                    //echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
                } else {
                    echo "Sorry, there was an error uploading your file.";
                }
            }  else {
                $sql1 = "UPDATE `industry_case_studies` SET industry_id = '$industry_id',title = '$title',description = '$description',status='$status' WHERE id = '$id' ";
                if($conn->query($sql1) === TRUE){
                   echo "Record updated successfully";
                } else {
                   echo "Record not updated successfully";
                }
            }   
    
    $result1=$conn->query($sql1);
    
    $product_images = $_FILES['product_images']['name'];
    foreach($product_images as $key=>$value){

        $product_images1 = $_FILES['product_images']['name'][$key];
        $file_tmp = $_FILES["product_images"]["tmp_name"][$key];
        $file_destination = '../uploads/case_studies_pdfs/' . $product_images1;
        if($product_images1!=''){
            move_uploaded_file($file_tmp, $file_destination);        
            $sql = "INSERT INTO industry_pdfs ( `industry_id`,`industry_pdfs`) VALUES ('$id','$product_images1')";
            $result = $conn->query($sql);
        }        
    }
     
     if($result1==1){
        echo "<script type='text/javascript'>window.location='case_studies.php?msg=success'</script>";
    } else {
       echo "<script type='text/javascript'>window.location='case_studies.php?msg=fail'</script>";
    }
}
?>
    <div class="site-content">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h3 class="m-y-0">Case Studies</h3>
          </div>
          <div class="panel-body">
            <div class="row">
              <div class="col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3">
                <form data-toggle="validator" method="post" enctype="multipart/form-data">
                  <?php $getProductsData = getDataFromTables('industry_case_studies',$status=NULL,'id',$id,$activeStatus=NULL,$activeTop=NULL);
                $getProducts = $getProductsData->fetch_assoc();?>
                  <?php $getCategories = getDataFromTables('industries','0',$clause=NULL,$id=NULL,$activeStatus=NULL,$activeTop=NULL);?>
                  <div class="form-group">
                    <label for="form-control-3" class="control-label">Choose your Industry</label>
                    <select id="form-control-3" name="industry_id" class="custom-select" data-error="This field is required." required onChange="getSubCategories(this.value);">
                      <option value="">Select Industry</option>
                      <?php while($row = $getCategories->fetch_assoc()) {  ?>
                        <option value="<?php echo $row['id']; ?>" <?php if($row['id'] == $getProducts['industry_id']) { echo "selected=selected"; }?> ><?php echo $row['title']; ?></option>
                    <?php } ?>
                   </select>
                    <div class="help-block with-errors"></div>
                  </div>
                  <div class="form-group">
                    <label for="form-control-2" class="control-label">Title</label>
                    <input type="text" class="form-control" id="form-control-2" name="title" placeholder="Title" data-error="Please enter title." required value="<?php echo $getProducts['title'];?>">
                    <div class="help-block with-errors"></div>
                  </div>
                  <div class="form-group">
                    <label for="form-control-4" class="control-label">Image</label>
                    <img src="<?php echo $base_url . 'uploads/inustries_case_studies_images/'.$getProducts['image'] ?>"  id="output" height="100" width="100"/>
                    <label class="btn btn-default file-upload-btn">
                        Choose file...
                        <input id="form-control-22" class="file-upload-input" type="file" accept="image/*" name="fileToUpload" id="fileToUpload"  onchange="loadFile(event)"  multiple="multiple" >
                      </label>
                  </div>Image
                  <div class="form-group">
                    <label for="form-control-2" class="control-label">Description</label>
                    <textarea name="description" class="form-control" id="description" data-error="Please enter a valid email address." required><?php echo $getProducts['description'];?></textarea>
                    <div class="help-block with-errors"></div>
                  </div>
                  <div class="form-group">
                      <?php  $pid = $_GET['pid'];                                                           
                      $sql = "SELECT id,industry_pdfs FROM industry_pdfs where industry_id = '$pid' ";
                      $getImages= $conn->query($sql);                                                             
                      while($row=$getImages->fetch_assoc()) {
                          echo "<input type='text' value='".$row['industry_pdfs']."' class='ajax_img_del' />&nbsp;&nbsp;<a style='cursor:pointer' class='ajax_img_del' id=".$row['id'].">Delete</a></br></br>";
                      }                               
                     ?>
                  </div>

                  <div id="formdiv">                   
                      <div id="filediv">
                        <?php if($getImages->num_rows > 0){ ?>
                          <input name="product_images[]" accept=".pdf,.doc" type="file" id="file" />
                         <?php } else { ?>
                          <input name="product_images[]" accept=".pdf,.doc" type="file" id="file" required/>
                         <?php } ?>

                      </div><br/>               
                     <input type="button" id="add_more" class="upload" value="Add More Files"/>
                  </div>

                  <?php $getStatus = getDataFromTables('user_status',$status=NULL,$clause=NULL,$id=NULL,$activeStatus=NULL,$activeTop=NULL);?>
                  <div class="form-group">
                    <label for="form-control-3" class="control-label">Choose your status</label>
                    <select id="form-control-3" name="status" class="custom-select" data-error="This field is required." required>
                      <option value="" >Choose your Status</option> 
                      <?php while($row = $getStatus->fetch_assoc()) {  ?>
                          <option <?php if($row['id'] == $getProducts['status']) { echo "Selected"; } ?> value="<?php echo $row['id']; ?>"><?php echo $row['status']; ?></option>
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


<script type="text/javascript">
$(function(){
    $(document).on('click','.ajax_img_del',function(){
        var del_id= $(this).attr('id');
        var $ele = $(this).parent().parent();
        var del_confirm = confirm("Are you sure you want to delete?");
        if(del_confirm == true){
        $.ajax({
            type:'POST',
            url:'delete_image.php',
            data:{'del_id':del_id},
            success: function(data){
                 if(data=="YES"){
                    location.reload();
                 }else{
                    alert("Deleted Failed");  
                 }
             }
        });
        }else{
            location.reload();
         }
    });
});
</script>