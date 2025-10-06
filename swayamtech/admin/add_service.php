
	<?php
	include_once('header.php');
	?>
	<!--  Main wrapper -->
    <div class="body-wrapper">
   
    
      <div class="body-wrapper-inner">
        <div class="container-fluid">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title fw-semibold mb-4">Add Service</h5>
              <div class="card">
                <div class="card-body">
                  <form method="post" enctype="multipart/form-data">
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Categories Name</label>
                      <select type="name" name="cate_id"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                         <option value="">Select Categories</option>
                        <?php
                          foreach($cate_arr as $data)
                          {
                          ?>
                         <option value="<?php echo $data->id?>"><?php echo $data->cate_name?></option>
                         <?php
                          }
                         ?>
                      </select>
                       <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label"> Service Name</label>
                      <textarea  name="serv_name"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"></textarea>
                    </div>
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label"> Description</label>
                      <textarea  name="description"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"></textarea>
                    </div>

                     <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label"> Price</label>
                      <textarea  name="price"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"></textarea>
                    </div>
                    <div class="mb-3">
                      <label for="exampleInputPassword1" class="form-label">Service Image</label>
                      <input type="file" name="image" class="form-control" id="exampleInputPassword1">
                    </div>
                   
                    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                  </form>
                </div>
              </div>
        
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="./assets/libs/jquery/dist/jquery.min.js"></script>
  <script src="./assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="./assets/js/sidebarmenu.js"></script>
  <script src="./assets/js/app.min.js"></script>
  <script src="./assets/libs/simplebar/dist/simplebar.js"></script>
  <!-- solar icons -->
  <script src="https://cdn.jsdelivr.net/npm/iconify-icon@1.0.8/dist/iconify-icon.min.js"></script>
</body>

</html>