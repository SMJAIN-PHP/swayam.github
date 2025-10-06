<?php
	include_once('header.php');
	?>
	<!--  Main wrapper -->
    <div class="body-wrapper">
	
 
      <div class="body-wrapper-inner">
        <div class="container-fluid">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title fw-semibold mb-4">Contact</h5>
              <p class="mb-0">Manage Contact </p>
			  
			  <table class="table table-striped">
				<thead>
				  <tr>
					<th>#ID</th>
					<th>Name</th>
					<th>Email </th>
					<th>Mobile</th>
					<th>Subject</th>
					<th>Massege </th>
					<th class="text-center">Action</th>
				  </tr>
				</thead>
				<tbody>
					
				   <?php
				foreach($cont_arr as $data)
				{
				?>

				  <tr>
					<td><?php echo $data->id;?></td>
					<td><?php echo $data->cont_name;?></td>
					<td><?php echo $data->email;?></td>
					<td><?php echo $data->mobile;?></td>
					<td><?php echo $data->subject;?></td>
					<td><?php echo $data->message;?></td>
					<td  class="text-center">
						<a href="" class="btn btn-primary">Edit</a>
						<a href="delete?dlt_contect=<?php echo $data->id; ?>" class="btn btn-danger">Delete</a>
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