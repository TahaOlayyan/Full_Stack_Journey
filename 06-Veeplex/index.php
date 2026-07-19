<?php
/* ====================================================================
   === PAGE INIT & HEADER ===
   ==================================================================== */
require 'init.php';
include 'header.php';
?>

<!-- ====================================================================
     === 00. NOTIFICATION ALERTS ===
     ==================================================================== -->
<?php if (isset($_SESSION['form_msg'])): ?>
    <div class="alert alert-<?php echo $_SESSION['msg_type']; ?> alert-dismissible fade show position-fixed top-0 start-50 translate-middle-x shadow" style="z-index: 1050; margin-top: 20px; min-width: 300px; text-align: center;" role="alert">
        <strong><?php echo $_SESSION['form_msg']; ?></strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    <?php
    unset($_SESSION['form_msg']);
    unset($_SESSION['msg_type']);
    ?>
<?php endif; ?>

<!-- ====================================================================
     === 01. HERO SECTION ===
     ==================================================================== -->
<section id="home" class="hero-section">
    <video autoplay loop muted playsinline class="bg-video">
        <source src="Uploads/Veeplex.mp4" type="video/mp4">
    </video>
    <div class="video-overlay"></div>
    <div class="container text-center position-relative text-white content-above mt-5">
        <h1 style="font-style: italic; font-family: 'Trebuchet MS', sans-serif;" class="fw-bold display-4 mb-3 cinematic-elem delay-1">
            <span style="color: var(--veeplex-blue);">Bringing</span> the
            <span style="color: var(--veeplex-orange);">Future into</span> the
            <span style="color: var(--veeplex-blue);">Present</span>
        </h1>
        <p class="lead mb-4 cinematic-elem delay-2">Empowering organizations with cutting-edge digital transformation solutions</p>

        <button type="button" class="btn btn-warning text-dark fw-bold btn-lg px-4 rounded-pill shadow cinematic-elem delay-3" style="background-color: var(--veeplex-orange); border: none; color: white !important;" data-bs-toggle="modal" data-bs-target="#contactModal">
            Contact Us
        </button>
    </div>
</section>

<!-- ====================================================================
     === 02. ABOUT US SECTION ===
     ==================================================================== -->

<section id="about" class="about-section-bg pt-5">
    <div class="container position-relative z-3 py-5">

        <!-- About Us Box -->
        <div class="row justify-content-center mb-0" data-aos="fade-down">
            <div class="col-lg-10">
                <div class="veeplex-glass-box p-4 p-lg-5 rounded-4 text-center mx-auto" style="max-width: 900px; border-bottom: 3px solid var(--veeplex-orange);">
                    <div class="d-inline-flex align-items-center justify-content-center mb-4">
                        <span class="badge rounded-pill text-white fw-bold shadow px-4 py-2" style="background-color: var(--veeplex-orange); letter-spacing: 2px; font-size: 1rem;">ABOUT US</span>
                    </div>
                    <h2 class="text-white fw-bold display-6 mb-4">Who We Are</h2>
                    <p class="text-white mb-0 fs-5">
                        <img src="Uploads/Logo.png" alt="Veeplex" style="height: 100px; vertical-align: middle; margin-right: 0px; margin-top: -40px; margin-bottom: -30px;">
                        is a technology solutions provider dedicated to helping organizations embrace digital transformation through innovative, customized, and future-ready solutions
                    </p>
                </div>
            </div>
        </div>

        <!-- Flow Lines -->
        <div class="d-none d-lg-block position-relative" style="height: 100px; width: 100%;">
            <div class="flow-line-v trunk-line"></div>
            <div class="flow-line-h branch-horizontal"></div>
            <div class="flow-line-v drop-left"></div>
            <div class="flow-line-v drop-right"></div>
        </div>

        <!-- Vision & Mission -->
        <div class="row align-items-start justify-content-between mt-4 mt-lg-0">
            <!-- Vision -->
            <div class="col-lg-5 position-relative mb-4 mb-lg-0" data-aos="fade-up" data-aos-delay="200">
                <div class="modern-vm-card leaf-card-left p-4 glowing-card">
                    <div class="d-flex gap-3 align-items-center mb-3">
                        <span class="fs-2 vision-icon">👁️</span>
                        <h4 class="fw-bold text-white mb-0">Our Vision</h4>
                    </div>
                    <p class="text-light opacity-75 small mb-0">To lead the technological revolution and be the ultimate partner in digital transformation across the region.</p>
                </div>
            </div>

            <div class="col-lg-2 d-none d-lg-block"></div>

            <!-- Mission -->
            <div class="col-lg-5 position-relative" data-aos="fade-up" data-aos-delay="400">
                <div class="modern-vm-card leaf-card-right p-4 glowing-card">
                    <div class="d-flex gap-3 align-items-center mb-3">
                        <span class="fs-2 mission-icon">🎯</span>
                        <h4 class="fw-bold text-white mb-0">Our Mission</h4>
                    </div>
                    <p class="text-light opacity-75 small mb-0">Designing and delivering smart technologies that bridge the gap between complex tech and actual business value.</p>
                </div>
            </div>
        </div>

        <!-- Clients Ticker Capsule -->
        <div class="container mt-5 z-3 position-relative">
            <div class="glass-ticker-capsule">
                <div class="ticker-capsule-header">
                    <div class="line"></div>
                    <h6 class="text-white fw-bold mb-0 opacity-75" style="letter-spacing: 2px; font-size: 0.85rem;">
                        TRUSTED BY <span class="text-veeplex-orange">INNOVATIVE</span> COMPANIES
                    </h6>
                    <div class="line"></div>
                </div>

                <div class="client-ticker-wrapper">
                    <div class="client-ticker-track">
                        <!-- Original Logos -->
                        <div class="client-logo-box"><img src="Uploads/C6_madfoat.png" alt="Madfooat"></div>
                        <div class="client-logo-box"><img src="Uploads/C7_AqabaHub.png" alt="Aqaba"></div>
                        <div class="client-logo-box"><img src="Uploads/C1_umniah.png" alt="Umniah"></div>
                        <div class="client-logo-box"><img src="Uploads/C2_uWallet.png" alt="uWallet"></div>
                        <div class="client-logo-box"><img src="Uploads/C3_Orange.png" alt="Orange"></div>
                        <div class="client-logo-box"><img src="Uploads/C4_orangeMoney.png" alt="Orange Money"></div>
                        <div class="client-logo-box"><img src="Uploads/C5_jopacc.png" alt="Jopacc"></div>

                        <!-- Duplicated Logos for smooth loop -->
                        <div class="client-logo-box"><img src="Uploads/C6_madfoat.png" alt="Madfooat"></div>
                        <div class="client-logo-box"><img src="Uploads/C7_AqabaHub.png" alt="Aqaba"></div>
                        <div class="client-logo-box"><img src="Uploads/C1_umniah.png" alt="Umniah"></div>
                        <div class="client-logo-box"><img src="Uploads/C2_uWallet.png" alt="uWallet"></div>
                        <div class="client-logo-box"><img src="Uploads/C3_Orange.png" alt="Orange"></div>
                        <div class="client-logo-box"><img src="Uploads/C4_orangeMoney.png" alt="Orange Money"></div>
                        <div class="client-logo-box"><img src="Uploads/C5_jopacc.png" alt="Jopacc"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ====================================================================
     === 03. OUR SERVICES (TIMELINE) ===
     ==================================================================== -->
