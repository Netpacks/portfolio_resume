<?php
require '../controllers/profile.php';

?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Build your website with NetPacks, Create your dream with us || NetPacks</title>
  <meta content="Build your website with NetPacks, Create your dream with us || NetPacks" name="description">
  <meta content="Build your website with NetPacks, Create your dream with us || NetPacks" name="keywords">


  <meta name="author" content="<?php echo $webname; ?>">
  <meta name="googlebot" content="index, follow">
  <meta name="robots" content="index, follow">
 <!-- document-specific social tags -->
  <meta property="og:title" content="<?php echo $webname; ?> build your website easily">
   <meta name="twitter:title" content="<?php echo $webname; ?> build your website easily">
 <meta property="og:url" content="<?php echo  $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
 ?>">   
  <meta name="twitter:url" content="<?php echo  $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
 ?>">
  
  <meta property="og:description" content="<?php echo $description; ?>">
    <meta name="description" content="<?php echo $description; ?>">
  <meta name="twitter:description" content="<?php echo $description; ?>">


  <meta name="twitter:image" content="./zenter/uploads/<?php echo $webbanner; ?>">
 <meta property="og:image" content="./zenter/uploads/<?php echo $webbanner; ?>">

<!-- Favicons
    ================================================== -->
    <link rel="shortcut icon" href="./zenter/uploads/<?php echo  $weblogo; ?>" type="image/x-icon">
<link rel="apple-touch-icon" href="./zenter/uploads/<?php echo  $weblogo; ?>">
<link rel="apple-touch-icon" sizes="72x72" href="./zenter/uploads/<?php echo  $weblogo; ?>">
<link rel="apple-touch-icon" sizes="114x114" href="./zenter/uploads/<?php echo  $weblogo; ?>">

<!-- end duralMetal -->
  <!-- Vendor CSS Files -->
  <link href="./public/assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="./public/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="./public/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="./public/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="./public/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="./public/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="./public/assets/css/style.css" rel="stylesheet">
</head>

<body >

  <!-- ======= Mobile nav toggle button ======= -->
  <!-- <button type="button" class="mobile-nav-toggle d-xl-none"><i class="bi bi-list mobile-nav-toggle"></i></button> -->
  <i class="bi bi-list mobile-nav-toggle d-xl-none"></i>
  <!-- ======= Header ======= -->
  <header id="header" class="d-flex flex-column justify-content-center">

    <nav id="navbar" class="navbar nav-menu">
      <ul>
        <li><a href="#hero" class="nav-link scrollto active"><i class="bx bx-home"></i> <span>Home</span></a></li>
        <li><a href="#about" class="nav-link scrollto"><i class="bx bx-user"></i> <span>About</span></a></li>
        <li><a href="#resume" class="nav-link scrollto"><i class="bx bx-file-blank"></i> <span>Resume</span></a></li>
        <li><a href="#portfolio" class="nav-link scrollto"><i class="bx bx-book-content"></i> <span>Portfolio</span></a></li>
        <li><a href="#services" class="nav-link scrollto"><i class="bx bx-server"></i> <span>Services</span></a></li>
        <li><a href="#contact" class="nav-link scrollto"><i class="bx bx-envelope"></i> <span>Contact</span></a></li>
      </ul>
    </nav><!-- .nav-menu -->

  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex flex-column justify-content-center" style="background: url(./zenter/uploads/<?php echo $weblogo; ?>);   background-repeat: no-repeat; background-position: top;background-size: cover;">
    <div class="container" data-aos="zoom-in" data-aos-delay="100">
      <h1 style=" font-family:Old English Text MT;"><?php  echo $webname; ?></h1>
      <p>I'm <span class="typed" data-typed-items="WEB Designer, WEB Developer, Freelancer" style="font-family: algerian;"></span></p>
      <div class="social-links">
       
        <a href="<?php echo $twee; ?>" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="<?php echo $faceb; ?>" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="<?php echo $insta; ?>" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="<?php echo $wats; ?>" class="google-plus"><i class="bx bxl-github"></i></a>
        <a href="<?php echo $linke; ?>" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>About</h2> 
        <p> My name is Crown thimothy, I am fresher but i have some succesfull project in my git account and some works for company with both
