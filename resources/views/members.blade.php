<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('style.css') }}">
    <title>Our Members</title>
</head>

<body>
    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top">
        <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

           <a href="" class="logo d-flex align-items-center">
                <img src="/images/phlogo.png" alt="" class="image">
                <span class=""><img src="/images/Bagong_Pilipinas_logo.png" alt="" class="pl-5"></span>
            </a>

            <nav id="navbar" class="navbar ">
                <ul>

                    <li class="nav-item"><a class="nav-link scrollto" href="/">Home</a></li>
                    <li class="nav-item"><a class="nav-link scrollto" href="/members">Our Members</a></li>
                    <li class="dropdown"><a href="about"><span class="no">About Us</span> <i
                                class="bi bi-chevron-down"></i></a>
                        <ul class="no">
                            <h4> <i class="px-2 gradient1"> Our Profile</i> </h4>
                            <li class="nav-item"><a class="nav-link" href="https://www.philhealth.gov.ph/about_us/history.php">History</a></li>
                            <li class="nav-item"><a class="nav-link" href="https://www.philhealth.gov.ph/about_us/mandate.php">Agency’s Mandate and
                                    Functions</a></li>
                            <li class="nav-item"><a class="nav-link" href="https://www.philhealth.gov.ph/about_us/bod.php">Board of Directors</a></li>
                            <li class="nav-item"><a class="nav-link" href="https://www.philhealth.gov.ph/about_us/eos.php">Executive Officers</a></li>
                            <li class="nav-item"><a
                                    href="https://www.philhealth.gov.ph/about_us/PhilHealth'sOrganizationalStructure.pdf">Organizational
                                    Structure</a></li>
                            <li class="nav-item"><a class="nav-link" href="https://www.philhealth.gov.ph/about_us/VisualBrandIdentityElements.pdf">Visual
                                    Brand Identity Elements</a></li>
                            <li class="nav-item"><a class="nav-link" href="https://www.philhealth.gov.ph/about_us/transparency/#iso">ISO Certification</a>
                            </li>
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
            <h1>The <i><span class="gradient"> Philippines</span></i> best</h1>
            <h1 class=" pt-3">partner in <i><span class="gradient"> health</span></i> </h1>
            <h2>View health as an investment not an expense.
                <span>-John Quetch</span>
            </h2>
            <a class="nav-link" href="/about" class="btn-get-started scrollto">Get Started</a>
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
                                PhilHealth, a government-owned organization, provides medical assistance and health
                                benefits to Filipinos regardless of
                                social status helping alleviate the medical financial burden.
                            </p>
                            <div class="text-center">
                                <a class="nav-link" href="#" class="more-btn">Learn More <i class="bx bx-chevron-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8 d-flex align-items-stretch">
                        <div class="icon-boxes d-flex flex-column justify-content-center">
                            <div class="row ">
                                <div class="col-xl-4 d-flex align-items-stretch ">
                                    <div class=" icon-box mt-4 mt-xl-0">
                                        <i class="bx bx-receipt"></i>
                                        <h4>Premium-paying members</h4>
                                        <p>These individuals actively contribute regular payments, or premiums, to PhilHealth in exchange for access to its health
                                        insurance services. They are usually employed individuals whose premiums are deducted from their salaries or self-paying
                                        individuals who remit their contributions directly to PhilHealth.

                                        </p>
                                    </div>
                                </div>
                                <div class="col-xl-4 d-flex align-items-stretch">
                                    <div class="icon-box mt-4 mt-xl-0">
                                        <i class="bx bx-cube-alt"></i>
                                        <h4>Health insurance participants</h4>
                                        <p>This term encompasses individuals who participate in PhilHealth's health insurance program by paying premiums or fees.
                                        They are entitled to various health benefits and services provided by PhilHealth, including coverage for
                                        hospitalization, consultations, and other medical expenses, depending on the terms and conditions of their membership.
                                        </p>
                                    </div>
                                </div>
                                <div class="col-xl-4 d-flex align-items-stretch">
                                    <div class="icon-box mt-4 mt-xl-0">
                                        <i class="bx bx-images"></i>
                                        <h4>Fee-paying beneficiaries</h4>
                                        <p>These are individuals who pay fees or contributions to PhilHealth to become eligible for health insurance coverage and
                                        benefits. They are considered beneficiaries of PhilHealth's services and can access healthcare facilities and services
                                        covered by PhilHealth upon payment of the required fees or premiums..</p>
                                    </div>
                                </div>
                            </div>
                        </div><!-- End .content-->
                    </div>
                </div>

            </div>
        </section><!-- End Why Us Section -->

        <section id="features" class="features section">
        
            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2 class="gradient">The Contributors On PhilHealth</h2>
                <p>Contributors on PhilHealth are individuals who actively pay premiums or fees to avail themselves of the health insurance
                coverage provided by PhilHealth.</p>
            </div><!-- End Section Title -->
        
            <div class="container">
        
                <div class="row gy-4 align-items-center features-item">
                    <div class="col-lg-5 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
                        <h3 class="gradient">Direct Contributors</h3>
                        <p>
                            PhilHealth refer to individuals who pay their health insurance premiums directly to PhilHealth.These contributors include employed individuals who have their premiums deducted from their salaries by their employers,
                            as well as self-paying individuals such as self-employed professionals, freelancers, and voluntary members who remit
                            their premiums to PhilHealth on their own.
                        </p>
                        <ul class="gradient1">

                            <li class="nav-item">Employees with formal employment</li>
                            <li class="nav-item">Kasambahays</li>
                            <li class="nav-item">Self-earning individuals; Professional practitioners</li>
                            <li class="nav-item">Overseas Filipino Workers</li>
                            <li class="nav-item">Filipinos living abroad and those with dual citizenship</li>
                            <li class="nav-item">Lifetime members</li>
                            <li class="nav-item">All Filipinos aged 21 years and above with capacity to pay</li>
                        </ul>
                       
                    </div>
                    <div class="col-lg-7 order-1 order-lg-2 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="100">
                        <div class="image-stack">
                            <img src="/images/DOC.jpg" alt="" class="stack-front">
                            <img src="/images/employyee.jpg" alt="" class="stack-back">
                        </div>
                    </div>
                </div><!-- Features Item -->
        
                <div class="row gy-4 align-items-stretch justify-content-between features-item ">
                    <div class="col-lg-6 d-flex align-items-center features-img-bg" data-aos="zoom-out">
                        <img src="/images/FAM.jpeg" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-5 d-flex justify-content-center flex-column" data-aos="fade-up">
                        <h3>Indirect Contributors </h3>
                        <p>PhilHealth are individuals who do not directly pay their health insurance premiums to PhilHealth but still benefit from
                        its services.These contributors typically include dependents of direct contributors, such as spouses, children, and parents, whose
                        health insurance coverage is supported by the premiums paid by the primary member.</p>
                        <ul class="gradient1">
                            <li class="nav-item"><i class="bi bi-check"></i> <span>Indigents identified by the DSWD</span></li>
                            <li class="nav-item"><i class="bi bi-check"></i><span>Beneficiaries of Pantawid Pamilyang Pilipino Program</span></li>
                            <li class="nav-item"><i class="bi bi-check"></i> <span>Senior citizens</span>.</li>
                            <li class="nav-item"><i class="bi bi-check"></i> <span>Persons with disabilit</span>.</li>
                            <li class="nav-item"><i class="bi bi-check"></i> <span>Sangguniang Kabataan officials</span>.</li>
                            <li class="nav-item"><i class="bi bi-check"></i> <span>Previously identified at point-of-service / sponsored by LGUs</span>.</li>
                            <li class="nav-item"><i class="bi bi-check"></i> <span>Filipinos aged 21 years old and above without capacity to pay premiums</span>.</li>
                        </ul>
                       
                    </div>
                </div><!-- Features Item -->
        
            </div>
        
        </section><!-- /Features Section -->


        

      


    </main>

    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">



        <div class="footer-top">
            <div class="container">
                <div class="row gy-4">
                    <div class="col-lg-5 col-md-12 footer-info">
                        <a class="nav-link" href="index" class="logo d-flex align-items-center">
                            <img src="/images/phlogo.png" alt="">

                        </a>


                        <p>“Health is a state of complete physical, mental and social well-being and not merely the
                            absence of disease or
                            infirmity.” – World Health Organization.</p>

                    </div>

                    <div class="col-lg-2 col-6 footer-links">
                        <h4 class="gradient">Useful Links</h4>
                        <ul>
                            <li class="nav-item"><i class="bi bi-chevron-right"></i> <a class="nav-link" href="#">Home</a></li>
                            <li class="nav-item"><i class="bi bi-chevron-right"></i> <a class="nav-link" href="#">About us</a></li>
                            <li class="nav-item"><i class="bi bi-chevron-right"></i> <a class="nav-link" href="#">Services</a></li>
                            <li class="nav-item"><i class="bi bi-chevron-right"></i> <a class="nav-link" href="#">Terms of service</a></li>
                            <li class="nav-item"><i class="bi bi-chevron-right"></i> <a class="nav-link" href="#">Privacy policy</a></li>
                        </ul>
                    </div>



                    <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
                        <h4 class="gradient">Contact Us</h4>
                        <p>
                            Citystate Centre, <br>
                            709 Shaw Boulevard 1603<br>
                            Pasig City <br><br>
                            <strong>Phone:</strong> Smart: 0998-857-2957; 0968-865-4670 Globe: 0917-127-5987;
                            0917-110-9812<br>
                            <strong>Email:</strong> actioncenter@philhealth.gov.ph<br>
                        </p>

                    </div>

                </div>
            </div>
        </div>

        <div class="container">

            <div class="copyright">

                <strong><span>© 2014 Philippine Health Insurance Corporation | Citystate Centre, 709 Shaw Boulevard 1603
                        Pasig City</span></strong>
            </div>

        </div>
    </footer><!-- End Footer -->









   <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>

</body>

</html>