<section id="services" class="py-5 bg-dark" style="background-color: #0d1620 !important;">
    <div class="container py-5">
        <h2 class="fw-bold mb-5 text-center text-white display-4" data-aos="fade-up">OUR SERVICES</h2>

        <div class="timeline-container position-relative d-none d-lg-block">
            <!-- Central Line Progress -->
            <div class="timeline-line d-none d-lg-block">
                <div class="timeline-progress" id="timelineProgress"></div>
            </div>

            <!-- Service 1 -->
            <div class="row mb-2 align-items-center service-row" id="service-1">
                <div class="col-lg-5 text-lg-end order-lg-1">
                    <div class="service-card p-4 rounded-4 text-start" data-bs-toggle="modal" data-bs-target="#serviceModal1">
                        <img src="Uploads/Service1.png" class="img-fluid rounded-3 mb-3 w-100 object-fit-cover">
                        <h4 class="fw-bold text-white">Self-Service Kiosk</h4>
                        <p class="text-light small">Innovative touchpoint solutions that streamline customer experiences and maximize operational efficiency across diverse industries</p>
                        <div class="d-flex justify-content-center mt-3">
                            <button class="btn btn-outline-warning btn-sm px-4" data-bs-toggle="modal" data-bs-target="#serviceModal1">Learn More</button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 d-none d-lg-flex justify-content-center align-items-center order-lg-2 position-relative">
                    <div class="timeline-dot" data-target="service-1">1</div>
                    <div class="connector-line line-left"></div>
                </div>
                <div class="col-lg-5 order-lg-3 d-none d-lg-block"></div>
            </div>

            <!-- Service 2 -->
            <div class="row mb-2 align-items-center service-row" id="service-2">
                <div class="col-lg-5 d-none d-lg-block order-lg-1"></div>
                <div class="col-lg-2 d-none d-lg-flex justify-content-center align-items-center order-lg-2 position-relative">
                    <div class="timeline-dot" data-target="service-2">2</div>
                    <div class="connector-line line-right"></div>
                </div>
                <div class="col-lg-5 order-lg-3 text-start">
                    <div class="service-card p-4 rounded-4" data-bs-toggle="modal" data-bs-target="#serviceModal2">
                        <img src="Uploads/Service2.png" class="img-fluid rounded-3 mb-3 w-100 object-fit-cover">
                        <h4 class="fw-bold text-white">Smart Meeting Room</h4>
                        <p class="text-light small">A Smart Meeting Room is an integrated collaboration solution that combines interactive displays, wireless sharing, video conferencing, and intelligent room control to deliver faster, smarter, and more productive meetings.</p>
                        <div class="d-flex justify-content-center mt-3">
                            <button class="btn btn-outline-warning btn-sm px-4" data-bs-toggle="modal" data-bs-target="#serviceModal2">Learn More</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Service 3 -->
            <div class="row mb-2 align-items-center service-row" id="service-3">
                <div class="col-lg-5 text-lg-end order-lg-1">
                    <div class="service-card p-4 rounded-4 text-start" data-bs-toggle="modal" data-bs-target="#serviceModal3">
                        <img src="Uploads/Service3.png" class="img-fluid rounded-3 mb-3 w-100 object-fit-cover" alt="5x Faster">
                        <h4 class="fw-bold text-white">Physical Security</h4>
                        <p class="text-light small">Comprehensive surveillance, access control, and monitoring systems designed to protect critical assets and ensure seamless facility management</p>
                        <div class="d-flex justify-content-center mt-3">
                            <button class="btn btn-outline-warning btn-sm px-4" data-bs-toggle="modal" data-bs-target="#serviceModal3">Learn More</button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 d-none d-lg-flex justify-content-center align-items-center order-lg-2 position-relative">
                    <div class="timeline-dot" data-target="service-3">3</div>
                    <div class="connector-line line-left"></div>
                </div>
                <div class="col-lg-5 order-lg-3 d-none d-lg-block"></div>
            </div>

            <!-- Service 4 -->
            <div class="row mb-2 align-items-center service-row" id="service-4">
                <div class="col-lg-5 d-none d-lg-block order-lg-1"></div>
                <div class="col-lg-2 d-none d-lg-flex justify-content-center align-items-center order-lg-2 position-relative">
                    <div class="timeline-dot" data-target="service-4">4</div>
                    <div class="connector-line line-right"></div>
                </div>
                <div class="col-lg-5 order-lg-3 text-start">
                    <div class="service-card p-4 rounded-4" data-bs-toggle="modal" data-bs-target="#serviceModal4">
                        <img src="Uploads/Service4.png" class="img-fluid rounded-3 mb-3 w-100 object-fit-cover">
                        <h4 class="fw-bold text-white">Infrastructure Cabling Solutions</h4>
                        <p class="text-light small">Leveraging partnerships with industry leaders like Corning, VEEPLEX provides comprehensive cabling infrastructure solutions for modern network needs.</p>
                        <div class="d-flex justify-content-center mt-3">
                            <button class="btn btn-outline-warning btn-sm px-4" data-bs-toggle="modal" data-bs-target="#serviceModal4">Learn More</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ====================================================================
    === 03.1 OUR SERVICES (MOBILE CAROUSEL) ===
    ==================================================================== -->
    <div id="mobileServicesCarousel" class="carousel slide d-block d-lg-none mt-4" data-bs-ride="carousel">
        <div class="carousel-indicators" style="bottom: -50px;">
            <button type="button" data-bs-target="#mobileServicesCarousel" data-bs-slide-to="0" class="active"></button>
            <button type="button" data-bs-target="#mobileServicesCarousel" data-bs-slide-to="1"></button>
            <button type="button" data-bs-target="#mobileServicesCarousel" data-bs-slide-to="2"></button>
            <button type="button" data-bs-target="#mobileServicesCarousel" data-bs-slide-to="3"></button>
        </div>

        <div class="carousel-inner px-2">
            <!-- Service 1 -->
            <div class="carousel-item active">
                <div class="mobile-service-card text-center mx-auto" data-bs-toggle="modal" data-bs-target="#serviceModal1">
                    <img src="Uploads/Service1.png" class="img-fluid" alt="Self-Service Kiosk">
                    <h4 class="fw-bold text-white mt-3">Self-Service Kiosk</h4>
                    <p class="text-light small text-start mb-3">Innovative touchpoint solutions that streamline customer experiences and maximize operational efficiency across diverse industries</p>
                    <button class="btn btn-outline-warning btn-sm px-4">Learn More</button>
                </div>
            </div>

            <!-- Service 2 -->
            <div class="carousel-item">
                <div class="mobile-service-card text-center mx-auto" data-bs-toggle="modal" data-bs-target="#serviceModal2">
                    <img src="Uploads/Service2.png" class="img-fluid" alt="Smart Meeting Room">
                    <h4 class="fw-bold text-white mt-3">Smart Meeting Room</h4>
                    <p class="text-light small text-start mb-3">A Smart Meeting Room is an integrated collaboration solution that combines interactive displays, wireless sharing, video conferencing, and intelligent room control...</p>
                    <button class="btn btn-outline-warning btn-sm px-4">Learn More</button>
                </div>
            </div>

            <!-- Service 3 -->
            <div class="carousel-item">
                <div class="mobile-service-card text-center mx-auto" data-bs-toggle="modal" data-bs-target="#serviceModal3">
                    <img src="Uploads/Service3.png" class="img-fluid" alt="Physical Security">
                    <h4 class="fw-bold text-white mt-3">Physical Security</h4>
                    <p class="text-light small text-start mb-3">Comprehensive surveillance, access control, and monitoring systems designed to protect critical assets and ensure seamless facility management</p>
                    <button class="btn btn-outline-warning btn-sm px-4">Learn More</button>
                </div>
            </div>

            <!-- Service 4 -->
            <div class="carousel-item">
                <div class="mobile-service-card text-center mx-auto" data-bs-toggle="modal" data-bs-target="#serviceModal4">
                    <img src="Uploads/Service4.png" class="img-fluid" alt="Infrastructure Cabling">
                    <h4 class="fw-bold text-white mt-3">Infrastructure Cabling Solutions</h4>
                    <p class="text-light small text-start mb-3">Leveraging partnerships with industry leaders like Corning, VEEPLEX provides comprehensive cabling infrastructure solutions for modern network needs.</p>
                    <button class="btn btn-outline-warning btn-sm px-4">Learn More</button>
                </div>
            </div>
        </div>

        <!-- الأسهم -->
        <button class="carousel-control-prev" type="button" data-bs-target="#mobileServicesCarousel" data-bs-slide="prev" style="width: 10%;">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#mobileServicesCarousel" data-bs-slide="next" style="width: 10%;">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
        </button>
    </div>
