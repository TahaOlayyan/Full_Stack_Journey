<?php
/* ====================================================================
 * PAGE: INDEX (HOME)
 * Description: The main landing page. Handles contact form submission 
 * and includes dynamic sections.
 * ==================================================================== */

// --- CONTACT FORM HANDLER ---
if (isset($_POST['submit_contact'])) {
    $name = htmlspecialchars(trim($_POST['sender_name']));
    $email = filter_var(trim($_POST['sender_email']), FILTER_SANITIZE_EMAIL);
    $message = htmlspecialchars(trim($_POST['message']));

    $to = "sales@veeplex.com";
    $subject = "New Lead from Veeplex Website: $name";

    $headers = "From: no-reply@veeplex.com\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

    $email_body = "You have received a new message from the website contact form.\n\n" .
        "Name: $name\n" .
        "Email: $email\n" .
        "Message:\n$message\n";

    if (mail($to, $subject, $email_body, $headers)) {
        echo "<script>alert('Thank you! Your message has been sent to our team.');</script>";
    } else {
        echo "<script>alert('Notice: Message saved. (Email sending will work once deployed to the live server).');</script>";
    }
}

// Include the Header (Meta tags, Navbar)
include 'header.php';
?>

<!-- 
  ====================================================================
  SECTION 1: HERO (HOME)
  Description: Video background with cinematic text animations.
  ==================================================================== 
