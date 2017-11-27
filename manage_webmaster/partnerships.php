<?php include_once 'admin_includes/main_header.php'; ?>
<?php   $i=1; 
$sql="SELECT * from `partnership` ORDER BY  id DESC ";
        $getPartnershipsData = $conn->query($sql);
 ?> 
      <div class="site-content">
        <div class="panel panel-default panel-table">
          <div class="panel-heading">
            <!-- <a href="add_services.php" style="float:right">Add Services</a> -->
            <h3 class="m-t-0 m-b-5">Partnerships</h3>
          </div>
          <div class="panel-body">
            <div class="table-responsive">
              <table class="table table-striped table-bordered dataTable" id="table-1">
                <thead>
                  <tr>
                    <th>S.No</th>
                    <th>Collaborate Name</th>
                    <th>Name</th>
                    <th>Company Name</th>
                    <th>Designation</th>
                    <th>Phone</th>
                    <th>Address</th>
                    <th>Mobile</th>
                    <th>Email</th>
                    <th>Website Url</th>
                    <th>Comments</th>
                    <th>Created Date</th>
                  </tr>
                </thead>
                <tbody>
                  <?php while ($row = $getPartnershipsData->fetch_assoc()) { ?>
                  <tr>
                   <td><?php echo $i;?></td>
                      <td><?php echo $row['collabrate_as'];?></td>
                      <td><?php echo $row['name'];?></td>
                      <td><?php echo $row['company_name'];?></td>
                      <td><?php echo $row['designation'];?></td>
                      <td><?php echo $row['phone'];?></td>
                      <td><?php echo $row['address'];?></td>
                      <td><?php echo $row['mobile'];?></td>
                      <td><a href="mailto:<?php echo $row['email'];?>" target="_top"><?php echo $row['email'];?></a></td>
                      <td><?php echo $row['website_url'];?></td>
                      <td><?php echo $row['comments'];?></td>
                      <td><?php echo $row['created_at'];?></td>
                  </tr>
                  <?php  $i++; } ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
   <?php include_once 'admin_includes/footer.php'; ?>
   <script src="js/tables-datatables.min.js"></script>