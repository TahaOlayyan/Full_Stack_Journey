<?php
/* ====================================================================
 * PAGE: INDEX (HOME)
 * ==================================================================== */
// استدعاء ملف الإعدادات
require 'init.php';

// Include the Header (Meta tags, Navbar)

include 'header.php';
?>
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

<!-- 
  ====================================================================
  SECTION 1: HERO (HOME)
  Description: Video background with cinematic text animations.
  ==================================================================== 
-->

<section id="home" class="hero-section">
    <video autoplay loop muted playsinline class="bg-video">
        <source src="Uploads/MainBG.mp4" type="video/mp4">
    </video>
    <div class="video-overlay"></div>
    <div class="container text-center position-relative text-white content-above mt-5">
        <h1 style="font-style: italic; font-family: 'Trebuchet MS', sans-serif;" class="fw-bold display-4 mb-3 cinematic-elem delay-1">
            <span style="color: var(--veeplex-blue);">Bringing</span> the
            <span style="color: #d0820c;">Future into</span> the
            <span style="color: var(--veeplex-blue);">Present</span>
        </h1>
        <p class="lead mb-4 cinematic-elem delay-2">Empowering organizations with cutting-edge digital transformation solutions.</p>

        <button type="button" class="btn btn-warning text-dark fw-bold btn-lg px-4 rounded-pill shadow cinematic-elem delay-3" style="background-color: var(--veeplex-orange); border: none; color: white !important;" data-bs-toggle="modal" data-bs-target="#contactModal">
            Contact Us
        </button>
    </div>
</section>

<!-- 
  ====================================================================
  SECTION 2: ABOUT US 
  Description: Diagonal split design, frosted glass panels, SVG arrow.
  ==================================================================== 
-->

<section id="about" class="about-section-bg pt-5">
    <div class="container position-relative z-3 py-1">
        <div class="row align-items-stretch mb-5 d-none d-lg-flex mt-5 pt-lg-4">

            <!-- LEFT COLUMN: Modern Badge & Glass Box -->
            <div class="col-lg-5 gap-5" data-aos="fade-right">

                <!-- Modern Heading Style -->
                <div class="mb-4 mt-lg-3">
                    <div class="d-flex align-items-center mb-3">
                        <span class="badge rounded-pill text-white fw-bold me-3 shadow" style="background-color: var(--veeplex-orange); letter-spacing: 2px; font-size: 1rem; padding: 10px 24px;">ABOUT US</span>
                        <div style="height: 2px; width: 60px; background-color: var(--veeplex-orange);"></div>
                    </div>
                    <h2 class="text-white fw-bold display-6 mb-0">Who We Are</h2>
                </div>

                <!-- Clean Glass Panel -->
                <div class="p-4 rounded-4 veeplex-glass-box">
                    <p class="text-white mb-0" style="font-size: 1.2rem; line-height: 1.6;">
                        <strong class="fw-bold me-1" style="font-size: 1.4rem;">
                            <span style="color: var(--veeplex-blue);">Veeple</span><span style="color: var(--veeplex-orange);">X</span>
                        </strong>
                        is a technology solutions provider dedicated to helping organizations embrace digital transformation through innovative, customized, and future-ready solutions.
                    </p>
                </div>
            </div>

            <!-- RIGHT COLUMN: Modern Vision & Mission Cards -->
            <div class="col-lg-6 mt-5 mt-lg-0">

                <div class="vm-cards-wrapper d-flex flex-column" style="gap: 5rem;">

                    <!-- Vision Card -->
                    <div class="modern-vm-card ms-lg-5 p-4 rounded-4" data-aos="fade-left" data-aos-delay="100">
                        <div class="d-flex gap-4  align-items-start">
                            <div class="icon-box shadow-sm flex-shrink-0">
                                <span class="fs-2 vision-icon">👁️</span>
                            </div>
                            <div>
                                <h4 class="fw-bold text-white mb-2" style="letter-spacing: 1px;">Our Vision</h4>
                                <p class="mb-0 text-light opacity-75 lh-base" style="font-size: 0.95rem;">
                                    To lead the technological revolution and be the ultimate partner in digital transformation across the region.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Mission Card (Staggered to the right) -->
                    <div class="modern-vm-card p-4 rounded-4 ms-lg-5" data-aos="fade-left" data-aos-delay="200">
                        <div class="d-flex gap-4 align-items-start">
                            <div class="icon-box shadow-sm flex-shrink-0">
                                <span class="fs-2 mission-icon">🎯</span>
                            </div>
                            <div>
                                <h4 class="fw-bold text-white mb-2" style="letter-spacing: 1px;">Our Mission</h4>
                                <p class="mb-0 text-light opacity-75 lh-base" style="font-size: 0.95rem;">
                                    Designing and delivering smart technologies that bridge the gap between complex tech and actual business value.
                                </p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <!-- 
  ====================================================================
  CLIENTS TICKER (CAPSULE DESIGN)
  ==================================================================== 
