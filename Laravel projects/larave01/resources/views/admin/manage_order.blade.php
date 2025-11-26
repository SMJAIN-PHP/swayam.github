
@extends('admin.layout.structure')




@section('container') 
        
               <!-- dashboard inner -->
               <div class="midde_cont">
                  <div class="container-fluid">
                     <div class="row column_title">
                        <div class="col-md-12">
                           <div class="page_title">
                              <h2>General Elements</h2>
                           </div>
                        </div>
                     </div>
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
					<th>email</th>
					<th>mobile</th>
					<th>address</th>
					<th>Quantity</th>
					
					
					<th class="text-center">Action</th>
				  </tr>
				</thead>
				<tbody>

					
 
				  <tr>
					<td></td>
					<td></td>
				    <td></td>
					<td></td>
					<td></td>
					<td><textarea name="description" class="form-control"></textarea></td>
					<td></td>
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
  </div>
                     </div>
                  
                                      @endsection




 