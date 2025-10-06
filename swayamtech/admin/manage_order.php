<?php
	include_once('header.php');
	?>
	
    <!--  Main wrapper -->
    <div class="body-wrapper">
      
	  
      <div class="body-wrapper-inner">
        <div class="container-fluid">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title fw-semibold mb-4">Order</h5>
              <p class="mb-0">Manage Order </p>
			  
			  <table class="table table-striped">
				<thead>
				  <tr>
					<th>#ID</th>
					<th>Customer</th>
					<th>Service</th>
					<th>Quantity</th>
					
					<th>country</th>
					<th>order_date</th>
					
					<th class="text-center">Action</th>
				  </tr>
				</thead>
				<tbody>

					<?php
					foreach($ord_arr as $data)
					{
					?>

				  <tr>
					<td><?php echo $data->id; ?></td>
					<td><?php echo $data->cus_id; ?></td>
				    <td><?php echo $data->serv_id; ?></td>
					<td><?php echo $data->quantity; ?></td>
					<td><?php echo $data->country; ?></td>
					<td><?php echo $data->order_date; ?></td>
					<td  class="text-center">
						<a href="" class="btn btn-primary">Edit</a>
						<a href="delete?dlt_order=<?php echo $data->id; ?>" class="btn btn-danger">Delete</a>
					</td>
				  </tr>

				 <?php
				 }
				 ?> 
				  
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