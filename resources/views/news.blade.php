<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('style.css') }}">
    <title>News</title>
</head>
<body>
    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top">
        <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
    
            <a href="" class="logo d-flex align-items-center">
                <img src="/images/phlogo.png" alt=""  class="image">
                <span class=""><img src="/images/Bagong_Pilipinas_logo.png" alt="" class="pl-5"></span>
            </a>
    
            <nav id="navbar" class="navbar ">
                <ul>
                    
                    <li class="nav-item"><a class="nav-link scrollto" href="/">Home</a></li>
                    <li class="nav-item"><a class="nav-link scrollto" href="/members">Our Members</a></li>
                    <li class="dropdown"><a href="about"><span class="no">About Us</span> <i class="bi bi-chevron-down"></i></a>
                        <ul class="no">
                            <h4> <i class="px-2 gradient1"> Our Profile</i>  </h4>
                            <li class="nav-item"><a href="https://www.philhealth.gov.ph/about_us/history.php">History</a></li>
                            <li class="nav-item"><a href="https://www.philhealth.gov.ph/about_us/mandate.php">Agency’s Mandate and Functions</a></li>
                            <li class="nav-item"><a href="https://www.philhealth.gov.ph/about_us/bod.php">Board of Directors</a></li>
                            <li class="nav-item"><a href="https://www.philhealth.gov.ph/about_us/eos.php">Executive Officers</a></li>
                            <li class="nav-item"><a href="https://www.philhealth.gov.ph/about_us/PhilHealth'sOrganizationalStructure.pdf">Organizational Structure</a></li>
                            <li class="nav-item"><a href="https://www.philhealth.gov.ph/about_us/VisualBrandIdentityElements.pdf">Visual Brand Identity Elements</a></li>
                            <li class="nav-item"><a href="https://www.philhealth.gov.ph/about_us/transparency/#iso">ISO Certification</a></li>                
                        </ul>
                    </li>
                    <li class="nav-item"><a class="nav-link scrollto" href="/partners">Our Partners</a></li>
                    <li class="nav-item"><a class="nav-link scrollto" href="/service">Online Services</a></li>
                    <li class="nav-item"><a class=" nav-link scrollto" href="/downloads">Downloads</a></li>
                    <li class="nav-item"><a class=" nav-link scrollto" href="/news">News</a></li>
                </ul>

                
                <i class="bi bi-list mobile-nav-toggle"></i>
                <div class=" px-3 search-bar">
                    <form class="search-form d-flex align-items-center" method="POST" action="#">
                        <input type="text" name="query" placeholder="Search" title="Enter search keyword">
                        <button type="submit" title="Search"><i class="bi bi search"></i></button>
                    </form>
                </div>
            </nav><!-- .navbar -->
    
        </div>
    </header><!-- End Header -->

    </br>
    </br>
   
    


    <!-- ======= Hero Section ======= -->
<section id="hero1" class="d-flex align-items-center ">
    <div class="container  mt-4 mt-xl-0">
        <h1>The  <i><span class="gradient"> Philippines</span></i> best</h1>
        <h1 class=" pt-3">partner in  <i><span class="gradient"> health</span></i> </h1>
        <h2>View health as an investment not an expense.
          <span>-John Quetch</span></h2>
        <a href="/about" class="btn-get-started scrollto">Get Started</a>
    </div>
</section><!-- End Hero -->
    
<main id="main">
<!-- ======= Why Us Section ======= -->
<section id="why-us" class="why-us">
    <div class="container">

        <div class="row">
            <div class="col-lg-4 d-flex align-items-stretch">
                <div class="content">
                    <h3 class="text-center">Why Choose Philhealth?</h3>
                    <p class="text-center">
                        PhilHealth, a government-owned organization, provides medical assistance and health benefits to Filipinos regardless of
                        social status helping alleviate the medical financial burden.
                    </p>
                    <div class="text-center">
                        <a href="#" class="more-btn">Learn More <i class="bx bx-chevron-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-8 d-flex align-items-stretch">
                <div class="icon-boxes d-flex flex-column justify-content-center">
                    <div class="row ">
                        <div class="col-xl-4 d-flex align-items-stretch ">
                            <div class=" icon-box mt-4 mt-xl-0">
                                <i class="bx bx-receipt"></i>
                                <h4>Increased Utilization Based on Need</h4>
                                <p>It emphasizes prioritizing those in greatest need to ensure fair and equitable distribution of resources.

                                </p>
                            </div>
                        </div>
                        <div class="col-xl-4 d-flex align-items-stretch">
                            <div class="icon-box mt-4 mt-xl-0">
                                <i class="bx bx-cube-alt"></i>
                                <h4>Higher Risk Protection</h4>
                                <p>The provision of insurance or financial coverage specifically tailored to mitigate risks associated with higher-risk
                                activities.
                                </p>
                            </div>
                        </div>
                        <div class="col-xl-4 d-flex align-items-stretch">
                            <div class="icon-box mt-4 mt-xl-0">
                                <i class="bx bx-images"></i>
                                <h4>Quality Health Care Services</h4>
                                <p>Aim to promote and maintain the health and well-being of individuals and populations while respecting their needs,
                                 and rights.</p>
                            </div>
                        </div>
                    </div>
                </div><!-- End .content-->
            </div>
        </div>

    </div>
