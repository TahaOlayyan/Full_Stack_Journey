<?php
/* ====================================================================
 * COMPONENT: FOOTER
 * Connected to: All pages (index.php, etc.)
 * Description: Contains the site footer, the contact form modal, 
 * and external JS libraries initialization.
 * ==================================================================== */
?>
<footer id="contact" class="bg-dark text-white py-5">
    <div class="container">
        <div class="row text-center text-md-start">
            <div class="col-md-6 mb-4 mb-md-0">
                <h3 class="fw-bold text-veeplex-orange mb-3">VEEPLEX</h3>
                <p class="text-light mb-1">Empowering the digital landscape.</p>
            </div>
            <div class="col-md-6 text-md-end">
                <h5 class="fw-bold mb-3">Contact Information</h5>
                <p class="mb-2">📞 +962 6 222-5152</p>
                <p class="mb-3">✉️ info@veeplex.com</p>
            </div>
        </div>
    </div>
</footer>

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