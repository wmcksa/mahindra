<!DOCTYPE html>
<html lang="en" dir="rtl">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Mahindra Rise</title>

    <!-- <link rel="stylesheet" href="assets/css/bootstrap.min.css" /> -->
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.rtl.min.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/all-v6.css')}}" />

    <link rel="stylesheet" href="{{asset('assets/css/owl.carousel.min.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/owl.theme.default.min.css')}}" />

    <link rel="stylesheet" href="{{asset('assets/css/swiper-bundle.min.css')}}" />

    <link rel="stylesheet" href="{{asset('assets/css/fancybox.css')}}" />

    <link
      rel="shortcut icon"
      href="assets/imgs/favicon.ico"
      type="image/x-icon"
    />
    <link rel="stylesheet" href="{{asset('assets/css/main.css')}}" />
  </head>
  <body>
  <?php 
     $modelCars =App\Models\ModelCar::where('language_id',1)->get();
   ?>
    <!-- navbar -->
    <nav class="navbar fixed-nav navbar-expand-xl">
      <div class="container content">
        <a class="navbar-brand m-0" href="{{route('index')}}">
          <img src="{{asset('assets/imgs/white-logo-new.png')}}" alt="Mahindra Rise" width="150" />
        </a>

        <div
          class="collapse navbar-collapse flex-fill flex-shrink-0"
          id="navbarSupportedContent"
        >
          <ul class="navbar-nav mx-auto">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="{{route('index')}}">
              الرئيسيه
              </a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="{{route('about')}}">معلومات عن الشركه</a>
            </li>

            <li class="nav-item vehicles dropdown">
              <a
                class="nav-link dropdown-toggle"
                href="#"
                role="button"
                data-bs-toggle="dropdown"
                aria-expanded="false"
                data-bs-auto-close="outside"
              >
                السيارات
              </a>

              <div class="dropdown-menu">
                <div class="row">
                  <div
                    class="nav flex-column col-md-3 nav-pills"
                    id="v-pills-tab"
                    role="tablist"
                    aria-orientation="vertical"
                  >
                    

                    @foreach($modelCars as $modelCar)

                    <button
                      class="pills-link @if ($loop->first) active  @endif"
                      id="v-pills-{{$modelCar->id}}-tab"
                      data-bs-toggle="pill"
                      data-bs-target="#v-pills-{{$modelCar->id}}"
                      type="button"
                      role="tab"
                      aria-controls="v-pills-{{$modelCar->id}}"
                      aria-selected="false"
                    >
                      {{$modelCar->name}}
                    </button>
                    @endforeach
                  </div>

                  <div class="tab-content col-md-9" id="v-pills-tabContent">
                    


                    @foreach($modelCars as $modelCar)

                    <div
                      class="tab-pane fade @if ($loop->first) show active  @endif"
                      id="v-pills-{{$modelCar->id}}"
                      role="tabpanel"
                      aria-labelledby="v-pills-{{$modelCar->id}}-tab"
                      tabindex="0"
                    >
                    <div class="owl-carousel nav-vehicles-slider owl-theme">
                        <div class="item">
                          <div class="row">
                            @foreach($modelCar->cars as $car)
                            <div class="col-md-3">
                              <a href="{{route('vehicles_detail',$car->category->first()->id)}}">
                              <div class="vehicle-nav-card mb-5">
                                <div class="image-contain">
                                  <img
                                    src="{{$car->image}}"
                                    alt="Scorpio-N"
                                  />
                                </div>
                                <p class="title">{{$car->name}}</p>
                              </div>
                              </a>
                            </div>
                           @endforeach
                            
                          </div>
                        </div>
                      </div>
                    </div>

                    @endforeach

                    
                  </div>
                </div>
              </div>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="{{route('dealerlocator')}}">فروعنا</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="{{route('contact')}}">اتصل بنا</a>
            </li>

            <li class="nav-item dropdown">
              <a
                class="nav-link dropdown-toggle"
                href="#"
                role="button"
                data-bs-toggle="dropdown"
                aria-expanded="false"
              >
              الاستفسارات
              </a>

              <ul class="dropdown-menu dropdown-menu-end">
                <li class="dropdown-item">
                  <a
                    class="dropdown-link"
                    href="#"
                    data-bs-toggle="modal"
                    data-bs-target="#scheduleTestModal"
                  >
                    <i class="fa-solid fa-car-side fa-fw"></i>
                    جدوله اختبار القياده
                  </a>
                </li>

                <li class="dropdown-item">
                  <a
                    class="dropdown-link"
                    href="#"
                    data-bs-toggle="modal"
                    data-bs-target="#requestOfferModal"
                  >
                    <i class="fa-solid fa-money-bill fa-fw"></i>
                    طلب عرض
                  </a>
                </li>

                <li class="dropdown-item">
                  <a
                    class="dropdown-link"
                    href="#"
                    data-bs-toggle="modal"
                    data-bs-target="#requestInfoModal"
                  >
                    <i class="fa-solid fa-file-lines fa-fw"></i>
                    طلب مزيد من المعلومات
                  </a>
                </li>

                <li class="dropdown-item">
                  <a
                    class="dropdown-link"
                    href="#"
                    data-bs-toggle="modal"
                    data-bs-target="#bookMaintainanceModal"
                  >
                    <i class="fa-solid fa-file-lines fa-fw"></i>
                    حجز موعد صيانه
                  </a>
                </li>
              </ul>
            </li>
          </ul>
        </div>

        <ul class="actions">
          <li>
            <button
              type="button"
              class="btn action-btn"
              data-bs-toggle="modal"
              data-bs-target="#navSearchModal"
            >
              <i class="fa-solid fa-magnifying-glass"></i>
            </button>
          </li>

          <li>
            <a href="{{route('main')}}" class="btn action-btn lang">
              <i class="fa-solid fa-globe"></i>
              EN
            </a>
          </li>

          <button
            class="btn nav-toggler action-btn"
            type="button"
            data-bs-toggle="offcanvas"
            data-bs-target="#mobileOffcanvas"
            aria-controls="mobileOffcanvas"
            aria-label="Toggle navigation"
          >
            <i class="fa-solid fa-bars"></i>
          </button>
        </ul>
      </div>
    </nav>

    <!-- nav search modal -->
    <div
      class="modal nav-modal fade"
      id="navSearchModal"
      tabindex="-1"
      aria-labelledby="navSearchModalLabel"
      aria-hidden="true"
    >
      <div class="modal-dialog modal-fullscreen">
        <form class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="navSearchModalLabel">
              Find Your Dream Car
            </h1>
            <button
              type="button"
              class="btn close-btn p-0"
              data-bs-dismiss="modal"
              aria-label="Close"
            >
              <i class="fa-solid fa-xmark"></i>
            </button>
          </div>

          <div class="modal-body">
            <div class="row">
              <div class="col-md-4 mb-3">
                <select
                  class="form-select dark"
                  name="location"
                  aria-label="Select Location"
                >
                  <option selected disabled>Select Location</option>
                  <option value="1">One</option>
                  <option value="2">Two</option>
                  <option value="3">Three</option>
                </select>
              </div>

              <div class="col-md-4 mb-3">
                <select
                  class="form-select dark"
                  name="model"
                  aria-label="Select Model"
                >
                  <option selected disabled>Select Model</option>
                  <option value="1">One</option>
                  <option value="2">Two</option>
                  <option value="3">Three</option>
                </select>
              </div>

              <div class="col-md-4 mb-3">
                <select
                  class="form-select dark"
                  name="category"
                  aria-label="Select Category"
                >
                  <option selected disabled>Select Category</option>
                  <option value="1">One</option>
                  <option value="2">Two</option>
                  <option value="3">Three</option>
                </select>
              </div>

              <div class="col-md-4 mb-3">
                <select
                  class="form-select dark"
                  name="motion-vector"
                  aria-label="Motion vector"
                >
                  <option selected disabled>Motion vector</option>
                  <option value="1">One</option>
                  <option value="2">Two</option>
                  <option value="3">Three</option>
                </select>
              </div>

              <div class="col-md-4 mb-3">
                <select
                  class="form-select dark"
                  name="engine-type"
                  aria-label="Engine type"
                >
                  <option selected disabled>Engine type</option>
                  <option value="1">One</option>
                  <option value="2">Two</option>
                  <option value="3">Three</option>
                </select>
              </div>

              <div class="col-md-4 mb-3">
                <select
                  class="form-select dark"
                  name="year-of-model"
                  aria-label="Year of model"
                >
                  <option selected disabled>Year of model</option>
                  <option value="1">One</option>
                  <option value="2">Two</option>
                  <option value="3">Three</option>
                </select>
              </div>
            </div>
          </div>

          <div class="modal-footer">
            <button type="button" class="btn btn-outline-white btn-lg">
              Search car
            </button>
          </div>
        </form>
      </div>
    </div>

    <!-- nav test schedule modal -->
    <div
      class="modal nav-modal fade"
      id="scheduleTestModal"
      tabindex="-1"
      aria-labelledby="scheduleTestModalLabel"
      aria-hidden="true"
    >
      <div class="modal-dialog">
        <form class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="scheduleTestModalLabel">
              Schedule Test Drive
            </h1>
            <button
              type="button"
              class="btn close-btn p-0"
              data-bs-dismiss="modal"
              aria-label="Close"
            >
              <i class="fa-solid fa-xmark"></i>
            </button>
          </div>

          <div class="modal-body">
            <div class="flex-fill">
              <div class="mb-3">
                <input
                  type="text"
                  class="form-control dark"
                  name="full_name"
                  aria-label="Full Name"
                  placeholder="Full Name"
                  required
                />
              </div>

              <div class="mb-3">
                <input
                  type="email"
                  class="form-control dark"
                  name="email"
                  aria-label="Email Address"
                  placeholder="Email Address"
                  required
                />
              </div>

              <div class="mb-3">
                <input
                  type="tel"
                  class="form-control dark"
                  name="phone"
                  aria-label="Phone"
                  placeholder="Phone"
                  required
                />
              </div>

              <div class="mb-3">
                <input
                  type="datetime-local"
                  class="form-control dark"
                  name="date"
                  aria-label="Date"
                  required
                />
              </div>

              <div class="mb-3">
                <textarea
                  rows="5"
                  class="form-control dark"
                  name="message"
                  aria-label="Message"
                  placeholder="Message"
                ></textarea>
              </div>
            </div>
          </div>

          <div class="modal-footer">
            <button type="button" class="btn btn-outline-white btn-lg">
              submit
            </button>
          </div>
        </form>
      </div>
    </div>

    <!-- nav Request Offer modal -->
    <div
      class="modal nav-modal fade"
      id="requestOfferModal"
      tabindex="-1"
      aria-labelledby="requestOfferModalLabel"
      aria-hidden="true"
    >
      <div class="modal-dialog">
        <form class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="requestOfferModalLabel">
              Request Offer
            </h1>
            <button
              type="button"
              class="btn close-btn p-0"
              data-bs-dismiss="modal"
              aria-label="Close"
            >
              <i class="fa-solid fa-xmark"></i>
            </button>
          </div>

          <div class="modal-body">
            <div class="flex-fill">
              <div class="mb-3">
                <input
                  type="text"
                  class="form-control dark"
                  name="full_name"
                  aria-label="Full Name"
                  placeholder="Full Name"
                  required
                />
              </div>

              <div class="mb-3">
                <input
                  type="email"
                  class="form-control dark"
                  name="email"
                  aria-label="Email Address"
                  placeholder="Email Address"
                  required
                />
              </div>

              <div class="mb-3">
                <input
                  type="tel"
                  class="form-control dark"
                  name="phone"
                  aria-label="Phone"
                  placeholder="Phone"
                  required
                />
              </div>

              <div class="mb-3">
                <input
                  type="text"
                  class="form-control dark"
                  name="offer_price"
                  aria-label="Offer Price"
                  placeholder="Offer Price"
                  required
                />
              </div>

              <div class="mb-3">
                <textarea
                  rows="5"
                  class="form-control dark"
                  name="message"
                  aria-label="Message"
                  placeholder="Message"
                ></textarea>
              </div>
            </div>
          </div>

          <div class="modal-footer">
            <button type="button" class="btn btn-outline-white btn-lg">
              submit
            </button>
          </div>
        </form>
      </div>
    </div>

    <!-- nav Request More Info modal -->
    <div
      class="modal nav-modal fade"
      id="requestInfoModal"
      tabindex="-1"
      aria-labelledby="requestInfoModalLabel"
      aria-hidden="true"
    >
      <div class="modal-dialog">
        <form class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="requestInfoModalLabel">
              Request More Info
            </h1>
            <button
              type="button"
              class="btn close-btn p-0"
              data-bs-dismiss="modal"
              aria-label="Close"
            >
              <i class="fa-solid fa-xmark"></i>
            </button>
          </div>

          <div class="modal-body">
            <div class="flex-fill">
              <div class="mb-3">
                <input
                  type="text"
                  class="form-control dark"
                  name="full_name"
                  aria-label="Full Name"
                  placeholder="Full Name"
                  required
                />
              </div>

              <div class="mb-3">
                <input
                  type="email"
                  class="form-control dark"
                  name="email"
                  aria-label="Email Address"
                  placeholder="Email Address"
                  required
                />
              </div>

              <div class="mb-3">
                <input
                  type="tel"
                  class="form-control dark"
                  name="phone"
                  aria-label="Phone"
                  placeholder="Phone"
                  required
                />
              </div>

              <div class="mb-3">
                <textarea
                  rows="5"
                  class="form-control dark"
                  name="message"
                  aria-label="Message"
                  placeholder="Message"
                ></textarea>
              </div>
            </div>
          </div>

          <div class="modal-footer">
            <button type="button" class="btn btn-outline-white btn-lg">
              submit
            </button>
          </div>
        </form>
      </div>
    </div>

    <!-- nav Book a Maintenance Appointment modal -->
    <div
      class="modal nav-modal fade"
      id="bookMaintainanceModal"
      tabindex="-1"
      aria-labelledby="bookMaintainanceModalLabel"
      aria-hidden="true"
    >
      <div class="modal-dialog">
        <form class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="bookMaintainanceModalLabel">
              Book a Maintenance Appointment
            </h1>
            <button
              type="button"
              class="btn close-btn p-0"
              data-bs-dismiss="modal"
              aria-label="Close"
            >
              <i class="fa-solid fa-xmark"></i>
            </button>
          </div>

          <div class="modal-body">
            <div class="flex-fill">
              <div class="mb-3">
                <input
                  type="text"
                  class="form-control dark"
                  name="full_name"
                  aria-label="Full Name"
                  placeholder="Full Name"
                  required
                />
              </div>

              <div class="mb-3">
                <input
                  type="email"
                  class="form-control dark"
                  name="email"
                  aria-label="Email Address"
                  placeholder="Email Address"
                  required
                />
              </div>

              <div class="mb-3">
                <input
                  type="tel"
                  class="form-control dark"
                  name="phone"
                  aria-label="Phone"
                  placeholder="Phone"
                  required
                />
              </div>

              <div class="mb-3">
                <input
                  type="datetime-local"
                  class="form-control dark"
                  name="date"
                  aria-label="Date"
                  required
                />
              </div>

              <div class="mb-3">
                <input
                  type="text"
                  class="form-control dark"
                  name="maintainance_type"
                  aria-label="Maintainance Type"
                  placeholder="Maintainance Type"
                  required
                />
              </div>

              <div class="mb-3">
                <textarea
                  rows="5"
                  class="form-control dark"
                  name="message"
                  aria-label="Message"
                  placeholder="Message"
                ></textarea>
              </div>
            </div>
          </div>

          <div class="modal-footer">
            <button type="button" class="btn btn-outline-white btn-lg">
              submit
            </button>
          </div>
        </form>
      </div>
    </div>

    <!-- mobile offcanvas -->
    <div
      class="offcanvas mobile-offcanvas offcanvas-bottom"
      tabindex="-1"
      id="mobileOffcanvas"
      aria-labelledby="mobileOffcanvasLabel"
      data-bs-scroll="true"
    >
      <div class="offcanvas-header container">
        <img
          src="assets/imgs/logo.webp"
          alt="Mahindra Rise"
          width="150"
          class="brand"
        />

        <button
          type="button"
          class="btn close-btn p-0"
          data-bs-dismiss="offcanvas"
          aria-label="Close"
        >
          <i class="fa-solid fa-xmark"></i>
        </button>
      </div>
      <div class="offcanvas-body">
        <div class="container">
          <ul class="pages-links">
            <li>
              <a href="index.html" class="link">Home</a>
            </li>
            <li>
              <a href="about-us.html" class="link">About Us</a>
            </li>
            <li>
              <a href="vehicles.html" class="link">Vehicles</a>
            </li>
            <li>
              <a href="dealer-locator.html" class="link">Dealer Locator</a>
            </li>
            <li>
              <a href="contact-us.html" class="link">contact us</a>
            </li>

            <li class="accordion" id="accordionExample">
              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button
                    class="accordion-button link"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#collapseOne"
                    aria-expanded="true"
                    aria-controls="collapseOne"
                  >
                    inquireis
                  </button>
                </h2>
                <div
                  id="collapseOne"
                  class="accordion-collapse collapse show"
                  data-bs-parent="#accordionExample"
                >
                  <ul class="accordion-body">
                    <li>
                      <a
                        class="link"
                        href="#"
                        data-bs-toggle="modal"
                        data-bs-target="#scheduleTestModal"
                      >
                        <i class="fa-solid fa-car-side fa-fw"></i>
                        Schedule Test Drive
                      </a>
                    </li>

                    <li>
                      <a
                        class="link"
                        href="#"
                        data-bs-toggle="modal"
                        data-bs-target="#requestOfferModal"
                      >
                        <i class="fa-solid fa-money-bill fa-fw"></i>
                        Request Offer
                      </a>
                    </li>

                    <li>
                      <a
                        class="link"
                        href="#"
                        data-bs-toggle="modal"
                        data-bs-target="#requestInfoModal"
                      >
                        <i class="fa-solid fa-file-lines fa-fw"></i>
                        Request More Info
                      </a>
                    </li>

                    <li>
                      <a
                        class="link"
                        href="#"
                        data-bs-toggle="modal"
                        data-bs-target="#bookMaintainanceModal"
                      >
                        <i class="fa-solid fa-file-lines fa-fw"></i>
                        Book a Maintenance Appointment
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
<!-- header carousel -->
<main class="vehicle-details dark-page">
      <!-- header carousel -->
      <header class="header">
        <div class="owl-carousel header-slider owl-theme">
          @foreach($feature->car_images as $image)
          <div class="item">
            <a href="#registerContact" class="image-cover">
              <img src="{{ asset("storage/$image") }}" />
            </a>
          </div>
          @endforeach
          
        </div>
      </header>

      <section class="site-slogan" style="background-color: #232323">
        <ul
          class="container d-flex align-items-center justify-content-between gap-4 flex-wrap"
        >
          <li class="flex-shrink-0">
            <a
              class="d-flex align-items-center gap-2 details-navigate-link"
              href="#vehicleWelcome"
            >
              HELLO {{$car->name}}
            </a>
          </li>

          <li class="flex-shrink-0">
            <a
              class="d-flex align-items-center gap-2 details-navigate-link"
              href="#vehicleVariants"
            >
              VARIANTS AND PRICING
            </a>
          </li>

          <li class="flex-shrink-0">
            <a
              class="d-flex align-items-center gap-2 details-navigate-link"
              href="#vehicleGallery"
            >
              FEATURES GALLERY
            </a>
          </li>

          <li class="flex-shrink-0">
            <a
              class="d-flex align-items-center gap-2 details-navigate-link"
              href="#registerContact"
            >
              BOOK A TEST DRIVE
            </a>
          </li>
        </ul>
      </section>

      <section class="vehicle-welcome" id="vehicleWelcome">
        <div class="container">
          <div class="row row-gap-30">
            <div class="col-lg-6">
              <div class="image image-cover">
              @foreach($feature->car_images as $image)
              
                @if($loop->first)
                <img src="{{ asset("storage/$image") }}" />
                @endif
              @endforeach
              </div>
            </div>

            <div class="col-lg-6">
              <div class="head-title-2">
                <h2 class="subtitle h4 mb-0">HELLO {{$car->name}}</h2>
                <h3 class="title display-6">A New Era of Excellence</h3>
              </div>

              <p class="text">
                With its Sci-Fi Technology, Spirited Performance and World-Class
                Safety, this powerhouse of an SUV is obsessively engineered to
                dial up adrenaline like never before.
              </p>

              <div class="buttons">
                <a href="#registerContact" class="btn btn-gradient"
                  >ENQUIRE NOW</a
                >

                <a href="#registerContact" class="btn btn-outline-white-2"
                  >BOOK A TEST DRIVE</a
                >
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="vehicle-variants" id="vehicleVariants">
        <div class="container">
          <div class="head-title-2">
            <h2 class="subtitle h4 mb-0">المتغيرات والتسعير</h2>
            <h3 class="title display-6">استكشف رحلتك المستقبلية.</h3>
          </div>

          <div class="row row-gap-30 mb-4">
            <div class="col-lg-6">
              <div class="slogan-s row row-gap-30">
                <div class="col-md-4 col-sm-6 variant-block">
                  <h5 class="title mb-3">{{$car->name}}</h5>
                  <h6 class="price h5 mb-3">
                  المواصفات الفنية
                  </h6>
                  <p class="mb-4">
                  الانتقال <br />
                    {{$feature->transmission ??''}}
                  </p>
                  <p class="mb-4">
                  الإطارات <br />
                  {{$feature->tyres ??''}}
                  </p>
                  <p class="mb-4">
                  محرك <br />
                  {{$feature->engine ??''}}
                  </p>
                  <p class="mb-4">
                  عزم الدوران <br />
                  {{$feature->torque ??''}}
                  </p>
                  <p class="mb-4">
                  انتقال <br />
                  {{$feature->transmission ??''}}
                  </p>
                  <p class="mb-4">
                  التروس <br />
                  {{$feature->gears ??''}}
                  </p>
                  <p class="mb-4">
                  عجلات <br />
                  {{$feature->wheels ??''}}
                  </p>
                  
                  <p class="mb-4">
                  البعد (الطول * العرض * الارتفاع) <br />
                  {{$feature->dismension_LXWXH ??''}}
                  </p>
                  <p class="mb-4">
                  أبعاد حجرة الأمتعة (الطول*العرض*الارتفاع) <br />
                  {{$feature->cargo_box_dimension_LXWXH ??''}}
                  </p>
                  <p class="mb-4">
                  ركن <br />
                  {{$feature->angle ??''}}
                  </p>
                  <p class="mb-4">
                  تطهير الأرض <br />
                  {{$feature->ground_clearance ??''}}
                  </p>
                  <p class="mb-4">
                  الوزن الإجمالي للمركبة <br />
                  {{$feature->GVW ??''}}
                  </p>
                  <p class="mb-4">
                  تطويق <br />
                  {{$feature->kerb ??''}}
                  </p>
                  <p class="mb-4">
                  دفع حمولته <br />
                  {{$feature->pay_load ??''}}
                  </p>

                  <!-- nav Request Offer modal -->
                  <div
                    class="modal nav-modal fade"
                    id="featureDetailsModal1"
                    tabindex="-1"
                    aria-labelledby="featureDetailsModal1Label"
                    aria-hidden="true"
                  >
                    <div class="modal-dialog modal-dialog-scrollable">
                      <form class="modal-content">
                        <div class="modal-header">
                          <h1
                            class="modal-title fs-5"
                            id="featureDetailsModal1Label"
                          >
