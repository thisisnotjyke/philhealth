<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('style.css') }}">
    <title>Home</title>
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

<!-- Features Section -->
<section id="features" class="features section">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
        
    </div><!-- End Section Title -->

    <div class="container">

        <div class="row gy-4 align-items-center features-item">
            <div class="col-lg-5 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
                <h3 class="gradient">MEMBERS</h3>
                <p>
                    This section features the different membership categories, premium payment, data amendment and other procedures that each type of member must know. We have custom-fit the information to ensure that we address the specific concerns of each of our member types
                </p>
                
            </div>
            <div class="col-lg-7 order-1 order-lg-2 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="100">
                <div class="image-stack">
                    <img src="/images/FAM.jpeg" alt="" class="stack-front">
                    <img src="/images/gree.jpg" alt="" class="stack-back">
                </div>
            </div>
        </div><!-- Features Item -->




        
        <div class="row gy-4 align-items-center features-item">
            <div class="col-lg-5 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
                <h3 class="gradient">BENEFITS</h3>
                <p>
                    This section features a variety of comprehensive health care services -from basic primary care to catastrophic packages to provide members and their families with the information they need on benefits and benefits availment. It includes eligibility requirements, coverage, general guidelines for specific diseases and selections criteria among others
                </p>
               
            </div>
            <div class="col-lg-7 order-1 order-lg-2 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="100">
                <div class="image-stack">
                    <img src="/images/benifits.jpg" alt="" class="stack-front">
                    <img src="/images/gree.jpg" alt="" class="stack-back">
                </div>
            </div>
        </div><!-- Features Item -->


        <div class="row gy-4 align-items-center features-item">
            <div class="col-lg-5 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
                <h3 class="gradient">ONLINE SERVICE</h3>
                <p>
            Considered the newest addition to our menu of electronic services, this section features the different access points
            that our stakeholders can tap to transact with us online. It includes registration, premium payment and reporting and
            even locating our offices nationwide.
                </p>
                
            </div>
            <div class="col-lg-7 order-1 order-lg-2 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="100">
                <div class="image-stack">
                    <img src="/images/ONLINE.jpg" alt="" class="stack-front">
                    <img src="/images/gree.jpg" alt="" class="stack-back">
                </div>
            </div>
        </div><!-- Features Item -->

        <div class="row gy-4 align-items-center features-item">
            <div class="col-lg-5 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
                <h3 class="gradient">OUR PARTNERS</h3>
                <p>
                    We forge partnerships with only the best in the industry to fulfill our mandate of providing all Filipinos with
                    accessible, available, acceptable and affordable health care services that will lead to better health outcomes and
                    improved quality of life
                </p>
        
            </div>
            <div class="col-lg-7 order-1 order-lg-2 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="100">
                <div class="image-stack">
                    <img src="/images/DOC.jpg" alt="" class="stack-front">
                    <img src="/images/gree.jpg" alt="" class="stack-back">
                </div>
            </div>
        </div><!-- Features Item -->
      
    </div>

</section><!-- /Features Section -->



<!-- ======= Clients Section ======= -->
<section id="clients" class="clients">
    <div class="container">

        <div class="row">

            <div class="col-lg-2 col-md-4 col-6">
                <img src="/images/doc1.jpg" class="img-fluid" alt="" data-aos="zoom-in">
            </div>

            <div class="col-lg-2 col-md-4 col-6">
                <img src="/images/doc2.jpg" class="img-fluid" alt="" data-aos="zoom-in"
                    data-aos-delay="100">
            </div>

            <div class="col-lg-2 col-md-4 col-6">
                <img src="/images/doc3.jpg" class="img-fluid" alt="" data-aos="zoom-in"
                    data-aos-delay="200">
            </div>

            <div class="col-lg-2 col-md-4 col-6">
                <img src="/images/doc4.jpg" class="img-fluid" alt="" data-aos="zoom-in"
                    data-aos-delay="300">
            </div>

            <div class="col-lg-2 col-md-4 col-6">
                <img src="/images/doc5.jpg" class="img-fluid" alt="" data-aos="zoom-in"
                    data-aos-delay="400">
            </div>

            <div class="col-lg-2 col-md-4 col-6">
                <img src="/images/doc1.jpg" class="img-fluid" alt="" data-aos="zoom-in"
                    data-aos-delay="500">
            </div>

        </div>

    </div>

    
