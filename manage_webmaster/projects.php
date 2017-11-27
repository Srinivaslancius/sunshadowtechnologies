<?php include_once 'admin_includes/main_header.php'; ?>
<?php $sql = "SELECT * FROM projects ORDER BY status";
  $getProjectsData = $conn->query($sql); $i=1; ?>
     <div class="site-content">
        <div class="panel panel-default panel-table">
          <div class="panel-heading">
            <a href="add_projects.php" style="float:right">Add Projects</a>
            <h3 class="m-t-0 m-b-5">Projects</h3>            
          </div>
          <div class="panel-body">
            <div class="table-responsive">
              <?php $sql = "SELECT projects.category_id, categories.category_name FROM projects LEFT JOIN categories ON projects.category_id=categories.id GROUP BY projects.category_id";
            $result = $conn->query($sql);
          ?>
          <div class="form-group col-md-4">            
            <select id="select-category" class="custom-select">
              <option value="">Select Category</option>
              <?php while($getAllCategories = $result->fetch_assoc()) {  ?>
                <option value="<?php echo $getAllCategories['category_name']; ?>"><?php echo $getAllCategories['category_name']; ?></option>
              <?php } ?>
            </select>           
          </div>
          <div class="clear_fix"></div>
              <table class="table table-striped table-bordered dataTable" id="table-1">
                <thead>
                  <tr>
                    <th>S.No</th>
                    <th>Project Name</th>
                    <th>Category Name</th>
                    <th>Status</th>
                    <th>Actions</th>
                  </tr>
                </thead>
                <tbody>
                  <?php while ($row = $getProjectsData->fetch_assoc()) { ?>
                  <tr>
                     <td><?php echo $i;?></td>
                    <td><?php echo $row['project_name'];?></td>
                    <td><?php $getCategories = getDataFromTables('categories',$status=NULL,'id',$row['category_id'],$activeStatus=NULL,$activeTop=NULL);
                    $getCategory = $getCategories->fetch_assoc(); echo $getCategory['category_name']; ?></td>
                    <td><?php if ($row['status']==0) { echo "<span class='label label-outline-success check_active open_cursor' data-incId=".$row['id']." data-status=".$row['status']." data-tbname='projects'>Active</span>" ;} else { echo "<span class='label label-outline-info check_active open_cursor' data-status=".$row['status']." data-incId=".$row['id']." data-tbname='projects'>In Active</span>" ;} ?></td>
                    <td> <a href="edit_projects.php?rid=<?php echo $row['id'];?>"> <i class="zmdi zmdi-edit"></i></a><!-- <a href="#"><i class="zmdi zmdi-eye zmdi-hc-fw" data-toggle="modal" data-target="#<?php echo $row['id']; ?>" class=""></i></a> --></td>
                    <!-- Open Modal Box  here -->
                    <div id="<?php echo $row['id']; ?>" class="modal fade" tabindex="-1" role="dialog">
                      <div class="modal-dialog">
                        <div class="modal-content animated flipInX">
                          <div class="modal-header bg-success">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">
                                <i class="zmdi zmdi-close"></i>
                              </span>
                            </button>
                            <center><h4 class="modal-title">Project Information</h4></center>
                          </div>
                        <div class="modal-body" id="modal_body">
                          <div class="row">
                            <div class="col-sm-2"></div>
                            <div class="col-sm-4">Project Name: </div>
                            <div class="col-sm-6"><?php echo $row['project_name'];?></div>
                          </div>
                          <div class="row">
                            <div class="col-sm-2"></div>
                            <div class="col-sm-4">Status: </div>
                            <div class="col-sm-6"><?php if($row['status'] == 0 ){ echo "Active";} else{ echo "InActive";}?></div>
                          </div>
                        </div>
                        <div class="modal-footer">
                          <!--<button type="button" data-dismiss="modal" class="btn btn-success">Continue</button>-->
                          <button type="button" data-dismiss="modal" class="btn btn-success">Close</button>
                          <style>
                            #modal_body{
                              font-size:14px;
                              padding-top:30px;
                              padding-left: 0px;
                              font-family:Roboto,sans-serif;
                            }
                          </style>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- End Modal Box  here -->
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