frontend and back end,  I will be happy to join Your company to gain more experience
</p>        </div>

        <div class="row">
          <div class="col-lg-4">
            <img src="./zenter/uploads/<?php echo $profile; ?>" class="img-fluid" alt="">
          </div>
          <div class="col-lg-8 pt-4 pt-lg-0 content">
            <h3>Frontend &amp; Backend Web Developer.</h3>
            <p class="fst-italic">
           I'm passionate about making beautiful and functional websites for every client.  I'm specialty is on working with you
            to develop a website strategy so that your website not only looks great, but works great too.
            </p>
            <div class="row">
              <div class="col-lg-6">
                <ul>
                  <li><i class="bi bi-chevron-right"></i> <strong>Birthday:</strong> <span>28/2/2001</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Website:</strong> <span>www.xplanet.tech.blog</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Phone:</strong> <span><?php echo $phone;?></span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>City:</strong> <span><?php echo $address; ?></span></li>
                </ul>
              </div>
              <div class="col-lg-6">
                <ul>
                  <li><i class="bi bi-chevron-right"></i> <strong>Age:</strong> <span>21</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Degree:</strong> <span> self trained </span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Mail:</strong> <span><?php echo $email;  ?></span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Freelance:</strong> <span>Available</span></li>
                </ul>
              </div>
            </div>
            <p>
            I'm ready to your services every time. Whether it is time to plan, design,
or implement IT strategies and critical IT infrastructure. Using proven methodologies and frameworks i can design, build, and best assess
the best dynamic IT infrastructure solution for your needs. </p>
<button class="btn btn-outline-primary p-2 shadow m-2"><a href="./zenter/docu/<?php echo $cv; ?>" download>Download My Resume</a></button>

          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Facts Section ======= -->
    <section id="facts" class="facts">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Facts</h2>
<strong><span style="font-family:Old English Text MT;">I</span> am fresher but i have some succesfull project in my git account and some works for some company with both
frontend and back end.</strong>        </div>

        <div class="row">

          <div class="col-lg-3 col-md-6">
            <div class="count-box">
              <i class="bi bi-emoji-smile"></i>
              <span data-purecounter-start="0" data-purecounter-end="1" data-purecounter-duration="1" class="purecounter"></span>
              <p>Happy Clients</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-md-0">
            <div class="count-box">
              <i class="bi bi-journal-richtext"></i>
              <span data-purecounter-start="0" data-purecounter-end="30" data-purecounter-duration="1" class="purecounter"></span>
              <p>Projects</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
            <div class="count-box">
              <i class="bi bi-headset"></i>
              <span data-purecounter-start="0" data-purecounter-end="24" data-purecounter-duration="1" class="purecounter"></span>
              <p>Hours Of Support</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
            <div class="count-box">
              <i class="bi bi-award"></i>
              <span data-purecounter-start="0" data-purecounter-end="0" data-purecounter-duration="1" class="purecounter"></span>
              <p>Awards</p>
            </div>
          </div>



        </div>

      </div>
    </section><!-- End Facts Section -->

    <!-- ======= Skills Section ======= -->
    <section id="skills" class="skills section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Skills</h2>
<p>Crown thimothy {{<?php echo $webname; ?>}} Is A Web Developer That Base On FrontEnd And Backend Developement It Has Been Work Hard For More Than 4 Years Now Mostly Work With his Developer guys but have never work with any company</p>        </div>

        <div class="row skills-content">

          <div class="col-lg-6">

          <div class="progress">
              <span class="skill">HTML <i class="val">100%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">CSS <i class="val">100%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>
            <div class="progress">
              <span class="skill">BOOTSTRAP <i class="val">100%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>    <div class="progress">
              <span class="skill">JQUERY <i class="val">100%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">JavaScript <i class="val">85%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

          </div>

          <div class="col-lg-6">

            <div class="progress">
              <span class="skill">PHP <i class="val">95%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">Node.js <i class="val">70%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">Ajax <i class="val">95%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

          </div>

        </div>

      </div>
    </section><!-- End Skills Section -->

    <!-- ======= Resume Section ======= -->
    <section id="resume" class="resume">
      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h2>Resume</h2>
<p>This is all about <?php echo $webname; ?></p> 
       </div>
        <div class="row">
          <div class="col-lg-6">
            <h3 class="resume-title">Sumary</h3>
            <div class="resume-item pb-0">
              <h4>Brandon Johnson</h4>
              <p><em>I deliver rich user experience through artistically created user interface design that stands out amongst millions of other websites and applications, with the Use of trend way of development,  I will be happy to join any company to gain more experience </em></p>
              <ul>
                <li><?php echo $address;?></li>
                <li><?php echo $phone;?></li>
                <li><?php echo $email;?></li>
              </ul>
            </div>
            <h3 class="resume-title">Education</h3>
            <div class="resume-item">
              <h4>Study of Html,Js &amp; Css Design</h4>
              <h5>2018 - 2019</h5>
              <p><em>Ib City Accademy</em></p>