-->
<section id="home" class="hero-section">
    <video autoplay loop muted playsinline class="bg-video">
        <source src="Uploads/City.mp4" type="video/mp4">
    </video>
    <div class="video-overlay"></div>

    <div class="container text-center position-relative text-white content-above mt-5">
        <h1 style="font-style: italic; font-family: 'Trebuchet MS', sans-serif;" class="fw-bold display-4 mb-3 cinematic-elem delay-1">
            <span style="color: var(--veeplex-blue);">Bringing</span> the
            <span style="color: #d0820c;">Future into</span> the
            <span style="color: var(--veeplex-blue);">Present</span>
        </h1>
        <p class="lead mb-4 cinematic-elem delay-2">Empowering organizations with cutting-edge digital transformation and cybersecurity solutions.</p>

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
<section id="about" class="about-section-bg py-5">
    <div class="container position-relative z-3 py-5">
        <div class="row align-items-stretch mb-5 d-none d-lg-flex mt-5 pt-lg-4">

            <!-- LEFT COLUMN: Outline Text & Glass Box -->
            <div class="col-lg-5" data-aos="fade-right">
                <div class="position-relative">
                    <h6 class="fw-bold text-uppercase mb-3" style="color: var(--veeplex-orange); letter-spacing: 2px; margin-left: 50px;">
                        <span class="text-outline">ABOUT US</span>
                    </h6>
                    <svg class="about-arrow" viewBox="0 0 100 100">
                        <path d="M 80 20 Q 20 20 20 80" fill="none" stroke="#e59500" stroke-width="4" stroke-linecap="round" />
                        <path d="M 20 80 L 28 65 M 20 80 L 12 65" fill="none" stroke="#e59500" stroke-width="4" stroke-linecap="round" />
                    </svg>
                </div>

                <div class="glass-panel p-4 p-lg-5 rounded-4 d-flex flex-column justify-content-center">
                    <p class="lh-lg mb-0 card-text-glass">
                        <span style="color: #1b6cb3; font-size: 20px; font-weight: bolder;">Veeple<span style="color: #d0820c;">x</span></span> is a <span class="text-white fw-bold">technology solutions provider</span> dedicated to helping organizations embrace digital transformation through innovative, customized, and future-ready solutions.
                    </p>
                </div>
            </div>

            <!-- RIGHT COLUMN: Floating Cards -->
            <div class="col-lg-5 ms-auto">
                <div class="d-flex flex-column" style="gap: 6rem;">
                    <!-- Vision -->
                    <div class="vision-mission-card d-flex gap-3 align-items-center p-4 rounded-4" data-aos="fade-left" data-aos-delay="100">
                        <div class="icon-circle bg-glass-icon d-flex align-items-center justify-content-center rounded-circle flex-shrink-0" style="width: 55px; height: 55px; font-size: 22px;">👁️</div>
                        <div>
                            <h5 class="fw-bold mb-1 text-white">Our Vision</h5>
                            <p class="mb-0 lh-sm card-text-glass" style="font-size: 0.85rem;">To lead the technological revolution and be the ultimate partner in digital transformation across the region.</p>
                        </div>
                    </div>
                    <!-- Mission -->
                    <div class="vision-mission-card d-flex gap-3 align-items-center p-4 rounded-4" data-aos="fade-left" data-aos-delay="200">
                        <div class="icon-circle bg-glass-icon d-flex align-items-center justify-content-center rounded-circle flex-shrink-0" style="width: 55px; height: 55px; font-size: 22px;">🎯</div>
                        <div>
                            <h5 class="fw-bold mb-1 text-white">Our Mission</h5>
                            <p class="mb-0 lh-sm card-text-glass" style="font-size: 0.85rem;">Designing and delivering smart technologies that bridge the gap between complex tech and actual business value.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

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
                        <p class="text-white small">Veeplex is a technology solutions provider...</p>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-vision">
                    <div class="p-4 rounded-4" style="background-color: rgba(0,0,0,0.5); border: 1px solid rgba(255,255,255,0.1); backdrop-filter: blur(10px);">
                        <div class="icon fs-1 mb-2">👁️</div>
                        <h5 class="fw-bold text-veeplex-orange mb-3">Our Vision</h5>
                        <p class="text-white small">To lead the technological revolution...</p>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-mission">
                    <div class="p-4 rounded-4" style="background-color: rgba(0,0,0,0.5); border: 1px solid rgba(255,255,255,0.1); backdrop-filter: blur(10px);">
                        <div class="icon fs-1 mb-2">🎯</div>
                        <h5 class="fw-bold text-veeplex-orange mb-3">Our Mission</h5>
                        <p class="text-white small">Designing and delivering smart technologies...</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

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
            <div class="row mb-5 align-items-center service-row" id="service-1">
                <div class="col-lg-5 text-lg-end order-lg-1">
                    <div class="service-card p-4 rounded-4">
                        <img src="Uploads/Service1.png" class="img-fluid rounded-3 mb-3 w-100 object-fit-cover" style="height: 150px;" alt="Service 1">
                        <h4 class="fw-bold text-white">AI-FIRST</h4>
                        <p class="text-light small">AI Powers Every Service. Not a tool on top — AI is the engine underneath every campaign, ad, and strategy we build.</p>
                        <!-- Triggers Modal 1 -->
                        <button class="btn btn-outline-warning btn-sm mt-2" data-bs-toggle="modal" data-bs-target="#serviceModal1">Learn More</button>
                    </div>
                </div>
                <!-- Glowing Dot -->
                <div class="col-lg-2 d-none d-lg-flex justify-content-center order-lg-2">
                    <div class="timeline-dot" data-target="service-1"></div>
                </div>
                <!-- Empty Column for spacing -->
                <div class="col-lg-5 order-lg-3 d-none d-lg-block"></div>
            </div>

            <!-- SERVICE 2 -->
            <div class="row mb-5 align-items-center service-row" id="service-2">
                <div class="col-lg-5 d-none d-lg-block order-lg-1"></div>
                <div class="col-lg-2 d-none d-lg-flex justify-content-center order-lg-2">
                    <div class="timeline-dot" data-target="service-2"></div>
                </div>
                <div class="col-lg-5 order-lg-3 text-start">
                    <div class="service-card p-4 rounded-4">
                        <img src="Uploads/Service2.png" class="img-fluid rounded-3 mb-3 w-100 object-fit-cover" style="height: 150px;" alt="Service 2">
                        <h4 class="fw-bold text-white">24/7 SUPPORT</h4>
                        <p class="text-light small">Agents That Work While You Sleep. Autonomous AI agents monitor campaigns, adjust bids, and report back.</p>
                        <!-- Triggers Modal 2 -->
                        <button class="btn btn-outline-warning btn-sm mt-2" data-bs-toggle="modal" data-bs-target="#serviceModal2">Learn More</button>
                    </div>
                </div>
            </div>

            <!-- SERVICE 3 -->
            <div class="row mb-5 align-items-center service-row" id="service-3">
                <div class="col-lg-5 text-lg-end order-lg-1">
                    <div class="service-card p-4 rounded-4">
                        <img src="Uploads/Service3.jpg" class="img-fluid rounded-3 mb-3 w-100 object-fit-cover" style="height: 150px;" alt="Service 3">
                        <h4 class="fw-bold text-white">5x FASTER</h4>
                        <p class="text-light small">Faster Than Traditional Agencies. AI automation cuts production time by 80%. Same quality, shipped before you'd expect.</p>
                        <!-- Triggers Modal 3 -->
                        <button class="btn btn-outline-warning btn-sm mt-2" data-bs-toggle="modal" data-bs-target="#serviceModal3">Learn More</button>
                    </div>
                </div>
                <div class="col-lg-2 d-none d-lg-flex justify-content-center order-lg-2">
                    <div class="timeline-dot" data-target="service-3"></div>
                </div>
                <div class="col-lg-5 order-lg-3 d-none d-lg-block"></div>
            </div>

            <!-- SERVICE 4 (New Service) -->
            <div class="row mb-5 align-items-center service-row" id="service-4">
                <div class="col-lg-5 d-none d-lg-block order-lg-1"></div>
                <div class="col-lg-2 d-none d-lg-flex justify-content-center order-lg-2">
                    <div class="timeline-dot" data-target="service-4"></div>
                </div>
                <div class="col-lg-5 order-lg-3 text-start">
                    <div class="service-card p-4 rounded-4">
                        <img src="Uploads/Service4.jpg" class="img-fluid rounded-3 mb-3 w-100 object-fit-cover" style="height: 150px;" alt="Service 4">
                        <h4 class="fw-bold text-white">CLOUD INFRASTRUCTURE</h4>
                        <p class="text-light small">Scalable, secure, and future-proof cloud solutions ensuring your business stays online and blazing fast.</p>
                        <!-- Triggers Modal 4 -->
                        <button class="btn btn-outline-warning btn-sm mt-2" data-bs-toggle="modal" data-bs-target="#serviceModal4">Learn More</button>
                    </div>
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
<!-- Modal 1 -->
<div class="modal fade" id="serviceModal1" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content bg-dark text-white border-secondary">
            <div class="modal-header border-bottom-0">
                <h3 class="modal-title fw-bold text-veeplex-orange">AI-FIRST</h3>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body custom-scrollbar">
                <img src="Uploads/Service1.png" class="img-fluid rounded-3 mb-4 w-100" alt="AI First">
                <h5>The Future of Campaigns</h5>
                <p>Here you can write the full story of the AI-First service. Add images, paragraphs, and any HTML you want. It's completelyHere you can write the full story of the AI-First service. Add images, paragraphs, and any HTML you want. It's completely Here you can write the full story of the AI-First service. Add images, paragraphs, and any HTML you want. It's completely isolated for this specific service.</p>
            </div>
            <!-- الفوتر الثابت تحت -->
            <div class="modal-footer border-top-0">
                <button type="button" class="btn btn-outline-light" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal 2 -->
