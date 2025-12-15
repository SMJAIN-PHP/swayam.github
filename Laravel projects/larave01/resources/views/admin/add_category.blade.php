
@extends('admin.layout.structure')




@section('container') 
        <!--  Main wrapper -->
    <div class="body-wrapper">
      



      <div class="body-wrapper-inner">
        <div class="container-fluid">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title fw-semibold mb-4">Add Categories</h5>
              <div class="card">
                <div class="card-body">
                 <form action="{{url('/category')}}"   method="post" enctype="multipart/form-data">
                  @csrf
                  
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label"> Categories Name</label>
                      <input type="name"  name="name"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"required>
                    </div>
                    

                    <div class="mb-3">
                    <label class="form-label">Categories Image</label>
                    <input type="file" name="image" class="form-control">
                    </div>


                     <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label"> Description</label>
                      <textarea  name="discription"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required></textarea>
                    </div>

                     

                    
                   
                    <button type="submit" name="submit" class="btn btn-primary">Save</button>
                  </form>
                </div>
              </div>
        
            </div>
          </div>
        </div>
      </div>
    </div>
  
                                      @endsection