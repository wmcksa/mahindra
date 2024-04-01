@extends('layouts.app')

@section('title','الصفحه الرئيسيه')
@section('content')


    <!-- header carousel -->
    <header class="header">
      <div class="owl-carousel header-slider owl-theme">
        @foreach($sliders as $slider)
        <div class="item">
          <div class="image-cover">
            <img src="{{$slider->image}}" alt=""  />
          </div>
        </div>
       @endforeach


       
      </div>
    </header>

    <section class="site-slogan">
      <div class="container content">
        <h2 class="title h1">ماهيندرا بيك اب</h2>
        <p class="text">منظر خيالي... بسعر رائع.</p>
      </div>
    </section>

    <section class="vehicles-section">
      <ul class="nav nav-pills container mb-3" id="pills-tab" role="tablist">
      @foreach($modelCars as $modelCar)
        <li class="nav-item" role="presentation">
          <button
            class="nav-link @if ($loop->first) active  @endif"
            id="pills-{{$modelCar->id}}-tab"
            data-bs-toggle="pill"
            data-bs-target="#pills-{{$modelCar->id}}"
            type="button"
            role="tab"
            aria-controls="pills-{{$modelCar->id}}"
            aria-selected="true"
          >
          {{$modelCar->name}}
          </button>
        </li>
        @endforeach
        
      </ul>

      <div class="tab-content container-fluid" id="pills-tabContent">

      @foreach($modelCars as $modelCar)
        <div
          class="tab-pane fade @if ($loop->first) show active  @endif"
          id="pills-{{$modelCar->id}}"
          role="tabpanel"
          aria-labelledby="pills-{{$modelCar->id}}-tab"
          tabindex="0"
        >
          <div class="owl-carousel vehicles-carousel owl-theme">
          @foreach($modelCar->cars as $car)
            <div class="item">
              <a href="{{route('vehicles_detail',$car->id)}}" class="vehicle-card">
                <div class="image-contain">
                  <img src="{{$car->image}}" alt="Scorpio-N" />
                </div>
                <h5 class="title h4">{{$car->name}}</h5>
              </a>
            </div>
           @endforeach 
          </div>
        </div>

        @endforeach
      </div>
    </section>

    <section class="welcome">
      <div class="container">
        <h2 class="head-title display-6">مرحبا ماهيندرا</h2>

        <p class="text">
            {{$content->home_section}}
        </p>

        <div class="features row">
          <div class="col-md-6 feature-card">
            <i class="fa-solid fa-money-bill"></i>
            <h3 class="title h4">افضل الاسعار</h3>
          </div>
          <div class="col-md-6 feature-card">
            <i class="fa-solid fa-thumbs-up"></i>
            <h3 class="title h4">موثوق به من قبل الآلاف</h3>
          </div>
          <div class="col-md-6 feature-card">
            <i class="fa-solid fa-clock-rotate-left"></i>
            <h3 class="title h4">دعم ما بعد البيع</h3>
          </div>
          <div class="col-md-6 feature-card">
            <i class="fa-solid fa-users"></i>
            <h3 class="title h4">عملاء راضون</h3>
          </div>
        </div>
      </div>
    </section>

    

@endsection