</section>

<!-- ====================================================================
     === 04. SERVICE MODALS ===
     ==================================================================== -->
<!-- Modal 1: Self-Service Kiosk -->
<div class="modal fade" id="serviceModal1" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content bg-dark text-white border-secondary">
            <div class="modal-header border-bottom-0 pb-0">
                <h3 class="modal-title fw-bold text-veeplex-orange">Self-Service Kiosks</h3>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body custom-scrollbar pt-2">
                <img src="Uploads/Service1.png" class="img-fluid rounded-3 mb-4 w-100" alt="Main Kiosk Service">
                <h5 class="text-light mb-4 border-bottom border-secondary pb-3">Front-End Channels Digitization</h5>
                <p class="small text-light lh-lg">
                    Transforming customer interactions through advanced self-service technology.<br><br>
                    In today's fast-paced digital landscape, seamless self-service experiences are essential for businesses to thrive. Our cutting-edge self-service kiosks empower your customers to access information, complete transactions, and resolve issues independently - all while elevating their overall satisfaction.<br><br>
                    By leveraging the latest advancements in user-friendly interfaces and intuitive workflows, we help you streamline operations, reduce overhead, and deliver the exceptional service your customers demand. Partner with us to unlock the transformative power of self-service technology and stay ahead of the curve.
                </p>

                <!-- Kiosk Carousel -->
                <div id="kioskCarousel" class="carousel slide mt-5 mb-4" data-bs-ride="carousel">
                    <div class="carousel-indicators" style="bottom: -40px;">
                        <button type="button" data-bs-target="#kioskCarousel" data-bs-slide-to="0" class="active"></button>
                        <button type="button" data-bs-target="#kioskCarousel" data-bs-slide-to="1"></button>
                        <button type="button" data-bs-target="#kioskCarousel" data-bs-slide-to="2"></button>
                    </div>
                    <div class="carousel-inner rounded-3 shadow-lg border border-secondary">
                        <div class="carousel-item active" data-bs-interval="2000">
                            <img src="Uploads/touchpoints.png" class="d-block w-100" alt="Interactive Touchpoints" style="height: 400px; object-fit: cover;">
                            <div class="p-4 text-center border-top border-secondary" style="background-color: var(--veeplex-orange);">
                                <h5 class="fw-bold text-dark mb-2">Interactive Touchpoints</h5>
                                <p class="small text-dark fw-semibold mb-0">Advanced touchscreen interfaces enabling intuitive customer self-service experiences across multiple environments.</p>
                            </div>
                        </div>
                        <div class="carousel-item" data-bs-interval="2000">
                            <img src="Uploads/transactions.png" class="d-block w-100" alt="Seamless Transactions" style="height: 400px; object-fit: cover;">
                            <div class="p-4 text-center border-top border-secondary" style="background-color: var(--veeplex-orange);">
                                <h5 class="fw-bold text-dark mb-2">Seamless Transactions</h5>
                                <p class="small text-dark fw-semibold mb-0">Integrated payment solutions that streamline customer transactions while maintaining security and compliance</p>
                            </div>
                        </div>
                        <div class="carousel-item" data-bs-interval="2000">
                            <img src="Uploads/insights.png" class="d-block w-100" alt="Data-Driven Insights" style="height: 400px; object-fit: cover;">
                            <div class="p-4 text-center border-top border-secondary" style="background-color: var(--veeplex-orange);">
                                <h5 class="fw-bold text-dark mb-2">Data-Driven Insights</h5>
                                <p class="small text-dark fw-semibold mb-0">Advanced analytics capabilities that transform customer interactions into actionable business intelligence.</p>
                            </div>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#kioskCarousel" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#kioskCarousel" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
            <div class="modal-footer border-top-0 mt-3">
                <button type="button" class="btn btn-outline-light" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal 2: Smart Meeting Room -->