<p>  I start web development in my secondary school when Google service came to my school to teach us web developement then.
</p>            </div>
            <div class="resume-item">
              <h4>Study of Jquery,Php &amp; Ajax Design</h4>
              <h5>2019 - 2020</h5>
              <p><em>W3School Training and Dbright Tech</em></p>
<p>Study php after understanding web design and i go for jquery to make my work fast and ajax for get,put data</p>            </div>
          </div>
          <div class="col-lg-6">
            <h3 class="resume-title">On study web security, Node.js, Django and more to make me stronger</h3>
            <div class="resume-item">
              <h4>standard Web design specialist</h4>
              <h5>2020 - Present</h5>
              <p><em>Professionals trainings Courses (PTC)</em></p>
              <ul>
<li>On Study mobile app </li>          
<li>On Study Django for creating more secure backend for government project purpose and more</li>
<li>On Study Node for Making my Eccomerce developenment Easy and fast </li>
<li>On Study React Native to create some fancy mobile project</li>              </ul>
            </div>
               </div>
        </div>
      </div>
    </section><!-- End Resume Section -->
    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio section-bg">
      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h2>Portfolio</h2>
        </div>
        <div class="row">
          <div class="col-lg-12 d-flex justify-content-center" data-aos="fade-up" data-aos-delay="100">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-project">Fullstack</li>
              <li data-filter=".filter-amazing">Freestyle</li>
              <li data-filter=".filter-Blog">Blogs</li>
            </ul>
          </div>
        </div>
        
        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">


        <?php


$Sci_con=$conn->prepare("SELECT * FROM projects order by id DESC");
$Sci_con->execute();
$c = $Sci_con->rowCount();
if ($c < 1) {
  # code...
  echo "<center><h3 style='font-family:algerian; color:red;'>No project for Now!</h3></center>";
}
foreach ($Sci_con as $Sci_col) {

    $Sci_img = $Sci_col['banner'];
    $folder = $Sci_col['folder'];
    $conte = substr($Sci_col['proNmae'],0,120);
    $type = $Sci_col['cat'];






?>


          <div class="col-lg-4 col-md-6 portfolio-item filter-<?php echo $type; ?>">
            <div class="portfolio-wrap">
              <img src="./zenter/uploads/<?php echo $Sci_img; ?>" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4><?php echo $conte; ?></h4>
                <p><?php echo $type; ?></p>
                <div class="portfolio-links">
                  <a href="./zenter/uploads/<?php echo $Sci_img; ?>" data-gallery="portfolioGallery" class="portfolio-lightbox" title="<?php echo $conte; ?>"><i class="bx bx-plus"></i></a>
                  <a href='./zenter/<?php echo $folder."/".$folder; ?>' class="portfolio-details-lightbox" data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>






          <?php
}



$Sci_con=$conn->prepare("SELECT * FROM blog order by id ");
$Sci_con->execute();
foreach ($Sci_con as $Sci_col) {

    $Sci_id = $Sci_col['id'];
    $Sci_img1 = $Sci_col['img1'];
    $Sci_topic = substr($Sci_col['topic'],0,30);
    $Sci_content = substr($Sci_col['textbox'],0,120);
    $Sci_date = $Sci_col['date'];
    $type = 'Blog';

?> 





<div class="col-lg-4 col-md-6 portfolio-item filter-<?php echo $type; ?>">
            <div class="portfolio-wrap">
              <img src="./zenter/uploads/<?php echo $Sci_img1; ?>" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4><?php echo $Sci_topic; ?></h4>
                <p><?php echo $Sci_content; ?></p>
                <div class="portfolio-links">
                  <a href="./zenter/uploads/<?php echo $Sci_img1; ?>" data-gallery="portfolioGallery" class="portfolio-lightbox" title="<?php echo $Sci_topic; ?>"><i class="bx bx-plus"></i></a>
                  <a href='./controllers/readmode.php?id=<?php echo $Sci_id; ?>' class="portfolio-details-lightbox"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>





<?php





}


