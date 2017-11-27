<?php include_once 'admin_includes/main_header.php'; ?>
<?php //$getPhotoGalleryData = getAllDataWithActiveRecent('photo_gallery'); ?>
<?php $sql = "SELECT * FROM photo_gallery GROUP BY gallery_id ORDER BY status ";
  $getPhotoGalleryData = $conn->query($sql);
  $i=1; 

?>
     <div class="site-content">
        <div class="panel panel-default panel-table">
          <div class="panel-heading">
            <a href="add_photo_gallery.php" style="float:right">Add Photo Gallery</a>
            <h3 class="m-t-0 m-b-5">Photo Gallery</h3>            
          </div>
          <div class="panel-body">
            <div class="table-responsive">
              <table class="table table-striped table-bordered dataTable" id="table-1">
                <thead>
                  <tr>
                    <th>S.No</th>
                    <th>Title</th>
                    <th>Gallery Id</th>
                    <th>Status</th>                    
                    <th>Actions</th>
                  </tr>
                </thead>
                <tbody>
                  <?php while ($row = $getPhotoGalleryData->fetch_assoc()) { ?>
                  <tr>
                    <td><?php echo $i;?></td>
                    <td><?php echo $row['title'];?></td>
                    <td><?php echo $row['gallery_id'];?></td>
                    <!-- <td><img src="<?php echo $base_url . 'uploads/photo_gallery/'.$row['gallery_iamges'] ?>" height="100" width="100"/></td> --> 
                    <td><?php if ($row['status']==0) { echo "<span class='label label-outline-success check_active open_cursor' data-incId=".$row['id']." data-status=".$row['status']." data-tbname='photo_gallery'>Active</span>" ;} else { echo "<span class='label label-outline-info check_active open_cursor' data-status=".$row['status']." data-incId=".$row['id']." data-tbname='photo_gallery'>In Active</span>" ;} ?></td>                   
                    <td> <a href="edit_photo_gallery.php?gid=<?php echo $row['gallery_id']; ?>&rid=<?php echo $row['id'];?>"> <i class="zmdi zmdi-edit"></i></a> <a href="delete_photo_gallery.php?gid=<?php echo $row['gallery_id']; ?>"><i class="zmdi zmdi-delete zmdi-hc-fw" onclick="return confirm('Are you sure you want to delete?')"></i></a></td>
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