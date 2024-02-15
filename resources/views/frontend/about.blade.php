@extends('layouts.app')

@section('title','صفحه معلومات عن الشركه')
@section('content')


<!-- page breadcrumb -->
<div
      class="breadcrumb"
      style="background-image: url('assets/imgs/about.webp')"
    >
      <div class="container">
        <h1 class="title fw-bold display-6 m-0">معلومات عن الشركه</h1>
      </div>
    </div>

    <section class="welcome">
      <div class="container">
        <h2 class="head-title display-6">لماذا ماهيندرا</h2>

        <p class="text mb-0">
          {{$content->about_section_content}}
        </p>
      </div>
    </section>

    <section class="about-section">
      <div class="container">
        <div class="row">
          <div class="col-md-6 slogan-s">
            <div class="about-features">
              <div class="feature-card">
                <i class="fa-solid fa-circle-user fa-fw"></i>
                <div class="content">
                  <h3 class="title h4 mb-3 fw-bold">
                     {{$content->about_point1}}
                  </h3>
                  <small class="text">
                  {{$content->desc1}}
                  </small>
                </div>
              </div>

              <div class="feature-card">
                <i class="fa-solid fa-earth-americas fa-fw"></i>
                <div class="content">
                  <h3 class="title h4 mb-3 fw-bold">
                  {{$content->about_point2}}
                  </h3>
                  <small class="text">
                  {{$content->desc2}}
                  </small>
                </div>
              </div>
              <div class="feature-card">
                <i class="fa-solid fa-car fa-fw"></i>
                <div class="content">
                  <h3 class="title h4 mb-3 fw-bold">{{$content->about_point3}}</h3>
                  <small class="text">
                  {{$content->desc3}}
                  </small>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-6 slogan-e">
            <a
              data-fancybox
              data-type="html5video"
              href="https://www.youtube.com/watch?v=3Zsyy3JjZME"
              data-thumb="assets/imgs/about-video-cover.webp"
              data-fancybox="about-video"
              class="video image-cover"
            >
              <i class="fa-solid fa-circle-play"></i>

              <img
                src="{{asset('assets/imgs/about-video-cover.png')}}"
                alt="Why Mahindra Rise"
              />
            </a>
          </div>
        </div>
      </div>
    </section>


@endsection