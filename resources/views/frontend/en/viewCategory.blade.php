@extends('layouts.app_en')

@section('title','Category Page')
@section('content')


<div class="page-wrapper">

    <!--Header-->
    @include('layouts.includes.frontend.en.nav')


    <!-- /Header -->


    <section>


        <!--Page Header-->
        <section class="page-header aboutus_page" style="background-image: url(assets/images/newimage/Vehicles.png);"">
        <div class=" container">
            <div class="page-header_wrap">
                <div class="page-heading">
                    <h1>
                        <span id="ContentPlaceHolder_lblTitleHeader">Vehicles</span>
                    </h1>
                </div>
                <ul class="coustom-breadcrumb">
                    <li><a href="{{url('/home-en')}}">
                            <span id="ContentPlaceHolder_lblHomeHeader">Home</span></a></li>
                    <li>
                        <span id="ContentPlaceHolder_lblTitleHeader2"></span>
                    </li>
                </ul>
            </div>
</div>
<!-- Dark Overlay-->

</section>
<!-- /Page Header-->

<!--Listing-grid-view-->
<section class="listing-page">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-md-push-3">


                <div class="row">
                    @forelse ($categories as $category)
                    <div class="col-md-4 grid_listing">
                        <div class="product-listing-m gray-bg">
                            <div class="product-listing-img">
                                <a href="{{ url('/VehiclesDetail-en/' . $category->id) }}">
                                    {{-- <img src="{{ asset('storage/' . $car->image) }}" class="img-fluid"
                                        alt="image" /> --}}
                                </a>
                            </div>
                            <div class="product-listing-content">
                                <h5><a href="{{ url('/VehiclesDetail-en/' . $category->id) }}">
                                        {{$category->name}}
                                    </a>
                                </h5>
                            </div>
                        </div>
                    </div>
                    @empty
                    <div class="product-listing-m gray-bg">
                        <div class="product-listing-content">
                            <h5><a href='VehiclesDetail.aspx?ID=1'>
                                    {{'No Category'}}
                                </a></h5>
                        </div>
                    </div>
                    @endforelse

                </div>

            </div>


        </div>
    </div>
</section>
<!--/Listing-grid-view-->

</section>
<!-- main-container -->


<!--Footer -->

@include('layouts.includes.frontend.en.footer1')

<!-- /Footer-->


</div>
@endsection