
@extends('admin.layout.structure')




@section('container') 
          
<!-- Main wrapper -->
<div class="body-wrapper">
  <div class="body-wrapper-inner">
    <div class="container-fluid">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title fw-semibold mb-4">Manage Customer</h5>
          <p class="mb-0">Manage Customer</p>

          <table class="table table-striped">
            <thead>
              <tr>
                <th>#ID</th>
                <th>Customer Name</th>
                <th>Email</th>
                <th>Mobile</th>
                <th>Status</th>
                <th>Create at</th>
                <th>Update at</th>
              
                <th class="text-center">Action</th>
              </tr>
            </thead>
            <tbody>
              
              
			@foreach($customer as $data)
				  <tr>
					<td>{{$data->id}}</td>
					<td>{{$data->name}}</td>
					<td>{{$data->email}}</td>
					<td>{{$data->mobile}}</td>
					<td>{{$data->status}}</td>
					<td>{{$data->created_at}}</td>
          <td>{{$data->updated_at}}</td>

					<td  class="text-center">
						<a href="#" class="btn btn-primary">Edit</a>
						<a href="#" class="btn btn-danger">Delete</a>
					</td>
				  </tr>
			@endforeach
            
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>


                                     @endsection