<div class="modal fade" id="serviceModal2" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content bg-dark text-white border-secondary">
            <div class="modal-header border-bottom-0 pb-0">
                <h3 class="modal-title fw-bold text-veeplex-orange">Smart Meeting Room</h3>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body custom-scrollbar pt-2">
                <img src="Uploads/Service2.png" class="img-fluid rounded-3 mb-4 w-100" alt="Smart Meeting Room">
                <h5 class="text-light mb-4 border-bottom border-secondary pb-3">Next-Generation Collaboration Spaces</h5>
                <p class="small text-light lh-lg">
                    Transforming how teams connect, collaborate, and create.<br><br>
                    A Smart Meeting Room is an integrated collaboration solution that combines interactive displays, wireless sharing, video conferencing, and intelligent room control to deliver faster, smarter, and more productive meetings. Say goodbye to cable clutter and technical difficulties.<br><br>
                    By integrating state-of-the-art audiovisual technology with smart automation, we create intuitive environments where ideas flow freely. Whether your team is in the office or joining remotely, our solutions ensure crystal-clear communication and seamless content sharing
                </p>

                <!-- Meeting Carousel -->
                <div id="meetingCarousel" class="carousel slide mt-5 mb-4" data-bs-ride="carousel">
                    <div class="carousel-indicators" style="bottom: -40px;">
                        <button type="button" data-bs-target="#meetingCarousel" data-bs-slide-to="0" class="active"></button>
                        <button type="button" data-bs-target="#meetingCarousel" data-bs-slide-to="1"></button>
                        <button type="button" data-bs-target="#meetingCarousel" data-bs-slide-to="2"></button>
                    </div>
                    <div class="carousel-inner rounded-3 shadow-lg border border-secondary">
                        <div class="carousel-item active" data-bs-interval="2000">
                            <img src="Uploads/School.png" class="d-block w-100" alt="Interactive Displays" style="height: 400px; object-fit: cover;">
                            <div class="p-4 text-center border-top border-secondary" style="background-color: var(--veeplex-orange);">
                                <h5 class="fw-bold text-dark mb-2">Designed for Education</h5>
                                <p class="small text-dark fw-semibold mb-0">Empower school leaders and teachers with a smart meeting space for administration, collaboration, parent conferences, and online training. Wireless sharing, interactive displays, and seamless Teams & Zoom integration ensure faster, more productive meetings.</p>
                            </div>
                        </div>
                        <div class="carousel-item" data-bs-interval="2000">
                            <img src="Uploads/conferencing.png" class="d-block w-100" alt="Seamless Video Conferencing" style="height: 400px; object-fit: cover;">
                            <div class="p-4 text-center border-top border-secondary" style="background-color: var(--veeplex-orange);">
                                <h5 class="fw-bold text-dark mb-2">Designed for High-Impact Conferences</h5>
                                <p class="small text-dark fw-semibold mb-0">Elevate every conference with intelligent meeting technology, seamless connectivity, and a premium collaboration experience for corporate events and executive meetings.</p>
                            </div>
                        </div>
                        <div class="carousel-item" data-bs-interval="2000">
                            <img src="Uploads/Office.png" class="d-block w-100" alt="Intelligent Room Control" style="height: 400px; object-fit: cover;">
                            <div class="p-4 text-center border-top border-secondary" style="background-color: var(--veeplex-orange);">
                                <h5 class="fw-bold text-dark mb-2">Designed for Modern Corporate Teams</h5>
                                <p class="small text-dark fw-semibold mb-0">Designed for modern corporate offices, our Smart Meeting Room helps teams collaborate seamlessly, present wirelessly, and make faster business decisions.</p>
                            </div>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#meetingCarousel" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#meetingCarousel" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
            <div class="modal-footer border-top-0 mt-3">
                <button type="button" class="btn btn-outline-light" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal 3: Physical Security -->
