@extends('website.layout.structure')

@section('container')

<!-- Header Start -->
            <div class="container-fluid bg-breadcrumb">
                <div class="container text-center py-5" style="max-width: 900px;">
                    <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">Our Products</h4>
                    <ol class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
                        <li class="breadcrumb-item"><a href="index">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Pages</a></li>
                        <li class="breadcrumb-item active text-primary">Product</li>
                    </ol>    
                </div>
            </div>
            <!-- Header End -->

                   <form action="{{url('/single_product/'.$product->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf

            <div class="container py-5">
                <div class="row">
                    <!-- Product Images -->
                    <div class="col-md-6">
                        <div class="card shadow-sm">
                            <img src="<?php echo url('upload/product/'.$product->image)?>" class="img-fluid" alt="Product Image">
                        </div>

                    
                    </div>

                    <!-- Product Details -->
                    <div class="col-md-6">
                        <h2 class="fw-bold">{{$product->pro_name}}</h2>

                        <div class="d-flex align-items-center mb-3">
                            <span class="text-warning fs-5">★★★★★</span>
                            <span class="ms-2 text-muted">(120 reviews)</span>
                        </div>

                        <h3 class="text-primary fw-bold">₹{{$product->price}}</h3>
                        <p class="text-muted mt-2">
                            This is a short description of the product that highlights key features and benefits for the buyer.
                        </p>

                        <!-- Features -->
                        <ul class="list-unstyled mt-3">
                            <li>✔ High Quality Material</li>
                            <li>✔ 1-Year Warranty</li>
                            <li>✔ Free Shipping Available</li>
                        </ul>

                        <!-- Quantity + Add to Cart -->
                        <div class="d-flex align-items-center mt-4">
                            <input type="number" class="form-control w-25 me-3" value="1" min="1">
                            <button href="#"class="btn btn-primary px-4">Add to Cart</button>
                        </div>

                        <!-- Categories / Tags -->
                        <div class="mt-4">
                            <p><strong>Category:</strong> {{$product->cate_id}}</a></p>
                            <p><strong>Tags:</strong> gadget, tech, device</p>
                        </div>
                    </div>
                </div>

                <!-- Product Description -->
                <div class="mt-5">
                    <h4 class="fw-bold">Product Description</h4>
                    <p class="text-muted">
                        Here is a detailed description of the product. Add all specifications, use cases, and benefits
                        to help the customer better understand the item they are purchasing.
                    </p>
                </div>

                <!-- Reviews Section -->
                <div class="mt-5">
                    <h4 class="fw-bold">Customer Reviews</h4>

                    <div class="card p-3 my-3 shadow-sm">
                        <strong>Suresh</strong>
                        <p class="small text-warning">★★★★☆</p>
                        <p class="text-muted">Great quality! Worth the price.</p>
                    </div>

                    <div class="card p-3 my-3 shadow-sm">
                        <strong>Deepika</strong>
                        <p class="small text-warning">★★★★★</p>
                        <p class="text-muted">Amazing product. Fast delivery!</p>
                    </div>
                </div>
</form>

</div>

@endsection
