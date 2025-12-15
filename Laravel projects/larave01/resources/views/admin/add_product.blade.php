@extends('admin.layout.structure')

@section('container')
<div class="body-wrapper">
  <div class="body-wrapper-inner">
    <div class="container-fluid">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title fw-semibold mb-4">Add Product</h5>
          <div class="card">
            <div class="card-body">

              <form method="POST" action="{{ url('/product') }}" enctype="multipart/form-data">
                @csrf

                <div class="mb-3">
                  <label class="form-label">Product Name</label>
                  <input type="text" name="pro_name" class="form-control" required>
                </div>

                <div class="mb-3">
                  <label class="form-label">Category</label>
                  <select name="cate_id" class="form-control" required>
                    <option value="">Select Category</option>
                    @foreach($categories as $category)
                      <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                  </select>
                </div>

                <div class="mb-3">
                  <label class="form-label">Description</label>
                  <textarea name="description" class="form-control"></textarea>
                </div>

                <div class="mb-3">
                  <label class="form-label">Product Price</label>
                  <input type="number" step="0.01" name="price" class="form-control" required>
                </div>

                <div class="mb-3">
                  <label class="form-label">Product Image</label>
                  <input type="file" name="image" class="form-control">
                </div>

                <button type="submit" class="btn btn-primary">Save</button>
              </form>

            </div>
          </div>
          
        </div>
      </div>
    </div>
  </div>
</div>
@endsection