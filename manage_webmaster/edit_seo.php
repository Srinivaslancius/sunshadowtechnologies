<?php include_once 'admin_includes/main_header.php'; ?>
<?php
$id = $_GET['uid'];
 if (!isset($_POST['submit']))  {
            echo "fail";
    } else  {
    $page_name = $_POST['page_name'];
    $meta_title = $_POST['meta_title'];
    $meta_description = $_POST['meta_description'];
    $meta_keywords = $_POST['meta_keywords'];
    $status = $_POST['status'];   
        $sql = "UPDATE `seo` SET page_name = '$page_name', meta_title = '$meta_title', meta_description = '$meta_description', meta_keywords = '$meta_keywords', status='$status' WHERE id = '$id' ";
        if($conn->query($sql) === TRUE){
           echo "<script type='text/javascript'>window.location='seo.php?msg=success'</script>";
        } else {
           echo "<script type='text/javascript'>window.location='seo.php?msg=fail'</script>";
        }
    }
?>
<div class="site-content">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h3 class="m-y-0">SEO</h3>
          </div>
          <div class="panel-body">
            <div class="row">
              <?php $getSeo = getDataFromTables('seo',$status=NULL,'id',$id,$activeStatus=NULL,$activeTop=NULL);
              $getSeo1 = $getSeo->fetch_assoc(); ?>
              <div class="col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3">
                <form data-toggle="validator" method="POST">
                  <div class="form-group">
                    <label for="form-control-2" class="control-label">Page Name</label>
                    <input type="text" name="page_name" class="form-control" id="form-control-2" data-error="Please enter Page Name" required value="<?php echo $getSeo1['page_name'];?>">
                    <div class="help-block with-errors"></div>
                  </div>
                  <div class="form-group">
                    <label for="form-control-2" class="control-label">Meta Title</label>
                    <input type="text" name="meta_title" class="form-control" id="form-control-2" data-error="Please enter Meta Title" required value="<?php echo $getSeo1['meta_title'];?>">
                    <div class="help-block with-errors"></div>
                  </div>
                  <div class="form-group">
                    <label for="form-control-2" class="control-label">Meta Description</label>
                    <textarea name="meta_description" class="form-control" id="meta_description" data-error="Please enter Meta Description." required><?php echo $getSeo1['meta_description'];?></textarea>
                    <div class="help-block with-errors"></div>
                  </div>
                  <div class="form-group">
                    <label for="form-control-2" class="control-label">Meta Keywords</label>
                    <textarea name="meta_keywords" class="form-control" id="meta_keywords" data-error="Please enter Meta Keywords." required><?php echo $getSeo1['meta_keywords'];?></textarea>
                    <div class="help-block with-errors"></div>
                  </div>
                  <?php $getStatus = getDataFromTables('user_status',$status=NULL,$clause=NULL,$id=NULL,$activeStatus=NULL,$activeTop=NULL);?>
                  <div class="form-group">
                    <label for="form-control-3" class="control-label">Choose your status</label>
                    <select id="form-control-3" name="status" class="custom-select" data-error="This field is required." required>
                      <option value="">Select Status</option>
                      <?php while($row = $getStatus->fetch_assoc()) {  ?>
                          <option <?php if($row['id'] == $getSeo1['status']) { echo "Selected"; } ?> value="<?php echo $row['id']; ?>"><?php echo $row['status']; ?></option>
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
    CKEDITOR.replace( 'meta_description' );
    CKEDITOR.replace( 'meta_keywords' ); 
</script>
<style type="text/css">
    .cke_top, .cke_contents, .cke_bottom {
        border: 1px solid #333;
    }
</style>