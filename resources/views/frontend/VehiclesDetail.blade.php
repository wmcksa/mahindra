@extends('layouts.app')

@section('title','Category Page')
@section('content')
<!-- header carousel -->
<header class="header image-cover">
      <img src="{{asset('assets/imgs/vehicle-details-banner.png')}}" alt="Mahindra PIK UP" />
    </header>

    <section class="site-slogan">
      <ul class="container d-flex align-items-center gap-4 flex-wrap">
        <li class="flex-shrink-0">
          <a
            class="d-flex align-items-center gap-2 details-navigate-link"
            href="#"
            data-bs-toggle="modal"
            data-bs-target="#scheduleTestModal"
          >
            <i class="fa-solid fa-car-side fa-fw"></i>
            Schedule Test Drive
          </a>
        </li>

        <li class="flex-shrink-0">
          <a
            class="d-flex align-items-center gap-2 details-navigate-link"
            href="#"
            data-bs-toggle="modal"
            data-bs-target="#requestOfferModal"
          >
            <i class="fa-solid fa-money-bill fa-fw"></i>
            Request Offer
          </a>
        </li>

        <li class="flex-shrink-0">
          <a
            class="d-flex align-items-center gap-2 details-navigate-link"
            href="#"
            data-bs-toggle="modal"
            data-bs-target="#requestInfoModal"
          >
            <i class="fa-solid fa-file-lines fa-fw"></i>
            Request More Info
          </a>
        </li>

        <li class="flex-shrink-0">
          <a
            class="d-flex align-items-center gap-2 details-navigate-link"
            href="#"
            data-bs-toggle="modal"
            data-bs-target="#bookMaintainanceModal"
          >
            <i class="fa-solid fa-file-lines fa-fw"></i>
            Book a Maintenance Appointment
          </a>
        </li>
      </ul>
    </section>

    <section class="vehicle-details-banners">
      <div class="container">
        <h2 class="head-title fs-2 text-start">Key Highlights</h2>
      </div>

      <div class="banner image-cover">
        <span
          class="bg"
          style="background-image: url('assets/imgs/vehicle-banner-1.webp')"
        ></span>
        <div class="container">
          <div class="row">
            <div class="col-lg-7"></div>
            <div class="col-lg-5">
              <h3 class="title display-6">Most reliable engine</h3>
              <p class="text m-0">
                New m2Di engine with great performance and lowest maintenance
                cost
              </p>
            </div>
          </div>
        </div>
      </div>

      <div class="banner image-cover">
        <span
          class="bg"
          style="background-image: url('assets/imgs/vehicle-banner-2.webp')"
        ></span>
        <div class="container">
          <div class="row">
            <div class="col-lg-7"></div>
            <div class="col-lg-5">
              <h3 class="title display-6">Great performance</h3>
              <p class="text m-0">
                Power of 59.7kW and torque of 220Nm to ensure on-time goods
                delivery.
              </p>
            </div>
          </div>
        </div>
      </div>

      <div class="banner image-cover">
        <span
          class="bg"
          style="background-image: url('assets/imgs/vehicle-banner-1.webp')"
        ></span>
        <div class="container">
          <div class="row">
            <div class="col-lg-7"></div>
            <div class="col-lg-5">
              <h3 class="title display-6">Most reliable engine</h3>
              <p class="text m-0">
                New m2Di engine with great performance and lowest maintenance
                cost
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="vehicle-details-accessories">
      <div class="container">
        <h2 class="head-title fs-2 text-start">Variants & Specs</h2>

        <div class="accordion accordion-flush mb-5" id="accordionFlushExample">
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button
                class="accordion-button"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#flush-technical-specs"
                aria-expanded="false"
                aria-controls="flush-technical-specs"
              >
                TECHINICAL SPECIFICATIONS
              </button>
            </h2>

            <div
              id="flush-technical-specs"
              class="accordion-collapse collapse show"
              data-bs-parent="#accordionFlushExample"
            >
              <div class="accordion-body">
                <ul class="row">
                  <li class="col-md-6">
                    <p><b>شعبية:</b> {{$feature->traction ??''}}</p>
                  </li>

                  

                  <li class="col-md-6">
                    <p><b>الإطارات:</b> {{$feature->tyres ??''}}</p>
                  </li>

                  <li class="col-md-6">
                    <p><b>محرك:</b> {{$feature->engine ??''}}</p>
                  </li>

                  <li class="col-md-6">
                    <p><b>عزم الدوران:</b> {{$feature->torque ??''}}</p>
                  </li>

                  <li class="col-md-6">
                    <p><b>انتقال:</b> {{$feature->transmission ??''}}</p>
                  </li>

                  <li class="col-md-6">
                    <p><b>التروس:</b> {{$feature->gears ??''}}</p>
                  </li>

                  <li class="col-md-6">
                    <p><b>عجلات:</b> {{$feature->wheels ??''}}</p>
                  </li>

                  <li class="col-md-6">
                    <p>
                      <b>البعد (الطول × العرض × الارتفاع):</b> {{$feature->dismension_LXWXH ??''}}
                    </p>
                  </li>

                  <li class="col-md-6">
                    <p>
                      <b>أبعاد صندوق الأمتعة (الطول × العرض × الارتفاع):</b>
                      {{$feature->cargo_box_dimension_LXWXH ??''}}
                    </p>
                  </li>

                  <li class="col-md-6">
                    <p><b>زاوية:</b> {{$feature->angle ??'' }}</p>
                  </li>

                  <li class="col-md-6">
                    <p><b>تطهير الأرض:</b> {{$feature->ground_clearance ??''}}</p>
                  </li>

                  <li class="col-md-6">
                    <p><b>وزن إجمالي وزن المركبة:</b> {{$feature->GVW ??''}}</p>
                  </li>

                  <li class="col-md-6">
                    <p><b>تطويق:</b> {{$feature->kerb ??''}}</p>
                  </li>

                  <li class="col-md-6">
                    <p><b>دفع حمولة:</b> {{$feature->pay_load ??''}}</p>
                  </li>
                </ul>
              </div>
            </div>
          </div>

          <div class="accordion-item">
            <h2 class="accordion-header">
              <button
                class="accordion-button collapsed"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#flush-safety"
                aria-expanded="false"
                aria-controls="flush-safety"
              >
                SAFETY
              </button>
            </h2>
            <div
              id="flush-safety"
              class="accordion-collapse collapse"
              data-bs-parent="#accordionFlushExample"
            >
              <div class="accordion-body">
                <ul class="row">
                  <li class="col-md-6">
                    <p><b>أكياس هواء أمامية مزدوجة:</b> {{$feature->dual_front_AIR_bags ??''}}</p>
                  </li>
                  <li class="col-md-6">
                    <p>
                      <b>عمود توجيه قابل للانهيار:</b>{{$feature->collapsible_steering_column ??''}}
                    </p>
                  </li>
                  <li class="col-md-6">
                    <p>
                      <b>تنجيد مقاوم للحريق:</b> {{$feature->fire_retardant_upholstery ??''}}
                    </p>
                  </li>
                </ul>
              </div>
            </div>
          </div>

          <div class="accordion-item">
            <h2 class="accordion-header">
              <button
                class="accordion-button collapsed"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#flush-comfort"
                aria-expanded="false"
                aria-controls="flush-comfort"
              >
                COMFORT
              </button>
            </h2>
            <div
              id="flush-comfort"
              class="accordion-collapse collapse"
              data-bs-parent="#accordionFlushExample"
            >
              <div class="accordion-body">
                <ul class="row">
                  <li class="col-md-6">
                    <p><b>تكييف:</b> {{$feature->AIR_conditoning ??''}}</p>
                  </li>
                  <li class="col-md-6">
                    <p><b>قيادة:</b> {{$feature->steering_control ??''}}</p>
                  </li>
                  <li class="col-md-6">
                    <p><b>المرآة الخلفية:</b> {{$feature->rear_view_mirror ??''}}</p>
                  </li>
                  <li class="col-md-6">
                    <p>
                      <b
                        >برنامج تشغيل WINDOW CONTROL بلمسة واحدة - والمبرمج
                        (مضاد للقرص):</b
                      >
                      {{$feature->one_touch_window_control_driver_codriver_antipinch??''}}
                    </p>
                  </li>
                  <li class="col-md-6">
                    <p><b>اتبعني المصابيح الأمامية:</b> {{$feature->follow_me_homw_headlamps ??''}}</p>
                  </li>
                  <li class="col-md-6">
                    <p>
                      <b>يستريح الذراع على المقاعد الأمامية:</b> {{$feature->ARM_rest_on_front_seats ??''}}
                    </p>
                  </li>
                  <li class="col-md-6">
                    <p><b>عجلات من سبائك:</b> {{$feature->alloy_wheels ??''}}</p>
                  </li>
                  <li class="col-md-6">
                    <p><b>اختياري:</b> {{$feature->optional ??''}}</p>
                  </li>
                  <li class="col-md-6">
                    <p>
                      <b
                        >شاشة تعمل باللمس متكاملة نظام المعلومات والترفيه
                        الملاحة عبر الأقمار الصناعية:</b
                      >
                      {{$feature->touch_screen_intregated_infotainment_satellite_navigation??''}}
                    </p>
                  </li>
                </ul>
              </div>
            </div>
          </div>

          <div class="accordion-item">
            <h2 class="accordion-header">
              <button
                class="accordion-button collapsed"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#flush-other-features"
                aria-expanded="false"
                aria-controls="flush-other-features"
              >
                OTHER FEATURES
              </button>
            </h2>
            <div
              id="flush-other-features"
              class="accordion-collapse collapse"
              data-bs-parent="#accordionFlushExample"
            >
              <div class="accordion-body">
                <ul class="row">
                  <li class="col-md-6">
                    <p><b>مصباح الرأس :</b> {{$feature->headlamp ??''}}</p>
                  </li>
                  <li class="col-md-6">
                    <p><b>أقواس بونيه هيدروليكيه:</b> {{$feature->hydraulic_bonnet_struts ??''}}</p>
                  </li>
                  <li class="col-md-6">
                    <p><b>المقعد الخلفي:</b> {{$feature->rear_demister ??''}}</p>
                  </li>
                  <li class="col-md-6">
                    <p><b>غني بالأسود:</b> {{$feature->rich_black ??''}}</p>
                  </li>
                  <li class="col-md-6">
                    <p>
                      <b>جهاز عرض مزود بمصابيح حواجب:</b> {{$feature->projector_with_EYR_brow_lamps ??''}}
                    </p>
                  </li>
                </ul>
              </div>
            </div>
          </div>

          <div class="accordion-item">
            <h2 class="accordion-header">
              <button
                class="accordion-button collapsed"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#flush-style"
                aria-expanded="false"
                aria-controls="flush-style"
              >
                STYLE
              </button>
            </h2>

            <div
              id="flush-style"
              class="accordion-collapse collapse"
              data-bs-parent="#accordionFlushExample"
            >
              <div class="accordion-body">
                <ul class="row">
                  <li class="col-md-6">
                    <p>
                      <b>مقابض أبواب مطلية:</b> {{$feature->painted_door_handles ??''}}
                    </p>
                  </li>
                  <li class="col-md-6">
                    <p><b>مصد أمامي مطلي:</b>{{$feature->painted_front_bumber ??''}}</p>
                  </li>
                  <li class="col-md-6">
                    <p><b>الكسوة:</b> {{$feature->claddings ??''}}</p>
                  </li>
                  <li class="col-md-6">
                    <p><b>رسم:</b> {{$feature->painted ??''}}</p>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>

        <div class="accessories">
          <h2 class="head-title fs-2 text-start">Accessories</h2>

          <div class="owl-carousel owl-theme accessories-carousel">

          @forelse ($feature->accessories as $image)
            <a
              href="{{ asset('storage/' . $image) }}"
              data-fancybox="accessories"
              class="item image-contain p-2"
            >
              <img src="{{ asset('storage/' . $image) }}" />
            </a>
            @empty
            <div class="dealers_listing">
                <div class="row">
                    <div class="col-sm-6 col-xs-8">
                        <div class="dealer_info">
                            <h5> No accessories</h5>
                        </div>
                    </div>
                </div>
            </div>

            @endforelse
          </div>
        </div>
      </div>
    </section>

@endsection