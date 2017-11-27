<?php include_once 'admin_includes/main_header.php'; ?>
<?php $getPostedResumesData = getAllData('carrer_applcication'); $i=1; ?>
      <div class="site-content">
        <div class="panel panel-default panel-table">
          <div class="panel-heading">
            <!-- <a href="add_posted_resumes.php" style="float:right">Add Posted Resumes</a> -->
            <h3 class="m-t-0 m-b-5">Posted Resumes</h3>
          </div>
          <div class="panel-body">
            <div class="table-responsive">
              <table class="table table-striped table-bordered dataTable" id="table-1">
                <thead>
                  <tr>
                    <th>Id</th>
                    <th>Position</th>
                    <th>Name</th>
                    <th>Mobile</th>
                    <th>Additional Info</th>
                    <th>Resumes</th>
                  </tr>
                </thead>
                <tbody>
                  <?php while ($row = $getPostedResumesData->fetch_assoc()) { ?>
                  <tr>
                    <td><?php echo $i;?></td>
                    <td><?php echo $row['position_interest_in'];?></td>
                    <td><?php echo $row['name'];?></td>
                    <td><?php echo $row['mobile'];?></td>
                    <td><?php echo substr(strip_tags($row['additional_info']), 0,150);?></td>
                    <td><a href="<?php echo $base_url . 'uploads/resumes/'.$row['upload_cv'] ?>"><img src="<?php echo $base_url.'uploads/index.jpg'?>" height="35px" width="35px" title="<?php echo $row['upload_cv'];?>"></a></td>
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