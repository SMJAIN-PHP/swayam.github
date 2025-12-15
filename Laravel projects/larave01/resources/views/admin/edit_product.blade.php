
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
               

                
                    <form action="{{url('/update_product/'.$product->id)}}" method="post" enctype="multipart/form-data" >
                    

                  @csrf

      
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label"> Product Name</label>
                   <input type="text" name="pro_name" value="{{$product->pro_name}}"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"  required>
                    </div>

                    <div class="mb-3">
                  <label class="form-label">Category</label>
                  <select name="cate_id" class="form-control" required>
                    @foreach($categories as $category)
                      <option value="{{ $category->id }}" {{ $product->cate_id == $category->id ? 'selected' : '' }}>
                        {{ $category->name }}
                      </option>
                    @endforeach
                  </select>
                </div>


                    
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label"> Description</label>
                        <input type="text" name="description" value="{{$product->description}}"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"  required>
                    </div>

                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label"> Product Price</label>
                    <input type="text" name="price" value="{{$product->price}}"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"  required>

                    </div>


                     <div class="mb-3">
                      <label for="exampleInputPassword1" class="form-label">Categories Image</label><br>
                      <img class="mb-3" src="<?php echo url('upload/product/'.$product->image)?>" width="20%"   style="object-fit: cover; border-radius: 5px;">
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
                                      

