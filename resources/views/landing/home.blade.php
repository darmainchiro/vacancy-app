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
                  <li class="last">
                    <div class="info-box last">
					<!--
                      <div class="info-box-content">
                          <p class="info-box-title">Global Certificate</p>
                          <p class="info-box-subtitle">ISO 9001:2017</p>
                      </div>-->
                    </div>
                  </li>
				  <!--
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
<!--
        <div class="nav-search">
          <span id="search"><i class="fa fa-search"></i></span>
        </div> Search end -->

       <!-- <div class="search-block" style="display: none;">
          <label for="search-field" class="w-100 mb-0">
            <input type="text" class="form-control" id="search-field" placeholder="Type what you want and enter">
          </label>
          <span class="search-close">&times;</span>
        </div><!-- Site search end -->
    </div>
    <!--/ Container end -->

  </div>
  <!--/ Navigation end -->
</header>
<!--/ Header end -->

<div class="banner-carousel banner-carousel-1 mb-0">
  <div class="banner-carousel-item" style="background-image:url({{ asset('landing/images/slider-main/bg1.jpg') }})">
    <div class="slider-content">
        <div class="container h-100">
          <div class="row align-items-center h-100">
              <div class="col-md-12 text-center">
               <!-- <h2 class="slide-title" data-animation-in="slideInLeft">17 Years of excellence in</h2>-->
                <h3 class="slide-sub-title" data-animation-in="slideInRight">Material berkualitas</h3>
                <p data-animation-in="slideInLeft" data-duration-in="1.2">
                   <!-- <a href="services.html" class="slider btn btn-primary">Our Services</a>
                    <a href="contact.html" class="slider btn btn-primary border">Contact Now</a>-->
                </p>
              </div>
          </div>
        </div>
    </div>
  </div>

  <div class="banner-carousel-item" style="background-image:url({{ asset('landing/images/slider-main/bg2.jpg') }})">
    <div class="slider-content text-left">
        <div class="container h-100">
          <div class="row align-items-center h-100">
              <div class="col-md-12 text-center">
               <!-- <h2 class="slide-title-box" data-animation-in="slideInDown">World Class Service</h2>
                <h3 class="slide-title" data-animation-in="fadeIn">Service terbaik</h3>-->
                <h3 class="slide-sub-title" data-animation-in="slideInRight">Pelayanan Terbaik</h3>
                <p data-animation-in="slideInLeft">
                    <!-- <a href="services.html" class="slider btn btn-primary border">Our Services</a>-->
                </p>
              </div>
          </div>
        </div>
    </div>
  </div>

  <div class="banner-carousel-item" style="background-image:url({{ asset('landing/images/slider-main/bg3.jpg') }})">
    <div class="slider-content text-right">
        <div class="container h-100">
          <div class="row align-items-center h-100">
              <div class="col-md-12">
                <h2 class="slide-title" data-animation-in="slideInDown">Tim kami</h2>
                <h3 class="slide-sub-title" data-animation-in="fadeIn">Tenaga ahli dan berpengalaman</h3>
               <!-- <p class="slider-description lead" data-animation-in="slideInRight">We will deal with your failure that determines how you achieve success.</p>-->
                <div data-animation-in="slideInLeft">
                   <!--  <a href="contact.html" class="slider btn btn-primary" aria-label="contact-with-us">Get Free Quote</a>
                    <a href="about.html" class="slider btn btn-primary border" aria-label="learn-more-about-us">Learn more</a>-->
                </div>
              </div>
          </div>
        </div>
    </div>
  </div>
</div>

<section class="call-to-action-box no-padding">
  <div class="container">
    <div class="action-style-box">
        <div class="row align-items-center">
          <div class="col-md-8 text-center text-md-left">
              <div class="call-to-action-text">
                <h3 class="action-title">Kami memahami kebutuhan pelanggan</h3>
              </div>
          </div><!-- Col end -->
          <!--<div class="col-md-4 text-center text-md-right mt-3 mt-md-0">
              <div class="call-to-action-btn">
                <a class="btn btn-dark" href="#">Request Quote</a>
              </div>-->
          </div><!-- col end -->
        </div><!-- row end -->
    </div><!-- Action style box -->
  </div><!-- Container end -->
