<?php include_once 'admin_includes/main_header.php'; ?>

<?php 
error_reporting(0);
$id = $_GET['pid'];
if (!isset($_POST['submit']))  {
            echo "";
} else  {
    //Save data into database
    
    //$t = time();
    $industry_id = $_POST['industry_id'];
    $status = $_POST['status'];
       
    
    

    $sql1 = "UPDATE industry_case_studies SET industry_id = '$industry_id',status = '$status' WHERE id = '$id'"; 
    
    if ($conn->query($sql1) === TRUE) {
    echo "Record updated successfully";
    } else {
    echo "Error updating record: " . $conn->error;
    }
    $result1=$conn->query($sql1);
    
    $product_images = $_FILES['product_images']['name'];
    foreach($product_images as $key=>$value){

        $product_images1 = $_FILES['product_images']['name'][$key];
        $file_tmp = $_FILES["product_images"]["tmp_name"][$key];
        $file_destination = '../uploads/case_studies_images/' . $product_images1;
        if($product_images1!=''){
            move_uploaded_file($file_tmp, $file_destination);        
            $sql = "INSERT INTO industry_images ( `industry_id`,`industry_image`) VALUES ('$last_id','$product_images1')";
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
                      <?php  $pid = $_GET['pid'];                                                           
                      $sql = "SELECT id,industry_images FROM industry_images where industry_id = '$pid' ";
                      $getImages= $conn->query($sql);                                                             
                      while($row=$getImages->fetch_assoc()) {
                          echo "<img id='output_".$row['id']."' src= '../uploads/case_studies_images/".$row['industry_images']."' width=80px; height=80px;/> <a style='cursor:pointer' class='ajax_img_del' id=".$row['id'].">Delete</a> <br />";
                      }                               
                     ?>
                  </div>

                  <div id="formdiv">                   
                      <div id="filediv">
                        <?php if($getImages->num_rows > 0){ ?>
                          <input name="product_images[]" accept="image/*" type="file" id="file" />
                         <?php } else { ?>
                          <input name="product_images[]" accept="image/*" type="file" id="file" required/>
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
    //CKEDITOR.replace( 'key_features' );
    CKEDITOR.replace( 'product_info' ); 
</script>

<!-- <script type="text/javascript">
$(document).ready(function() {
var abc = 0;
    $('#add_more').click(function () {
        $(this).before("<div><input type='file' id='file' name='product_images[]' accept='image/*'required><a href='#' class='remove_field'>Remove</a> </div>");
    });
    $(this).on("click",".remove_field", function(e){ //user click on remove text
        e.preventDefault(); $(this).parent('div').remove(); x--;
    })
  });
</script> -->
<!--Multiple images script end here -->
<script type="text/javascript">

$(document).ready(function() {

    //Change price type starts here
    $("#price_type").change(function () {
        if ($(this).val() == 1) {
            $(".show_price").show();
            $('.price_change_text').html('Enter Discount Price');
        } else if($(this).val() == 2) {
            $(".show_price").show();
            $('.price_change_text').html('Enter Offer Percentage');
        } else {
            $(".show_price").hide();
        }
        $('#offer_price, #selling_price').val('');
    });
    //End
    //Check validation for prodcut price empty or not and calaculate selling price
    $('#offer_price').keyup(function() {
        if($('#product_price').val()==''){
            alert("Please Enter Product Price");
            $('#offer_price').val('');
            return false;
        } else if($('#price_type').val() == 1) {
            calcPrice = ($('#product_price').val() - $('#offer_price').val());
        } else if($('#price_type').val() == 2) {
            calcPrice = $('#product_price').val() - ( ($('#product_price').val()/100) * $('#offer_price').val());
            if (parseInt($('#offer_price').val())>99) {
                alert("Please enter the percentage less than 100 ");
                $('#selling_price').val('');
                $('#offer_price').val('');
                return false;
            };
        }
        discountPrice = calcPrice.toFixed(2);
        $('#selling_price').val(discountPrice);
        if(parseInt($('#offer_price').val()) > parseInt($('#product_price').val())) {
            alert("Please Enter Discount value less than Product Price");
            $('#selling_price').val('');
            $('#offer_price').val('');
        }
    });
    //End
    
    //End date should be greater than Start date
    $("#deal_end_date").change(function () {
        var startDate = document.getElementById("deal_start_date").value;
        if ($('#deal_start_date').val()=='') {
        alert("Please Enter Deal Start date");
        document.getElementById("deal_end_date").value = "";
    };
        var endDate = document.getElementById("deal_end_date").value;
     
        if ((Date.parse(endDate) <= Date.parse(startDate))) {
            alert("Deal End date should be greater than Deal Start date");
            document.getElementById("deal_end_date").value = "";
        }
    });
    
   //Minimum order quantity should be less than quantity
   $("#minimum_order_quantity").keyup(function () {
        if($('#quantity').val()==''){
            alert("Please Enter Quantity");
            $('#minimum_order_quantity, #quantity').val('');
        } else {
            if(parseInt($('#minimum_order_quantity').val()) > parseInt($('#quantity').val())) {
                alert("The quantity value must be larger than the minimum quantity");
                $('#minimum_order_quantity').val('');
                return false;
            }
        }
   });
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
</script>
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
              url:'delete_image.php',
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