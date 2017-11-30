<?php include_once 'admin_includes/main_header.php'; ?>
<?php $getProductsData = getAllDataWithActiveRecent('products'); $i=1; ?>
     
      <div class="site-content">
        <div class="panel panel-default panel-table">
          <div class="panel-heading">
            <a href="add_products.php" style="float:right">Add Products</a>
            <h3 class="m-t-0 m-b-5">Products</h3>
          </div>
          <div class="panel-body">
            <div class="table-responsive">
      
          
          <div class="clear_fix"></div>
              <table class="table table-striped table-bordered dataTable" id="table-1">
                <thead>
                  <tr>
                    <th>S.No</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Price</th>
                    <th>Image</th>
                    <th>Status</th>
                    <th>Actions</th>
                  </tr>
                </thead>
                <tbody>
                  <?php while ($row = $getProductsData->fetch_assoc()) { ?>
                  <tr>
                    <td><?php echo $i;?></td>
                    <td><?php echo $row['title'];?></td>
                    <td><?php echo substr(strip_tags($row['description']), 0,150);?></td>
                    <td><?php echo $row['price'];?></td>
                     <td><img src="<?php echo $base_url . 'uploads/product_images/'.$row['image'] ?>" height="100" width="100"/></td>                   
                    <td><?php if ($row['status']==0) { echo "<span class='label label-outline-success check_active open_cursor' data-incId=".$row['id']." data-status=".$row['status']." data-tbname='products
                    '>Active</span>" ;} else { echo "<span class='label label-outline-info check_active open_cursor' data-status=".$row['status']." data-incId=".$row['id']." data-tbname='products'>In Active</span>" ;} ?></td>
                    <td> <a href="edit_products.php?pid=<?php echo $row['id']; ?>"><i class="zmdi zmdi-edit"></i></a> <!-- <a href="#"><i class="zmdi zmdi-eye zmdi-hc-fw" data-toggle="modal" data-target="#<?php echo $row['id']; ?>" class=""></i></a> --></td>
                     
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

