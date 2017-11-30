<?php include_once 'admin_includes/main_header.php'; ?>
<?php $getIndustriesData = getAllDataWithActiveRecent('industries_test_cases'); $i=1; ?>
      <div class="site-content">
        <div class="panel panel-default panel-table">
          <div class="panel-heading">
            <a href="add_industries_test_cases.php" style="float:right">Add Industries Test Cases</a>
            <h3 class="m-t-0 m-b-5">Industries Test Cases</h3>
          </div>
          <div class="panel-body">
            <div class="table-responsive">
              <table class="table table-striped table-bordered dataTable" id="table-1">
                <thead>
                  <tr>
                    <th>Id</th>
                    <th>Industry Name</th>
                    <th>Pdf Image</th>
                    <th>Description</th>
                    <th>Status</th>
                    <th>Actions</th>
                  </tr>
                </thead>
                <tbody>
                  <?php while ($row = $getIndustriesData->fetch_assoc()) { ?>
                  <tr>
                    <td><?php echo $i;?></td>
                    <td><?php $getIndustiesData = getDataFromTables('industries',$status=NULL,'id',$row['industry_id'],$activeStatus=NULL,$activeTop=NULL);
                    $getIndustry = $getIndustiesData->fetch_assoc(); echo $getIndustry['title']; ?></td>
                    <td><a href="<?php echo $base_url . 'uploads/indusrty_pdf_images/'.$row['pdf_image'] ?>" target="_blank"><img src="../uploads/pdf_file.jpg" alt="" height="60"></a></td>
                    <td><?php echo substr(strip_tags($row['description']), 0,150);?></td>
                    <td><?php if ($row['status']==0) { echo "<span class='label label-outline-success check_active open_cursor' data-incId=".$row['id']." data-status=".$row['status']." data-tbname='industries_test_cases'>Active</span>" ;} else { echo "<span class='label label-outline-info check_active open_cursor' data-status=".$row['status']." data-incId=".$row['id']." data-tbname='industries_test_cases'>In Active</span>" ;} ?></td>
                    <td> <a href="edit_industries_test_cases.php?did=<?php echo $row['id']; ?>"><i class="zmdi zmdi-edit"></i></a> &nbsp; <a href="delete_industries_test_cases.php?uid=<?php echo $row['id']; ?>"><i class="zmdi zmdi-delete zmdi-hc-fw" onclick="return confirm('Are you sure you want to delete?')"></i></a></td>
                   
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