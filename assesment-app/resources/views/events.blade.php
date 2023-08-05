

<!DOCTYPE html>
<html lang="en-US" dir="ltr">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>About | Boldo Agency Template</title>


    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('assets/img/favicons/apple-touch-icon.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('assets/img/favicons/favicon-32x32.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('assets/img/favicons/favicon-16x16.png')}}">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('assets/img/favicons/favicon.ico')}}">
    <link rel="manifest" href="{{asset('assets/img/favicons/manifest.json')}}">
    <meta name="msapplication-TileImage" content="{{asset('assets/img/favicons/mstile-150x150.png')}}">
    <meta name="theme-color" content="#ffffff">


    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200;300;400;500;600;700&amp;display=swap" rel="stylesheet">
    <link href="{{asset('vendors/prism/prism.css')}}" rel="stylesheet">
    <link href="{{asset('vendors/swiper/swiper-bundle.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/theme.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/css/user.css')}}" rel="stylesheet" />

  </head>


  <body>

    <!-- ===============================================-->
    <!--    Main Content-->
    <!-- ===============================================-->
    <main class="main" id="top">
        <nav class="navbar navbar-expand-lg fixed-top navbar-dark" data-navbar-on-scroll="data-navbar-on-scroll">
            <div class="container"><a class="navbar-brand" href="index.html"><img src="assets/img/Logo.png" alt="" /></a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><i class="fa-solid fa-bars text-white fs-3"></i></button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mt-2 mt-lg-0">
                  <li class="nav-item"><a class="nav-link active" aria-current="page" href="/">Home</a></li>
                  <li class="nav-item"><a class="nav-link" aria-current="page" href="/jobs">Jobs</a></li>
                  <li class="nav-item"><a class="nav-link" aria-current="page" href="/events">Events</a></li>
                  <li class="nav-item mt-2 mt-lg-0"><a class="nav-link btn btn-light text-black w-md-25 w-50 w-lg-100" aria-current="page" href="#">Log In</a></li>
                </ul>
              </div>
            </div>
          </nav>


      <section class="bg-dark text-center py-9">

        <div class="container">
          <p class="text-light fs-1">Events</p>
          <div class="col-12 col-md-7 mx-auto">
            <h1 class="text-white fs-lg-7 fs-md-4 fs-3 my-4">We love to make great things, things that matter.</h1>
          </div>
        </div>
        <!-- end of .container-->

      </section>

      <section>

        <div class="container">
          <div class="px-xl-8 px-md-5 px-3">
            <p class="text-gray fs-1">The Events</p>
         </div>
          <div class="row mt-7">
            <div class="row">
                <div class="">
                    <input type="Search" class="form-group" style="padding-left:5px;height: 50px;width:300px;border-radius:10px; color:#927272" placeholder="Cari Events"> <span><button class="btn btn-dark">Cari</button></span> <br>
                </div> <br>
                @foreach ($events as $item)
                <div class="col mt-5">
                    <div class="card">
                        <div class="card-body">
                            <h3>{{$item->title_events}}</h3>
                            <p>{{$item->company}}</p>
                            <div class="">
                                <div class="col">
                                    <ion-icon name="alarm-outline"></ion-icon><span>{{$item->timeEvnt}}</span>
                                </div>
                            </div>
                            <div class="">
                                <ion-icon name="calendar-number-outline"></ion-icon><span>{{$item->tanggal}}</span>
                            </div>
                            <div class="">
                                <div class="col">
                                    <ion-icon name="location-outline"></ion-icon><span>{{$item->location}}</span>
                                </div>
                            </div>
                            <div class="justify-content-end items-end mt-2">
                                <button class="btn btn-danger" >Daftar</button>
                            </div>
                        </div>

                    </div>
                </div>
                @endforeach


            </div>
          </div>
        </div>
      </section>

    </main>
    <section class="pt-0 bg-dark">

        <div class="container ">

          <p class="text-gray text-center">Asesment Task</p>
        </div>
        <!-- end of .container-->

      </section>
    <!-- ===============================================-->
    <script src="{{asset('vendors/popper/popper.min.js')}}"></script>
    <script src="{{asset('vendors/bootstrap/bootstrap.min.js')}}"></script>
    <script src="{{asset('vendors/anchorjs/anchor.min.js')}}"></script>
    <script src="{{asset('vendors/is/is.min.js')}}"></script>
    <script src="{{asset('vendors/fontawesome/all.min.js')}}"></script>
    <script src="{{asset('vendors/lodash/lodash.min.js')}}"></script>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=window.scroll"></script>
    <script src="{{asset('vendors/prism/prism.js')}}"></script>
    <script src="{{asset('vendors/swiper/swiper-bundle.min.js')}}"></script>
    <script src="{{asset('assets/js/theme.js')}}"></script>
  </body>

</html>

