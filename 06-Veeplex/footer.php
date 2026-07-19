<?php
/* ====================================================================
 * COMPONENT: FOOTER
 * Connected to: All pages (index.php, etc.)
 * Description: Contains the site footer, the contact form modal, 
 * and external JS libraries initialization.
 * ==================================================================== */
?>
<!-- ====================================================================
     === FOOTER SECTION ===
     ==================================================================== -->
<footer id="contact" class="veeplex-footer pt-5 pb-3">
    <div class="container">
        <div class="row g-5">

            <!-- Column 1: Brand & Social Media -->
            <div class="col-lg-4">
                <img src="Uploads/Logo.png" alt="Veeplex Logo" class="footer-logo mb-3">
                <p class="text-light opacity-75 small lh-lg pe-lg-4">
                    Empowering organizations with cutting-edge digital transformation solutions. Bringing the future into the present.
                </p>

                <div class="social-links mt-4">
                    <!-- Note: Make sure FontAwesome CDN is in your header.php -->
                    <a href="https://www.linkedin.com/company/veeplex/" class="social-icon" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                    <a href="https://www.instagram.com/veeplex.jo?igsh=aDMwYjZncDl2OTA1" class="social-icon" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
                </div>
            </div>

            <!-- Column 2: Locations -->
            <div class="col-lg-4">
                <h5 class="fw-bold text-veeplex-orange mb-4">Our Locations</h5>

                <!-- Jordan (HQ) -->
                <div class="location-block mb-3">
                    <h6 class="fw-bold text-white mb-1"><i class="fas fa-map-marker-alt text-veeplex-blue me-2"></i>Jordan (HQ)</h6>
                    <p class="text-light opacity-75 small mb-1">Amir Ben Malek Street 32, Amman, Jordan<br>P.O. Box 3042 Amman 11821 Jordan</p>
                    <p class="text-light opacity-75 small mb-1"><i class="fas fa-phone-alt me-2 text-veeplex-orange"></i>+962 6 222 5152</p>
                    <p class="text-light opacity-75 small mb-0"><i class="fas fa-envelope me-2 text-veeplex-orange"></i>info@veeplex.com</p>
                </div>

                <!-- UAE -->
                <div class="location-block mb-3">
                    <h6 class="fw-bold text-white mb-1"><i class="fas fa-map-marker-alt text-veeplex-blue me-2"></i>UAE</h6>
                    <p class="text-light opacity-75 small mb-1">IFZA Dubai - Dubai Silicon Oasis<br>Dubai - United Arab Emirates</p>
                    <p class="text-light opacity-75 small mb-1"><i class="fas fa-phone-alt me-2 text-veeplex-orange"></i>+971 4 228 52 85</p>
                    <p class="text-light opacity-75 small mb-0"><i class="fas fa-envelope me-2 text-veeplex-orange"></i>info@veeplex.com</p>
                </div>

                <!-- Palestine -->
                <div class="location-block mb-0">
                    <h6 class="fw-bold text-white mb-1"><i class="fas fa-map-marker-alt text-veeplex-blue me-2"></i>Palestine</h6>
                    <p class="text-light opacity-75 small mb-1">Al Midan Street, GF Bayan Building<br>Al Bireh, Ramallah</p>
                    <p class="text-light opacity-75 small mb-1"><i class="fas fa-phone-alt me-2 text-veeplex-orange"></i>+970 2 297 1396</p>
                    <p class="text-light opacity-75 small mb-0"><i class="fas fa-envelope me-2 text-veeplex-orange"></i>info@veeplex.com</p>
                </div>
            </div>

            <!-- Column 3: Google Maps Image -->
            <div class="col-lg-4">
                <h5 class="fw-bold text-veeplex-orange mb-4">Find Us</h5>
                <!-- غير مسار الصورة هون لسكرين شوت حقيقية من الخريطة -->
                <div class="footer-map-container rounded-4 overflow-hidden position-relative shadow-lg border border-secondary">
                    <img src="Uploads/Location.png" alt="Veeplex Location Map" class="img-fluid w-100 object-fit-cover" style="height: 220px;">
                    <div class="map-overlay d-flex align-items-center justify-content-center">
                        <a href="https://www.google.com/maps/place/veeplex/@31.986897,35.845797,781m/data=!3m2!1e3!4b1!4m6!3m5!1s0x151ca1bab6257321:0x45c0906d7dc2e243!8m2!3d31.986897!4d35.8483773!16s%2Fg%2F11tkbnx96r?entry=ttu&g_ep=EgoyMDI2MDcxMi4wIKXMDSoASAFQAw%3D%3D"
                            target="_blank" class="btn btn-outline-light rounded-pill px-4 fw-bold">
                            <i class="fas fa-location-arrow me-2"></i>Get Directions
                        </a>
                    </div>
                </div>
            </div>

        </div>

        <!-- Copyright Line -->
        <hr class="border-secondary mt-5 mb-4 opacity-25">
        <div class="row align-items-center">
            <div class="col-12 text-center">
                <p class="text-light opacity-50 small mb-0">&copy; <?php echo date("Y"); ?> Veeplex. All rights reserved.</p>
            </div>
        </div>
    </div>
</footer>

<!-- ====================================================================
     === CONTACT MODAL (Unchanged) ===
     ==================================================================== -->
<div class="modal fade" id="contactModal" tabindex="-1" aria-labelledby="contactModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header border-0 pb-0">
                <h5 class="modal-title fw-bold text-veeplex-blue" id="contactModalLabel">Contact Us</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="process_contact.php" method="POST">
                    <div class="mb-3">
                        <label class="form-label fw-bold text-dark">Your Name</label>
                        <input type="text" name="sender_name" class="form-control bg-light" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-bold text-dark">Business Email</label>
                        <input type="email" name="sender_email" class="form-control bg-light" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-bold text-dark">How can we help you?</label>
                        <textarea name="message" class="form-control bg-light" rows="4" required></textarea>
                    </div>
                    <button type="submit" name="submit_contact" class="btn btn-warning w-100 fw-bold text-white rounded-pill mt-2" style="background-color: var(--veeplex-orange); border: none;">Send Message</button>
                </form>
            </div>
        </div>
    </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

<script>
    AOS.init({
        duration: 800,
        once: true // Animation happens only once while scrolling down
    });
</script>
</body>

</html>