-->
        <div class="container mt-5 z-3 position-relative">
            <div class="glass-ticker-capsule">

                <!-- عنوان التيكر مع الخطوط اللي على الجناب -->
                <div class="ticker-capsule-header">
                    <div class="line"></div>
                    <h6 class="text-white fw-bold mb-0 opacity-75" style="letter-spacing: 2px; font-size: 0.85rem;">
                        TRUSTED BY <span class="text-veeplex-orange">INNOVATIVE</span> COMPANIES
                    </h6>
                    <div class="line"></div>
                </div>

                <!-- سلايدر اللوجوهات -->
                <div class="client-ticker-wrapper">
                    <div class="client-ticker-track">
                        <!-- ضيف لوجوهاتك هون -->
                        <div class="client-logo-box"><img src="Uploads/C6_madfoat.png" alt="Madfooat"></div>
                        <div class="client-logo-box"><img src="Uploads/C7_AqabaHub.png" alt="Aqaba"></div>
                        <div class="client-logo-box"><img src="Uploads/C1_umniah.png" alt="Umniah"></div>
                        <div class="client-logo-box"><img src="Uploads/C2_uWallet.png" alt="uWallet"></div>
                        <div class="client-logo-box"><img src="Uploads/C3_Orange.png" alt="Orange"></div>
                        <div class="client-logo-box"><img src="Uploads/C4_orangeMoney.png" alt="Orange Money"></div>
                        <div class="client-logo-box"><img src="Uploads/C5_jopacc.png" alt="Jopacc"></div>

                        <!-- نسخة ثانية عشان اللوب يضل شغال بسلاسة -->
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
</section>

<!-- MOBILE TABS -->
<div class="d-block d-lg-none mt-4" data-aos="fade-up">
    <ul class="nav nav-pills justify-content-center mb-4 gap-2" id="about-pills-tab" role="tablist">
        <li class="nav-item"><button class="nav-link active rounded-pill fw-bold text-white border border-light" style="background-color: transparent;" data-bs-toggle="pill" data-bs-target="#pills-who">Who We Are</button></li>
        <li class="nav-item"><button class="nav-link rounded-pill fw-bold text-white border border-light" style="background-color: transparent;" data-bs-toggle="pill" data-bs-target="#pills-vision">Vision</button></li>
        <li class="nav-item"><button class="nav-link rounded-pill fw-bold text-white border border-light" style="background-color: transparent;" data-bs-toggle="pill" data-bs-target="#pills-mission">Mission</button></li>
    </ul>
    <div class="tab-content text-center" id="pills-tabContent">
        <div class="tab-pane fade show active" id="pills-who">
            <div class="p-4 rounded-4" style="background-color: rgba(0,0,0,0.5); border: 1px solid rgba(255,255,255,0.1); backdrop-filter: blur(10px);">
                <p class="text-white small">Veeplex is a technology solutions provider dedicated to helping organizations embrace digital
                    transformation through innovative, customized, and future-ready solutions.</p>
            </div>
        </div>

        <div class="tab-pane fade" id="pills-vision">
            <div class="p-4 rounded-4" style="background-color: rgba(0,0,0,0.5); border: 1px solid rgba(255,255,255,0.1); backdrop-filter: blur(10px);">
                <div class="icon fs-1 mb-2">👁️</div>
                <h5 class="fw-bold text-veeplex-orange mb-3">Our Vision</h5>
                <p class="text-white small">TTo lead the technological revolution and be the ultimate partner in digital
                    transformation across the region.
                </p>
            </div>
        </div>

        <div class="tab-pane fade" id="pills-mission">
            <div class="p-4 rounded-4" style="background-color: rgba(0,0,0,0.5); border: 1px solid rgba(255,255,255,0.1); backdrop-filter: blur(10px);">
                <div class="icon fs-1 mb-2">🎯</div>
                <h5 class="fw-bold text-veeplex-orange mb-3">Our Mission</h5>
                <p class="text-white small">Designing and delivering smart technologies that bridge the gap between complex tech and actual business value.
                </p>
            </div>
        </div>
    </div>
