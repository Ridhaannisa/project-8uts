<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>RIDHA ANNISA - Index</title>
  <meta content="" name="descriptison">

  <!-- Favicons -->
  <link href="{{url('public')}}/assets/img/favicon.png" rel="icon">
  <link href="{{url('public')}}/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{url('public')}}/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="{{url('public')}}/assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="{{url('public')}}/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="{{url('public')}}/assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="{{url('public')}}/assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="{{url('public')}}/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="{{url('public')}}/assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{url('public')}}/assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Gp - v2.1.0
  * Template URL: https://bootstrapmade.com/gp-free-multipurpose-html-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center justify-content-between">

      <h1 class="logo"><a href="{{url('/')}}">RIDHA ANNISA<span></span></a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo"><img src="{{url('public')}}/img/tas.jpgets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav class="nav-menu d-none d-lg-block">
        <ul> 
          <li class="active"><a href="{{ url('/')}}">Home</a></li>
          <li><a href="#Artikel">Artikel</a></li>
          <li><a href="{{ url('login')}}">Login</a></li>
           <li><a href="{{ url('registrasi')}}">Registrasi</a></li>


        </ul>
      </nav><!-- .nav-menu -->
    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center justify-content-center">
    <div class="container" data-aos="fade-up">

      <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="150">
        <div class="col-xl-6 col-lg-8">

          <h1>WELLCOME TO MY Blog</h1>
          <h2>RIDHA ANNISA</h2>
          @include('template.utils.notif')
        </div>
      </div>        

  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= Artikel Section ======= -->
    <section id="Artikel" class="Artikel">
       <h4 class="text-center">Artikel</h4>
      <div class="container">
        <div class="row">
        @foreach($list_artikel as $artikel)
          <div class="col-md-12 col-sm-12 col-xs-12">
          <img src="{{url('public')}}/img/laptop.jpg" class="mx-auto d-block">
           <div class="card-deck">
            <div class="card mt-5">
              <div class="section-headline text-justify">
            <div class="card-header">
             <strong>{{$artikel->judul}}</strong>
           </div>
        <div class="card-body">
        <blockquote class="blockquote">
         <p><small>{{$artikel->isi}}</small></p>
        <footer class="blockquote-footer">Penulis : {{$artikel->penulis}}<cite title="Source Title"> | Rilis : {{$artikel->tanggal}}</cite></footer>
        </blockquote>
        </div>
        <h4 class="mt-5 pl-3">Halaman Komentar</h4>
        @foreach($list_komentar as $komentar)
        <div class="media pl-3">
           <img src="{{url('public')}}/img/icon.jpg" width="3%" alt="...">
            <div class="media-body">
          <h5 class="mt-0">{{$komentar->nama}}</h5>
          {{$komentar->isi}}
          <div class="mt-2">
        </div>
        </div>
      </div>
      @endforeach
        </div>
          </div>
        </div> 
        @endforeach
          </div>
        </div>
              <div class="card mt-5">
                <div class="card-header">
                 <strong>Komentar</strong>
                  </div>
                    <div class="card-body">
                      <blockquote class="blockquote mb-0">
                        <p><small>Masukkan Komentar Anda</small></p>
                      </blockquote>
          <form action="{{url('komentar')}}" method="post">
            @csrf
              <div class="form-group">
                <label for="exampleInputEmail1">Email</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
              </div>
              <div class="form-group">
                <label for="nama">Nama Lengkap</label>
                <input type="text" class="form-control" id="nama" aria-describedby="emailHelp" name="nama">
              </div>
             <div class="form-group">
                <label for="isi">Isi Komentar</label>
                <textarea class="form-control" id="isi" rows="7" name="isi"></textarea>
              </div>
               <button type="submit" class="btn btn-dark shadow">Submit</button>
              </form>
          </div>
        </div>
      </div>
      </div>
    </div>
    </section>

    <!-- ======= Contact Section ======= -->
    <section id="Pesanan" class="Pesanan">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Contact</h2>
          <p>Contact Us</p>
        </div>


        <div class="row mt-5">

          <div class="col-lg-4">
            <div class="info">
              <div class="address">
                <i class="icofont-google-map"></i>
                <h4>Location:</h4>
                <p>JL.P.HIDAYAT GG.DAHLI RT/003 RW/001</p>
              </div>

              <div class="email">
                <i class="icofont-envelope"></i>
                <h4>Email:</h4>
                <p>ridhaannisa1708@gmail.com</p>
              </div>

              <div class="phone">
                <i class="icofont-phone"></i>
                <h4>Call:</h4>
                <p>+62895376962037</p>
              </div>

            </div>

          </div>

          <div class="col-lg-8 mt-5 mt-lg-0">

            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="form-row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                  <div class="validate"></div>
                </div>
                <div class="col-md-6 form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                  <div class="validate"></div>
                </div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                <div class="validate"></div>
              </div>
              <div class="mb-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>

          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  

  <a href="#" class="back-to-top"><i class="ri-arrow-up-line"></i></a>
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="{{url('public')}}/assets/vendor/jquery/jquery.min.js"></script>
  <script src="{{url('public')}}/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="{{url('public')}}/assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="{{url('public')}}/assets/vendor/php-email-form/validate.js"></script>
  <script src="{{url('public')}}/assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="{{url('public')}}/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="{{url('public')}}/assets/vendor/venobox/venobox.min.js"></script>
  <script src="{{url('public')}}/assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="{{url('public')}}/assets/vendor/counterup/counterup.min.js"></script>
  <script src="{{url('public')}}/assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="{{url('public')}}/assets/js/main.js"></script>

</body>

</html>