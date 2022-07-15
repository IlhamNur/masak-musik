<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <title>MASAK MUSIK STUDIO</title>
  <link rel="shortcut icon" href="assets/images/Logo.ico">

  <!-- google fonts -->
  <link href="//fonts.googleapis.com/css?family=Nunito:400,700&display=swap" rel="stylesheet">
  <link href="//fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">

  <!-- Template CSS -->
  <link rel="stylesheet" href="assets/css/style-starter.css">

</head>

<body>
  <!--header-->
  <header id="site-header" class="fixed-top">
    <div class="container">
      <nav class="navbar navbar-expand-lg navbar-dark stroke">
        <h1>
          <a class="logo-container" href="/">
            <img src="assets/images/Logo.png" alt="MASMUS logo" title="MASMUS logo" style="height:40px;" />
          </a>

          <a class="navbar-brand" href="/">
            </span>Masak Musik Studio <span class="logo">Music Is Filling, So Cook Good</span></a>
        </h1>

        <button class="navbar-toggler  collapsed bg-gradient" type="button" data-toggle="collapse"
          data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false"
          aria-label="Toggle navigation">
          <span class="navbar-toggler-icon fa icon-expand fa-bars"></span>
          <span class="navbar-toggler-icon fa icon-close fa-times"></span>
          </span>
        </button>

        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
          <ul class="navbar-nav mx-lg-auto">
            <li class="nav-item @@home__active">
              <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="/about">Tentang</a>
            </li>
            <li class="nav-item @@courses__active">
              <a class="nav-link" href="/courses">Layanan</a>
            </li>
            <li class="nav-item @@contact__active">
              <a class="nav-link" href="/contact">Kontak</a>
            </li>
          </ul>

          <!--/search-right-->
          <div class="search-right">
            <a href="#search" title="search"><span class="fa fa-search" aria-hidden="true"></span></a>
            <!-- search popup -->
            <div id="search" class="pop-overlay">
              <div class="popup">

                <form action="error.html" method="GET" class="search-box">
                  <input type="search" placeholder="Search" name="search" required="required" autofocus="">
                  <button type="submit" class="btn"><span class="fa fa-search" aria-hidden="true"></span></button>
                </form>

              </div>
              <a class="close" href="#close">×</a>
            </div>
            <!-- /search popup -->
          </div>
          <div class="top-quote mr-lg-2 text-center">
            <a href="{{ route('login') }}" class="btn login mr-2"><span class="fa fa-user"></span> login</a>
          </div>
        </div>
        <!-- toggle switch for light and dark theme -->
        <div class="mobile-position">
          <nav class="navigation">
            <div class="theme-switch-wrapper">
              <label class="theme-switch" for="checkbox">
                <input type="checkbox" id="checkbox">
                <div class="mode-container py-1">
                  <i class="gg-sun"></i>
                  <i class="gg-moon"></i>
                </div>
              </label>
            </div>
          </nav>
        </div>
        <!-- //toggle switch for light and dark theme -->
      </nav>
    </div>
  </header>
  <!--/header-->
  <!-- about breadcrumb -->
  <section class="w3l-breadcrumb">
    <div class="breadcrumb-bg breadcrumb-bg-about py-5">
      <div class="container pt-lg-5 pt-3 p-lg-4 pb-3">
        <h2 class="title mt-5 pt-lg-5 pt-sm-3">Tentang Kami</h2>
        <ul class="breadcrumbs-custom-path pb-sm-5 pb-4 mt-2 text-center mb-5">
          <li><a href="/">Home</a></li>
          <li class="active"> / Tentang Kami </li>
        </ul>
      </div>
    </div>
    <div class="waveWrapper waveAnimation">
      <svg viewBox="0 0 500 150" preserveAspectRatio="none">
        <path d="M-5.07,73.52 C149.99,150.00 299.66,-102.13 500.00,49.98 L500.00,150.00 L0.00,150.00 Z"
          style="stroke: none;"></path>
      </svg>
    </div>
  </section>
  <!-- //about breadcrumb -->
  <section id="about" class="home-services pt-lg-0">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-md-6 col-sm-12">
          <div class="box-wrap">
            <div class="box-wrap-grid">
              <div class="icon">
                <span class="fa fa-music"></span>
              </div>
              <div class="info">
                <h4><a href="#url">Misi</a></h4>
                <p>Masak Musik Studio</p>
              </div>
            </div>
            <p class="mt-4">Mengedukasi dan mengembangkan potensi murid agar dapat menjadi yang terbaik pada
              bidang alat musik yang ditekuni.</p>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12 mt-md-0 mt-4">
          <div class="box-wrap">
            <div class="box-wrap-grid">
              <div class="icon">
                <span class="fa fa-user"></span>
              </div>
              <div class="info">
                <h4><a href="#url">Visi</a></h4>
                <p>Masak Musik Studio</p>
              </div>
            </div>
            <p class="mt-4">Menjadi tempat edukasi terbaik di Indonesia untuk bidang music course dengan kurikulum
              yang terbaharui.</p>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12 mt-lg-0 mt-4">
          <div class="box-wrap">
            <div class="box-wrap-grid">
              <div class="icon">
                <span class="fa fa-trophy"></span>
              </div>
              <div class="info">
                <h4><a href="#url">Tujuan</a></h4>
                <p>Masak Musik Studio</p>
              </div>
            </div>
            <p class="mt-4">Menghasilkan murid yang bisa memaksimalkan potensi bermusiknya dengan menggunakan alat-alat
              yang ada di show stage.</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="w3l-aboutblock1 py-5" id="about">
    <div class="container py-lg-5 py-md-4 py-2">
      <div class="row">
        <div class="col-lg-6 align-self">
          <span class="title-small mb-2">Tentang Kami</span>
          <h3 class="title-big mx-0">Selamat Datang di Masak Musik Studio - Les dan Studio Musik</h3>
          <p class="mt-lg-4 mt-3">Masak Musik Studio berdiri sejak 2016 di Pati – Jawa Tengah. Seperti halnya memasak,
            musik yang kami kerjakan mulai dari menyiapkan materi/bahan, mengolah bahan mentah menjadi matang,
            menghiasnya sehingga layak untuk disajikan.
          </p>
          <p class="mt-3 mb-lg-5">Layanan yang kami tawarkan mulai dari rental studio musik,
            rekaman, aransemen, komposisi, song writing, minus one, mixing, mastering, sound design, scoring, music
            production course, hingga pembuatan video klip.</p>
        </div>
        <div class="col-lg-6 left-wthree-img mt-lg-0 mt-sm-5 mt-4">
          <img src="assets/images/c1.png" alt="" class="img-fluid radius-image">
        </div>
      </div>
    </div>
  </section>
  <section class="w3l-servicesblock w3l-servicesblock1 py-5" id="progress">
    <div class="container py-lg-5 py-md-4 py-2">
      <div class="row">
        <div class="col-lg-6 align-self pr-lg-4">
          <div class="progress-info info1">
            <h6 class="progress-tittle">Skill <span class="">80%</span></h6>
            <div class="progress">
              <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 80%" aria-valuenow="90"
                aria-valuemin="0" aria-valuemax="100">
              </div>
            </div>
          </div>
          <div class="progress-info info2">
            <h6 class="progress-tittle">Feeling <span class="">95%</span>
            </h6>
            <div class="progress">
              <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 95%" aria-valuenow="95"
                aria-valuemin="0" aria-valuemax="100">
              </div>
            </div>
          </div>
          <div class="progress-info info3">
            <h6 class="progress-tittle">Audio Recognizing <span class="">90%</span></h6>
            <div class="progress">
              <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 90%" aria-valuenow="95"
                aria-valuemin="0" aria-valuemax="100">
              </div>
            </div>
          </div>
          <div class="progress-info info4">
            <h6 class="progress-tittle">Emotion Control <span class="">75%</span></h6>
            <div class="progress">
              <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 75%" aria-valuenow="95"
                aria-valuemin="0" aria-valuemax="100">
              </div>
            </div>
          </div>
          <div class="progress-info info2 mb-0">
            <h6 class="progress-tittle">Attitude <span class="">95%</span></h6>
            <div class="progress">
              <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 95%" aria-valuenow="95"
                aria-valuemin="0" aria-valuemax="100">
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6 mt-lg-0 mt-5 pl-lg-4">
          <span class="title-small mb-2">Progress bars</span>
          <h3 class="title-big"> Apa yang anda dapat dari Masak Musik Studio?</h3>
          <p class="mt-md-4 mt-3">Di tempat kursus kami tidak hanya melatih skill bermusik saja, tapi kami
            memperhatikan dengan baik dari segi yang lebih kompleks. Kami mengajarkan murid kami bagaimana
            cara mendapatkan feeling, bagaimana cara kita bisa menyatu dengan lagu menggunakan audio recognizing,
            cara kontrol emosi ketika bermusik, dan menjaga attitude ketika akan tampil.</p>
          <a href="#url" class="btn btn-primary btn-style mt-md-5 mt-4">Bergabung</a>
        </div>
      </div>
    </div>
  </section>
  <section class="w3l-block py-5" id="">
    <div class="container py-lg-5 py-md-3">
      <div class="row">
        <div class="col-lg-6 about-right-faq align-self">
          <span class="title-small mb-2">Mulai kursus musik</span>
          <h3 class="title-big mx-0"> Tingkatkan keterampilan Anda dengan kursus musik terbaik</h3>
          <p class="mt-lg-4 mt-3 mb-lg-5 mb-4">Mentor kursus kami sudah memperoleh sertifikasi instruktur musik nasional dan
            materi yang kami berikan sudah sesuai dengan kurikulum terbaru. Kami membekali murid agar bisa belajar musik tidak hanya
            ditempat les namun bisa juga dilakukan secara mandiri di rumah.
          </p>
          <div class="two-grids mt-md-0 mt-md-5 mt-4">
            <div class="grids_info">
              <h4>Sertifikasi Nasional</h4>
              <p class="">Mentor mendapatkan sertifikasi instruktur musik nasional.</p>
            </div>
            <div class="grids_info">
              <h4>Kurikulum Terbaru</h4>
              <p class="">Murid mendapatkan materi dengan kurikulum musik terbaru.</p>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-6 left-wthree-img mt-lg-0 mt-sm-5 mt-4">
          <img src="assets/images/alan.png" alt="" class="img-fluid radius-image">
        </div>
        <div class="col-lg-3 col-6  left-wthree-img mt-lg-0 mt-sm-5 mt-4">
          <img src="assets/images/masmuss.png" alt="" class="img-fluid radius-image">
        </div>
      </div>
    </div>
  </section>
  <!-- stats -->
  <section class="w3l-stats py-5" id="stats">
    <div class="gallery-inner container py-lg-5 py-md-4">
      <span class="title-small text-center mb-1">Pencapaian Kami</span>
      <h3 class="title-big text-center mb-5">Kemajuan Kami Tidak Akan Terhenti</h3>
      <div class="row stats-con">
        <div class="col-md-3 col-6 stats_info counter_grid">
          <p class="counter">107 </p>
          <span class="plus">+</span><br>
          <h3>Murid Terdaftar</h3>
        </div>
        <div class="col-md-3 col-6 stats_info counter_grid1">
          <p class="counter">86</p>
          <span class="plus">+</span><br>
          <h3>Aransemen Dikerjakan</h3>
        </div>
        <div class="col-md-3 col-6 stats_info counter_grid mt-md-0 mt-4">
          <p class="counter">254</p>
          <span class="plus">+</span><br>
          <h3>Pelanggan Studio</h3>
        </div>
        <div class="col-md-3 col-6 stats_info counter_grid2 mt-md-0 mt-4">
          <p class="counter">4 </p>
          <span class="plus">+</span><br>
          <h3>Mentor Pribadi</h3>
        </div>
      </div>
    </div>
  </section>
  <!-- //stats -->

  <!-- footer -->
  <section class="w3l-footer-29-main">
    <div class="footer-29 py-5">
      <div class="container py-md-4">
        <div class="row footer-top-29">
          <div class="col-lg-4 col-md-6 col-sm-7 footer-list-29 footer-1 pr-lg-5">
            <h6 class="footer-title-29">Info Kontak </h6>
            <p>Alamat : Gg. Jeruk No.67a, Plangitan, Kec. Pati, Kabupaten Pati, Jawa Tengah 59113.</p>
            <p class="my-2">Telepon : <a href="tel:+(62)85642011047">0856-4201-1047</a></p>
            <p>Email : <a href="mailto:masakmusikstudio@gmail.com">masakmusikstudio@gmail.com</a></p>
            <div class="main-social-footer-29 mt-4">
              <a href="https://facebook.com/alanwijanarko" class="facebook"><span class="fa fa-facebook"></span></a>
              <a href="https://instagram.com/masakmusikstudio?igshid=YmMyMTA2M2Y=" class="instagram"><span
                  class="fa fa-instagram"></span></a>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-5 col-6 footer-list-29 footer-2 mt-sm-0 mt-5">

            <ul>
              <h6 class="footer-title-29">Profesionalitas</h6>
              <li><a href="/about">Tentang Kami</a></li>
              <li><a href="#blog"> Informasi Terbaru</a></li>
              <li><a href="#teacher"> Gabung Mentor </a></li>
              <li><a href="courses.html">Gabung Kelas Musik</a></li>
              <li><a href="/contact">Hubungi Kami</a></li>
            </ul>
          </div>
          <div class="col-lg-2 col-md-6 col-sm-5 col-6 footer-list-29 footer-3 mt-lg-0 mt-5">
            <h6 class="footer-title-29">Program</h6>
            <ul>
              <li><a href="#traning">Kursus Musik</a></li>
              <li><a href="#documentation">Rekaman</a></li>
              <li><a href="#release">Rental Studio</a></li>
              <li><a href="#customers"> Aransemen</a></li>
              <li><a href="#helpcenter"> Mixing & Mastering</a></li>
            </ul>

          </div>

        </div>
      </div>
    </div>
    <!-- copyright -->
    <section class="w3l-copyright text-center">
      <div class="container">
        <p class="copy-footer-29">© 2022 Masak Musik Studio. Design by <a href="https://instagram.com/masakmusikstudio"
            target="_blank">
            Masak Musik Studio</a></p>
      </div>

      <!-- move top -->
      <button onclick="topFunction()" id="movetop" title="Go to top">
        &#10548;
      </button>
      <script>
        // When the user scrolls down 20px from the top of the document, show the button
        window.onscroll = function () {
          scrollFunction()
        };

        function scrollFunction() {
          if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            document.getElementById("movetop").style.display = "block";
          } else {
            document.getElementById("movetop").style.display = "none";
          }
        }

        // When the user clicks on the button, scroll to the top of the document
        function topFunction() {
          document.body.scrollTop = 0;
          document.documentElement.scrollTop = 0;
        }
      </script>
      <!-- /move top -->
    </section>
    <!-- //copyright -->
  </section>
  <!-- //footer -->

  <!-- Template JavaScript -->
  <script src="assets/js/jquery-3.3.1.min.js"></script>

  <script src="assets/js/theme-change.js"></script>

  <!-- stats number counter-->
  <script src="assets/js/jquery.waypoints.min.js"></script>
  <script src="assets/js/jquery.countup.js"></script>
  <script>
    $('.counter').countUp();
  </script>
  <!-- //stats number counter -->

  <script src="assets/js/owl.carousel.js"></script>
  <!-- script for banner slider-->
  <script>
    $(document).ready(function () {
      $('.owl-one').owlCarousel({
        loop: true,
        margin: 0,
        nav: false,
        dots: false,
        responsiveClass: true,
        autoplay: true,
        autoplayTimeout: 5000,
        autoplaySpeed: 1000,
        autoplayHoverPause: false,
        responsive: {
          0: {
            items: 1
          },
          480: {
            items: 1
          },
          667: {
            items: 1
          },
          1000: {
            items: 1,
            nav: true
          }
        }
      })
    })
  </script>
  <!-- //script -->

  <!-- script for tesimonials carousel slider -->
  <script>
    $(document).ready(function () {
      $("#owl-demo1").owlCarousel({
        loop: true,
        margin: 20,
        nav: false,
        responsiveClass: true,
        responsive: {
          0: {
            items: 1,
            nav: false
          },
          768: {
            items: 2,
            nav: false
          },
          1000: {
            items: 3,
            nav: false,
            loop: false
          }
        }
      })
    })
  </script>
  <!-- //script for tesimonials carousel slider -->

  <!-- disable body scroll which navbar is in active -->
  <script>
    $(function () {
      $('.navbar-toggler').click(function () {
        $('body').toggleClass('noscroll');
      })
    });
  </script>
  <!-- disable body scroll which navbar is in active -->

  <!--/MENU-JS-->
  <script>
    $(window).on("scroll", function () {
      var scroll = $(window).scrollTop();

      if (scroll >= 80) {
        $("#site-header").addClass("nav-fixed");
      } else {
        $("#site-header").removeClass("nav-fixed");
      }
    });

    //Main navigation Active Class Add Remove
    $(".navbar-toggler").on("click", function () {
      $("header").toggleClass("active");
    });
    $(document).on("ready", function () {
      if ($(window).width() > 991) {
        $("header").removeClass("active");
      }
      $(window).on("resize", function () {
        if ($(window).width() > 991) {
          $("header").removeClass("active");
        }
      });
    });
  </script>
  <!--//MENU-JS-->

  <script src="assets/js/bootstrap.min.js"></script>


</body>

</html>