</div>
</div>



<!-- 
====================================================================
SECTION 3: OUR SERVICES (Interactive Timeline)
Description: Alternating timeline. Uses IntersectionObserver to light up.
==================================================================== 
-->
<section id="services" class="py-5 bg-dark" style="background-color: #0d1620 !important;">
    <div class="container py-5">
        <h2 class="fw-bold mb-5 text-center text-white display-4" data-aos="fade-up">OUR SERVICES</h2>

        <div class="timeline-container position-relative">
            <!-- Central Line -->
            <div class="timeline-line d-none d-lg-block">
                <!-- Scroll Progress Line (The glowing line that moves) -->
                <div class="timeline-progress" id="timelineProgress"></div>
            </div>

            <!-- SERVICE 1 -->
            <div class="row mb-2 align-items-center service-row" id="service-1">

                <!-- 1. الكرت (عالشمال) -->
                <div class="col-lg-5 text-lg-end order-lg-1">
                    <div class="service-card p-4 rounded-4 text-start">
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
                    <div class="connector-line line-left"></div> <!-- خط بتجه لليسار باتجاه الكرت -->
                </div>

                <div class="col-lg-5 order-lg-3 d-none d-lg-block"></div>

            </div>

            <!-- SERVICE 2 -->
            <div class="row mb-2 align-items-center service-row" id="service-2">

                <!-- 1. مساحة فاضية عاليسار -->
                <div class="col-lg-5 d-none d-lg-block order-lg-1"></div>

                <!-- 2. الدائرة والخط  -->
                <div class="col-lg-2 d-none d-lg-flex justify-content-center align-items-center order-lg-2 position-relative">
                    <div class="timeline-dot" data-target="service-2">2</div>
                    <div class="connector-line line-right"></div> <!-- خط لليمين -->
                </div>

                <!-- 3. الكرت عاليمين -->
                <div class="col-lg-5 order-lg-3 text-start">
                    <div class="service-card p-4 rounded-4">
                        <img src="Uploads/Service2.png" class="img-fluid rounded-3 mb-3 w-100 object-fit-cover">
                        <h4 class="fw-bold text-white">Smart Meeting Room</h4>
                        <p class="text-light small">A Smart Meeting Room is an integrated collaboration
                            solution that combines interactive displays, wireless sharing, video conferencing, and intelligent room control to deliver faster, smarter, and more productive meetings.</p>
                        <div class="d-flex justify-content-center mt-3">
                            <button class="btn btn-outline-warning btn-sm px-4" data-bs-toggle="modal" data-bs-target="#serviceModal2">Learn More</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- SERVICE 3 -->
            <div class="row mb-2 align-items-center service-row" id="service-3">
                <div class="col-lg-5 text-lg-end order-lg-1">
                    <div class="service-card p-4 rounded-4 text-start">
                        <img src="Uploads/Service3.png" class="img-fluid rounded-3 mb-3 w-100 object-fit-cover" alt="5x Faster">
                        <h4 class="fw-bold text-white">Physical Security</h4>
                        <p class="text-light small">Comprehensive surveillance, access control, and monitoring systems designed
                            to protect critical assets and ensure seamless facility management</p>
                        <div class="d-flex justify-content-center mt-3">
                            <button class="btn btn-outline-warning btn-sm px-4" data-bs-toggle="modal" data-bs-target="#serviceModal3">Learn More</button>
                        </div>
                    </div>
                </div>

                <!-- التعديل هون: الرقم 3 والخط لليسار -->
                <div class="col-lg-2 d-none d-lg-flex justify-content-center align-items-center order-lg-2 position-relative">
                    <div class="timeline-dot" data-target="service-3">3</div>
                    <div class="connector-line line-left"></div>
                </div>

                <div class="col-lg-5 order-lg-3 d-none d-lg-block"></div>
            </div>

            <!-- SERVICE 4  -->
            <div class="row mb-2 align-items-center service-row" id="service-4">
                <div class="col-lg-5 d-none d-lg-block order-lg-1"></div>

                <!-- التعديل هون: الرقم 4 والخط لليمين -->
                <div class="col-lg-2 d-none d-lg-flex justify-content-center align-items-center order-lg-2 position-relative">
                    <div class="timeline-dot" data-target="service-4">4</div>
                    <div class="connector-line line-right"></div>
                </div>

                <div class="col-lg-5 order-lg-3 text-start">
                    <div class="service-card p-4 rounded-4">
                        <img src="Uploads/Service4.png" class="img-fluid rounded-3 mb-3 w-100 object-fit-cover">
                        <h4 class="fw-bold text-white">Infrastructure Cabling Solutions</h4>
                        <p class="text-light small">Leveraging partnerships with industry leaders like Corning, VEEPLEX provides comprehensive cabling infrastructure solutions
                            for modern network needs.</p>

                        <!-- Triggers Modal 4 -->
                        <div class="d-flex justify-content-center mt-3">
                            <button class="btn btn-outline-warning btn-sm px-4" data-bs-toggle="modal" data-bs-target="#serviceModal4">Learn More</button>
                        </div>
                    </div>
                </div>
            </div>