<div class="modal fade" id="serviceModal3" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content bg-dark text-white border-secondary">
            <div class="modal-header border-bottom-0 pb-0">
                <h3 class="modal-title fw-bold text-veeplex-orange">Physical Security</h3>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body custom-scrollbar pt-2">
                <img src="Uploads/Service3.png" class="img-fluid rounded-3 mb-4 w-100" alt="Physical Security">
                <h5 class="text-light mb-4 border-bottom border-secondary pb-3">Advanced Access & Surveillance Solutions</h5>
                <p class="small text-light lh-lg">
                    Protecting your physical assets with cutting-edge technology.<br><br>
                    Physical Security is no longer just about locks and guards. It's an integrated ecosystem of smart gates, biometric access control, AI-driven surveillance, and automated threat detection systems designed to keep unauthorized personnel out while ensuring seamless movement for your team.<br><br>
                    By deploying robust physical infrastructure synced with intelligent software, we provide a proactive security shield. This reduces human error, cuts down response time drastically, and gives you complete visibility and control over your premises.
                </p>

                <!-- Security Carousel -->
                <div id="physicalSecurityCarousel" class="carousel slide mt-5 mb-4" data-bs-ride="carousel">
                    <div class="carousel-indicators" style="bottom: -40px;">
                        <button type="button" data-bs-target="#physicalSecurityCarousel" data-bs-slide-to="0" class="active"></button>
                        <button type="button" data-bs-target="#physicalSecurityCarousel" data-bs-slide-to="1"></button>
                        <button type="button" data-bs-target="#physicalSecurityCarousel" data-bs-slide-to="2"></button>
                        <button type="button" data-bs-target="#physicalSecurityCarousel" data-bs-slide-to="3"></button>
                        <button type="button" data-bs-target="#physicalSecurityCarousel" data-bs-slide-to="4"></button>
                        <button type="button" data-bs-target="#physicalSecurityCarousel" data-bs-slide-to="5"></button>
                    </div>
                    <div class="carousel-inner rounded-3 shadow-lg border border-secondary">
                        <div class="carousel-item active" data-bs-interval="2000">
                            <img src="Uploads/Patent turnstile.png" class="d-block w-100" alt="Card 1" style="height: 400px; object-fit: cover;">
                            <div class="p-4 text-center border-top border-secondary" style="background-color: var(--veeplex-orange);">
                                <h5 class="fw-bold text-dark mb-2">Patent Turnstile</h5>
                                <p class="small text-dark fw-semibold mb-0">Advanced high-security turnstile gates designed to control pedestrian access, prevent unauthorized entry, and ensure smooth movement in high-traffic areas. Ideal for corporate buildings, factories, campuses, stadiums, and public facilities.</p>
                            </div>
                        </div>
                        <div class="carousel-item" data-bs-interval="2000">
                            <img src="Uploads/Tripod turnstile.png" class="d-block w-100" alt="Card 2" style="height: 400px; object-fit: cover;">
                            <div class="p-4 text-center border-top border-secondary" style="background-color: var(--veeplex-orange);">
                                <h5 class="fw-bold text-dark mb-2">Tripod Turnstile</h5>
                                <p class="small text-dark fw-semibold mb-0">provides secure, fast, and reliable pedestrian access control with seamless integration into modern authentication systems, making it ideal for high-traffic environments.</p>
                            </div>
                        </div>
                        <div class="carousel-item" data-bs-interval="2000">
                            <img src="Uploads/Flap Barrier  Sliding Turnstil.png" class="d-block w-100" alt="Card 3" style="height: 400px; object-fit: cover;">
                            <div class="p-4 text-center border-top border-secondary" style="background-color: var(--veeplex-orange);">
                                <h5 class="fw-bold text-dark mb-2">Flap Barrier & Sliding Turnstil</h5>
                                <p class="small text-dark fw-semibold mb-0">Flap Barriers and Turnstiles provide fast, secure, and reliable pedestrian access with modern design, making them ideal for high-traffic and high-security environments.</p>
                            </div>
                        </div>
                        <div class="carousel-item" data-bs-interval="2000">
                            <img src="Uploads/Swing Turnstile.png" class="d-block w-100" alt="Card 4" style="height: 400px; object-fit: cover;">
                            <div class="p-4 text-center border-top border-secondary" style="background-color: var(--veeplex-orange);">
                                <h5 class="fw-bold text-dark mb-2">Swing Turnstile & Speed Gate</h5>
                                <p class="small text-dark fw-semibold mb-0">Fast, secure, and stylish access control solutions designed for smooth pedestrian flow. Ideal for corporate offices, airports, hotels, and premium facilities, with seamless integration to RFID, QR, biometric, and facial recognition systems</p>
                            </div>
                        </div>
                        <div class="carousel-item" data-bs-interval="2000">
                            <img src="Uploads/Full height turnstile.png" class="d-block w-100" alt="Card 5" style="height: 400px; object-fit: cover;">
                            <div class="p-4 text-center border-top border-secondary" style="background-color: var(--veeplex-orange);">
                                <h5 class="fw-bold text-dark mb-2">Full Height Turnstile</h5>
                                <p class="small text-dark fw-semibold mb-0">A powerful access solution designed to protect critical entrances with full-body control, strong physical security, and seamless integration with modern access systems</p>
                            </div>
                        </div>
                        <div class="carousel-item" data-bs-interval="2000">
                            <img src="Uploads/boom barrier.png" class="d-block w-100" alt="Card 6" style="height: 400px; object-fit: cover;">
                            <div class="p-4 text-center border-top border-secondary" style="background-color: var(--veeplex-orange);">
                                <h5 class="fw-bold text-dark mb-2">Boom Barrier</h5>
                                <p class="small text-dark fw-semibold mb-0">regulates vehicular traffic at controlled access points like parking garages, toll booths, and security checkpoints. It uses a pivoted horizontal arm that raises and lowers, driven by electromechanical or hydraulic motors and integrated with access systems</p>
                            </div>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#physicalSecurityCarousel" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#physicalSecurityCarousel" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
            <div class="modal-footer border-top-0 mt-3">
                <button type="button" class="btn btn-outline-light" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal 4: Infrastructure Cabling Solutions -->