</section><!-- Action end -->

<section id="ts-features" class="ts-features">
  <div class="container">
    <div class="row">
        <div class="col-lg-6 ">
          <div class="ts-intro">
             <!-- <h2 class="into-title">Tentang Kami</h2>-->
              <h3 class="into-sub-title">Tentang Kami</h3>
			  
              <p >PT. Anugerah Bangun Sejati  bergerak di bidang pengadaan dan installasi perlengkapan telekomunikasi. Menyediakan berbagai solusi kebutuhan industri anda secara cepat dan berorientasi kualitas. Dengan umur yang masih relatif muda, kami berdedikasi untuk menjadi perusahaan yang berorientasi terhadap kualitas pekerjaan serta berupaya menjadi solusi cepat berbagai kebutuhan sesuai dengan perkembangan jaman. </p>
             
		  </div><!-- Intro box end -->

          <div class="gap-20"></div>

        <!-- <div class="row">
              <div class="col-md-6">
                <div class="ts-service-box">
                    <span class="ts-service-icon">
                      <i class="fas fa-trophy"></i>
                    </span>
                    <div class="ts-service-box-content">
                      <h3 class="service-box-title">We've Repution for Excellence</h3>
                    </div>
                </div>
              </div>

              <div class="col-md-6">
                <div class="ts-service-box">
                    <span class="ts-service-icon">
                      <i class="fas fa-sliders-h"></i>
                    </span>
                    <div class="ts-service-box-content">
                      <h3 class="service-box-title">We Build Partnerships</h3>
                    </div>
                </div>
              </div>
         </div> Content row 1 end -->

         <!-- <div class="row">
              <div class="col-md-6">
                <div class="ts-service-box">
                    <span class="ts-service-icon">
                      <i class="fas fa-thumbs-up"></i>
                    </span>
                    <div class="ts-service-box-content">
                      <h3 class="service-box-title">Guided by Commitment</h3>
                    </div>
                </div>
              </div>

              <div class="col-md-6">
                <div class="ts-service-box">
                    <span class="ts-service-icon">
                      <i class="fas fa-users"></i>
                    </span>
                    <div class="ts-service-box-content">
                      <h3 class="service-box-title">A Team of Professionals</h3>
                    </div>
                </div>
              </div>
          </div> Content row 1 end -->
        </div><!-- Col end -->

        <div class="col-lg-6 mt-4 mt-lg-0">
          <h3 class="into-sub-title">Nilai kami</h3>
         <!-- <p>Minim Austin 3 wolf moon scenester aesthetic, umami odio pariatur bitters. Pop-up occaecat taxidermy street art, tattooed beard literally.</p>-->

          <div class="accordion accordion-group" id="our-values-accordion">
              <div class="card">
                <div class="card-header p-0 bg-transparent" id="headingOne">
                    <h2 class="mb-0">
                       <button class="btn btn-block text-left" >
                          Safety
                      </button>
					  
                    </h2>
                </div>
              
               <!-- <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#our-values-accordion">
                    <div class="card-body">
                      Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidata
                    </div>
                </div>-->
              </div>
              <div class="card">
                <div class="card-header p-0 bg-transparent" id="headingTwo">
                    <h2 class="mb-0">
                      <button class="btn btn-block text-left " >
                          Customer Service
                      </button>
                    </h2>
                </div>
                  <!--<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#our-values-accordion">
                    <div class="card-body">
                      Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidata
                    </div>
                </div>-->
              </div>
              <div class="card">
                <div class="card-header p-0 bg-transparent" id="headingThree">
                    <h2 class="mb-0">
                      <button class="btn btn-block text-left ">
                          Integrity
                      </button>
                    </h2>
                </div>
               <!-- <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#our-values-accordion">
                    <div class="card-body">
                      Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidata
                    </div>
                </div>-->
              </div>
          </div>
          <!--/ Accordion end -->

        </div><!-- Col end -->
    </div><!-- Row end -->
  </div><!-- Container end -->
