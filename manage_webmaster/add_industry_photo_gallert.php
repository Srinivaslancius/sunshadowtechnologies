<?php include_once 'admin_includes/main_header.php'; error_reporting(1);?>

<?php 
if (!isset($_POST['submit']))  {
            echo "";
} else  {
    //Save data into database
  //echo "<pre>";print_r($_POST); exit;
    
    $category_id = $_POST['category_id'];
    $status = $_POST['status'];
    $created_at = date("Y-m-d h:i:s");

    //save product images into product_images table    
    
    $sql1 = "INSERT INTO products (`product_name`,`category_id`,`sub_category_id`,`sub_sub_category_id`,`product_price`,`price_type`,`offer_price`,`selling_price`,`quantity`, `minimum_order_quantity`, `key_features`,`product_info`,`specifications`,`availability_id`,`status`,`created_by`,`created_at`) VALUES ('$product_name','$category_id','$sub_category_id','$sub_sub_category_id','$product_price','$price_type','$offer_price','$selling_price','$quantity', '$minimum_order_quantity', '$key_features','$product_info','$specifications','$availability_id','$status','$created_by','$created_at')";
    $result1 = $conn->query($sql1);
    $last_id = $conn->insert_id;

    $specifications = $_POST['specifications'];
    foreach($specifications as $key=>$value){

        $specifications1 = $_POST['specifications'][$key];       
        $sql = "INSERT INTO product_specifications ( `product_id`,`specification_name`) VALUES ('$last_id','$specifications1')";
        $result = $conn->query($sql);
    }

    $product_images = $_FILES['product_images']['name'];
    foreach($product_images as $key=>$value){

        $product_images1 = time().'_'.$_FILES['product_images']['name'][$key];
        $file_tmp = $_FILES["product_images"]["tmp_name"][$key];
        $file_destination = '../uploads/product_images/' . $product_images1;
        move_uploaded_file($file_tmp, $file_destination);        
        $sql = "INSERT INTO product_images ( `product_id`,`product_image`) VALUES ('$last_id','$product_images1')";
        $result = $conn->query($sql);
    }
    
    if( $result1 == 1){
    echo "<script type='text/javascript'>window.location='products.php?msg=success'</script>";
    } else {
       echo "<script type='text/javascript'>window.location='products.php?msg=fail'</script>";
    }
}
?>
		<div class="site-content">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h3 class="m-y-0">Industry Photo Gallery</h3>
          </div>
          <div class="panel-body">
            <div class="row">
              <div class="col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3">
                <form data-toggle="validator" method="post" enctype="multipart/form-data">

                  <?php $getIndustries = getDataFromTables('industries','0',$clause=NULL,$id=NULL,$activeStatus=NULL,$activeTop=NULL);?>
                  <div class="form-group">
                    <label for="form-control-3" class="control-label">Choose your Industry</label>
                    <select id="form-control-3" name="industry_id" class="custom-select" data-error="This field is required." required onChange="getSubCategories(this.value);">
                      <option value="">Select Industry</option>
                      <?php while($row = $getIndustries->fetch_assoc()) {  ?>
                        <option value="<?php echo $row['id']; ?>"><?php echo $row['title']; ?></option>
                      <?php } ?>
                   </select>
                    <div class="help-block with-errors"></div>
                  </div>

                  <div class="form-group">
                    <label for="form-control-4" class="control-label">Industries Images</label>
                    <img id="output" height="100" width="100"/>
                    <label class="btn btn-default file-upload-btn">
                    Choose file...
                          <input id="product_images" class="file-upload-input" type="file" accept="image/*" name="product_images[]" id="product_images"  onchange="loadFile(event)"  multiple="multiple" required >
                      </label>
                      <!-- <a style="cursor:pointer" id="add_more" class="add_field_button">Add More Fields</a> -->
                  </div>

                    <div id="formdiv">                   
                          <!-- <div id="filediv"><input required name="product_images[]" accept="image/*" type="file" id="file" /></div><br/> -->               
                         <input type="button" id="add_more" class="upload" value="Add More Files"/>                                               
                    </div>

                  <?php $getStatus = getDataFromTables('user_status',$status=NULL,$clause=NULL,$id=NULL,$activeStatus=NULL,$activeTop=NULL);?>
                  <div class="form-group">
                    <label for="form-control-3" class="control-label">Choose your status</label>
                    <select id="form-control-3" name="status" class="custom-select" data-error="This field is required." required>
                      <option value="">Select Status</option>
                      <?php while($row = $getStatus->fetch_assoc()) { ?>
                          <option value="<?php echo $row['id']; ?>"><?php echo $row['status']; ?></option>
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




<!--Multiple images script end here -->
<script type="text/javascript">

$(document).ready(function() {

    //Change price type starts here
    
    //End
    //Check validation for prodcut price empty or not and calaculate selling price
    
    //End
    
    //End date should be greater than Start date
    
    
   //Minimum order quantity should be less than quantity
   
    var max_fields_limit      = 10; //set limit for maximum input fields
    var x = 1; //initialize counter for text box
    $('.add_more_button').click(function(e){ //click event on add more fields button having class add_more_button
        e.preventDefault();
        if(x < max_fields_limit){ //check conditions
            x++; //counter increment
            $('.input_fields_container').append('<div><label for="form-control-2" class="control-label">Specifications</label><input type="text" name="specifications[]" class="form-control" id="specifications" placeholder="Specifications" data-error="Please enter Specifications" required><a href="#" class="remove_field" style="margin-left:10px;">Remove</a></div>'); //add input field
        }
    });  
    $('.input_fields_container').on("click",".remove_field", function(e){ //user click on remove text links
        e.preventDefault(); $(this).parent('div').remove(); x--;
    });
   
  });



</script>





				          

				          

                  

      
       

      
      

      






