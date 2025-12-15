@extends('website.layout.structure')

@section('container')

<style>
    .service-img,
    .category-img {
        width: 100%;
        height: 260px;
        object-fit: contain;
        background: #ffffff;
        padding: 15px;
        border-radius: 12px 12px 0 0;
        display: block;
        margin: 0 auto;
    }
</style>

<!-- Header Start -->
<div class="container-fluid bg-breadcrumb">
    <div class="container text-center py-5" style="max-width: 900px;">
        <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">Our Products</h4>
        
    </div>
</div>
<!-- Header End -->

<!-- Categories Listing -->
<div class="container-fluid product py-5">
    <div class="container py-5">
        <div class="text-center mx-auto pb-5" style="max-width: 800px;">
            <h4 class="text-uppercase text-primary">Our Products</h4>
            <h1 class="display-3 text-capitalize mb-3">We Deliver Best Quality Bottle Packs.</h1>
        </div>

        <div class="row g-4 justify-content-center">
            @foreach($categories as $data)
            <div class="col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.2s">
                <div class="product-item">

                    <img src="{{ asset('upload/category/' . ($data->image ?? 'default.png')) }}"
                         class="category-img"
                         alt="{{ $data->name }}">

                    <div class="product-content bg-light text-center rounded-bottom p-4">
                        <a href="#" class="h4 d-inline-block mb-3">{{ $data->name }}</a>
                        <br>
                        <a href="{{ url('product/' . $data->id) }}"
                           class="btn btn-secondary rounded-pill py-2 px-4">Read More</a>
                    </div>

                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>

@endsection
