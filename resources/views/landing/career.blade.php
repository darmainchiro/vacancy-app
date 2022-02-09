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
                  <img loading="lazy" src="{{ asset('landing/images/logo.jpg') }}" alt="Constra">
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
                </ul><!-- Ul end -->
            </div><!-- header right end --
          </div> logo area end -->
  
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

        

        
    </div>
    <!--/ Container end -->

  </div>
  <!--/ Navigation end -->
</header>
<!--/ Header end -->
<div id="banner-area" class="banner-area" style="background-image:url({{ asset('landing/images/banner/banner1.jpg') }})">
  <div class="banner-text">
    <div class="container">
        <div class="row">
          <div class="col-lg-12">
              <div class="banner-heading">
                <h1 class="banner-title">Bergabung Bersama Kami</h1>
                
              </div>
          </div><!-- Col end -->
        </div><!-- Row end -->
    </div><!-- Container end -->
  </div><!-- Banner text end -->
</div><!-- Banner area end --> 

<section id="main-container" class="main-container">
  <div class="container">
    <div class="row">

      <!--<div class="col-lg-8 mb-5 mb-lg-0">--> 
      <div class="col-lg-12">
        <div class="post-content post-single">
          <div class="post-body">
            <div class="entry-header">
              <h2 class="entry-title">
                Lowongan Pekerjaan
              </h2>
            </div><!-- header end -->
            <div class="entry-content">
              <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <!-- <div class="card-header">
                            <strong class="card-title">Basic Table</strong>
                        </div> -->
                        <div class="card-body">
                          <table id="bootstrap-data-table" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th><div style="text-align:center">NO</div></th>
                                    <th><div style="text-align:center">POSISI</div></th>
                                    <th><div style="text-align:center">PERSYARATAN</div></th>
                                    <th><div style="text-align:center">LOKASI PENEMPATAN</div></th>
                                    <th><div style="text-align:center">BATAS AKHIR</div></th>
                                    <th><div style="text-align:center">ACTION</div></th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($lowongan as $index => $post)
                                    <tr>
                                        <td style="text-align:center">{{ ++$index }}</td>
                                        <td>{{ $post->posisi }}</td>
                                        <td>{{ $post->persyaratan }}</td>
                                        <td style="text-align:center">{{ $post->lokasi }}</td>
                                        <td style="text-align:center">{{ $post->batas_akhir }}</td>
                                        <td>
                                            <div style="text-align:center">
                                                <a href="{{ route('apply',[$post->id]) }}" style="float: center;" class="btn btn-success btn-sm">Apply</a>
                                            </div>
                                        </td>
                                        
                                    </tr>
                                    @empty
                                    <tr>
                                        <td class="text-center text-mute" colspan="4">Lowongan tidak tersedia</td>
                                    </tr>
                                @endforelse     
                            </tbody>
                          </table>
                        </div>
                    </div>
                </div>
              </div>
            </div>
          </div><!-- post-body end --> 
        </div><!-- post content end -->

        

        

              
              
            </li><!-- Comments-list li end -->
          </ul><!-- Comments-list ul end -->
        </div><!-- Post comment end -->

      
      </div><!-- Content Col end -->



    </div><!-- Main row end -->

  </div><!-- Conatiner end -->
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
  </body>

  </html>