<div class="modal fade" id="serviceModal4" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content bg-dark text-white border-secondary">
            <div class="modal-header border-bottom-0 pb-0">
                <h3 class="modal-title fw-bold text-veeplex-orange">Infrastructure Cabling Solutions</h3>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body custom-scrollbar pt-2">
                <img src="Uploads/Service4.png" class="img-fluid rounded-3 mb-4 w-100" alt="Cloud Infrastructure">
                <h5 class="text-light mb-4 border-bottom border-secondary pb-3">Building the Physical Backbone of Tomorrow's Networks</h5>
                <p class="small text-light lh-lg">
                    Leveraging strategic partnerships with industry leaders like Corning, VEEPLEX provides comprehensive cabling infrastructure solutions engineered for modern network demands.<br><br>
                    Whether your application is in a small medical clinic, a multi-terminal airport, or a large campus, our solutions are proven to work together seamlessly. We establish a flexible and scalable framework capable of efficiently transmitting massive amounts of data, voice, and video, lowering your current operational costs while preparing your network for the needs of tomorrow
                </p>

                <!-- Cloud Carousel -->
                <div id="cloudCarousel" class="carousel slide mt-5 mb-4" data-bs-ride="carousel">
                    <div class="carousel-indicators" style="bottom: -40px;">
                        <button type="button" data-bs-target="#cloudCarousel" data-bs-slide-to="0" class="active"></button>
                        <button type="button" data-bs-target="#cloudCarousel" data-bs-slide-to="1"></button>
                        <button type="button" data-bs-target="#cloudCarousel" data-bs-slide-to="2"></button>
                        <button type="button" data-bs-target="#cloudCarousel" data-bs-slide-to="3"></button>
                    </div>
                    <div class="carousel-inner rounded-3 shadow-lg border border-secondary">
                        <div class="carousel-item active" data-bs-interval="2000">
                            <img src="Uploads/Optical Fiber.png" class="d-block w-100" alt="Optical Fiber" style="height: 400px; object-fit: cover;">
                            <div class="p-4 text-center border-top border-secondary" style="background-color: var(--veeplex-orange);">
                                <h5 class="fw-bold text-dark mb-2">Optical Fiber</h5>
                                <p class="small text-dark fw-semibold mb-0">High-performance optical fiber solutions for reliable voice, data, and video transmission. Available in Single-mode, Multimode, and specialized fiber options for high-speed, long-distance, and mission-critical networks</p>
                            </div>
                        </div>
                        <div class="carousel-item" data-bs-interval="2000">
                            <img src="Uploads/Enterprise Networks.png" class="d-block w-100" alt="Enterprise Networks" style="height: 400px; object-fit: cover;">
                            <div class="p-4 text-center border-top border-secondary" style="background-color: var(--veeplex-orange);">
                                <h5 class="fw-bold text-dark mb-2">Enterprise Networks</h5>
                                <p class="small text-dark fw-semibold mb-0">Scalable network solutions for businesses of all sizes—from small offices to large campuses. Delivering reliable, high-performance connectivity with seamless integration, reduced costs, and future-ready infrastructure</p>
                            </div>
                        </div>
                        <div class="carousel-item" data-bs-interval="2000">
                            <img src="Uploads/Data Center.png" class="d-block w-100" alt="Data Center" style="height: 400px; object-fit: cover;">
                            <div class="p-4 text-center border-top border-secondary" style="background-color: var(--veeplex-orange);">
                                <h5 class="fw-bold text-dark mb-2">Data Center</h5>
                                <p class="small text-dark fw-semibold mb-0">A structured cabling system that provides a reliable, scalable, and organized infrastructure for seamless data, voice, and video communication, ensuring high performance and easy future expansion</p>
                            </div>
                        </div>
                        <div class="carousel-item" data-bs-interval="2000">
                            <img src="Uploads/FTTP.png" class="d-block w-100" alt="Fiber To The Premises (FTTP)" style="height: 400px; object-fit: cover;">
                            <div class="p-4 text-center border-top border-secondary" style="background-color: var(--veeplex-orange);">
                                <h5 class="fw-bold text-dark mb-2">Fiber To The Premises (FTTP)</h5>
                                <p class="small text-dark fw-semibold mb-0">High-speed fiber optic networks that deliver reliable broadband directly to homes, businesses, and buildings, ensuring faster connectivity, superior performance, and scalable infrastructure</p>
                            </div>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#cloudCarousel" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#cloudCarousel" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
            <div class="modal-footer border-top-0 mt-3">
                <button type="button" class="btn btn-outline-light" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<!-- ====================================================================
     === 05. PARTNERS ECOSYSTEM ===
     ==================================================================== -->

