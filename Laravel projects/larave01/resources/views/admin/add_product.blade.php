
@extends('admin.layout.structure')




@section('container') 
        <!--  Main wrapper -->
    <div class="body-wrapper">
      



      <div class="body-wrapper-inner">
        <div class="container-fluid">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title fw-semibold mb-4">Add Product</h5>
              <div class="card">
                <div class="card-body">
                 <form method="post" enctype="multipart/form-data">
                  
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label"> Product Name</label>
                      <textarea  name="cate_name"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"></textarea>
                    </div>

                     <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label"> Description</label>
                      <textarea  name="cate_desp"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"></textarea>
                    </div>

                    
                   
                    <button href="#" type="submit" name="submit" class="btn btn-primary">Submit</button>
                  </form>
                </div>
              </div>
        
            </div>
          </div>
        </div>
      </div>
    </div>
  
                                      @endsection