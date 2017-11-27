<?php include_once 'admin_includes/main_header.php'; ?>

<?php 
error_reporting(1);
$id = $_GET['gid'];
$rid = $_GET['rid'];
if (!isset($_POST['submit']))  {
            echo "";
} else  {
    //Save data into database
    //echo "<pre>";print_r($_POST);exit;
    $title = $_POST['title'];
    $gallery_id = $_POST['gallery_id'];
    $status = $_POST['status'];
    $sql = "UPDATE photo_gallery SET title = '$title',gallery_id = '$gallery_id',status = '$status' WHERE id='$rid'";
    $updateData = $conn->query($sql);
    $gallery_images = $_FILES['gallery_images']['name'];
    foreach($gallery_images as $key=>$value){
        $gallery_images1 = uniqid().$_FILES['gallery_images']['name'][$key];
        $file_tmp = $_FILES["gallery_images"]["tmp_name"][$key];
        $file_destination = '../uploads/photo_gallery/' . $gallery_images1;
        move_uploaded_file($file_tmp, $file_destination);        
        $sql = "INSERT INTO photo_gallery ( `title`,`gallery_images`,`gallery_id`,`status`) VALUES ('$title','$gallery_images1','$gallery_id','$status')";
        $result = $conn->query($sql);
    }
    if( $result == 1){
    echo "<script type='text/javascript'>window.location='photo_gallery.php?msg=success'</script>";
    } else {
       echo "<script type='text/javascript'>window.location='photo_gallery.php?msg=fail'</script>";
    }
}
?>
<div class="site-content">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h3 class="m-y-0">Photo Gallery</h3>
          </div>
          <div class="panel-body">
            <div class="row">
              <div class="col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3">
                <form data-toggle="validator" method="post" enctype="multipart/form-data">
                  <?php $getPhotoGallery = getDataFromTables('photo_gallery','0','id',$rid,$activeStatus=NULL,$activeTop=NULL);
                $getPhotoGalleryData = $getPhotoGallery->fetch_assoc();?>
                  <div class="form-group">
                    <label for="form-control-2" class="control-label">Title</label>
                    <input type="text" class="form-control" id="form-control-2" name="title" placeholder="Title" data-error="Please enter title." required value="<?php echo $getPhotoGalleryData['title']; ?>">
                    <div class="help-block with-errors"></div>
                  </div>
                  <div class="form-group">
                    <label for="form-control-2" class="control-label">Gallery Id</label>
                    <input type="text" class="form-control" id="form-control-2" name="gallery_id" placeholder="Gallery Id" data-error="Please enter gallery id." required value="<?php echo $getPhotoGalleryData['gallery_id']; ?>">
                    <div class="help-block with-errors"></div>
                  </div>
                  <div class="form-group">
                      <?php  $pid = $_GET['gid'];                                                           
                      $sql = "SELECT * FROM photo_gallery where gallery_id = '$pid' ";
                      $getImages= $conn->query($sql);                                                             
                      while($row=$getImages->fetch_assoc()) {
                          echo "<img id='output_".$row['id']."' src= '../uploads/photo_gallery/".$row['gallery_images']."' width=80px; height=80px;/> <a style='cursor:pointer' class='ajax_img_del' id=".$row['id'].">Delete</a> <br />";
                      }                               
                     ?>
                  </div>

                  <div id="formdiv">                   
                      <div id="filediv">
                        <?php if($getImages->num_rows > 0){ ?>
                          <input name="gallery_images[]" accept="image/*" type="file" id="file" />
                         <?php } else { ?>
                          <input name="gallery_images[]" accept="image/*" type="file" id="file" required/>
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
                          <option <?php if($row['id'] == $getPhotoGalleryData['status']) { echo "Selected"; } ?> value="<?php echo $row['id']; ?>"><?php echo $row['status']; ?></option>
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
   <script src="js/multi_image_upload.js"></script>
   <link rel="stylesheet" type="text/css" href="css/multi_image_upload.css">
   <script type="text/javascript">
$(function(){
    $(document).on('click','.ajax_img_del',function(){

        var divOldLength = $(".form-group > img").length;
        var divNewLength = $(".abcd > img").length;

        if(divOldLength == '1' && divNewLength=='0')  {
          alert("Require at lease one image!");
          return false;
        } else {
          var del_id= $(this).attr('id');
          var $ele = $(this).parent().parent();
          var r = confirm("Are you sure you want to delete?");
          if(r == true){
          $.ajax({
              type:'POST',
              url:'ajax_delete_image.php',
              data:{'del_id':del_id},
              success: function(data){    
                   if(data=="YES"){
                     //location.reload();
                     $("#output_"+del_id).remove();
                     $('a#'+del_id).remove();
                   }else{
                      alert("Deleted Failed");  
                  }
               }

             });
           } else{
              //location.reload();
           }
        }
        
    });
});

</script>

