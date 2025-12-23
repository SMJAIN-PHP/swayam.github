
@extends('admin.layout.structure')




@section('container') 


    <!--  Main wrapper -->
    <div class="body-wrapper">
      

      <div class="body-wrapper-inner">
        <div class="container-fluid">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title fw-semibold mb-4">Feedback</h5>
              <p class="mb-0">Manage Feedback </p>
			  
			  <table class="table table-striped">
				<thead>
				  <tr>
					<th>#ID</th>
					<th>Categories Name</th>
					<th>Image</th>
					<th class="text-center">Action</th>
				  </tr>
				</thead>
				<tbody>
				  <tr>
					<td>1</td>
					<td>Graphic</td>
					<td>graphic.png</td>
					<td  class="text-center">
						<a href="" class="btn btn-primary">Edit</a>
						<a href="" class="btn btn-danger">Delete</a>
					</td>
				  </tr>
				  
				</tbody>
			  </table>
            </div>
          </div>
        </div>
      </div>
    </div>



                                   @endsection