?>

        </div>

      </div>
    </section><!-- End Portfolio Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Services</h2>
        </div>

        <div class="row">

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box iconbox-blue">
              <div class="icon">
                <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                  <path stroke="none" stroke-width="#f5f5f5" d="M300,521.0016835830174C376.1290562159157,517.8887921683347,466.0731472004068,529.7835943286574,510.70327084640275,468.03025145048787C554.3714126377745,407.6079735673963,508.03601936045806,328.9844924480964,491.2728898941984,256.3432110539036C474.5976632858925,184.082847569629,479.9380746630129,96.60480741107993,416.23090153303,58.64404602377083C348.86323505073057,18.502131276798302,261.93793281208167,40.57373210992963,193.5410806939664,78.93577620505333C130.42746243093433,114.334589627462,98.30271207620316,179.96522072025542,76.75703585869454,249.04625023123273C51.97151888228291,328.5150500222984,13.704378332031375,421.85034740162234,66.52175969318436,486.19268352777647C119.04800174914682,550.1803526380478,217.28368757567262,524.383925680826,300,521.0016835830174"></path>
                </svg>
                <i class="bx bxl-dribbble"></i>
              </div>
              <h4><a href="./public/">Team work</a></h4>
<p>I like to work with team and donate relevante idea</p>            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box iconbox-orange ">
              <div class="icon">
                <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                  <path stroke="none" stroke-width="#f5f5f5" d="M300,582.0697525312426C382.5290701553225,586.8405444964366,449.9789794690241,525.3245884688669,502.5850820975895,461.55621195738473C556.606425686781,396.0723002908107,615.8543463187945,314.28637112970534,586.6730223649479,234.56875336149918C558.9533121215079,158.8439757836574,454.9685369536778,164.00468322053177,381.49747125262974,130.76875717737553C312.15926192815925,99.40240125094834,248.97055460311594,18.661163978235184,179.8680185752513,50.54337015887873C110.5421016452524,82.52863877960104,119.82277516462835,180.83849132639028,109.12597500060166,256.43424936330496C100.08760227029461,320.3096726198365,92.17705696193138,384.0621239912766,124.79988738764834,439.7174275375508C164.83382741302287,508.01625554203684,220.96474134820875,577.5009287672846,300,582.0697525312426"></path>
                </svg>
                <i class="bx bx-file"></i>
              </div>
              <h4><a href="./public/">Clean writing code</a></h4>
<p>I make shure that my code is well arrange with clear comment so taht it will easy for user to use</p>            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon-box iconbox-pink">
              <div class="icon">
                <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                  <path stroke="none" stroke-width="#f5f5f5" d="M300,541.5067337569781C382.14930387511276,545.0595476570109,479.8736841581634,548.3450877840088,526.4010558755058,480.5488172755941C571.5218469581645,414.80211281144784,517.5187510058486,332.0715597781072,496.52539010469104,255.14436215662573C477.37192572678356,184.95920475031193,473.57363656557914,105.61284051026155,413.0603344069578,65.22779650032875C343.27470386102294,18.654635553484475,251.2091493199835,5.337323636656869,175.0934190732945,40.62881213300186C97.87086631185822,76.43348514350839,51.98124368387456,156.15599469081315,36.44837278890362,239.84606092416172C21.716077023791087,319.22268207091537,43.775223500013084,401.1760424656574,96.891909868211,461.97329694683043C147.22146801428983,519.5804099606455,223.5754009179313,538.201503339737,300,541.5067337569781"></path>
                </svg>
                <i class="bx bx-tachometer"></i>
              </div>
              <h4><a href="./public/">Delivery</a></h4>
<p>Creating complete website is something fast and easy for me because have learn typing of books before starting programing and i use tool like live server for vscode to reduce stress of reloading</p>            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box iconbox-yellow">
              <div class="icon">
                <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                  <path stroke="none" stroke-width="#f5f5f5" d="M300,503.46388370962813C374.79870501325706,506.71871716319447,464.8034551963731,527.1746412648533,510.4981551193396,467.86667711651364C555.9287308511215,408.9015244558933,512.6030010748507,327.5744911775523,490.211057578863,256.5855673507754C471.097692560561,195.9906835881958,447.69079081568157,138.11976852964426,395.19560036434837,102.3242989838813C329.3053358748298,57.3949838291264,248.02791733380457,8.279543830951368,175.87071277845988,42.242879143198664C103.41431057327972,76.34704239035025,93.79494320519305,170.9812938413882,81.28167332365135,250.07896920659033C70.17666984294237,320.27484674793965,64.84698225790005,396.69656628748305,111.28512138212992,450.4950937839243C156.20124167950087,502.5303643271138,231.32542653798444,500.4755392045468,300,503.46388370962813"></path>
                </svg>
                <i class="bx bx-layer"></i>
              </div>
              <h4><a href="./public/">Folder arrangement</a></h4>