</section><!-- End Why Us Section -->

<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
            aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
            aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
            aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="/images/Simula2023_lschemicstroke.jpg" class="d-block w-100" alt="..." width="697" height="290">
        </div>
        <div class="carousel-item">
            <img src="/images/konpckg_bnnr03.jpg" class="d-block w-100" alt="..." width="697" height="290">
        </div>
        <div class="carousel-item">
            <img src="/images/Dagdag30.jpg" class="d-block w-100" alt="..."width="697" height="290">
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
        data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
        data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>
</br>
</br>
    <!-- about section starts -->
    <section class="about section-padding" id="about">
          <div class="col-lg-8 col-md-12 col-12 ps-lg-5 mt-md-5">
            <div class="about-text-center">
              <h2><b>CURRENT NEWS ITEMS</b></h2>
            </div>
          </div>
        </div>
    </section>
    <!-- about section Ends -->
    <hr>
<!--swipe-->
<section class="about section-padding" id="about">
  <div class="container">
    @foreach($news as $news) 
    <div class="row">
      <div class="col-lg-4 col-md-12 col-12">
        <div class="about-img pt-5">
          <img alt="" class="img-fluid rounded-3" src="{{ asset('storage/images/' . $news->image) }}" />
        </div>
      </div>
      <div class="col-lg-8 col-md-12 col-12 ps-lg-5 mt-md-5">
        <div class="about-text">
          <h2>{{ $news->date }}</h2>
          <br>
          <br>
          <p>{{ $news->description }}</p>
        </div>
      </div>
    </div>

    <br>
    @endforeach
  </div>
</section>

<!--swipe ends-->

</break>

<!-- ======= Footer ======= -->
<footer id="footer" class="footer">

   

    <div class="footer-top">
        <div class="container">
            <div class="row gy-4">
                <div class="col-lg-5 col-md-12 footer-info">
                    <a href="index" class="logo d-flex align-items-center">
                        <img src="/images/phlogo.png" alt="">
                       
                    </a>
                   
                  
                    <p>“Health is a state of complete physical, mental and social well-being and not merely the absence of disease or
                    infirmity.” – World Health Organization.</p>
                    
                </div>

                <div class="col-lg-2 col-6 footer-links">
                    <h4 class="gradient">Useful Links</h4>
                    <ul>
                        <li class="nav-item"><i class="bi bi-chevron-right"></i> <a href="#">Home</a></li>
                        <li class="nav-item"><i class="bi bi-chevron-right"></i> <a href="#">About us</a></li>
                        <li class="nav-item"><i class="bi bi-chevron-right"></i> <a href="#">Services</a></li>
                        <li class="nav-item"><i class="bi bi-chevron-right"></i> <a href="#">Terms of service</a></li>
                        <li class="nav-item"><i class="bi bi-chevron-right"></i> <a href="#">Privacy policy</a></li>
                    </ul>
                </div>

               

                <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
                    <h4 class="gradient">Contact Us</h4>
                    <p>
                        Citystate Centre, <br>
                        709 Shaw Boulevard 1603<br>
                    Pasig City <br><br>
                        <strong>Phone:</strong> Smart: 0998-857-2957; 0968-865-4670 Globe: 0917-127-5987; 0917-110-9812<br>
                        <strong>Email:</strong> actioncenter@philhealth.gov.ph<br>
                    </p>

                </div>

            </div>
        </div>
    </div>

    <div class="container">
        
        <div class="copyright">
          
             <strong><span>© 2014 Philippine Health Insurance Corporation | Citystate Centre, 709 Shaw Boulevard 1603 Pasig City</span></strong>
        </div>
       
    </div>
</footer>
<!-- End Footer -->

  <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    
</body>
</html>