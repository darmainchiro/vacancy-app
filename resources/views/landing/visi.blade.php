<!DOCTYPE html>
<html lang="en">
<head>

  <!-- Basic Page Needs
================================================== -->
  <meta charset="utf-8">
  <title>PT Anugerah Bangun Sejati</title>

  <!-- Mobile Specific Metas
================================================== -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="Construction Html5 Template">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">

  <!-- Favicon
================================================== -->
  <link rel="icon" type="image/png" href="{{ asset('landing/images/favicon.png') }}">

  <!-- CSS
================================================== -->
  <!-- Bootstrap -->
  <link rel="stylesheet" href="{{ asset('landing/plugins/bootstrap/bootstrap.min.css') }}">
  <!-- FontAwesome -->
  <link rel="stylesheet" href="{{ asset('landing/plugins/fontawesome/css/all.min.css') }}">
  <!-- Animation -->
  <link rel="stylesheet" href="{{ asset('landing/plugins/animate-css/animate.css') }}">
  <!-- slick Carousel -->
  <link rel="stylesheet" href="{{ asset('landing/plugins/slick/slick.css') }}">
  <link rel="stylesheet" href="{{ asset('landing/plugins/slick/slick-theme.css') }}">
  <!-- Colorbox -->
  <link rel="stylesheet" href="{{ asset('landing/plugins/colorbox/colorbox.css') }}">
  <!-- Template styles-->
  <link rel="stylesheet" href="{{ asset('landing/css/style.css') }}">

</head>
<body>
  <div class="body-inner">

    <div id="top-bar" class="top-bar">
        <div class="container">
          <div class="row">
             <!-- <div class="col-lg-8 col-md-8">
                <ul class="top-info text-center text-md-left">
                    <li><i class="fas fa-map-marker-alt"></i> <p class="info-text">9051 Constra Incorporate, USA</p>
                    </li>
                </ul>
              </div>-->
              <!--/ Top info end -->
  
              <!-- <div class="col-lg-4 col-md-4 top-social text-center text-md-right">
                <ul class="list-unstyled">
                    <li>
                      <a title="Facebook" href="https://facebbok.com/themefisher.com">
                          <span class="social-icon"><i class="fab fa-facebook-f"></i></span>
                      </a>
                      <a title="Twitter" href="https://twitter.com/themefisher.com">
                          <span class="social-icon"><i class="fab fa-twitter"></i></span>
                      </a>
                      <a title="Instagram" href="https://instagram.com/themefisher.com">
                          <span class="social-icon"><i class="fab fa-instagram"></i></span>
                      </a>
                      <a title="Linkdin" href="https://github.com/themefisher.com">
                          <span class="social-icon"><i class="fab fa-github"></i></span>
                      </a>
                    </li>
                </ul>
              </div>-->
              <!--/ Top social end -->
          </div>
          <!--/ Content row end -->
        </div>
        <!--/ Container end -->
    </div>
    <!--/ Topbar end -->
<!-- Header start -->
<header id="header" class="header-one">
  <div class="bg-white">
    <div class="container">
      <div class="logo-area">
          <div class="row align-items-center">
            <div class="logo col-lg-3 text-center text-lg-left mb-3 mb-md-5 mb-lg-0">
                <a class="d-block" href="index.html">
                  <img loading="lazy" src="images/logo.jpg" alt="Constra">
                </a>
            </div><!-- logo end -->
  
            <div class="col-lg-9 header-right">
                <ul class="top-info-box">
                  <li>
                    <div class="info-box">
                      <div class="info-box-content">
                          <p class="info-box-title">Hubungi Kami</p>
                          <p class="info-box-subtitle"><a href="tel:(+9) 847-291-4353">+62 818-0645-6362</a></p>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="info-box">
                      <div class="info-box-content">
                          <p class="info-box-title">Email Kami</p>
                          <p class="info-box-subtitle"><a href="mailto:office@Constra.com">marketing@ptanugerahbangunsejati.com</a></p>
                      </div>
                    </div>
                  </li>
                 <!-- <li class="last">
                    <div class="info-box last">
                      <div class="info-box-content">
                          <p class="info-box-title">Global Certificate</p>
                          <p class="info-box-subtitle">ISO 9001:2017</p>
                      </div>
                    </div>
                  </li>
                  <li class="header-get-a-quote">
                    <a class="btn btn-primary" href="contact.html">Get A Quote</a>
                  </li>-->
                </ul><!-- Ul end -->
            </div><!-- header right end -->
          </div><!-- logo area end -->
  
      </div><!-- Row end -->
    </div><!-- Container end -->
  </div>

  <div class="site-navigation">
    <div class="container">
        <div class="row">
          <div class="col-lg-12">
              <nav class="navbar navbar-expand-lg navbar-dark p-0">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".navbar-collapse" aria-controls="navbar-collapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div id="navbar-collapse" class="collapse navbar-collapse">
                  <ul class="nav navbar-nav mr-auto">
                    <li class="nav-item dropdown active">
                      <li class="nav-item"><a class="nav-link" href="{{ route('display') }}" >Tentang Kami </a></li>
                    </li>
                    <li class="nav-item dropdown">
                      <li class="nav-item"><a class="nav-link" href="{{ route('visi-misi') }}" >Visi dan Misi  </a></li>
                    </li>
                    <li class="nav-item ">
                      <li class="nav-item"><a class="nav-link" href="{{ route('project') }}" >Proyek  </a></li>
                    </li>
                    <li class="nav-item dropdown">
                      <li class="nav-item"><a class="nav-link " href="{{ route('career') }}">Karir </a></li>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('contact') }}">Hubungi Kami</a></li>
                  </ul>
                </div>
              </nav>
          </div>
          <!--/ Col end -->
        </div>
        <!--/ Row end -->

       <!--/ <div class="nav-search">
          <span id="search"><i class="fa fa-search"></i></span>
        </div><!-- Search end -->

        
    </div>
    <!--/ Container end -->

  </div>
  <!--/ Navigation end -->
