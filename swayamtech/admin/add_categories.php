<?php
	include_once('header.php');
	?>
    <!--  Main wrapper -->
    <div class="body-wrapper">
      



      <div class="body-wrapper-inner">
        <div class="container-fluid">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title fw-semibold mb-4">Add Categories</h5>
              <div class="card">
                <div class="card-body">
                 <form method="post" enctype="multipart/form-data">
                  
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label"> Categories Name</label>
                      <textarea  name="cate_name"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"></textarea>
                    </div>

                     <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label"> Description</label>
                      <textarea  name="cate_desp"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"></textarea>
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