<p>
  my Project have been arranged and schedule seperately you can check out my works in order to easty for group to use my scripts
</p>            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box iconbox-red">
              <div class="icon">
                <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                  <path stroke="none" stroke-width="#f5f5f5" d="M300,532.3542879108572C369.38199826031484,532.3153073249985,429.10787420159085,491.63046689027357,474.5244479745417,439.17860296908856C522.8885846962883,383.3225815378663,569.1668002868075,314.3205725914397,550.7432151929288,242.7694973846089C532.6665558377875,172.5657663291529,456.2379748765914,142.6223662098291,390.3689995646985,112.34683881706744C326.66090330228417,83.06452184765237,258.84405631176094,53.51806209861945,193.32584062364296,78.48882559362697C121.61183558270385,105.82097193414197,62.805066853699245,167.19869350419734,48.57481801355237,242.6138429142374C34.843463184063346,315.3850353017275,76.69343916112496,383.4422959591041,125.22947124332185,439.3748458443577C170.7312796277747,491.8107796887764,230.57421082200815,532.3932930995766,300,532.3542879108572"></path>
                </svg>
                <i class="bx bx-slideshow"></i>
              </div>
              <h4><a href="./public/">Responsive site</a></h4>
<p>I build Responsively, Responsive site gat many things to do with Seo and atract user attension. </p>            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon-box iconbox-teal">
              <div class="icon">
                <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                  <path stroke="none" stroke-width="#f5f5f5" d="M300,566.797414625762C385.7384707136149,576.1784315230908,478.7894351017131,552.8928747891023,531.9192734346935,484.94944893311C584.6109503024035,417.5663521118492,582.489472248146,322.67544863468447,553.9536738515405,242.03673114598146C529.1557734026468,171.96086150256528,465.24506316201064,127.66468636344209,395.9583748389544,100.7403814666027C334.2173773831606,76.7482773500951,269.4350130405921,84.62216499799875,207.1952322260088,107.2889140133804C132.92018162631612,134.33871894543012,41.79353780512637,160.00259165414826,22.644507872594943,236.69541883565114C3.319112789854554,314.0945973066697,72.72355303640163,379.243833228382,124.04198916343866,440.3218312028393C172.9286146004772,498.5055451809895,224.45579914871206,558.5317968840102,300,566.797414625762"></path>
                </svg>
                <i class="bx bx-arch"></i>
              </div>
              <h4><a href="./public/">Remote / Office Work</a></h4>
<p>Ican work remoetly or Office depend on location and company</p>            </div>
          </div>

        </div>

      </div>
    </section><!-- End Services Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Contact</h2>
        </div>

        <div class="row mt-1">

          <div class="col-lg-4">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Location:</h4>
                <p><?php echo $address; ?></p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p><?php echo $email; ?></p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Call:</h4>
                <p><?php echo $phone; ?></p>
              </div>

            </div>

          </div>

          <div class="col-lg-8 mt-5 mt-lg-0">

            <form action="./controllers/contact.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="mail" id="email" placeholder="Your Email" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="phone" id="subject" placeholder="Phone" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="sms" rows="5" placeholder="Message" required></textarea>
              </div>
              <div class="my-3">
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

  </main>

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <h3>Crown thim <?php echo $webname;?></h3>
      <p>I build ,Design and Solve Web issues.</p>
      <div class="social-links">
        
      <a href="<?php echo $twee; ?>" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="<?php echo $faceb; ?>" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="<?php echo $insta; ?>" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="<?php echo $wats; ?>" class="google-plus"><i class="bx bxl-github"></i></a>
        <a href="<?php echo $linke; ?>" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
      <div class="copyright">
        &copy; Copyright <strong><span><?php echo $webname;?></span></strong>. All Rights Reserved
      </div>
     
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="./public/assets/vendor/purecounter/purecounter.js"></script>
  <script src="./public/assets/vendor/aos/aos.js"></script>
  <script src="./public/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="./public/assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="./public/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="./public/assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="./public/assets/vendor/typed.js/typed.min.js"></script>
  <script src="./public/assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="./public/assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="./public/assets/js/main.js"></script>  <script src="./public/assets/js/jquery-3.6.0.min.js"></script>


</body>

</html>