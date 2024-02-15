<!DOCTYPE html>
<html lang="ar" dir="rtl">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>@yield('title')</title>

    <!-- <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}" /> -->
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.rtl.min.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/all-v6.css')}}" />

    <link rel="stylesheet" href="{{asset('assets/css/owl.carousel.min.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/owl.theme.default.min.css')}}" />

    <link rel="stylesheet" href="{{asset('assets/css/fancybox.css')}}" />

    <link
      rel="shortcut icon"
      href="assets/imgs/favicon.ico"
      type="image/x-icon"
    />
    <link rel="stylesheet" href="{{asset('assets/sass/main.css')}}" />
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
          <!-- <li>
            <button
              type="button"
              class="btn action-btn"
              data-bs-toggle="modal"
              data-bs-target="#navSearchModal"
            >
              <i class="fa-solid fa-magnifying-glass"></i>
            </button>
          </li> -->

          <li class="nav-item search dropdown">
            <a
              class="btn action-btn dropdown-toggle"
              href="#"
              role="button"
              data-bs-toggle="dropdown"
              aria-expanded="false"
            >
              <i class="fa-solid fa-magnifying-glass"></i>
            </a>

            <div class="dropdown-menu dropdown-menu-end">
              <form id="sub" class="dropdown-item">
                <div class="form-group">
                  <input
                    type="text"
                    id="searchInput"
                    class="form-control"
                    placeholder="search"
                  />
                  <button type="submit" class="btn" id="searchInput">
                    <i class="fa-solid fa-magnifying-glass"></i>
                  </button>
                </div>

                <ul class="search-list" id="searchList"></ul>
              </form>
            </div>
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
        <form  action="{{route('scheduleTestModal_post')}}" method="post"   class="modal-content">
          @csrf
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="scheduleTestModalLabel">
              جدوله اختبار القياده
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
                  name="name"
                  aria-label="Full Name"
                  placeholder="الاسم "
                  required
                />
              </div>

              <div class="mb-3">
                <input
                  type="email"
                  class="form-control dark"
                  name="email"
                  aria-label="Email Address"
                  placeholder="البريد الالكتروني"
                  required
                />
              </div>

              <div class="mb-3">
                <input
                  type="tel"
                  class="form-control dark"
                  name="phone"
                  aria-label="Phone"
                  placeholder="رقم الهاتف"
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
                  placeholder="الرساله"
                ></textarea>
              </div>
            </div>
          </div>

          <div class="modal-footer">
            <button type="submit" class="btn btn-outline-white btn-lg">
              حفظ
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
        <form action="{{route('requestOfferModal_post')}}" method="post" class="modal-content">
          @csrf
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="requestOfferModalLabel">
              طلب عرض
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
                  name="name"
                  aria-label="Full Name"
                  placeholder="الاسم "
                  required
                />
              </div>

              <div class="mb-3">
                <input
                  type="email"
                  class="form-control dark"
                  name="email"
                  aria-label="Email Address"
                  placeholder="البريد الالكتروني"
                  required
                />
              </div>

              <div class="mb-3">
                <input
                  type="tel"
                  class="form-control dark"
                  name="phone"
                  aria-label="Phone"
                  placeholder="رقم الهاتف"
                  required
                />
              </div>

              <div class="mb-3">
                <input
                  type="text"
                  class="form-control dark"
                  name="offer_price"
                  aria-label="Offer Price"
                  placeholder="عرض السعر"
                  required
                />
              </div>

              <div class="mb-3">
                <textarea
                  rows="5"
                  class="form-control dark"
                  name="message"
                  aria-label="Message"
                  placeholder="الرساله"
                ></textarea>
              </div>
            </div>
          </div>

          <div class="modal-footer">
            <button type="submit" class="btn btn-outline-white btn-lg">
              حفظ
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
        <form action="{{route('requestInfoModal_post')}}" method="post" class="modal-content">
          @csrf
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="requestInfoModalLabel">
              طلب مزيد من المعلومات
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
                  name="name"
                  aria-label="Full Name"
                  placeholder="الاسم"
                  required
                />
              </div>

              <div class="mb-3">
                <input
                  type="email"
                  class="form-control dark"
                  name="email"
                  aria-label="Email Address"
                  placeholder="البريد الالكتروني"
                  required
                />
              </div>

              <div class="mb-3">
                <input
                  type="tel"
                  class="form-control dark"
                  name="phone"
                  aria-label="Phone"
                  placeholder="رقم الهاتف"
                  required
                />
              </div>

              <div class="mb-3">
                <textarea
                  rows="5"
                  class="form-control dark"
                  name="message"
                  aria-label="Message"
                  placeholder="الرساله"
                ></textarea>
              </div>
            </div>
          </div>

          <div class="modal-footer">
            <button type="submit" class="btn btn-outline-white btn-lg">
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
        <form action="{{route('bookMaintainanceModal_post')}}" method="post" class="modal-content">
          @csrf
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
                  name="name"
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
                  name="type"
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
            <button type="submit" class="btn btn-outline-white btn-lg">
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
          src="{{asset('assets/imgs/white-logo-new.png')}}"
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
              <a href="{{route('index')}}" class="link">Home</a>
            </li>
            <li>
              <a href="{{route('about')}}" class="link">About Us</a>
            </li>
            <li>
              <a href="vehicles.html" class="link">Vehicles</a>
            </li>
            <li>
              <a href="{{route('dealerlocator')}}" class="link">Dealer Locator</a>
            </li>
            <li>
              <a href="{{route('contact')}}" class="link">contact us</a>
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
                        جدوله اختبار القياده
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
                        طلب عرض
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
                        طلب مزيد من المعلومات
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
                        حجز موعد صيانه
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
            </li>

            <!-- <li class="nav-item dropdown">
              <a
                class="nav-link dropdown-toggle"
                href="#"
                role="button"
                data-bs-toggle="dropdown"
                aria-expanded="false"
              >
              </a>

              <ul class="dropdown-menu dropdown-menu-end"></ul>
            </li> -->
          </ul>
        </div>
      </div>
    </div>



    @yield('content')




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

    <script src="{{asset('assets/js/main.js')}}"></script>

    <script>
      const direction = $("html").attr("dir") === "ltr" ? false : true;

      $(".header-slider").owlCarousel({
        loop: true,
        margin: 0,
        nav: false,
        dots: true,
        items: 1,
        rtl: direction,
        autoplay: true,
        mouseDrag: false,
        touchDrag: false,
        dotsClass: "owl-dots container",
      });
    </script>

<script>
      const dir = $("html").attr("dir"),
        carouselDirection = dir === "ltr" ? false : true;

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
  </body>
</html>
