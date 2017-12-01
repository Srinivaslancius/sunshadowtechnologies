<?php include_once 'admin_includes/main_header.php'; ?>
<?php
$id = $_GET['uid'];
 if (!isset($_POST['submit']))  {
            echo "fail";
    } else  {
    
    $question = $_POST['question'];
    $answer = $_POST['answer'];
    $status = $_POST['status'];   
        $sql = "UPDATE `faqs` SET question = '$question', answer = '$answer', status='$status' WHERE id = '$id' ";
        if($conn->query($sql) === TRUE){
           echo "<script type='text/javascript'>window.location='faqs.php?msg=success'</script>";
        } else {
           echo "<script type='text/javascript'>window.location='faqs.php?msg=fail'</script>";
        }
    }
?>
<div class="site-content">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h3 class="m-y-0">FAQS</h3>
          </div>
          <div class="panel-body">
            <div class="row">
              <?php $getFaqs = getDataFromTables('faqs',$status=NULL,'id',$id,$activeStatus=NULL,$activeTop=NULL);
              $getFaqs1 = $getFaqs->fetch_assoc(); ?>
              
              <div class="col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3">
                <form data-toggle="validator" method="POST">
                  
                  <div class="form-group">
                    <label for="form-control-2" class="control-label">Question</label>
                    <textarea name="question" class="form-control"  data-error="Please enter Question." required><?php echo $getFaqs1['question'];?></textarea>
                    <div class="help-block with-errors"></div>
                  </div>
                  <div class="form-group">
                    <label for="form-control-2" class="control-label">Answer</label>
                    <textarea name="answer" class="form-control" id="answer" data-error="Please enter Answer." required><?php echo $getFaqs1['answer'];?></textarea>
                    <div class="help-block with-errors"></div>
                  </div>
                  <?php $getStatus = getDataFromTables('user_status',$status=NULL,$clause=NULL,$id=NULL,$activeStatus=NULL,$activeTop=NULL);?>
                  <div class="form-group">
                    <label for="form-control-3" class="control-label">Choose your status</label>
                    <select id="form-control-3" name="status" class="custom-select" data-error="This field is required." required>
                      <option value="">Select Status</option>
                      <?php while($row = $getStatus->fetch_assoc()) {  ?>
                          <option <?php if($row['id'] == $getFaqs1['status']) { echo "Selected"; } ?> value="<?php echo $row['id']; ?>"><?php echo $row['status']; ?></option>
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
    CKEDITOR.replace( 'answer' ); 
</script>
<style type="text/css">
    .cke_top, .cke_contents, .cke_bottom {
        border: 1px solid #333;
    }
</style>