</section><!-- Feature are end -->

<section id="facts" class="facts-area dark-bg">
  <!--<div class="container">
    <!--<div class="facts-wrapper">
       <!-- <div class="row">
          <div class="col-md-3 col-sm-6 ts-facts">
              <div class="ts-facts-img">
                <img loading="lazy" src="images/icon-image/fact1.png" alt="facts-img">
              </div>
              <div class="ts-facts-content">
                <h2 class="ts-facts-num"><span class="counterUp" data-count="1789">0</span></h2>
                <h3 class="ts-facts-title">Total Projects</h3>
              </div>
          </div><!-- Col end -->

         <!-- <div class="col-md-3 col-sm-6 ts-facts mt-5 mt-sm-0">
              <div class="ts-facts-img">
                <img loading="lazy" src="images/icon-image/fact2.png" alt="facts-img">
              </div>
              <div class="ts-facts-content">
                <h2 class="ts-facts-num"><span class="counterUp" data-count="647">0</span></h2>
                <h3 class="ts-facts-title">Staff Members</h3>
              </div>
          </div><!-- Col end -->

          <!--<div class="col-md-3 col-sm-6 ts-facts mt-5 mt-md-0">
              <div class="ts-facts-img">
                <img loading="lazy" src="images/icon-image/fact3.png" alt="facts-img">
              </div>
              <div class="ts-facts-content">
                <h2 class="ts-facts-num"><span class="counterUp" data-count="4000">0</span></h2>
                <h3 class="ts-facts-title">Hours of Work</h3>
              </div>
          </div><!-- Col end -->

          <!--<div class="col-md-3 col-sm-6 ts-facts mt-5 mt-md-0">
              <div class="ts-facts-img">
                <img loading="lazy" src="images/icon-image/fact4.png" alt="facts-img">
              </div>
              <div class="ts-facts-content">
                <h2 class="ts-facts-num"><span class="counterUp" data-count="44">0</span></h2>
                <h3 class="ts-facts-title">Countries Experience</h3>
              </div>
          </div><!-- Col end -->

       <!--</div>--> <!-- Facts end -->
  <!--  </div>-->
    <!--/ Content row end -->
  <!--</div>
  <!--/ Container end -->
</section><!-- Facts end --> 