</section><!-- End Clients Section -->

<!-- ======= Services Section ======= -->
<section id="services" class="services services">
    <div class="container" data-aos="fade-up">

        <div class="section-title">
            <h2 class="gradient"> <i>Quick Links</i></h2>
            <p>PhilHealth members availing of health care services in government hospitals as well as patients who are not even aware
            if they have PhilHealth coverage can be verified to facilitate availment of PhilHealth benefits.</p>
        </div>

        <div class="row">
            <div class="col-lg-4 col-md-6 icon-box" data-aos="zoom-in" data-aos-delay="100">
                
                <h4 class="title"><a href="https://www.philhealth.gov.ph/circulars/2024/">Circular</a></h4>
                <p class="description">Circulars serve to communicate important information, instructions, or changes to stakeholders such as healthcare providers, accredited facilities, PhilHealth members, and other entities involved in the Philippine healthcare system.</p>
            </div>
            <div class="col-lg-4 col-md-6 icon-box" data-aos="zoom-in" data-aos-delay="200">
               
                <h4 class="title"><a href="https://www.philhealth.gov.ph/advisories/2024/">Advisories</a></h4>
                <p class="description"> We help ensure awareness, understanding, and compliance with PhilHealth regulations and facilitate smooth operationswithin the Philippine healthcare system.</p>
            </div>
            <div class="col-lg-4 col-md-6 icon-box" data-aos="zoom-in" data-aos-delay="300">
                
                <h4 class="title"><a href="https://www.philhealth.gov.ph/news/">News</a></h4>
                <p class="description">News in PhilHealth serves to keep stakeholders informed about developments within the organization, its role in the healthcare system, and its impact on the Filipino population's access to health services and financial protection.</p>
            </div>
            <div class="col-lg-4 col-md-6 icon-box" data-aos="zoom-in" data-aos-delay="100">
               
                <h4 class="title"><a href="https://www.philhealth.gov.ph/joint_issuances/">Joint Inssurance</a></h4>
                <p class="description">The specifics of how joint insurance on PhilHealth operates would depend on the terms of the collaboration and the arrangements made between PhilHealth and the participating insurance providers or organizations.
</p>
            </div>
            <div class="col-lg-4 col-md-6 icon-box" data-aos="zoom-in" data-aos-delay="200">
    
                <h4 class="title"><a href="https://www.philhealth.gov.ph/ofclstmnts/2023/">Official Statement</a></h4>
                <p class="description"> We help ensure accountability, maintain public trust, and facilitate effective communication between PhilHealth andits stakeholders.</p>
            </div>
            <div class="col-lg-4 col-md-6 icon-box" data-aos="zoom-in" data-aos-delay="300">
           
                <h4 class="title"><a href="https://www.philhealth.gov.ph/suppliers/iaeb/index.htm">ITB</a></h4>
                <p class="description">This benefit covers expenses related to hospitalization, including room and board, laboratory tests, medicines, and professional fees, among others, for a specified number of days as stipulated in the PhilHealth coverage policies.</p>
            </div>

            <div class="col-12 md-6 icon-box " data-aos="zoom-in" data-aos-delay="300">
                
                <h4 class="title "><a href="https://www.philhealth.gov.ph/about_us/vacancies/2024/">Job Vacancies</a></h4>
                <p class="description ">These vacancies could range from administrative positions to healthcare professionals, IT specialists, finance  personnel, and more, depending on the needs of the organization at the time.</p>
            </div>
        </div>

    </div>
</section><!-- End Services Section -->



</main>

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
</footer><!-- End Footer -->

  <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    
</body>
</html>