<div class="modal fade" id="serviceModal2" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content bg-dark text-white border-secondary">
            <div class="modal-header border-bottom-0">
                <h3 class="modal-title fw-bold text-veeplex-orange">24/7 SUPPORT</h3>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body custom-scrollbar">
                <img src="Uploads/Service2.png" class="img-fluid rounded-3 mb-4 w-100" alt="24/7 Support">
                <h5>Always On, Always Learning</h5>
                <p>Detailed information about how the AI agents work around the clock without any downtime.</p>
            </div>
            <div class="modal-footer border-top-0">
                <button type="button" class="btn btn-outline-light" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal 3 -->
<div class="modal fade" id="serviceModal3" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content bg-dark text-white border-secondary">
            <div class="modal-header border-bottom-0">
                <h3 class="modal-title fw-bold text-veeplex-orange">5x FASTER</h3>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body custom-scrollbar">
                <img src="Uploads/Service3.jpg" class="img-fluid rounded-3 mb-4 w-100" alt="5x Faster">
                <h5>Speed Without Compromise</h5>
                <p>Story about how automation reduces human error and cuts production time drastically.</p>
            </div>
            <div class="modal-footer border-top-0">
                <button type="button" class="btn btn-outline-light" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal 4 -->
<div class="modal fade" id="serviceModal4" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content bg-dark text-white border-secondary">
            <div class="modal-header border-bottom-0">
                <h3 class="modal-title fw-bold text-veeplex-orange">CLOUD INFRASTRUCTURE</h3>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body custom-scrollbar">
                <img src="Uploads/Service4.jpg" class="img-fluid rounded-3 mb-4 w-100" alt="Cloud">
                <h5>Scalability on Demand</h5>
                <p>Details about cloud architecture, Oracle Cloud integration, and security layers.</p>
            </div>
            <div class="modal-footer border-top-0">
                <button type="button" class="btn btn-outline-light" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<!-- 
  ====================================================================
  JAVASCRIPT: SCROLL INTERSECTION OBSERVER
  Description: Detects when a service card is 50% visible on screen 
  and adds the "active" class to light it up.
  ==================================================================== 
