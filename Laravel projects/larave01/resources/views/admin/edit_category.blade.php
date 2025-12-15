
@extends('admin.layout.structure')




@section('container') 
        <!--  Main wrapper -->
    <div class="body-wrapper">
      



      <div class="body-wrapper-inner">
        <div class="container-fluid">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title fw-semibold mb-4">Edit Product</h5>
              <div class="card">
                <div class="card-body">
                @if(session('success'))
                  <h3 style="color:green" class="float-end m-3">{{session('success')}}</h3>
                  @endif

                
                    <form action="{{url('/update_category/'.$category->id)}}" method="post" enctype="multipart/form-data" >
                    

                  @csrf


                 
      
                   <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label"> Categories Name</label>
                        <input type="text" name="name" value="{{$category->name}}"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"  required>
                    </div>

                     <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label"> Description</label>
                    <input type="text" name="discription" value="{{$category->discription}}"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"  required>

                    </div>

                     <div class="mb-3">
                      <label for="exampleInputPassword1" class="form-label">Categories Image</label><br>
                      <img class="mb-3" src="<?php echo url('upload/category/'.$category->image)?>" width="20%"   style="object-fit: cover; border-radius: 5px;">
                      <input type="file" name="image" class="form-control" id="exampleInputPassword1"  >
                    </div>



                    <button  type="submit"  class="btn btn-primary">Update</button>
                 
                  </form>





                </div>
              </div>
        
            </div>
          </div>
        </div>
      </div>
    </div>
  
                                      @endsection
                                      

