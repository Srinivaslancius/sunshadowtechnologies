<?php include_once 'admin_includes/main_header.php'; ?>
<?php $getOurHistoryData = getAllDataWithActiveRecent('our_history'); $i=1; ?>
     <div class="site-content">
        <div class="panel panel-default panel-table">
          <div class="panel-heading">
            <a href="add_our_history.php" style="float:right">Add Our History</a>
            <h3 class="m-t-0 m-b-5">Our History</h3>            
          </div>
          <div class="panel-body">
            <div class="table-responsive">
              <table class="table table-striped table-bordered dataTable" id="table-1">
                <thead>
                  <tr>
                    <th>S.No</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Year</th>
                    <th>Status</th>
                    <th>Actions</th>
                  </tr>
                </thead>
                <tbody>
                  <?php while ($row = $getOurHistoryData->fetch_assoc()) { ?>
                  <tr>
                     <td><?php echo $i;?></td>
                    <td><?php echo $row['title'];?></td>
                    <td><?php echo substr(strip_tags($row['description']), 0,150);?></td>
                    <td><?php echo $row['year'];?></td>
                    <td><?php if ($row['status']==0) { echo "<span class='label label-outline-success check_active open_cursor' data-incId=".$row['id']." data-status=".$row['status']." data-tbname='our_history'>Active</span>" ;} else { echo "<span class='label label-outline-info check_active open_cursor' data-status=".$row['status']." data-incId=".$row['id']." data-tbname='our_history'>In Active</span>" ;} ?></td>
                    <td> <a href="edit_our_history.php?bid=<?php echo $row['id']; ?>"> <i class="zmdi zmdi-edit"></i> &nbsp; </a> <a href="delete_our_history.php?bid=<?php echo $row['id']; ?>"><i class="zmdi zmdi-delete zmdi-hc-fw" onclick="return confirm('Are you sure you want to delete?')"></i></a> </td>
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