@extends('website.layout.structure')

@section('container')

<!-- Image Styling -->
<style>
    .product-img {
        width: 100%;
        height: 280px;
        object-fit: contain;     /* keeps bottle full visible */
        background: #ffffff;
        padding: 15px;
        border-radius: 12px 12px 0 0;
        display: block;
        margin: 0 auto;
    }
</style>


<!-- Header Start -->
<div class="container-fluid bg-breadcrumb">
    <div class="container text-center py-5" style="max-width: 400px;">
        <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">Our Products</h4>
        
    </div>
</div>
<!-- Header End -->


<!-- Products Start -->
<div class="container-fluid product py-5">
    <div class="container py-5">
        <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
            <h4 class="text-uppercase text-primary">Our Products</h4>
            <h1 class="display-3 text-capitalize mb-3">We Deliver Best Quality Bottle Packs.</h1>
        </div>
        <div class="row g-4 justify-content-center">

            @foreach($product as $data)
            <div class="col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.2s">
                <div class="product-item">

                    <!-- FIXED IMAGE -->
                    <img src="{{ asset('upload/product/' . ($data->image ?? 'default.png')) }}"
                         class="product-img"
                         alt="{{ $data->name }}">

                    <div class="product-content bg-light text-center rounded-bottom p-4">
                        <a href="#" class="h4 d-inline-block mb-3">{{ $data->name }}</a>
                        <a href="#" class="h4 d-inline-block mb-3">{{ $data->description }}</a>
                        <br>
                        <a href="{{ url('single_product/'.$data->id) }}" class="btn btn-secondary rounded-pill py-2 px-4">
                            Read More
                        </a>
                    </div>

                </div>
            </div>
            @endforeach

        </div>
    </div>
</div>
<!-- Products End -->

@endsection