السمات                          </h1>
                          <button
                            type="button"
                            class="btn close-btn p-0"
                            data-bs-dismiss="modal"
                            aria-label="Close"
                          >
                            <i class="fa-solid fa-xmark"></i>
                          </button>
                        </div>

                        <div class="modal-body">
                          <div class="list">
                            
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>

                <div class="col-md-4 col-sm-6 variant-block">
                  <h5 class="title mb-3">{{$car->name}}</h5>
                  <h6 class="price h5 mb-3">
                  الامان
                  </h6>
                  <p class="mb-4">
                  وسائد هوائية أمامية مزدوجة
 <br />
                  {{$feature->dual_front_AIR_bags ??''}}
                  </p>
                  <p class="mb-4">
                  عمود توجيه قابل للطي <br />
                  {{$feature->collapsible_steering_column ??''}}
                  </p>
                  <p class="mb-4">
                  تنجيد مقاوم للحريق <br />
                  {{$feature->fire_retardant_upholstery ??''}}
                  </p>

                  <div class="list mb-4">
                    <h6 class="price h5 mb-3">
                  الشكل
                  </h6>

                    <ul>
                      <li>
                      مقابض الأبواب مطلية <br />
                      {{$feature->painted_door_handles ??''}}
                      </li>
                      <li>
                      المصد الأمامي مطلي <br />
                      {{$feature->painted_front_bumber ??''}}
                      </li>
                      <li>
                      الكسوة <br />
                      {{$feature->claddings ??''}}
                      </li>
                      <li>
                      طلاء <br />
                      {{$feature->painted ??''}}
                      </li>
                      
                    </ul>
                  </div>
                </div>
                <div class="col-md-4 col-sm-6 variant-block">
                  <h5 class="title mb-3">{{$car->name}}</h5>
                  <h6 class="price h5 mb-3">
                  الراحه
                  </h6>
                  <p class="mb-4">
                  تكييف <br />
                  {{$feature->AIR_conditoning ??''}}
                  </p>
                  <p class="mb-4">
                  قيادة <br />
                  {{$feature->steering_control ??''}}
                  </p>
                  <p class="mb-4">
                  المرآة الخلفية
 <br />
                  {{$feature->rear_view_mirror ??''}}
                  </p>
                  <p class="mb-4">
                  برنامج تشغيل للتحكم في النافذة بلمسة واحدة - ومبرمج

                  (مكافحة قرصة)
 <br />
                        {{$feature->one_touch_window_control_driver_codriver_antipinch??''}}
                  </p>
                  <p class="mb-4">
                  اتبعني المصابيح الأمامية
 <br />
                  {{$feature->follow_me_homw_headlamps ??''}}
                  </p>
                  <p class="mb-4">
                  مسند الذراع على المقاعد الأمامية
 <br />
                  {{$feature->ARM_rest_on_front_seats ??''}}
                  </p>
                  <p class="mb-4">
                  عجلات معدنية <br />
                  {{$feature->alloy_wheels ??''}}
                  </p>
                  <p class="mb-4">
                  اختياري <br />
                  {{$feature->optional ??''}}
                  </p>
                  <p class="mb-4">
                  نظام ترفيهي متكامل بشاشة تعمل باللمس
                         عبر الأقمار الصناعية <br />
                        {{$feature->touch_screen_intregated_infotainment_satellite_navigation??''}}
                  </p>

                  <div class="list mb-4">
                  <h6 class="price h5 mb-3">
