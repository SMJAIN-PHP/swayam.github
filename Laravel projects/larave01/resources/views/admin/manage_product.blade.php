
@extends('admin.layout.structure')




@section('container') 
          
<!-- Main wrapper -->
<div class="body-wrapper">
  <div class="body-wrapper-inner">
    <div class="container-fluid">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title fw-semibold mb-4">Manage Product</h5>
          <p class="mb-0">Manage Product</p>

          <table class="table table-striped">
            <thead>
              <tr>
                <th>#ID</th>
                <th>Product Name</th>
                <th>Category ID</th>
                <th>Description</th>
                <th>Price</th>
                <th>Image</th>
                <th>Create at</th>
                <th>Update at</th>
              
                <th class="text-center">Action</th>
              </tr>
            </thead>
            <tbody>
              
              
			@foreach($product as $data)
				  <tr>
					<td>{{$data->id}}</td>
					<td>{{$data->pro_name}}</td>
					<td>{{$data->cate_id}}</td>
					<td>{{$data->description}}</td>
					<td>{{$data->price}}</td>
					<td>{{$data->image}}</td>
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