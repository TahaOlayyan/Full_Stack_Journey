<?php
/* ====================================================================
 * COMPONENT: HEADER
 * Connected to: All pages (index.php, etc.)
 * Description: Contains the HTML document setup, meta tags, external 
 * CSS libraries (Bootstrap, AOS), custom CSS, and the main Navigation Bar.
 * ==================================================================== */
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Veeplex - Bringing the Future into the Present</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <link href="style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark position-absolute w-100 top-0 px-4" style="height: 80px; background-color: transparent !important; z-index: 1030;">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">
                <img src="Uploads/Logo.png" alt="Veeplex Logo" class="custom-logo">
            </a>
            <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#mainNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse mt-3 mt-lg-0" id="mainNavbar">
                <ul class="navbar-nav ms-auto fs-6 fw-bold text-center">
                    <li class="nav-item me-lg-4">
                        <a class="nav-link text-white custom-nav-link" href="#home">Home</a>
                    </li>
                    <li class="nav-item me-lg-4">
                        <a class="nav-link text-white custom-nav-link" href="#about">About Us</a>
                    </li>
                    <li class="nav-item me-lg-4">
                        <a class="nav-link text-white custom-nav-link" href="#services">Our Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white custom-nav-link" href="#contact">Contact Us</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>