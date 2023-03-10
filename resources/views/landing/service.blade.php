@extends('landing.layouts.app') 

@section('content')
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="keywords" content="software house, IT Konsultan, IT, Web Development, Mobile Apps Development, Startup, Android" />
    <meta name="author" content="estehcreative" />
    <meta name="description" content="Esteh Creative, Innovating Technology to Deliver Happiness." />
    <meta name="og:image" content="images/home/ogg.png" />
    <!-- <link rel="apple-touch-icon" sizes="57x57" href="images/logo/apple-icon-57x57.png">
		<link rel="apple-touch-icon" sizes="60x60" href="images/logo/apple-icon-60x60.png">
		<link rel="apple-touch-icon" sizes="72x72" href="images/logo/apple-icon-72x72.png">
		<link rel="apple-touch-icon" sizes="76x76" href="images/logo/apple-icon-76x76.png">
		<link rel="apple-touch-icon" sizes="114x114" href="images/logo/apple-icon-114x114.png">
		<link rel="apple-touch-icon" sizes="120x120" href="images/logo/apple-icon-120x120.png">
		<link rel="apple-touch-icon" sizes="144x144" href="images/logo/apple-icon-144x144.png">
		<link rel="apple-touch-icon" sizes="152x152" href="images/logo/apple-icon-152x152.png">
		<link rel="apple-touch-icon" sizes="180x180" href="images/logo/apple-icon-180x180.png">
		<link rel="icon" type="image/png" sizes="192x192"  href="images/logo/android-icon-192x192.png">
		<link rel="icon" type="image/png" sizes="32x32" href="images/logo/favicon-32x32.png">
		<link rel="icon" type="image/png" sizes="96x96" href="images/logo/favicon-96x96.png">
		<link rel="icon" type="image/png" sizes="16x16" href="images/logo/favicon-16x16.png"> -->
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
    <link rel="icon" type="image/png" sizes="56x56" href="images/fav-icon/favicon-esteh.ico" />
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
      (function (h, o, t, j, a, r) {
        h.hj =
          h.hj ||
          function () {
            (h.hj.q = h.hj.q || []).push(arguments);
          };
        h._hjSettings = { hjid: 1665578, hjsv: 6 };
        a = o.getElementsByTagName("head")[0];
        r = o.createElement("script");
        r.async = 1;
        r.src = t + h._hjSettings.hjid + j + h._hjSettings.hjsv;
        a.appendChild(r);
      })(window, document, "https://static.hotjar.com/c/hotjar-", ".js?sv=");
    </script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-157475869-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag() {
        dataLayer.push(arguments);
      }
      gtag("js", new Date());

      gtag("config", "UA-157475869-1");
    </script>
  </head>

  <body>
    <div class="main-page-wrapper">
      <!-- ===================================================
				Loading Transition
			==================================================== -->
      <!-- Preloader -->
      <!-- <section>
				<div id="preloader">
					<div id="ctn-preloader" class="ctn-preloader">
						<div class="animation-preloader">
							<div class="icon"><img src="images/1.svg" alt=""></div>
							<div class="txt-loading">
								<span data-text-preloader="ES" class="letters-loading">
									ES
								</span>
								<span data-text-preloader="TEH" class="letters-loading">
									TEH
								</span>
								<span data-text-preloader=" &nbsp;" class="letters-loading">
									&nbsp;
								</span>
								<span data-text-preloader="CRE" class="letters-loading">
									CRE
								</span>
								<span data-text-preloader="A" class="letters-loading">
									A
								</span>
								<span data-text-preloader="TIVE" class="letters-loading">
									TIVE
								</span>
							</div>
						</div>	
					</div>
				</div>
			</section> -->

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
          <p>Services</p>
          <h2 class="pt-30 pb-15">Provided Services</h2>
          <p class="sub-heading">
            Kami memberikan layanan dengan sepenuh hati, diinisiasi oleh anak-anak muda kreatif yang telah berpengalaman menyelesaikan berbagai proyek dan terus berkreasi untuk turut larut dalam menghadirkan teknologi terkini yang
            mengesankan.
          </p>
        </div>
      </div>
      <!-- /.text-inner-banner-one -->

      <!-- 
			=============================================
				Intro Text
			============================================== 
			-->
      <div class="intro-text-block--green pos-r">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-lg-6 order-lg-last">
              <h5>Kami memberikan banyak layanan digital <span> dari para ahli dengan dukungan terbaik</span></h5>
              <p>Esteh Creative menerapkan pendekatan seefektif dan seefisien mungkin. Kami bergerak cepat untuk terus memberikan karya-karya terbaik sebagai solusi dari beragam masalah Anda di dunia teknologi informasi.</p>
              <h6>Esteh Creative</h6>
            </div>
            <div class="col-lg-6 order-lg-first">
              <div class="icon md-mt-40">
                <img src="images/menu-img/esteh-service.svg" alt="" />
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- /.intro-text-block -->

      <!-- 
			=============================================
				Our Service
			============================================== 
			-->
      <div class="our-service pt-200 md-pt-150">
        <div class="container">
          <div class="row">
            <div class="col-md-6">
              <div class="service-classic-block mb-90 md-mb-60">
                <div class="img-holder"><img src="images/menu-img/web.jpg" alt="" /></div>
                <div class="text-holder">
                  <div class="icon-holder" style="background: #2b78ff"><img src="images/icon/icon18.svg" alt="" /></div>
                  <h3><a href="#">Web Development </a></h3>
                  <p>Pengembangan web untuk kebutuhan proses bisnis yang general maupun spesifik. Seperti marketplace, landing page, company profile, e-office, social network services, blog, dan lain sebagainya.</p>
                </div>
                <!-- /.text-holder -->
              </div>
              <!-- /.service-classic-block -->
            </div>
            <div class="col-md-6">
              <div class="service-classic-block mb-90 md-mb-60">
                <div class="img-holder"><img src="images/menu-img/ux-design.jpg" alt="" /></div>
                <div class="text-holder">
                  <div class="icon-holder" style="background: #ff5176"><img src="images/icon/icon18.svg" alt="" /></div>
                  <h3><a href="#">UX & Interface Design</a></h3>
                  <p>
                    Desain dan pengalaman pengguna merupakan kesan awal yang sangat penting dalam membangun bisnis. Bersama Esteh Creative, kami memberikan dukungan serta garansi desain dan pengalaman pengguna untuk pelayanan yang terbaik.
                  </p>
                </div>
                <!-- /.text-holder -->
              </div>
              <!-- /.service-classic-block -->
            </div>
            <div class="col-md-6">
              <div class="service-classic-block mb-90 md-mb-60">
                <div class="img-holder"><img src="images/menu-img/mobile.jpg" alt="" /></div>
                <div class="text-holder">
                  <div class="icon-holder" style="background: #03e7f6"><img src="images/icon/icon18.svg" alt="" /></div>
                  <h3><a href="#">Mobile Development</a></h3>
                  <p>Pengembangan aplikasi untuk smartphone baik android maupun iOS. Tidak semua organisasi memiliki platform sendiri, aplikasi mobile terbukti mampu meningkatkan kepercayaan pelanggan.</p>
                </div>
                <!-- /.text-holder -->
              </div>
              <!-- /.service-classic-block -->
            </div>
            <div class="col-md-6">
              <div class="service-classic-block mb-90 md-mb-60">
                <div class="img-holder"><img src="images/menu-img/information.jpg" alt="" /></div>
                <div class="text-holder">
                  <div class="icon-holder" style="background: #ffaf2d"><img src="images/icon/icon18.svg" alt="" /></div>
                  <h3><a href="#">Corporate Information System</a></h3>
                  <p>Pengembangan sistem informasi untuk perusahaan. Mulai dari Sistem Informasi, Sistem Informasi Manajemen, Sistem Informasi Eksekutif, Business Intelligent, dan lain sebagainya.</p>
                </div>
                <!-- /.text-holder -->
              </div>
              <!-- /.service-classic-block -->
            </div>
            <div class="col-md-6">
              <div class="service-classic-block mb-90 md-mb-60">
                <div class="img-holder"><img src="images/menu-img/market.jpg" alt="" /></div>
                <div class="text-holder">
                  <div class="icon-holder" style="background: #28a745"><img src="images/icon/icon18.svg" alt="" /></div>
                  <h3><a href="#">Research & Market Analysis</a></h3>
                  <p>Perkembangan bisnis yang dinamis menjadikan kebutuhan pasar juga terus berkembang. Untuk itu, setiap decision maker perlu mendalami strategi marketing yang paling tepat untuk kondisi dan dinamika market yang dituju.</p>
                </div>
                <!-- /.text-holder -->
              </div>
              <!-- /.service-classic-block -->
            </div>
            <div class="col-md-6">
              <div class="service-classic-block mb-90 md-mb-60">
                <div class="img-holder"><img src="images/menu-img/mvp.jpg" alt="" /></div>
                <div class="text-holder">
                  <div class="icon-holder" style="background: #17a2b8"><img src="images/icon/icon18.svg" alt="" /></div>
                  <h3><a href="#">Startup MVP & Prototype</a></h3>
                  <p>
                    Kondisi startup yang masih mencari model bisnis yang tepat sangat perlu untuk memvalidasi ide bisnisnya. Minimum Viable Product dan Prototyping adalah salah satu metode yang tepat untuk memvalidasi ide dalam waktu yang
                    lebih efektif dan efisien.
                  </p>
                </div>
                <!-- /.text-holder -->
              </div>
              <!-- /.service-classic-block -->
            </div>
            <div class="col-md-6">
              <div class="service-classic-block mb-90 md-mb-60">
                <div class="img-holder"><img src="images/menu-img/digital.jpg" alt="" /></div>
                <div class="text-holder">
                  <div class="icon-holder" style="background: #6f42c1"><img src="images/icon/icon18.svg" alt="" /></div>
                  <h3><a href="#">Campaign Digital Strategist</a></h3>
                  <p>
                    Produk atau layanan yang bagus adalah yang berada pada market yang tepat dan memiliki engagement yang kuat. Maka perlu ada strategi untuk membangun brand activation sekaligus brand awareness yang sesuai dengan market
                    yang dituju.
                  </p>
                </div>
                <!-- /.text-holder -->
              </div>
              <!-- /.service-classic-block -->
            </div>
            <div class="col-md-6">
              <div class="service-classic-block mb-90 md-mb-60">
                <div class="img-holder"><img src="images/menu-img/information.jpg" alt="" /></div>
                <div class="text-holder">
                  <div class="icon-holder" style="background: #6610f2"><img src="images/icon/icon18.svg" alt="" /></div>
                  <h3><a href="#">Data Analytic</a></h3>
                  <p>
                    Data sudah menjadi aset yang begitu berharga bagi perkembangan bisnis. Namun harus melalui tahap pemrosesan terlebih dahulu agar mendapatkan insight yang reliable dan valid. Data Mining, Artificial Intelligent, Machine
                    Learning serta Data Science adalah beberapa pendekatan yang seringkali digunakan untuk meningkatkan daya guna data.
                  </p>
                </div>
                <!-- /.text-holder -->
              </div>
              <!-- /.service-classic-block -->
            </div>
            <div class="col-md-6">
              <div class="service-classic-block mb-90 md-mb-60">
                <div class="img-holder"><img src="images/menu-img/information.jpg" alt="" /></div>
                <div class="text-holder">
                  <div class="icon-holder" style="background: #1aceff"><img src="images/icon/icon18.svg" alt="" /></div>
                  <h3><a href="#">Video Production</a></h3>
                  <p>Video production untuk Company Profile, TV Commercial, Marketing Tools, Konten Social Media seperti Youtube, Instagram, Facebook dan lain sebagainya.</p>
                </div>
                <!-- /.text-holder -->
              </div>
              <!-- /.service-classic-block -->
            </div>
            <div class="col-md-6">
              <div class="service-classic-block mb-90 md-mb-60">
                <div class="img-holder"><img src="images/menu-img/information.jpg" alt="" /></div>
                <div class="text-holder">
                  <div class="icon-holder" style="background: #ff6262"><img src="images/icon/icon18.svg" alt="" /></div>
                  <h3><a href="#">Social Media Campaign</a></h3>
                  <p>Menemukan strategi yang tepat untuk berkampanye di social media. Sehingga mendapatkan jangkauan dan exposure yang lebih luas.</p>
                </div>
                <!-- /.text-holder -->
              </div>
              <!-- /.service-classic-block -->
            </div>
          </div>
          <!-- /.row -->
        </div>
        <!-- /.container -->
      </div>
      <!-- /.our-service -->

      <!--
			=====================================================
				Contact Banner
			=====================================================
			-->
      <div class="action-banner-one mt-100">
        <div class="theme-title-one">
          <h2 class="main-title">Do you have any projects?<br /><i>Contact us.</i></h2>
        </div>
        <!-- /.theme-title-one -->
        <a href="contact.html" class="theme-btn line-button-one">Contact us</a>
      </div>
      <!-- /.action-banner-one -->

      <!--
			=====================================================
				Testimonial
			=====================================================
			-->
      <div class="testimonial-section-classic style-one pos-r md-pt-40 md-pb-200">
        <img src="images/shape/33.svg" alt="" class="main-bg" />
        <div class="shape-wrapper">
          <img src="images/shape/34.svg" alt="" class="shape-one img-shape" />
        </div>
        <!-- /.shape-wrapper -->
        <div class="shape-wrapper">
          <img src="images/testimo/asian-1-min.jpeg" alt="" class="people" />
          <img src="images/testimo/asian-2-min.jpeg" alt="" class="people" />
          <img src="images/testimo/asian-3-min.jpeg" alt="" class="people" />
          <img src="images/testimo/asian-4-min.jpeg" alt="" class="people" />
          <img src="images/testimo/asian-1-min.jpeg" alt="" class="people" />
          <img src="images/testimo/asian-2-min.jpeg" alt="" class="people" />
        </div>
        <div class="container">
          <div class="theme-title-one text-center">
            <div class="icon-box hide-pr">
              <svg class="bg-shape" width="80px" height="80px">
                <defs>
                  <linearGradient id="PSgrad_55" x1="0%" x2="0%" y1="100%" y2="0%">
                    <stop offset="0%" stop-color="rgb(255,175,185)" stop-opacity="1" />
                    <stop offset="100%" stop-color="rgb(255,70,159)" stop-opacity="1" />
                  </linearGradient>
                </defs>
                <path
                  fill-rule="evenodd"
                  fill="url(#PSgrad_55)"
                  d="M40.000,-0.000 C62.091,-0.000 80.000,17.908 80.000,40.000 C80.000,62.091 62.091,80.000 40.000,80.000 C17.909,80.000 0.000,62.091 0.000,40.000 C0.000,17.908 17.909,-0.000 40.000,-0.000 Z"
                />
              </svg>
              <img src="images/icon/icon7.svg" alt="" class="icon" />
            </div>
            <h2 class="main-title underline">
              <span>Kata Mereka</span><br />
              <span>Mengenai Kami.</span>
            </h2>
          </div>
          <!-- /.theme-title-one -->

          <div class="inner-container">
            <div class="main-content">
              <div class="classic-testimonial-slider">
                <div class="item">
                  <p>Senang bekerja sama dengan Tim Esteh Creative. Profil Banana Provider menjadi semakin menarik ditampilkan melalui video yang dibuatkan oleh Tim Esteh Creative.</p>
                  <h6 class="name">Nyuhani Prasasti</h6>
                  <span class="designation">CEO, Banana Provider</span>
                </div>
                <!-- /.item -->
                <div class="item">
                  <p>Aplikasi yang dibuatkan oleh Tim Esteh Creative sangat menguntungkan perusahaan kami. Kepercayaan pelanggan perusahaan kami semakin meningkat dengan adanya aplikasi mobile yang telah dibuatkan oleh Tim Esteh.</p>
                  <h6 class="name">Diko</h6>
                  <span class="designation">Asisten Vice President, CEI</span>
                </div>
                <!-- /.item -->
                <div class="item">
                  <p>Terima kasih Esteh Creative sudah membantu kami menganalisa data, sehingga kami bisa memetakan konten Youtube yang lebih tepat dan bermanfaat untuk target market Dunia Akademisi.</p>
                  <h6 class="name">Muhammad Khoiron</h6>
                  <span class="designation">Founder, Dunia Akademisi</span>
                </div>
                <!-- /.item -->
                <div class="item">
                  <p>Sangat puas dengan pelayanan yang diberikan Tim Esteh. Setiap konsultasi selalu disambut dengan ramah. Benar-benar memberikan kebahagiaan.</p>
                  <h6 class="name">Andi Indra Saputra Alamsyah</h6>
                  <span class="designation">Founder, Rumah Kardus Indonesia</span>
                </div>
                <!-- /.item -->
              </div>
            </div>
          </div>
          <!-- /.inner-container -->
        </div>
        <!-- /.container -->
      </div>
      <!-- /.testimonial-section-classic -->

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

      <!-- jQuery first, then Popper.js, then Bootstrap JS -->
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
      <!-- Tilt js -->
      <script src="vendor/tilt.jquery.js"></script>
      <!-- Fancybox -->
      <script src="vendor/fancybox/dist/jquery.fancybox.min.js"></script>

      <!-- Theme js -->
      <script src="js/theme.js"></script>
    </div>
    <!-- /.main-page-wrapper -->
  </body>
</html>
@endsection
