@extends('layouts.app_en')

@section('title','Vehicles Page')
@section('content')


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
              <a href="{{route('VehiclesDetail_en',$car->category->first()->id)}}" class="vehicle-card">
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
@endsection