<section id="ts-service-area" class="ts-service-area pb-0">
  <div class="container">
    <div class="row text-center">
        <div class="col-12">
          <!--<h2 class="section-title">We Are Specialists In</h2>-->
          <h3 class="section-sub-title">Yang kami lakukan untuk pelanggan</h3>
        </div>
    </div>
    <!--/ Title row end -->

    <div class="row">
        <div class="col-lg-4">
          <div class="ts-service-box d-flex">
              <div class="ts-service-box-img">
                <img loading="lazy" src="{{ asset('landing/images/icon-image/service-icon1.png') }}" alt="service-icon">
              </div>
              <div class="ts-service-box-info">
                <h3 class="service-box-title"><a href="#">Konstruksi rumah</a></h3>
                <!--<p>Lorem ipsum dolor sit amet consectetur adipiscing elit Integer adipiscing erat</p>-->
              </div>
          </div><!-- Service 1 end -->

          <div class="ts-service-box d-flex">
              <div class="ts-service-box-img">
                <img loading="lazy" src="{{ asset('landing/images/icon-image/service-icon2.png') }}" alt="service-icon">
              </div>
              <div class="ts-service-box-info">
                <h3 class="service-box-title"><a href="#">Pembangunan tower</a></h3>
                <!--<p>Lorem ipsum dolor sit amet consectetur adipiscing elit Integer adipiscing erat</p>-->
              </div>
          </div><!-- Service 2 end -->

          <div class="ts-service-box d-flex">
              <div class="ts-service-box-img">
                <img loading="lazy" src="{{ asset('landing/images/icon-image/service-icon3.png') }}"  alt="service-icon">
              </div>
              <div class="ts-service-box-info">
                <h3 class="service-box-title"><a href="#">Desain interior</a></h3>
               <!-- <p>Lorem ipsum dolor sit amet consectetur adipiscing elit Integer adipiscing erat</p>-->
              </div>
          </div><!-- Service 3 end -->

        </div><!-- Col end -->

        <div class="col-lg-4 text-center">
          <img loading="lazy" class="img-fluid" src="{{ asset('landing/images/services/service-center.jpg') }}" alt="service-avater-image">
        </div><!-- Col end -->

        <div class="col-lg-4 mt-5 mt-lg-0 mb-4 mb-lg-0">
          <div class="ts-service-box d-flex">
              <div class="ts-service-box-img">
                <img loading="lazy" src="{{ asset('landing/images/icon-image/service-icon4.png') }}" alt="service-icon">
              </div>
              <div class="ts-service-box-info">
                <h3 class="service-box-title"><a href="#">Konblok jalan</a></h3>
                <!--<p>Lorem ipsum dolor sit amet consectetur adipiscing elit Integer adipiscing erat</p>-->
              </div>
          </div><!-- Service 4 end -->

          <div class="ts-service-box d-flex">
              <div class="ts-service-box-img">
                <img loading="lazy" src="{{ asset('landing/images/icon-image/service-icon5.png') }}" alt="service-icon">
              </div>
              <div class="ts-service-box-info">
                <h3 class="service-box-title"><a href="#">Renovasi rumah</a></h3>
               <!-- <p>Lorem ipsum dolor sit amet consectetur adipiscing elit Integer adipiscing erat</p>-->
              </div>
          </div><!-- Service 5 end -->

         <!-- <div class="ts-service-box d-flex">
              <div class="ts-service-box-img">
                <img loading="lazy" src="images/icon-image/service-icon6.png" alt="service-icon">
              </div>
              <!-- <div class="ts-service-box-info">
                <h3 class="service-box-title"><a href="#">Safety Management</a></h3>
                <p>Lorem ipsum dolor sit amet consectetur adipiscing elit Integer adipiscing erat</p>
              </div>
          </div> Service 6 end -->
        </div><!-- Col end -->
    </div><!-- Content row end -->

  </div>
  <!--/ Container end -->
