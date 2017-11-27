<?php include_once 'admin_includes/main_header.php'; ?>
<?php $getIndustryData = getAllDataWithActiveRecent('industry_case_studies'); $i=1; ?>
     
      <div class="site-content">
        <div class="panel panel-default panel-table">
          <div class="panel-heading">
            <a href="add_case_studies.php" style="float:right">Add Case Studies</a>
            <h3 class="m-t-0 m-b-5">Case Studies</h3>
          </div>
          <div class="panel-body">
            <div class="table-responsive">
      
          
          <div class="clear_fix"></div>
              <table class="table table-striped table-bordered dataTable" id="table-1">
                <thead>
                  <tr>
                    <th>S.No</th>
                    <th>Industry Name</th>
                    <th>Status</th>
                    <th>Actions</th>
                  </tr>
                </thead>
                <tbody>
                  <?php while ($row = $getIndustryData->fetch_assoc()) { ?>
                  <tr>
                    <td><?php echo $i;?></td>
                    <td><?php $getIndustries = getDataFromTables('industries',$status=NULL,'id',$row['industry_id'],$activeStatus=NULL,$activeTop=NULL);
                    $getIndustry = $getIndustries->fetch_assoc(); echo $getIndustry['title']; ?></td>
                                       
                    <td><?php if ($row['status']==0) { echo "<span class='label label-outline-success check_active open_cursor' data-incId=".$row['id']." data-status=".$row['status']." data-tbname='industry_case_studies
                    '>Active</span>" ;} else { echo "<span class='label label-outline-info check_active open_cursor' data-status=".$row['status']." data-incId=".$row['id']." data-tbname='industry_case_studies'>In Active</span>" ;} ?></td>
                    <td> <a href="edit_case_studies.php?pid=<?php echo $row['id']; ?>"><i class="zmdi zmdi-edit"></i></a> &nbsp; <!-- <a href="#"><i class="zmdi zmdi-eye zmdi-hc-fw" data-toggle="modal" data-target="#<?php echo $row['id']; ?>" class=""></i></a> --></td>
                     
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

