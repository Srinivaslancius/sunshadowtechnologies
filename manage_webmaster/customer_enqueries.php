<?php include_once 'admin_includes/main_header.php'; ?>
<?php
  $i = 1;
  $sql = "SELECT * FROM customer_enqueries  ORDER BY  id DESC" ;
  $getCustomerEnquiriesData = $conn->query($sql);
?>
     <div class="site-content">
        <div class="panel panel-default panel-table">
          <div class="panel-heading">
            <h3 class="m-t-0 m-b-5">Customer Enqueries</h3>
          </div>
          <div class="panel-body">
            <div class="table-responsive">
              <table class="table table-striped table-bordered dataTable" id="table-1">
                <thead>
                  <tr>
                    <th>S.No</th>
                    <th>Customer Name</th>
                    <th>Email</th>
                    <th>Subject</th>
                    <th>Message</th>
                    <th>Created Date</th>
                  </tr>
                </thead>
                <tbody>
                  <?php while ($row = $getCustomerEnquiriesData->fetch_assoc()) { ?>
                  <tr>
                      <td><?php echo $i;?></td>
                      <td><?php echo $row['customer_name'];?></td>
                      <td><a href="mailto:<?php echo $row['customer_email'];?>" target="_top"><?php echo $row['customer_email'];?></a></td>
                      <td><?php echo $row['message'];?></td>
                      <td><?php echo $row['customer_feedback'];?></td>
                      <td><?php echo $row['created_at'];?></td>
                      </tr>    
                  <?php $i++;} ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
   <?php include_once 'admin_includes/footer.php'; ?>
   <script src="js/tables-datatables.min.js"></script>