<section id="partners" class="py-4" style="background-color: #0d1620;">
    <div class="container">
        <!-- Section Title -->
        <div class="text-center mb-4" data-aos="fade-up">
            <h2 class="fw-bold text-white display-6">Our Partners</h2>
        </div>

        <!-- Slider -->
        <div class="partners-ticker-container" data-aos="fade-up" data-aos-delay="100">
            <div class="partners-ticker-track">
                <!-- Original Set -->
                <a href="https://www.infinitebs.net/" class="partner-box"><img src="Uploads/infinity_logo.png" alt="Infinite"></a>
                <a href="https://www.havelsan.com/en" class="partner-box"><img src="Uploads/Havelsan.png" alt="Havelsan"></a>
                <a href="https://arbitcds.com/" class="partner-box"><img src="Uploads/arbit_logo.png" alt="Arbit"></a>
                <a href="https://nexus.ingroupe.com/" class="partner-box"><img src="Uploads/nexus.png" alt="Nexus"></a>
                <a href="https://www.corning.com/worldwide/en.html" class="partner-box"><img src="Uploads/Corning.png" alt="Corning"></a>
                <a href="https://ulgen.com.tr/en" class="partner-box"><img src="Uploads/Ulgen.png" alt="Ulgen"></a>
                <a href="https://tjdeed.com/" class="partner-box"><img src="Uploads/Tajded.png" alt="Tajded"></a>
                <a href="https://www.itctech.com.cn/" class="partner-box"><img src="Uploads/itc.png" alt="itc"></a>
                <a href="https://redsift.com/" class="partner-box"><img src="Uploads/RedSift.png" alt="RedSift"></a>
                <a href="https://promon.io/" class="partner-box"><img src="Uploads/Promon.png" alt="Promon"></a>
                <a href="https://www.bitsight.com/" class="partner-box"><img src="Uploads/Bitsight.png" alt="Bitsight"></a>
                <a href="https://www.zkteco.com/en/" class="partner-box"><img src="Uploads/ZKteco.png" alt="ZKteco"></a>

                <!-- Duplicated Set for Loop -->
                <a href="https://www.infinitebs.net/" class="partner-box"><img src="Uploads/infinity_logo.png" alt="Infinite"></a>
                <a href="https://www.havelsan.com/en" class="partner-box"><img src="Uploads/Havelsan.png" alt="Havelsan"></a>
                <a href="https://arbitcds.com/" class="partner-box"><img src="Uploads/arbit_logo.png" alt="Arbit"></a>
                <a href="https://nexus.ingroupe.com/" class="partner-box"><img src="Uploads/nexus.png" alt="Nexus"></a>
                <a href="https://www.corning.com/worldwide/en.html" class="partner-box"><img src="Uploads/Corning.png" alt="Corning"></a>
                <a href="https://ulgen.com.tr/en" class="partner-box"><img src="Uploads/Ulgen.png" alt="Ulgen"></a>
                <a href="https://tjdeed.com/" class="partner-box"><img src="Uploads/Tajded.png" alt="Tajded"></a>
                <a href="https://www.itctech.com.cn/" class="partner-box"><img src="Uploads/itc.png" alt="itc"></a>
                <a href="https://redsift.com/" class="partner-box"><img src="Uploads/RedSift.png" alt="RedSift"></a>
                <a href="https://promon.io/" class="partner-box"><img src="Uploads/Promon.png" alt="Promon"></a>
                <a href="https://www.bitsight.com/" class="partner-box"><img src="Uploads/Bitsight.png" alt="Bitsight"></a>
                <a href="https://www.zkteco.com/en/" class="partner-box"><img src="Uploads/ZKteco.png" alt="ZKteco"></a>
            </div>
        </div>
    </div>