المميزات الاخري                  </h6>

                    <ul>
                      <li>
                      مصباح الرأس
 <br />
                      {{$feature->headlamp ??''}}
                      </li>
                      <li>
                      دعامات غطاء محرك السيارة الهيدروليكية
 <br />
                      {{$feature->hydraulic_bonnet_struts ??''}}
                      </li>
                      <li>
                      المقعد الخلفي
 <br />
                      {{$feature->rear_demister ??''}}
                      </li>
                      <li>
                      غني باللون الأسود
 <br />
                      {{$feature->rich_black ??''}}
                      </li>
                      <li>
                      جهاز عرض مع أضواء الحاجب
 <br />
                      {{$feature->projector_with_EYR_brow_lamps ??''}}
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>

            <!-- <div class="col-lg-6">
              <div class="slogan-e">
                <div class="swiper vehicle-slider-colors mb-4">
                  <div class="swiper-wrapper">
                    <div class="swiper-slide">
                      <div class="image image-cover mb-3">
                        <img src="assets/imgs/vehicle-color-1.webp" />
                      </div>
                      <h5 class="title text">Dazzling Silver</h5>
                    </div>

                    <div class="swiper-slide">
                      <div class="image image-cover mb-3">
                        <img src="assets/imgs/vehicle-color-2.webp" />
                      </div>
                      <h5 class="title text">Electric Blue</h5>
                    </div>
                  </div>
                  <div class="swiper-button-next swiper-button"></div>
                  <div class="swiper-button-prev swiper-button"></div>
                </div>

                <div thumbsSlider="" class="swiper vehicle-palettes">
                  <div class="swiper-wrapper">
                    <div
                      class="swiper-slide"
                      style="background-color: silver"
                    ></div>
                    <div
                      class="swiper-slide"
                      style="background-color: blue"
                    ></div>
                  </div>
                </div>
              </div>
            </div> -->
          </div>

          <div class="slogan-s">
            <div class="variant-block">
              <div class="list mb-4">
              </div>
              <a href="#" target="_blanks" class="btn btn-gradient mb-4"
                >DOWNLOAD BROCHURE</a
              >

              
            </div>
          </div>
        </div>
      </section>

      <section class="vehicle-gallery" id="vehicleGallery">
        <div class="container">
          <div class="head-title-2">
            <h2 class="subtitle h4 mb-0">معرض الصور</h2>
            <h3 class="title display-6">#Hello{{$car->name}}</h3>
          </div>

          <div class="row row-gap-24">
          @foreach($feature->accessories as $image)
            <div class="col-md-3 col-6">
              <a
                href="{{ asset("storage/$image") }}"
                data-fancybox="gallery"
                class="gallery-card image-cover"
              >
                <img src="{{ asset("storage/$image") }}" />
              </a>
            </div>
          @endforeach
          </div>
        </div>
      </section>

      <section class="register-contact" id="registerContact">
        <img src="{{asset('assets/imgs/strip.png')}}" class="bg-absolute img-1" />
        <img src="{{asset('assets/imgs/strip-3.webp')}}" class="bg-absolute img-2" />

        <div class="container">
          <div class="row">
            <div class="col-md-6">
              <div class="head-title-2">
                <h2 class="subtitle h4 mb-0">HELLO {{$car->name}}</h2>
                <h3 class="title display-6">سجل اهتمامك
