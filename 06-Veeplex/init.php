<?php

/**
 * ====================================================================
 * SYSTEM INITIALIZATION (init.php)
 * Handles session start, autoloader, and environment variables.
 * ====================================================================
 */

// Start session for global messages and tracking
session_start();

// Autoload composer dependencies (PHPMailer, phpdotenv, etc.)
require_once __DIR__ . '/vendor/autoload.php';

// Load environment variables securely
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->safeLoad();