</section>

<!-- ====================================================================
     === 06. FLOATING RIGHT MENU ===
     ==================================================================== -->

<div class="floating-side-menu d-none d-lg-flex">
    <a href="#home" class="side-btn">
        <span class="btn-icon">🏠</span>
        <span class="btn-text">Home</span>
    </a>
    <a href="#services" class="side-btn">
        <span class="btn-icon">🚀</span>
        <span class="btn-text">Services</span>
    </a>
    <a href="https://www.google.com/maps/place/veeplex/@31.986897,35.845797,781m/data=!3m2!1e3!4b1!4m6!3m5!1s0x151ca1bab6257321:0x45c0906d7dc2e243!8m2!3d31.986897!4d35.8483773!16s%2Fg%2F11tkbnx96r?entry=ttu&g_ep=EgoyMDI2MDcwOC4wIKXMDSoASAFQAw%3D%3D" target="_blank" class="side-btn">
        <span class="btn-icon">📍</span>
        <span class="btn-text">Location</span>
    </a>
    <a href="javascript:void(0)" class="side-btn" data-bs-toggle="modal" data-bs-target="#contactModal">
        <span class="btn-icon">✉️</span>
        <span class="btn-text">Contact</span>
    </a>
</div>

<!-- ====================================================================
     === 07. JAVASCRIPT SCRIPTS ===
     ==================================================================== 
-->

<script>
    document.addEventListener("DOMContentLoaded", function() {
        // Intersection Observer for Timeline Activation
        const observerOptions = {
            root: null,
            rootMargin: '0px 0px -50% 0px',
            threshold: 0
        };

        const timelineObserver = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                const parentRow = entry.target.closest('.service-row');
                if (entry.isIntersecting) {
                    if (parentRow) parentRow.classList.add('active');
                } else {
                    if (parentRow) parentRow.classList.remove('active');
                }
            });
        }, observerOptions);

        const dots = document.querySelectorAll('.timeline-dot');
        dots.forEach(dot => {
            timelineObserver.observe(dot);
        });
    });

    // Timeline Progress Line Scroll Calculation
    const timelineContainer = document.querySelector('.timeline-container');
    const timelineProgress = document.getElementById('timelineProgress');

    if (timelineContainer && timelineProgress) {
        window.addEventListener('scroll', () => {
            const rect = timelineContainer.getBoundingClientRect();
            const windowHeight = window.innerHeight;

            let scrolled = (windowHeight / 2) - rect.top;
            let totalDistance = rect.height;

            let progress = Math.max(0, Math.min(scrolled, totalDistance));
            let percentage = (progress / totalDistance) * 100;

            timelineProgress.style.height = percentage + '%';
        });
    }

    // Vision/Mission Card Hover Effect (Mouse Tracking)
    document.querySelectorAll('.modern-vm-card').forEach(card => {
        card.addEventListener('mousemove', e => {
            const rect = card.getBoundingClientRect();
            const x = e.clientX - rect.left;
            const y = e.clientY - rect.top;

            card.style.setProperty('--mouse-x', `${x}px`);
            card.style.setProperty('--mouse-y', `${y}px`);
        });
    });
</script>

<?php
/* ====================================================================
   === PAGE FOOTER ===
   ==================================================================== */
include 'footer.php';
?>