</section>

<!-- 
  ====================================================================
  SERVICE MODALS (PopUps)
  Description: Hidden by default, triggered by "Learn More" buttons.
  ==================================================================== 
-->

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

                <!-- Subtitle & Main Text -->
                <h5 class="text-light mb-4 border-bottom border-secondary pb-3">Front-End Channels Digitization</h5>

                <p class="small text-light lh-lg">
                    Transforming customer interactions through advanced self-service technology.<br><br>
                    In today's fast-paced digital landscape, seamless self-service experiences are essential for businesses to thrive. Our cutting-edge self-service kiosks empower your customers to access information, complete transactions, and resolve issues independently - all while elevating their overall satisfaction.<br><br>
                    By leveraging the latest advancements in user-friendly interfaces and intuitive workflows, we help you streamline operations, reduce overhead, and deliver the exceptional service your customers demand. Partner with us to unlock the transformative power of self-service technology and stay ahead of the curve.
                </p>

                <!-- Bootstrap Carousel (Auto-playing Slider) -->
                <div id="kioskCarousel" class="carousel slide mt-5 mb-4" data-bs-ride="carousel">

                    <!-- Indicators -->
                    <div class="carousel-indicators" style="bottom: -40px;">
                        <button type="button" data-bs-target="#kioskCarousel" data-bs-slide-to="0" class="active"></button>
                        <button type="button" data-bs-target="#kioskCarousel" data-bs-slide-to="1"></button>
                        <button type="button" data-bs-target="#kioskCarousel" data-bs-slide-to="2"></button>
                    </div>

                    <!-- Slider Items -->
                    <div class="carousel-inner rounded-3 shadow-lg border border-secondary">

                        <!-- Card 1 -->
                        <div class="carousel-item active" data-bs-interval="2000">
                            <img src="Uploads/touchpoints.png" class="d-block w-100" alt="Interactive Touchpoints" style="height: 400px;  object-fit: cover;">

                            <div class="p-4 text-center border-top border-secondary" style="background-color: var(--veeplex-orange);">
                                <h5 class="fw-bold text-dark mb-2">Interactive Touchpoints</h5>
                                <p class="small text-dark fw-semibold mb-0">Advanced touchscreen interfaces enabling intuitive customer self-service experiences across multiple environments.</p>
                            </div>
                        </div>

                        <!-- Card 2 -->
                        <div class="carousel-item" data-bs-interval="2000">
                            <img src="Uploads/transactions.png" class="d-block w-100" alt="Seamless Transactions" style="height: 400px;  object-fit: cover;">

                            <div class="p-4 text-center border-top border-secondary" style="background-color: var(--veeplex-orange);">
                                <h5 class="fw-bold text-dark mb-2">Seamless Transactions</h5>
                                <p class="small text-dark fw-semibold mb-0">Integrated payment solutions that streamline customer transactions while maintaining security and compliance.</p>
                            </div>
                        </div>

                        <!-- Card 3 -->
                        <div class="carousel-item" data-bs-interval="2000">
                            <img src="Uploads/insights.png" class="d-block w-100" alt="Data-Driven Insights" style="height: 400px;  object-fit: cover;">

                            <div class="p-4 text-center border-top border-secondary" style="background-color: var(--veeplex-orange);">
                                <h5 class="fw-bold text-dark mb-2">Data-Driven Insights</h5>
                                <p class="small text-dark fw-semibold mb-0">Advanced analytics capabilities that transform customer interactions into actionable business intelligence.</p>
                            </div>
                        </div>

                    </div>

                    <!-- Arrows -->
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

                <!-- Subtitle & Main Text -->
                <img src="Uploads/Service2.png" class="img-fluid rounded-3 mb-4 w-100" alt="Smart Meeting Room">

                <h5 class="text-light mb-4 border-bottom border-secondary pb-3">Next-Generation Collaboration Spaces</h5>


                <p class="small text-light lh-lg">
                    Transforming how teams connect, collaborate, and create.<br><br>
                    A Smart Meeting Room is an integrated collaboration solution that combines interactive displays, wireless sharing, video conferencing, and intelligent room control to deliver faster, smarter, and more productive meetings. Say goodbye to cable clutter and technical difficulties.<br><br>
                    By integrating state-of-the-art audiovisual technology with smart automation, we create intuitive environments where ideas flow freely. Whether your team is in the office or joining remotely, our solutions ensure crystal-clear communication and seamless content sharing.
                </p>

                <!-- Bootstrap Carousel (Auto-playing Slider) -->
                <div id="meetingCarousel" class="carousel slide mt-5 mb-4" data-bs-ride="carousel">

                    <!-- Indicators -->
                    <div class="carousel-indicators" style="bottom: -40px;">
                        <button type="button" data-bs-target="#meetingCarousel" data-bs-slide-to="0" class="active"></button>
                        <button type="button" data-bs-target="#meetingCarousel" data-bs-slide-to="1"></button>
                        <button type="button" data-bs-target="#meetingCarousel" data-bs-slide-to="2"></button>
                    </div>

                    <!-- Slider Items -->
                    <div class="carousel-inner rounded-3 shadow-lg border border-secondary">

                        <div class="carousel-item active" data-bs-interval="2000">

                            <!-- Card 1 -->
                            <img src="Uploads/School.png" class="d-block w-100" alt="Interactive Displays" style="height: 400px;  object-fit: cover;">

                            <div class="p-4 text-center border-top border-secondary" style="background-color: var(--veeplex-orange);">
                                <h5 class="fw-bold text-dark mb-2">Designed for Education</h5>
                                <p class="small text-dark fw-semibold mb-0">Empower school leaders and teachers with a smart meeting space for administration,
                                    collaboration, parent conferences, and online training. Wireless sharing, interactive displays,
                                    and seamless Teams & Zoom integration ensure faster, more productive meetings.</p>
                            </div>
                        </div>

                        <!-- Card 2 -->
                        <div class="carousel-item" data-bs-interval="2000">
                            <img src="Uploads/conferencing.png" class="d-block w-100" alt="Seamless Video Conferencing" style="height: 400px;  object-fit: cover;">

                            <div class="p-4 text-center border-top border-secondary" style="background-color: var(--veeplex-orange);">
                                <h5 class="fw-bold text-dark mb-2">Designed for High-Impact Conferences</h5>
                                <p class="small text-dark fw-semibold mb-0">Elevate every conference with intelligent meeting technology, seamless connectivity, and a
                                    premium collaboration experience for corporate events and executive meetings.</p>
                            </div>
                        </div>

                        <!-- Card 3 -->
                        <div class="carousel-item" data-bs-interval="2000">
                            <img src="Uploads/Office.png" class="d-block w-100" alt="Intelligent Room Control" style="height: 400px;  object-fit: cover;">

                            <div class="p-4 text-center border-top border-secondary" style="background-color: var(--veeplex-orange);">
                                <h5 class="fw-bold text-dark mb-2">Designed for Modern Corporate Teams</h5>
                                <p class="small text-dark fw-semibold mb-0">Designed for modern corporate offices, our Smart Meeting Room helps teams
                                    collaborate seamlessly, present wirelessly, and make faster business decisions.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Arrows -->
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

                <!-- Subtitle & Main Text -->
                <img src="Uploads/Service3.png" class="img-fluid rounded-3 mb-4 w-100" alt="Physical Security">

                <h5 class="text-light mb-4 border-bottom border-secondary pb-3">Advanced Access & Surveillance Solutions</h5>

                <p class="small text-light lh-lg">
                    Protecting your physical assets with cutting-edge technology.<br><br>
                    Physical Security is no longer just about locks and guards. It's an integrated ecosystem of smart gates, biometric access control, AI-driven surveillance, and automated threat detection systems designed to keep unauthorized personnel out while ensuring seamless movement for your team.<br><br>
                    By deploying robust physical infrastructure synced with intelligent software, we provide a proactive security shield. This reduces human error, cuts down response time drastically, and gives you complete visibility and control over your premises.
                </p>

                <!-- Bootstrap Carousel (Auto-playing Slider) -->
                <div id="physicalSecurityCarousel" class="carousel slide mt-5 mb-4" data-bs-ride="carousel">

                    <!-- Indicators -->
                    <div class="carousel-indicators" style="bottom: -40px;">
                        <button type="button" data-bs-target="#physicalSecurityCarousel" data-bs-slide-to="0" class="active"></button>
                        <button type="button" data-bs-target="#physicalSecurityCarousel" data-bs-slide-to="1"></button>
                        <button type="button" data-bs-target="#physicalSecurityCarousel" data-bs-slide-to="2"></button>
                        <button type="button" data-bs-target="#physicalSecurityCarousel" data-bs-slide-to="3"></button>
                        <button type="button" data-bs-target="#physicalSecurityCarousel" data-bs-slide-to="4"></button>
                        <button type="button" data-bs-target="#physicalSecurityCarousel" data-bs-slide-to="5"></button>
                    </div>

                    <div class="carousel-inner rounded-3 shadow-lg border border-secondary">

                        <!--Card 1 -->
                        <div class="carousel-item active" data-bs-interval="2000">
                            <img src="Uploads/Patent turnstile.png" class="d-block w-100" alt="Card 1" style="height: 400px; object-fit: cover;">
                            <div class="p-4 text-center border-top border-secondary" style="background-color: var(--veeplex-orange);">
                                <h5 class="fw-bold text-dark mb-2">Patent Turnstile</h5>
                                <p class="small text-dark fw-semibold mb-0">Advanced high-security turnstile gates designed to control pedestrian access, prevent unauthorized entry, and ensure smooth movement in high-traffic areas.
                                    Ideal for corporate buildings, factories, campuses, stadiums, and public facilities.</p>
                            </div>
                        </div>

                        <!--Card 2 -->
                        <div class="carousel-item" data-bs-interval="2000">
                            <img src="Uploads/Tripod turnstile.png" class="d-block w-100" alt="Card 2" style="height: 400px; object-fit: cover;">
                            <div class="p-4 text-center border-top border-secondary" style="background-color: var(--veeplex-orange);">
                                <h5 class="fw-bold text-dark mb-2">Tripod Turnstile</h5>
                                <p class="small text-dark fw-semibold mb-0">provides secure, fast, and reliable pedestrian access control with seamless integration into modern authentication systems,
                                    making it ideal for high-traffic environments.</p>
                            </div>
                        </div>

                        <!--Card 3 -->
                        <div class="carousel-item" data-bs-interval="2000">
                            <img src="Uploads/Flap Barrier  Sliding Turnstil.png" class="d-block w-100" alt="Card 3" style="height: 400px;  object-fit: cover;">
                            <div class="p-4 text-center border-top border-secondary" style="background-color: var(--veeplex-orange);">
                                <h5 class="fw-bold text-dark mb-2">Flap Barrier & Sliding Turnstil</h5>
                                <p class="small text-dark fw-semibold mb-0">Flap Barriers and Turnstiles provide fast, secure, and reliable pedestrian access with modern design,
                                    making them ideal for high-traffic and high-security environments.</p>
                            </div>
                        </div>

                        <!--Card 4 -->
                        <div class="carousel-item" data-bs-interval="2000">
                            <img src="Uploads/Swing Turnstile.png" class="d-block w-100" alt="Card 4" style="height: 400px;  object-fit: cover;">
                            <div class="p-4 text-center border-top border-secondary" style="background-color: var(--veeplex-orange);">
                                <h5 class="fw-bold text-dark mb-2">Swing Turnstile & Speed Gate</h5>
                                <p class="small text-dark fw-semibold mb-0">Fast, secure, and stylish access control solutions designed for smooth pedestrian flow. Ideal for corporate offices, airports, hotels, and premium facilities,
                                    with seamless integration to RFID, QR, biometric, and facial recognition systems.</p>
                            </div>
                        </div>

                        <!--Card 5 -->
                        <div class="carousel-item" data-bs-interval="2000">
                            <img src="Uploads/Full height turnstile.png" class="d-block w-100" alt="Card 5" style="height: 400px;  object-fit: cover;">
                            <div class="p-4 text-center border-top border-secondary" style="background-color: var(--veeplex-orange);">
                                <h5 class="fw-bold text-dark mb-2">Full Height Turnstile</h5>
                                <p class="small text-dark fw-semibold mb-0">A powerful access solution designed to protect critical entrances with full-body control,
                                    strong physical security, and seamless integration with modern access systems.</p>
                            </div>
                        </div>

                        <!--Card 6 -->
                        <div class="carousel-item" data-bs-interval="2000">
                            <img src="Uploads/boom barrier.png" class="d-block w-100" alt="Card 6" style="height: 400px;  object-fit: cover;">
                            <div class="p-4 text-center border-top border-secondary" style="background-color: var(--veeplex-orange);">
                                <h5 class="fw-bold text-dark mb-2">Boom Barrier</h5>
                                <p class="small text-dark fw-semibold mb-0">regulates vehicular traffic at controlled access points like parking garages, toll booths, and security checkpoints. It uses a pivoted horizontal arm that raises and lowers,
                                    driven by electromechanical or hydraulic motors and integrated with access systems.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Arrows -->
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

                <!-- Subtitle & Main Text -->
                <img src="Uploads/Service4.png" class="img-fluid rounded-3 mb-4 w-100" alt="Cloud Infrastructure">

                <h5 class="text-light mb-4 border-bottom border-secondary pb-3">Building the Physical Backbone of Tomorrow's Networks</h5>

                <p class="small text-light lh-lg">
                    Leveraging strategic partnerships with industry leaders like Corning, VEEPLEX provides comprehensive cabling infrastructure solutions engineered for modern network demands.<br><br>
                    Whether your application is in a small medical clinic, a multi-terminal airport, or a large campus, our solutions are proven to work together seamlessly. We establish a flexible and scalable framework capable of efficiently transmitting massive amounts of data, voice, and video, lowering your current operational costs while preparing your network for the needs of tomorrow.
                </p>

                <!-- Bootstrap Carousel (Auto-playing Slider) -->
                <div id="cloudCarousel" class="carousel slide mt-5 mb-4" data-bs-ride="carousel">

                    <!-- Indicators -->
                    <div class="carousel-indicators" style="bottom: -40px;">
                        <button type="button" data-bs-target="#cloudCarousel" data-bs-slide-to="0" class="active"></button>
                        <button type="button" data-bs-target="#cloudCarousel" data-bs-slide-to="1"></button>
                        <button type="button" data-bs-target="#cloudCarousel" data-bs-slide-to="2"></button>
                        <button type="button" data-bs-target="#cloudCarousel" data-bs-slide-to="3"></button>
                    </div>

                    <!-- Slider Items -->
                    <div class="carousel-inner rounded-3 shadow-lg border border-secondary">

                        <!-- Card 1 -->
                        <div class="carousel-item active" data-bs-interval="2000">

                            <img src="Uploads/Optical Fiber.png" class="d-block w-100" alt="Optical Fiber" style="height: 400px; object-fit: cover;">
                            <div class="p-4 text-center border-top border-secondary" style="background-color: var(--veeplex-orange);">
                                <h5 class="fw-bold text-dark mb-2">Optical Fiber</h5>
                                <p class="small text-dark fw-semibold mb-0">High-performance optical fiber solutions for reliable voice, data, and video transmission. Available in Single-mode,
                                    Multimode, and specialized fiber options for high-speed, long-distance, and mission-critical networks.</p>
                            </div>
                        </div>

                        <!-- Card 2 -->
                        <div class="carousel-item" data-bs-interval="2000">
                            <img src="Uploads/Enterprise Networks.png" class="d-block w-100" alt="Enterprise Networks" style="height: 400px; object-fit: cover;">
                            <div class="p-4 text-center border-top border-secondary" style="background-color: var(--veeplex-orange);">
                                <h5 class="fw-bold text-dark mb-2">Enterprise Networks</h5>
                                <p class="small text-dark fw-semibold mb-0">Scalable network solutions for businesses of all sizes—from small offices to large campuses. Delivering reliable, high-performance
                                    connectivity with seamless integration, reduced costs, and future-ready infrastructure.</p>
                            </div>
                        </div>

                        <!-- Card 3 -->
                        <div class="carousel-item" data-bs-interval="2000">
                            <img src="Uploads/Data Center.png" class="d-block w-100" alt="Data Center" style="height: 400px; object-fit: cover;">
                            <div class="p-4 text-center border-top border-secondary" style="background-color: var(--veeplex-orange);">
                                <h5 class="fw-bold text-dark mb-2">Data Center</h5>
                                <p class="small text-dark fw-semibold mb-0">A structured cabling system that provides a reliable, scalable, and organized infrastructure for seamless data,
                                    voice, and video communication, ensuring high performance and easy future expansion.</p>
                            </div>
                        </div>

                        <!-- Card 4 -->
                        <div class="carousel-item" data-bs-interval="2000">
                            <img src="Uploads/FTTP.png" class="d-block w-100" alt="Fiber To The Premises (FTTP)" style="height: 400px; object-fit: cover;">
                            <div class="p-4 text-center border-top border-secondary" style="background-color: var(--veeplex-orange);">
                                <h5 class="fw-bold text-dark mb-2">Fiber To The Premises (FTTP)</h5>
                                <p class="small text-dark fw-semibold mb-0">High-speed fiber optic networks that deliver reliable broadband directly to homes, businesses, and buildings,
                                    ensuring faster connectivity, superior performance, and scalable infrastructure.</p>
                            </div>
                        </div>

                    </div>

                    <!-- Arrows -->
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

