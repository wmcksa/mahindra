@extends('layouts.app')

@section('title','صفحه اتصل بنا')
@section('content')



<!-- page breadcrumb -->
<div
      class="breadcrumb"
      style="background-image: url('assets/imgs/contact.webp')"
    >
      <div class="container">
        <h2 class="title fw-bold display-6 m-0">اتصل بنا</h2>
      </div>
    </div>

    <section class="contact-info">
      <div class="container">
        <div class="content mb-5">
          <div class="row">
            <div class="col-lg-4 col-md-5">
              <div class="slogan-s">
                <h2 class="head-title fs-3 text-start">معلومات الاتصال</h2>

                <ul class="info">
                  <li>
                    <i class="fa-solid fa-map-marker-alt fa-fw"></i>
                    <div>
                      <small class="title mb-2 d-block fw-normal"
                        >Address</small
                      >
                      <p class="h5">{{$setting->dealerLocator->location}}</p>
                    </div>
                  </li>

                  <li>
                    <i class="fa-solid fa-phone fa-fw"></i>
                    <div>
                      <small class="title mb-2 d-block fw-normal"
                        >Phone Number</small
                      >
                      <a href="tel:348348648" class="h5">{{$setting->phone}}</a>
                    </div>
                  </li>

                  <li>
                    <i class="fa-solid fa-envelope fa-fw"></i>
                    <div>
                      <small class="title mb-2 d-block fw-normal"
                        >Email Adderess</small
                      >
                      <a href="mailto:mm@gmail.com" class="h5">{{$setting->email}}</a>
                    </div>
                  </li>
                </ul>
              </div>
            </div>

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
          </div>
        </div>

        <div class="form">
          <h2 class="head-title display-6">
          تواصل معنا باستخدام النموذج أدناه
          </h2>

          <form action="{{route('contact_us')}}" method="post">
            @csrf
            <div class="row">
              <div class="col-md-4 mb-3">
                <input
                  type="text"
                  class="form-control"
                  name="name"
                  aria-label="Full Name"
                  placeholder="الاسم كاملا"
                  required
                />
              </div>

              <div class="col-md-4 mb-3">
                <input
                  type="email"
                  class="form-control"
                  name="email"
                  aria-label="Email Address"
                  placeholder="البريد الالكتروني"
                  required
                />
              </div>

              <div class="col-md-4 mb-3">
                <input
                  type="tel"
                  class="form-control"
                  name="phone"
                  aria-label="Phone"
                  placeholder="رقم الهاتف"
                  required
                />
              </div>

              <div class="col-12 mb-3">
                <textarea
                  rows="5"
                  class="form-control"
                  name="message"
                  aria-label="Message"
                  placeholder="الرساله"
                ></textarea>
              </div>
            </div>

            <button
              type="submit"
              class="btn btn-outline-primary mx-auto mt-4 d-block btn-lg"
            >
              حفظ
            </button>
          </form>
        </div>
      </div>
    </section>


@endsection