</section><!-- Service end -->
<!--
<section id="project-area" class="project-area solid-bg">
  <div class="container">
    <div class="row text-center">
      <div class="col-lg-12">
        <h2 class="section-title">Work of Excellence</h2>
        <h3 class="section-sub-title">Recent Projects</h3>
      </div>
    </div>
    <!--/ Title row end 

    <div class="row">
      <div class="col-12">
        <div class="shuffle-btn-group">
          <label class="active" for="all">
            <input type="radio" name="shuffle-filter" id="all" value="all" checked="checked">Show All
          </label>
          <label for="commercial">
            <input type="radio" name="shuffle-filter" id="commercial" value="commercial">Commercial
          </label>
          <label for="education">
            <input type="radio" name="shuffle-filter" id="education" value="education">Education
          </label>
          <label for="government">
            <input type="radio" name="shuffle-filter" id="government" value="government">Government
          </label>
          <label for="infrastructure">
            <input type="radio" name="shuffle-filter" id="infrastructure" value="infrastructure">Infrastructure
          </label>
          <label for="residential">
            <input type="radio" name="shuffle-filter" id="residential" value="residential">Residential
          </label>
          <label for="healthcare">
            <input type="radio" name="shuffle-filter" id="healthcare" value="healthcare">Healthcare
          </label>
        </div><!-- project filter end -->


       <!-- <div class="row shuffle-wrapper">
          <div class="col-1 shuffle-sizer"></div>

          <div class="col-lg-4 col-sm-6 shuffle-item" data-groups="[&quot;government&quot;,&quot;healthcare&quot;]">
            <div class="project-img-container">
              <a class="gallery-popup" href="images/projects/project1.jpg" aria-label="project-img">
                <img class="img-fluid" src="images/projects/project1.jpg" alt="project-img">
                <span class="gallery-icon"><i class="fa fa-plus"></i></span>
              </a>
              <div class="project-item-info">
                <div class="project-item-info-content">
                  <h3 class="project-item-title">
                    <a href="projects-single.html">Capital Teltway Building</a>
                  </h3>
                  <p class="project-cat">Commercial, Interiors</p>
                </div>
              </div>
            </div>
          </div> shuffle item 1 end -->

          <!--<div class="col-lg-4 col-sm-6 shuffle-item" data-groups="[&quot;healthcare&quot;]">
            <div class="project-img-container">
              <a class="gallery-popup" href="images/projects/project2.jpg" aria-label="project-img">
                <img class="img-fluid" src="images/projects/project2.jpg" alt="project-img">
                <span class="gallery-icon"><i class="fa fa-plus"></i></span>
              </a>
              <div class="project-item-info">
                <div class="project-item-info-content">
                  <h3 class="project-item-title">
                    <a href="projects-single.html">Ghum Touch Hospital</a>
                  </h3>
                  <p class="project-cat">Healthcare</p>
                </div>
              </div>
            </div>
          </div> shuffle item 2 end -->

         <!-- <div class="col-lg-4 col-sm-6 shuffle-item" data-groups="[&quot;infrastructure&quot;,&quot;commercial&quot;]">
            <div class="project-img-container">
              <a class="gallery-popup" href="images/projects/project3.jpg" aria-label="project-img">
                <img class="img-fluid" src="images/projects/project3.jpg" alt="project-img">
                <span class="gallery-icon"><i class="fa fa-plus"></i></span>
              </a>
              <div class="project-item-info">
                <div class="project-item-info-content">
                  <h3 class="project-item-title">
                    <a href="projects-single.html">TNT East Facility</a>
                  </h3>
                  <p class="project-cat">Government</p>
                </div>
              </div>
            </div>
          </div> shuffle item 3 end -->

         <!-- <div class="col-lg-4 col-sm-6 shuffle-item" data-groups="[&quot;education&quot;,&quot;infrastructure&quot;]">
            <div class="project-img-container">
              <a class="gallery-popup" href="images/projects/project4.jpg" aria-label="project-img">
                <img class="img-fluid" src="images/projects/project4.jpg" alt="project-img">
                <span class="gallery-icon"><i class="fa fa-plus"></i></span>
              </a>
              <div class="project-item-info">
                <div class="project-item-info-content">
                  <h3 class="project-item-title">
                    <a href="projects-single.html">Narriot Headquarters</a>
                  </h3>
                  <p class="project-cat">Infrastructure</p>
                </div>
              </div>
            </div>
          </div> shuffle item 4 end -->

          <!--<div class="col-lg-4 col-sm-6 shuffle-item" data-groups="[&quot;infrastructure&quot;,&quot;education&quot;]">
            <div class="project-img-container">
              <a class="gallery-popup" href="images/projects/project5.jpg" aria-label="project-img">
                <img class="img-fluid" src="images/projects/project5.jpg" alt="project-img">
                <span class="gallery-icon"><i class="fa fa-plus"></i></span>
              </a>
              <div class="project-item-info">
                <div class="project-item-info-content">
                  <h3 class="project-item-title">
                    <a href="projects-single.html">Kalas Metrorail</a>
                  </h3>
                  <p class="project-cat">Infrastructure</p>
                </div>
              </div>
            </div>
          </div> shuffle item 5 end -->

          <!--<div class="col-lg-4 col-sm-6 shuffle-item" data-groups="[&quot;residential&quot;]">
            <div class="project-img-container">
              <a class="gallery-popup" href="images/projects/project6.jpg" aria-label="project-img">
                <img class="img-fluid" src="images/projects/project6.jpg" alt="project-img">
                <span class="gallery-icon"><i class="fa fa-plus"></i></span>
              </a>
              <div class="project-item-info">
                <div class="project-item-info-content">
                  <h3 class="project-item-title">
                    <a href="projects-single.html">Ancraft Avenue House</a>
                  </h3>
                  <p class="project-cat">Residential</p>
                </div>
              </div>
            </div>
          </div> shuffle item 6 end -->
       <!-- </div> shuffle end -->
     <!-- </div>-->

    

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