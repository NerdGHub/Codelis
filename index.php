<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Codelis CRM Platform</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
</head>

<body>
<!-- Header -->
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container">
        <a class="navbar-brand fw-bold" href="#">Codelis CRM</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" 
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link active" href="#features">Features</a></li>
                <li class="nav-item"><a class="nav-link" href="#benefits">Benefits</a></li>
                <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
            </ul>
        </div>
    </div>
</nav>

<!-- Hero Section -->
<header class="bg-light text-center py-5">
    <div class="container">
            <h1 class="display-4 fw-bold">Codelis CRM for Recruitment Agencies</h1>
        <p class="lead mb-4">Manage students, connect with agencies, and open placement opportunities in one platform.</p>
        <a href="#contact" class="btn btn-primary btn-lg">Request a Demo</a>
    </div>
</header>

<!-- Features Section -->
<section id="features" class="py-5">
    <div class="container">
        <h2 class="mb-4 text-center">Platform Features</h2>
        <div class="row g-4">
            <div class="col-md-4">
                <div class="card shadow-sm h-100">
                    <div class="card-body">
                        <h5 class="card-title">Student Management</h5>
                        <p class="card-text">Easily organize and track student profiles, placement statuses, and communications.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card shadow-sm h-100">
                    <div class="card-body">
                        <h5 class="card-title">Agency Networking</h5>
                        <p class="card-text">Connect and collaborate securely with other recruitment agencies to share opportunities.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card shadow-sm h-100">
                    <div class="card-body">
                        <h5 class="card-title">Marketplace for Placements</h5>
                        <p class="card-text">Offer unfulfilled placements openly on the marketplace for a fee or keep them private with selective access.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Benefits Section -->
<section id="benefits" class="bg-primary text-white py-5">
    <div class="container">
        <h2 class="mb-4 text-center">Why Choose Codelis?</h2>
            <ul class="list-unstyled fs-5">
            <li>✓ Streamline recruitment processes for faster placements</li>
            <li>✓ Expand your network with transparent, secure collaborations</li>
            <li>✓ Monetize unfilled placements effortlessly through the marketplace</li>
            <li>✓ Maintain control over privacy and access with customizable sharing settings</li>
        </ul>
    </div>
</section>

<!-- Contact Section -->
<section id="contact" class="py-5">
    <div class="container">
        <h2 class="mb-4 text-center">Get in Touch</h2>
        <form class="mx-auto" style="max-width: 500px;">
            <div class="mb-3">
                <label for="name" class="form-label">Your Name</label>
                <input type="text" id="name" class="form-control" placeholder="Enter your name" required />
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email address</label>
                <input type="email" id="email" class="form-control" placeholder="name@example.com" required />
            </div>
            <div class="mb-3">
                <label for="message" class="form-label">Message</label>
                <textarea id="message" class="form-control" rows="4" placeholder="Write your message here" required></textarea>
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-primary px-4">Send Message</button>
            </div>
        </form>
    </div>
</section>

<!-- Footer -->
<footer class="bg-light py-3 mt-auto">
    <div class="container text-center">
        <small>&copy; 2025 Codelis CRM. All rights reserved.</small>
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