</h3>
              </div>

              <form action="{{route('show_form_post')}}" method="post">
                @csrf
                <div class="mb-3">
                  <label for="full_name" class="form-label">
                    الاسم بالكامل <span class="required small">(مطلوب)</span>
                  </label>
                  <input
                    type="text"
                    class="form-control outlined dark"
                    name="name"
                    id="full_name"
                    aria-label="Full Name"
                    required
                  />
                </div>

                <div class="mb-3">
                  <label for="contact-type" class="form-label">
                    من فضلك اختار <span class="required small">(مطلوب)</span>
                  </label>

                  <select
                    class="form-select outlined dark"
                    name="inquery_type"
                    id="contact-type"
                    required
                  >
                    <option value="" selected disabled></option>
                    <option value="enquire">Enquire</option>
                    <option value="drive_test">Drive Test</option>
                  </select>
                </div>

                <div class="mb-3">
                  <label for="phone" class="form-label">
                    رقم الهاتف <span class="required small">(مطلوب)</span>
                  </label>
                  <input
                    type="tel"
                    class="form-control outlined dark"
                    name="phone"
                    id="phone"
                    aria-label="Phone"
                    required
                  />
                </div>

                <div class="mb-3">
                  <label for="email" class="form-label">
                    البريد الالكتروني <span class="required small">(مطلوب)</span>
                  </label>
                  <input
                    type="email"
                    class="form-control outlined dark"
                    name="email"
                    id="email"
                    aria-label="email"
                    required
                  />
                </div>

                <div class="mb-3">
                  <label for="city" class="form-label">
                    المدينه <span class="required small">(مطلوب)</span>
                  </label>
                  <input
                    type="text"
                    class="form-control outlined dark"
                    name="city"
                    id="city"
                    aria-label="city"
                    required
                  />
                </div>

                <div class="mb-3">
                  <label for="agree_to_terms" class="form-label">
                  موافقة <span class="required small">(مطلوب)</span>
                  </label>

                  <div class="form-check">
                    <input
                      class="form-check-input"
                      type="checkbox"
                      value="agree_to_terms"
                      id="agree_to_terms"
                      checked
                    />
                    <label class="form-check-label" for="agree_to_terms">
                    أنا أوافق على
 <a href="#">سياسه الخصوصيه.</a>
                    </label>
                  </div>
                </div>

                <button type="submit" class="btn btn-primary">حفظ</button>
              </form>
            </div>
          </div>
        </div>
      </section>
