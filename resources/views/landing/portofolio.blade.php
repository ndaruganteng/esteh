@extends('landing.layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta
      name="keywords"
      content="software house, IT Konsultan, IT, Web Development, Mobile Apps Development, Startup, Android"
    />
    <meta name="author" content="estehcreative" />
    <meta
      name="description"
      content="Esteh Creative, Innovating Technology to Deliver Happiness."
    />
    <meta name="og:image" content="images/home/ogg.png" />
    <!-- <link
      rel="apple-touch-icon"
      sizes="57x57"
      href="images/logo/apple-icon-57x57.png"
    />
    <link
      rel="apple-touch-icon"
      sizes="60x60"
      href="images/logo/apple-icon-60x60.png"
    />
    <link
      rel="apple-touch-icon"
      sizes="72x72"
      href="images/logo/apple-icon-72x72.png"
    />
    <link
      rel="apple-touch-icon"
      sizes="76x76"
      href="images/logo/apple-icon-76x76.png"
    />
    <link
      rel="apple-touch-icon"
      sizes="114x114"
      href="images/logo/apple-icon-114x114.png"
    />
    <link
      rel="apple-touch-icon"
      sizes="120x120"
      href="images/logo/apple-icon-120x120.png"
    />
    <link
      rel="apple-touch-icon"
      sizes="144x144"
      href="images/logo/apple-icon-144x144.png"
    />
    <link
      rel="apple-touch-icon"
      sizes="152x152"
      href="images/logo/apple-icon-152x152.png"
    />
    <link
      rel="apple-touch-icon"
      sizes="180x180"
      href="images/logo/apple-icon-180x180.png"
    />
    <link
      rel="icon"
      type="image/png"
      sizes="192x192"
      href="images/logo/android-icon-192x192.png"
    />
    <link
      rel="icon"
      type="image/png"
      sizes="32x32"
      href="images/logo/favicon-32x32.png"
    />
    <link
      rel="icon"
      type="image/png"
      sizes="96x96"
      href="images/logo/favicon-96x96.png"
    />
    <link
      rel="icon"
      type="image/png"
      sizes="16x16"
      href="images/logo/favicon-16x16.png"
    /> -->
    <link rel="manifest" href="images/logo/manifest.json" />
    <!-- For IE -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- For Resposive Device -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- For Window Tab Color -->
    <!-- Chrome, Firefox OS and Opera -->
    <meta name="theme-color" content="#fff" />
    <!-- Windows Phone -->
    <meta name="msapplication-navbutton-color" content="#fff" />
    <!-- iOS Safari -->
    <meta name="apple-mobile-web-app-status-bar-style" content="#fff" />
    <title>Esteh Creative - Innovating Technology to Deliver Happiness</title>
    <!-- Favicon -->
    <!-- <link
      rel="icon"
      type="image/png"
      sizes="56x56"
      href="images/fav-icon/icon.png"
    /> -->
		<link rel="icon" type="image/png" sizes="56x56" href="images/fav-icon/favicon-esteh.ico">
    <!-- Main style sheet -->
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <!-- responsive style sheet -->
    <link rel="stylesheet" type="text/css" href="css/responsive.css" />
    <link rel="stylesheet" type="text/css" href="css/esteh.css" />

    <!-- Fix Internet Explorer ______________________________________-->
    <!--[if lt IE 9]>
      <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
      <script src="vendor/html5shiv.js"></script>
      <script src="vendor/respond.js"></script>
    <![endif]-->
    <!-- Hotjar Tracking Code for https://esteh.id -->
<script>
  (function(h,o,t,j,a,r){
      h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
      h._hjSettings={hjid:1665578,hjsv:6};
      a=o.getElementsByTagName('head')[0];
      r=o.createElement('script');r.async=1;
      r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
      a.appendChild(r);
  })(window,document,'https://static.hotjar.com/c/hotjar-','.js?sv=');
</script>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-157475869-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-157475869-1');
</script>

  </head>

  <body>
    <div class="main-page-wrapper">

      <!-- /.theme-main-menu -->

      <!-- 
			=============================================
				Text Inner Banner One
			============================================== 
			-->
      <div class="text-inner-banner-one pos-r">
        <div class="shape-wrapper">
          <svg class="img-shape shape-one">
            <path
              fill-rule="evenodd"
              fill="rgb(255, 223, 204)"
              d="M6.000,12.000 C9.314,12.000 12.000,9.314 12.000,6.000 C12.000,2.686 9.314,-0.000 6.000,-0.000 C2.686,-0.000 -0.000,2.686 -0.000,6.000 C-0.000,9.314 2.686,12.000 6.000,12.000 Z"
            />
          </svg>
          <svg class="img-shape shape-two">
            <path
              fill-rule="evenodd"
              fill="rgb(182, 255, 234)"
              d="M6.000,12.000 C9.314,12.000 12.000,9.314 12.000,6.000 C12.000,2.686 9.314,-0.000 6.000,-0.000 C2.686,-0.000 -0.000,2.686 -0.000,6.000 C-0.000,9.314 2.686,12.000 6.000,12.000 Z"
            />
          </svg>
          <svg class="img-shape shape-three">
            <path
              fill-rule="evenodd"
              fill="rgb(181, 198, 255)"
              d="M12.000,24.000 C18.627,24.000 24.000,18.627 24.000,12.000 C24.000,5.372 18.627,-0.000 12.000,-0.000 C5.372,-0.000 -0.000,5.372 -0.000,12.000 C-0.000,18.627 5.372,24.000 12.000,24.000 Z"
            />
          </svg>
          <svg class="img-shape shape-four">
            <path
              fill-rule="evenodd"
              fill="rgb(255, 156, 161)"
              d="M7.500,15.000 C11.642,15.000 15.000,11.642 15.000,7.500 C15.000,3.358 11.642,-0.000 7.500,-0.000 C3.358,-0.000 -0.000,3.358 -0.000,7.500 C-0.000,11.642 3.358,15.000 7.500,15.000 Z"
            />
          </svg>
          <svg class="img-shape shape-five">
            <path
              fill-rule="evenodd"
              fill="rgb(178, 236, 255)"
              d="M12.500,25.000 C19.403,25.000 25.000,19.403 25.000,12.500 C25.000,5.596 19.403,-0.000 12.500,-0.000 C5.596,-0.000 -0.000,5.596 -0.000,12.500 C-0.000,19.403 5.596,25.000 12.500,25.000 Z"
            />
          </svg>
        </div>
        <!-- /.shape-wrapper -->
        <div class="container">
          <p>Portfolio</p>
          <h2 class="pt-30 pb-15">Strong Portfolio</h2>
          <p class="sub-heading">
            Here they are, our beautiful portfolio developed with love in Indonesia
          </p>
        </div>
      </div>
      <!-- /.text-inner-banner-one -->

      <!-- 
			=============================================
				Our Portfolio
			============================================== 
			-->
      <div class="our-portfolio">
        <div class="container">
          <div
            id="filter-for-classicTwo"
            class="cbp-l-filters-alignCenter filter-menu"
          >
            <div data-filter="*" class="cbp-filter-item-active cbp-filter-item">
              ALL
              <div class="cbp-filter-counter"></div>
            </div>
            <div data-filter=".mobile" class="cbp-filter-item">
              Mobile
              <div class="cbp-filter-counter"></div>
            </div>
            <div data-filter=".web" class="cbp-filter-item">
              Web
              <div class="cbp-filter-counter"></div>
            </div>
            <div data-filter=".design" class="cbp-filter-item">
              Design
              <div class="cbp-filter-counter"></div>
            </div>
            <div data-filter=".system" class="cbp-filter-item">
              System
              <div class="cbp-filter-counter"></div>
            </div>
          </div>

          <div id="style-grid-two" class="cbp cube-port">

            <div class="cbp-item graphic mobile design">
              <div class="cbp-item-wrapper">
                <div class="cbp-caption">
                  <div class="cbp-caption-defaultWrap">
                    <img src="images/portofolio/thumb/privat.jpeg" alt="" />
                  </div>
                  <div class="cbp-caption-activeWrap">
                    <div class="cbp-l-caption-alignCenter">
                      <div class="cbp-l-caption-body">
                        <a
                          href="ajax-pages/portfolio-rpi.html"
                          class="cbp-singlePage cbp-l-caption-buttonLeft"
                          rel="nofollow"
                          >More Info</a
                        >
                        <a
                          href="images/portofolio/thumb/privat-big.jpeg"
                          class="cbp-lightbox cbp-l-caption-buttonRight"
                          data-title="Private Tutoring App <br> Merupakan platform yang ditujukan kepada para siswa maupun mahasiswa yang membutuhkan waktu lebih untuk belajar."
                          >View Larger</a
                        >
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="cbp-item graphic mobile design">
              <div class="cbp-item-wrapper">
                <div class="cbp-caption">
                  <div class="cbp-caption-defaultWrap">
                    <img src="images/portofolio/thumb/midwife.jpeg" alt="" />
                  </div>
                  <div class="cbp-caption-activeWrap">
                    <div class="cbp-l-caption-alignCenter">
                      <div class="cbp-l-caption-body">
                        <a
                          href="ajax-pages/portfolio-rpi.html"
                          class="cbp-singlePage cbp-l-caption-buttonLeft"
                          rel="nofollow"
                          >More Info</a
                        >
                        <a
                          href="images/portofolio/thumb/midwife-big.jpeg"
                          class="cbp-lightbox cbp-l-caption-buttonRight"
                          data-title="Midwife App <br> Merupakan platform yang dimanfaatkan untuk mewadahi kebutuhan pasien yang membutuhkan layanan bidan."
                          >View Larger</a
                        >
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="cbp-item graphic mobile design">
              <div class="cbp-item-wrapper">
                <div class="cbp-caption">
                  <div class="cbp-caption-defaultWrap">
                    <img src="images/portofolio/thumb/human-app.jpeg" alt="" />
                  </div>
                  <div class="cbp-caption-activeWrap">
                    <div class="cbp-l-caption-alignCenter">
                      <div class="cbp-l-caption-body">
                        <a
                          href="ajax-pages/portfolio-rpi.html"
                          class="cbp-singlePage cbp-l-caption-buttonLeft"
                          rel="nofollow"
                          >More Info</a
                        >
                        <a
                          href="images/portofolio/thumb/human-app-big.jpeg"
                          class="cbp-lightbox cbp-l-caption-buttonRight"
                          data-title="Human Resource App <br> Merupakan platform yang dimanfaatkan untuk mewadahi kebutuhan para pahlawan devisa yang ada di luar negeri."
                          >View Larger</a
                        >
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="cbp-item mobile web">
              <div class="cbp-item-wrapper">
                <div class="cbp-caption">
                  <div class="cbp-caption-defaultWrap">
                    <img src="images/portofolio/thumb/lms-web.jpeg" alt="" />
                  </div>
                  <div class="cbp-caption-activeWrap">
                    <div class="cbp-l-caption-alignCenter">
                      <div class="cbp-l-caption-body">
                        <a
                          href="ajax-pages/portfolio-compro.html"
                          class="cbp-singlePage cbp-l-caption-buttonLeft"
                          rel="nofollow"
                          >More Info</a
                        >
                        <a
                          href="images/portofolio/thumb/lms-web-big.jpeg"
                          class="cbp-lightbox cbp-l-caption-buttonRight"
                          data-title="LMS for Web <br> Dikembangkan dengan berbagai fitur yang didesain khusus untuk menunjang kegiatan belajar mengajar berbasis website."
                          >View Larger</a
                        >
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="cbp-item graphic mobile design">
              <div class="cbp-item-wrapper">
                <div class="cbp-caption">
                  <div class="cbp-caption-defaultWrap">
                    <img src="images/portofolio/thumb/medical.jpeg" alt="" />
                  </div>
                  <div class="cbp-caption-activeWrap">
                    <div class="cbp-l-caption-alignCenter">
                      <div class="cbp-l-caption-body">
                        <a
                          href="ajax-pages/portfolio-rpi.html"
                          class="cbp-singlePage cbp-l-caption-buttonLeft"
                          rel="nofollow"
                          >More Info</a
                        >
                        <a
                          href="images/portofolio/thumb/medical-big.jpeg"
                          class="cbp-lightbox cbp-l-caption-buttonRight"
                          data-title="Medical Services <br> Merupakan platform bagi pasien yang memerlukan perawatan secara harian maupun berkelanjutan."
                          >View Larger</a
                        >
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="cbp-item graphic mobile design">
              <div class="cbp-item-wrapper">
                <div class="cbp-caption">
                  <div class="cbp-caption-defaultWrap">
                    <img src="images/portofolio/thumb/muslim-app.jpeg" alt="" />
                  </div>
                  <div class="cbp-caption-activeWrap">
                    <div class="cbp-l-caption-alignCenter">
                      <div class="cbp-l-caption-body">
                        <a
                          href="ajax-pages/portfolio-rpi.html"
                          class="cbp-singlePage cbp-l-caption-buttonLeft"
                          rel="nofollow"
                          >More Info</a
                        >
                        <a
                          href="images/portofolio/thumb/muslim-app-big.jpeg"
                          class="cbp-lightbox cbp-l-caption-buttonRight"
                          data-title="Muslim Life App <br> Merupakan platform bagi para umat muslim yang di setiap kehidupannya tidak lupa melakukan ibadah-ibadah yang wajib dilakukannya."
                          >View Larger</a
                        >
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="cbp-item mobile web">
              <div class="cbp-item-wrapper">
                <div class="cbp-caption">
                  <div class="cbp-caption-defaultWrap">
                    <img src="images/portofolio/thumb/compro-mekkah.jpeg" alt="" />
                  </div>
                  <div class="cbp-caption-activeWrap">
                    <div class="cbp-l-caption-alignCenter">
                      <div class="cbp-l-caption-body">
                        <a
                          href="ajax-pages/portfolio-compro.html"
                          class="cbp-singlePage cbp-l-caption-buttonLeft"
                          rel="nofollow"
                          >More Info</a
                        >
                        <a
                          href="images/portofolio/thumb/compro-mekkah-big.jpeg"
                          class="cbp-lightbox cbp-l-caption-buttonRight"
                          data-title="Company Profile Mekkah <br> Dikembangkan dengan berbagai fitur yang didesain khusus untuk menunjang <br>perusahaan dalam hal branding. <br> Dilengkapi berbagai fitur yang bisa dicustomize sesuai kebutuhan perusahaan. "
                          >View Larger</a
                        >
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="cbp-item graphic mobile design">
              <div class="cbp-item-wrapper">
                <div class="cbp-caption">
                  <div class="cbp-caption-defaultWrap">
                    <img src="images/portofolio/thumb/food.jpeg" alt="" />
                  </div>
                  <div class="cbp-caption-activeWrap">
                    <div class="cbp-l-caption-alignCenter">
                      <div class="cbp-l-caption-body">
                        <a
                          href="ajax-pages/portfolio-rpi.html"
                          class="cbp-singlePage cbp-l-caption-buttonLeft"
                          rel="nofollow"
                          >More Info</a
                        >
                        <a
                          href="images/portofolio/thumb/food-big.jpeg"
                          class="cbp-lightbox cbp-l-caption-buttonRight"
                          data-title="On Demand for Food <br> Merupakan platform bagi para pencinta makanan yang tidak perlu lagi ke tempat makan,<br>dengan menggunakan mobile phone makanan sudah bisa sampai."
                          >View Larger</a
                        >
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="cbp-item graphic mobile design">
              <div class="cbp-item-wrapper">
                <div class="cbp-caption">
                  <div class="cbp-caption-defaultWrap">
                    <img src="images/portofolio/thumb/clinic.jpeg" alt="" />
                  </div>
                  <div class="cbp-caption-activeWrap">
                    <div class="cbp-l-caption-alignCenter">
                      <div class="cbp-l-caption-body">
                        <a
                          href="ajax-pages/portfolio-rpi.html"
                          class="cbp-singlePage cbp-l-caption-buttonLeft"
                          rel="nofollow"
                          >More Info</a
                        >
                        <a
                          href="images/portofolio/thumb/clinic-big.jpeg"
                          class="cbp-lightbox cbp-l-caption-buttonRight"
                          data-title="Clinic Mobile App <br> Merupakan platform yang dibuat untuk menjalankan layanan-layanan klinik via digital yang berbasis mobile."
                          >View Larger</a
                        >
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="cbp-item graphic mobile design">
              <div class="cbp-item-wrapper">
                <div class="cbp-caption">
                  <div class="cbp-caption-defaultWrap">
                    <img src="images/portofolio/thumb/lms.jpeg" alt="" />
                  </div>
                  <div class="cbp-caption-activeWrap">
                    <div class="cbp-l-caption-alignCenter">
                      <div class="cbp-l-caption-body">
                        <a
                          href="ajax-pages/portfolio-rpi.html"
                          class="cbp-singlePage cbp-l-caption-buttonLeft"
                          rel="nofollow"
                          >More Info</a
                        >
                        <a
                          href="images/portofolio/thumb/lms-big.jpeg"
                          class="cbp-lightbox cbp-l-caption-buttonRight"
                          data-title="Corparate Learning Management System <br> Merupakan platform yang bertujuan untuk menigkatkan skill dari para karyawan corporate melalui sistem pembelajaran."
                          >View Larger</a
                        >
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- /.our-portfolio -->

      <!--
			=====================================================
				Contact Banner
			=====================================================
			-->
      <div class="action-banner-one bg-white">
        <div class="theme-title-one">
          <h2 class="main-title">
            Do you have any projects?<br /><i>Contact us.</i>
          </h2>
        </div>
        <!-- /.theme-title-one -->
        <a href="contact.html" class="theme-btn line-button-one">Contact us</a>
      </div>
      <!-- /.action-banner-one -->



      <!-- Scroll Top Button -->
      <button class="scroll-top tran3s">
        <i class="fa fa-angle-up" aria-hidden="true"></i>
      </button>

      <div id="path-shape-wrapper">
        <div>
          <svg height="0" width="0">
            <defs>
              <clipPath id="path-shape-one">
                <path
                  fill-rule="evenodd"
                  fill="url(#PSgrad_0)"
                  d="M205.167,7.943 C196.497,5.430 187.599,3.410 178.431,1.968 C128.511,-5.887 71.772,9.587 43.924,51.651 C19.381,88.722 21.921,137.016 28.728,180.915 C36.372,230.212 42.902,274.488 30.686,323.548 C22.073,358.142 10.514,392.042 3.990,427.142 C-9.427,499.346 8.748,558.050 93.045,555.629 C129.787,554.575 165.485,540.991 199.389,527.944 C222.170,519.186 249.687,504.720 274.747,508.015 C298.508,511.143 314.810,529.991 331.946,542.158 C360.484,562.425 393.173,576.700 432.090,577.905 C544.608,581.383 647.199,488.167 663.495,395.667 C683.050,284.674 584.750,212.456 485.909,166.645 C447.031,148.625 408.266,133.864 373.136,108.990 C319.781,71.209 268.682,26.354 205.167,7.943 "
                />
              </clipPath>
            </defs>
          </svg>
        </div>
      </div>
      <!-- /#path-shape-wrapper -->

      <!-- Optional JavaScript _____________________________  -->
      <!-- jQuery -->
      <script src="vendor/jquery.2.2.3.min.js"></script>
      <!-- Popper js -->
      <script src="vendor/popper.js/popper.min.js"></script>
      <!-- Bootstrap JS -->
      <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
      <!-- menu  -->
      <script src="vendor/mega-menu/assets/js/custom.js"></script>
      <!-- AOS js -->
      <script src="vendor/aos-next/dist/aos.js"></script>
      <!-- WOW js -->
      <script src="vendor/WOW-master/dist/wow.min.js"></script>
      <!-- owl.carousel -->
      <script src="vendor/owl-carousel/owl.carousel.min.js"></script>

      <!-- cubeportfolio -->
      <script src="vendor/cubeportfolio/js/jquery.cubeportfolio.min.js"></script>

      <!-- Theme js -->
      <script src="js/theme.js"></script>
    </div>
    <!-- /.main-page-wrapper -->
  </body>
</html>
@endsection