<!-- 
====================================================================
SECTION: PARTNERSHIP ECOSYSTEM (Clean & Colorful)
==================================================================== 
-->
<section id="partners" class="py-4" style="background-color: #0d1620;">
    <div class="container">

        <!-- عنوان القسم -->
        <div class="text-center mb-4" data-aos="fade-up">
            <h2 class="fw-bold text-white display-6">Our Partners</h2>
        </div>

        <!-- السلايدر -->
        <div class="partners-ticker-container" data-aos="fade-up" data-aos-delay="100">
            <div class="partners-ticker-track">

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

<!-- 
  ====================================================================
  JAVASCRIPT: SCROLL INTERSECTION OBSERVER
  Description: Detects when a service card is 50% visible on screen 
  and adds the "active" class to light it up.
  ==================================================================== 
-->

<script>
    document.addEventListener("DOMContentLoaded", function() {
        // 1. إعدادات المراقب (يشتغل بنص الشاشة بالضبط)
        const observerOptions = {
            root: null,
            // 0px من فوق (يعني شغال طول ما هو بالنصف العلوي)
            // -50% من تحت (يعني مستحيل يشتغل وهو لسا بالنصف السفلي قبل ما يلمس الخط)
            rootMargin: '0px 0px -50% 0px',
            threshold: 0
        };

        // 2. إنشاء المراقب
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

        // 3. التعديل الجوهري هون: احكي للمراقب يراقب "الدوائر" مش الصفوف!
        const dots = document.querySelectorAll('.timeline-dot');
        dots.forEach(dot => {
            timelineObserver.observe(dot);
        });
    });

    /* ====================================================================
       TIMELINE PROGRESS LINE SCRIPT
       Description: Calculates scroll distance and grows the timeline line.
       ==================================================================== */
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

    //  حركة الماوس فوق كروت الـ Vision والـ Mission
    document.querySelectorAll('.modern-vm-card').forEach(card => {
        card.addEventListener('mousemove', e => {
            const rect = card.getBoundingClientRect();
            const x = e.clientX - rect.left; // موقع الماوس جوا الكرت (X)
            const y = e.clientY - rect.top; // موقع الماوس جوا الكرت (Y)

            card.style.setProperty('--mouse-x', `${x}px`);
            card.style.setProperty('--mouse-y', `${y}px`);
        });
    });
</script>

<?php
// Include the Footer (Scripts, Contact Modal, Footer UI)
include 'footer.php';
?>