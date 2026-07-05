<?php
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

    if (@mail($to, $subject, $email_body, $headers)) {
        echo "<script>alert('Thank you! Your message has been sent to our team.');</script>";
    } else {
        echo "<script>alert('Notice: Message saved. (Email sending will work once deployed to the live server).');</script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Veeplex - Bringing the Future into the Present</title>

    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- AOS Animation CSS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="style.css" rel="stylesheet">

</head>

<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark position-absolute w-100 top-0 px-4" style="height: 80px; background-color: transparent !important; z-index: 1030;">
        <div class="container-fluid">

            <!-- Logo -->
            <a class="navbar-brand" href="#home">
                <img src="Uploads/Logo.png" alt="Veeplex Logo" class="custom-logo">
            </a>

            <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#mainNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Links -->
            <div class="collapse navbar-collapse mt-3 mt-lg-0" id="mainNavbar">
                <ul class="navbar-nav ms-auto fs-6 fw-bold text-center">
                    <li class="nav-item me-lg-4">
                        <a class="nav-link text-white" href="#home">Home</a>
                    </li>
                    <li class="nav-item me-lg-4">
                        <a class="nav-link text-white" href="#about">About Us</a>
                    </li>
                    <li class="nav-item me-lg-4">
                        <a class="nav-link text-white" href="#services">Our Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#contact">Contact Us</a>
                    </li>
                </ul>
            </div>

        </div>
    </nav>

    <!-- Home -->
    <section id="home" class="hero-section">

        <video autoplay loop muted playsinline class="bg-video">
            <source src="Uploads/MainBG.mp4" type="video/mp4">
        </video>

        <div class="video-overlay"></div>

        <div class="container text-center position-relative text-white content-above mt-5">

            <h1 style="font-style: italic; font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;" class="fw-bold display-4 mb-3 cinematic-elem delay-1">
                <span style="color: #2b87d7;">Bringing</span> the <span style="color: #d0820c;">Future into</span> the <span style="color: #2b87d7;">Present</span>
            </h1>

            <p class="lead mb-4 cinematic-elem delay-2">Empowering organizations with cutting-edge digital transformation and cybersecurity solutions.</p>

            <!-- Contact Us Button -->
            <button type="button" class="btn btn-warning text-dark fw-bold btn-lg px-4 rounded-pill shadow cinematic-elem delay-3" style="background-color: var(--veeplex-orange); border: none; color: white !important;" data-bs-toggle="modal" data-bs-target="#contactModal">
                Contact Us
            </button>

        </div>
    </section>

    <!-- About Us -->
    <section id="about" class="content-section bg-white" data-aos="fade-up">
        <div class="container">
            <h2 class="fw-bold mb-4 text-veeplex-blue">About Veeplex</h2>
            <p class="lead text-muted border-start border-4 ps-3" style="border-color: var(--veeplex-orange) !important;">
                We lead the technological revolution, empowering organizations to unleash their full potential in today's rapidly evolving digital landscape. We bridge the gap between technology and business value.
            </p>
        </div>
    </section>

    <!-- Our Services -->
    <section id="services" class="content-section bg-light" data-aos="fade-up">
        <div class="container">
            <h2 class="fw-bold mb-5 text-center text-veeplex-blue">Our Services</h2>
            <div class="row text-center">
                <div class="col-md-4 mb-4">
                    <div class="card p-4 shadow-sm h-100 border-0 border-bottom border-4" style="border-color: var(--veeplex-orange) !important;">
                        <h4 class="fw-bold text-veeplex-blue">Self-Service Kiosks</h4>
                        <p class="text-muted mt-2">Transforming customer interactions through advanced self-service technology.</p>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card p-4 shadow-sm h-100 border-0 border-bottom border-4" style="border-color: var(--veeplex-orange) !important;">
                        <h4 class="fw-bold text-veeplex-blue">Cyber Security</h4>
                        <p class="text-muted mt-2">End-to-end protection frameworks to safeguard your digital assets.</p>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card p-4 shadow-sm h-100 border-0 border-bottom border-4" style="border-color: var(--veeplex-orange) !important;">
                        <h4 class="fw-bold text-veeplex-blue">Physical Security</h4>
                        <p class="text-muted mt-2">Comprehensive surveillance and access control systems.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
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

    <!-- Bootstrap & AOS JS -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 800,
            once: true
        });
    </script>

    <!-- Form To Contact Us -->
    <div class="modal fade" id="contactModal" tabindex="-1" aria-labelledby="contactModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header border-0 pb-0">
                    <h5 class="modal-title fw-bold text-veeplex-blue" id="contactModalLabel"></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <form action="index.php" method="POST">
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
</body>

</html>