</header>
<!--/ Header end -->
<div id="banner-area" class="banner-area" style="background-image:url(images/banner/banner1.jpg)">
  <div class="banner-text">
    <div class="container">
        <div class="row">
          <div class="col-lg-12">
              <div class="banner-heading">
                <h1 class="banner-title">Visi dan Misi</h1>
                <nav aria-label="breadcrumb">
                    <!--<ol class="breadcrumb justify-content-center">
                      <li class="breadcrumb-item"><a href="#">Home</a></li>
                      <li class="breadcrumb-item"><a href="#">company</a></li>
                      <li class="breadcrumb-item active" aria-current="page">About Us</li>
                    </ol>-->
                </nav>
              </div>
          </div><!-- Col end -->
        </div><!-- Row end -->
    </div><!-- Container end -->
  </div><!-- Banner text end -->
</div><!-- Banner area end --> 

<section id="main-container" class="main-container">
  <div class="container">
    <div class="row">
        <div class="col-lg-6">
          <h3 class="column-title">Visi</h3>
          <p>Berdedikasi untuk menjadi perusahaan yang berorientasi terhadap kualitas pekerjaan serta berupaya menjadi solusi cepat berbagai kebutuhan sesuai dengan perkembangan jaman.</p>
          <blockquote><p>•	Membantu masyarakat mendapatkan pendapatan untuk kebutuhan hidupnya.</p>
                      <p>•	Membuat visibilitas informasi akan lowongan pekerjaan paruh waktu lebih terbuka lebar.</p>
                      <p>•	Menjadi bagian dari perkembangan perekonomian di Indonesia dengan mendorong penyerapan tenaga kerja tambahan bagi industri terkait.
</p></blockquote>
          
        </div><!-- Col end -->

        <div class="col-lg-6 mt-5 mt-lg-0">
          
         <h3 class="column-title">Misi</h3>
          
          <blockquote><p>•	Menyediakan berbagai solusi kebutuhan industri secara cepat dan berorientasi kualitas.</p>
                      <p>•	Memberikan kualitas material infrastruktur yang terbaik.</p>
                      <p>•	Turut serta berpartisipasi membangun infrastruktur komunikasi di seluruh Indonesia dengan tenaga kerja yang berkompeten dibidangnya.
</p></blockquote>
        

        </div><!-- Col end -->
    </div><!-- Content row end -->

  </div><!-- Container end -->
</section><!-- Main container end -->






  <footer id="footer" class="footer bg-overlay">
    

    <div class="copyright">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-12">
            <div class="copyright-info text-center text-md-left">
              <center>    <span>Copyright PT Anugerah Bangun Sejati</span> </center>
            </div>
          </div>

          
        </div><!-- Row end -->

        <div id="back-to-top" data-spy="affix" data-offset-top="10" class="back-to-top position-fixed">
          <button class="btn btn-primary" title="Back to Top">
            <i class="fa fa-angle-double-up"></i>
          </button>
        </div>

      </div><!-- Container end -->
    </div><!-- Copyright end -->
  </footer><!-- Footer end -->


  <!-- Javascript Files
  ================================================== -->

  <!-- initialize jQuery Library -->
  <script src="{{ asset('landing/plugins/jQuery/jquery.min.js') }}"></script>
  <!-- Bootstrap jQuery -->
  <script src="{{ asset('landing/plugins/bootstrap/bootstrap.min.js') }}" defer></script>
  <!-- Slick Carousel -->
  <script src="{{ asset('landing/plugins/slick/slick.min.js') }}"></script>
  <script src="{{ asset('landing/plugins/slick/slick-animation.min.js') }}"></script>
  <!-- Color box -->
  <script src="{{ asset('landing/plugins/colorbox/jquery.colorbox.js') }}"></script>
  <!-- shuffle -->
  <script src="{{ asset('landing/plugins/shuffle/shuffle.min.js') }}" defer></script>


  <!-- Google Map API Key-->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCcABaamniA6OL5YvYSpB3pFMNrXwXnLwU" defer></script>
  <!-- Google Map Plugin-->
  <script src="{{ asset('landing/plugins/google-map/map.js') }}" defer></script>

  <!-- Template custom -->
  <script src="{{ asset('landing/js/script.js') }}"></script>

  </div><!-- Body inner end -->
  </body>

  </html>