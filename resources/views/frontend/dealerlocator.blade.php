@extends('layouts.app')

@section('title','صفحه فروعنا')
@section('content')

 <!-- page breadcrumb -->
 <div
      class="breadcrumb"
      style="background-image: url('assets/imgs/dealer-locator.jpg')"
    >
      <div class="container">
        <h1 class="title fw-bold display-6 m-0">فروعنا</h1>
      </div>
    </div>

    <section class="dealer-locator">
      <div class="container">
        <h2 class="head-title display-6">ابحث عن وكلاء ماهيندرا بالقرب منك</h2>

        <div class="content">
          <div class="row w-100 p-0 m-0">
            <div
              class="tab-content col-lg-8 col-md-7 p-0"
              id="v-pills-tabContent"
            >
              <div
                class="tab-pane fade image-cover p-0 show active"
                id="v-pills-al-riyad"
                role="tabpanel"
                aria-labelledby="v-pills-al-riyad-tab"
                tabindex="0"
              >
                <iframe
                  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d927758.0371352523!2d47.4820619644522!3d24.724997736543546!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e2f03890d489399%3A0xba974d1c98e79fd5!2z2KfZhNix2YrYp9i2INin2YTYs9i52YjYr9mK2Kk!5e0!3m2!1sar!2seg!4v1706732502302!5m2!1sar!2seg"
                  class="map"
                  style="border: 0"
                  allowfullscreen=""
                  loading="lazy"
                  referrerpolicy="no-referrer-when-downgrade"
                ></iframe>
              </div>

              <div
                class="tab-pane fade image-cover p-0"
                id="v-pills-geddah"
                role="tabpanel"
                aria-labelledby="v-pills-geddah-tab"
                tabindex="0"
              >
                <iframe
                  src="https://maps.google.com/maps?hl=en&amp;q=26.34146033912897, 50.19810002810019&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"
                  width="600"
                  height="450"
                  style="border: 0"
                  allowfullscreen=""
                  loading="lazy"
                  referrerpolicy="no-referrer-when-downgrade"
                ></iframe>
              </div>
            </div>

            <div class="pills-slog col-lg-4 col-md-5">
              <h2 class="head-title fs-5 mb-1 text-start">
              تجار في المملكة العربية السعودية
              </h2>

              <div
                class="nav flex-column nav-pills"
                id="v-pills-tab"
                role="tablist"
                aria-orientation="vertical"
              >

              @forelse ($dealerlocators as $dealerlocator)

                <button
                  class="nav-link active"
                  id="v-pills-al-riyad-tab"
                  data-bs-toggle="pill"
                  data-bs-target="#v-pills-al-riyad"
                  type="button"
                  role="tab"
                  aria-controls="v-pills-al-riyad"
                  aria-selected="true"
                >
                  <h5 class="title fs-5 mb-3 fw-bold">{{$dealerlocator->country}}</h5>

                  <p class="text">{{$dealerlocator->city}}</p>

                  <ul class="contact-links">
                    <li>
                      <p>ايام العمل: {{$dealerlocator->beginning_working_day}} To {{$dealerlocator->end_working_day}}</p>
                    </li>

                    <li>
                      <p>ساعات العمل: {{$dealerlocator->beginning_working_hours}} To {{$dealerlocator->end_working_hours}}</p>
                    </li>

                    <li>
                      <a href="tell:04-2994969">
                        <i class="fa-solid fa-phone"></i>
                        {{$dealerlocator->mobile}}
                      </a>
                    </li>

                    
                  </ul>
                </button>

                @empty

                <div>
                    <h2>
                        No Dealer Locator
                    </h2>
                </div>
                @endforelse
              </div>
            </div>
          </div>

          <!-- ========================================================================================================================= -->

          <!-- <div class="row">
            <div class="col-lg-8 col-md-7">
              <div class="slogan-e image-cover">
                <iframe
                  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d927758.0371352523!2d47.4820619644522!3d24.724997736543546!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e2f03890d489399%3A0xba974d1c98e79fd5!2z2KfZhNix2YrYp9i2INin2YTYs9i52YjYr9mK2Kk!5e0!3m2!1sar!2seg!4v1706732502302!5m2!1sar!2seg"
                  class="map"
                  style="border: 0"
                  allowfullscreen=""
                  loading="lazy"
                  referrerpolicy="no-referrer-when-downgrade"
                ></iframe>
              </div>
            </div>

            <div class="col-lg-4 col-md-5">
              <div class="slogan-s">
                <ul class="info">
                  <li>
                    <i class="fa-solid fa-map-marker-alt fa-fw"></i>
                    <div>
                      <small class="title mb-2 d-block fw-normal"
                        >Address</small
                      >
                      <p class="h5">Khobar,king fahd road</p>
                    </div>
                  </li>

                  <li>
                    <i class="fa-solid fa-phone fa-fw"></i>
                    <div>
                      <small class="title mb-2 d-block fw-normal"
                        >Phone Number</small
                      >
                      <a href="tel:348348648" class="h5">348348648</a>
                    </div>
                  </li>

                  <li>
                    <i class="fa-solid fa-envelope fa-fw"></i>
                    <div>
                      <small class="title mb-2 d-block fw-normal"
                        >Email Adderess</small
                      >
                      <a href="mailto:mm@gmail.com" class="h5">mm@gmail.com</a>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </div> -->
        </div>
      </div>
    </section>

@endsection