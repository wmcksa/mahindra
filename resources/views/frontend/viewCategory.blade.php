@extends('layouts.app')

@section('title','Cars Page')

@section('content')


<div class="page-wrapper">

    @include('layouts.includes.frontend.nav')

    <section>
        <!--Page Header-->
        <section class="page-header aboutus_page"
            style="background-image: url({{asset('assets/images/newimage/Vehicles.png')}});">
            <div class=" container">
                <div class="page-header_wrap">
                    <div class="page-heading">
                        <h1>
                            <span id="ContentPlaceHolder_lblTitleHeader">السيارات</span>
                        </h1>
                    </div>
                    <ul class="coustom-breadcrumb">
                        <li><a href="{{url('/')}}">
                                <span id="ContentPlaceHolder_lblHomeHeader">الصفحة الرئيسية</span></a></li>
                        <li>
                            <span id="ContentPlaceHolder_lblTitleHeader2">السيارات</span>
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
                                        {{-- عند النقر يتم عرض معلومات السيارة المحددة --}}
                                        <a href="{{ url('/VehiclesDetail/' . $category->id) }}">
                                            {{-- <img src="{{ asset('storage/' . $category->car_images[0]) }}"
                                                class=" img-fluid" alt="image" /> --}}
                                        </a>
                                    </div>

                                    {{--عرض اسم السيارة --}}
                                    <div class="product-listing-content">
                                        <h5><a href="{{route('vehicles_detail',$category->id)}}">
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
                                            {{'لا يوجد فئات '}}
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

    @include('layouts.includes.frontend.footer1')



</div>








@endsection