</main>
<div class="footer-wrapper">
      <footer class="footer container">
        <div class="row">
          <div class="col-md-4 mb-md-0 mb-4">
            <div class="logo">
              <img src="{{asset('assets/imgs/logo.webp')}}" alt="Mahindra Rise" />

              <ul class="social-links">
                <li>
                  <a href="https://www.facebook.com/profile.php?id=100086457727248" target="_blank" class="link">
                    <i class="fa-brands fa-facebook-f"></i>
                  </a>
                </li>
                <li>
                  <a href="https://twitter.com/mahindra_saudi" target="_blank" class="link">
                    <i class="fa-brands fa-twitter"></i>
                  </a>
                </li>
                <li>
                  <a href="https://www.snapchat.com/add/mahindra_saudi?share_id=o83NEKg_4Fc&locale=en-JO" target="_blank" class="link">
                    <i class="fa-brands fa-snapchat-ghost"></i>
                  </a>
                </li>
                <li>
                  <a href="https://www.instagram.com/mahindra_saudi?r=nametag" target="_blank" class="link">
                    <i class="fa-brands fa-instagram"></i>
                  </a>
                </li>
                <li>
                  <a href="https://www.youtube.com/channel/UC3jTMgwOWIMX1HkU8u-YqDA" target="_blank" class="link">
                    <i class="fa-brands fa-youtube"></i>
                  </a>
                </li>
                <li>
                  <a href="http://tiktok.com/@mahindra_saudi" target="_blank" class="link">
                    <i class="fa-brands fa-tiktok"></i>
                  </a>
                </li>
              </ul>
            </div>
          </div>

          <div class="col-md-8">
            <h6 class="title">الصفحات</h6>

            <ul class="footer-links">
              <li>
                <a href="{{route('index')}}">الرئيسيه</a>
              </li>
              <li>
                <a href="{{route('about')}}">معلومات عن الشركه</a>
              </li>
              <li>
                <a href="{{route('vehicles')}}">السيارات</a>
              </li>
              <li>
                <a href="{{route('dealerlocator')}}">فروعنا</a>
              </li>
              <li>
                <a href="{{route('contact')}}">اتصل بنا</a>
              </li>
            </ul>
          </div>
        </div>
      </footer>

      <div class="rights">
        <div class="container">
          <p class="m-0">Copyright &copy; 2023 mahindra. All Rights Reserved</p>
        </div>
      </div>
    </div>

    <script src="{{asset('assets/js/jquery.min.js')}}"></script>
    <script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('assets/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('assets/js/fancybox.umd.js')}}"></script>
    <script src="{{asset('assets/js/swiper-bundle.min.js')}}"></script>
    <script src="{{asset('assets/js/main.js')}}"></script>

    <script>
      const dir = $("html").attr("dir"),
        carouselDirection = dir === "ltr" ? false : true;

      $(".header-slider").owlCarousel({
        loop: true,
        margin: 0,
        nav: false,
        dots: true,
        items: 1,
        rtl: carouselDirection,
        autoplay: true,
        mouseDrag: false,
        touchDrag: false,
        dotsClass: "owl-dots vehicle-dots container",
      });

      // accessories-carousel
      $(".accessories-carousel").owlCarousel({
        loop: true,
        margin: 0,
        nav: true,
        dots: false,
        rtl: carouselDirection,
        navText:
          dir == "rtl"
            ? [
                "<i class='fa-solid fa-chevron-right fa-lg'></i>",
                "<i class='fa-solid fa-chevron-left fa-lg'></i>",
              ]
            : [
                "<i class='fa-solid fa-chevron-left fa-lg'></i>",
                "<i class='fa-solid fa-chevron-right fa-lg'></i>",
              ],
        responsive: {
          0: {
            items: 1,
          },
          320: {
            items: 2,
          },
          600: {
            items: 3,
          },
          1000: {
            items: 4,
          },
        },
      });
    </script>

    <script>
      var swiper = new Swiper(".vehicle-palettes", {
        freeMode: false,
        watchSlidesProgress: false,
        slidesPerView: "auto",
        // centeredSlides: true,
        spaceBetween: 10,
      });

      var swiper2 = new Swiper(".vehicle-slider-colors", {
        spaceBetween: 0,
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },
        thumbs: {
          swiper: swiper,
        },
      });
    </script>
  </body>
</html>