-->
<script>
    document.addEventListener("DOMContentLoaded", function() {
        // Setup the observer options (Trigger when 50% of the element is visible)
        const observerOptions = {
            root: null,
            rootMargin: '0px',
            threshold: 0.5
        };

        // Create the Intersection Observer
        const timelineObserver = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                // If the user scrolls and the element is visible
                if (entry.isIntersecting) {

                    // 1. Light up the Service Card
                    entry.target.querySelector('.service-card').classList.add('active');

                    // 2. Light up the corresponding Dot
                    const targetId = entry.target.id;
                    const dot = document.querySelector(`.timeline-dot[data-target="${targetId}"]`);
                    if (dot) {
                        dot.classList.add('active');
                    }
                } else {
                    // Optional: Remove active class when scrolling away to replay animation
                    // entry.target.querySelector('.service-card').classList.remove('active');
                    // const targetId = entry.target.id;
                    // const dot = document.querySelector(`.timeline-dot[data-target="${targetId}"]`);
                    // if (dot) dot.classList.remove('active');
                }
            });
        }, observerOptions);

        // Tell the observer to watch every row containing a service
        const serviceRows = document.querySelectorAll('.service-row');
        serviceRows.forEach(row => {
            timelineObserver.observe(row);
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
            // Get the container's exact position relative to the screen
            const rect = timelineContainer.getBoundingClientRect();
            const windowHeight = window.innerHeight;

            // Calculate how much we scrolled INSIDE the timeline container.
            // It starts growing when the top of the container hits the middle of the screen.
            let scrolled = (windowHeight / 2) - rect.top;
            let totalDistance = rect.height;

            // Clamp the value so it doesn't go below 0 or beyond the total height
            let progress = Math.max(0, Math.min(scrolled, totalDistance));

            // Convert the scrolled distance into a percentage
            let percentage = (progress / totalDistance) * 100;

            // Update the CSS height of the glowing line
            timelineProgress.style.height = percentage + '%';
        });
    }
</script>

<?php
// Include the Footer (Scripts, Contact Modal, Footer UI)
include 'footer.php';
?>