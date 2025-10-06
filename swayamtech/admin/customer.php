<?php
	include_once('header.php');
	?>
	
    <!--  Main wrapper -->
    <div class="body-wrapper">
      
	
      <div class="body-wrapper-inner">
        <div class="container-fluid">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title fw-semibold mb-4">Customer</h5>
              <p class="mb-0">Manage Customer </p>
			  
			  <table class="table table-striped">
				<thead>
				  <tr>
					<th>#ID</th>
					<th>Image</th>
					<th>Customer Name</th>
					<th>Email</th>
					<th>Mobile</th>
					<th class="text-center">Action</th>
				  </tr>
				</thead>
				<tbody>

				  <?php
				foreach($cust_arr as $data)
				{
				?>

				  <tr>
					<td><?php echo $data->id;?></td>
					<td><img src="../new_web/assets/images/customers/<?php echo $data->image; ?>" width="100px" alt="" ></td>
					<td><?php echo $data->cust_name;?></td>
					<td><?php echo $data->email;?></td>
					<td><?php echo $data->mobile;?></td>
					
					<td  class="text-center">
					<a href="status?status_customer=<?php echo $data->id;?>" class="btn btn-primary"><?php echo $data->status;?></a>
					<!--<a href="" class="btn btn-primary">Edit</a>-->
					<a href="delete?dlt_customers=<?php echo $data->id; ?>" class="btn btn-danger">Delete</a>
					</td>
				  </tr>
				<?php
				}
				?>s
				  
				</tbody>
			  </table>
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