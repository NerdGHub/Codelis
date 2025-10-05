<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Codelis | Student Recruitment Agency</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-md navbar-dark bg-primary sticky-top">
        <div class="container">
            <a class="navbar-brand fw-bold" href="#hero">Codelis</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="mainNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a href="#about" class="nav-link">About</a></li>
                    <li class="nav-item"><a href="#jobs" class="nav-link">Jobs</a></li>
                    <li class="nav-item"><a href="#students" class="nav-link">For Students</a></li>
                    <li class="nav-item"><a href="#employers" class="nav-link">For Employers</a></li>
                    <li class="nav-item"><a href="#contact" class="nav-link">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="hero" class="bg-primary text-white text-center py-5">
        <div class="container">
            <h1 class="display-4 fw-bold">Codelis Recruitment Agency</h1>
            <p class="lead mt-3 mb-4">Connecting talented students with amazing job opportunities.</p>
            <a href="#jobs" class="btn btn-warning btn-lg">View Jobs</a>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="py-5">
        <div class="container">
            <h2 class="text-primary mb-4">About Codelis</h2>
            <p class="lead">
                Codelis is dedicated to helping students kickstart their careers by connecting them with forward-thinking employers. We specialize in matching student talent with internships, graduate roles, and part-time jobs in tech, business, marketing, and more.
            </p>
        </div>
    </section>

    <!-- Jobs Section -->
    <section id="jobs" class="py-5 bg-light">
        <div class="container">
            <h2 class="text-primary mb-4">Job Listings</h2>
            <div class="row">
                <!-- Job Card 1 -->
                <div class="col-md-4 mb-4">
                    <div class="card border-primary h-100">
                        <div class="card-body">
                            <h5 class="card-title text-primary">Junior Web Developer</h5>
                            <p class="card-text">Work with an innovative tech startup to build modern web apps using JavaScript and Bootstrap.</p>
                            <span class="badge bg-primary">Internship</span>
                            <p class="mt-2 mb-0"><strong>Location:</strong> Remote</p>
                        </div>
                    </div>
                </div>
                <!-- Job Card 2 -->
                <div class="col-md-4 mb-4">
                    <div class="card border-success h-100">
                        <div class="card-body">
                            <h5 class="card-title text-success">Digital Marketing Assistant</h5>
                            <p class="card-text">Assist a growing ecommerce company with social media, email campaigns, and SEO.</p>
                            <span class="badge bg-success">Part-Time</span>
                            <p class="mt-2 mb-0"><strong>Location:</strong> Newcastle</p>
                        </div>
                    </div>
                </div>
                <!-- Job Card 3 -->
                <div class="col-md-4 mb-4">
                    <div class="card border-warning h-100">
                        <div class="card-body">
                            <h5 class="card-title text-warning">Graduate Business Analyst</h5>
                            <p class="card-text">Join a financial firm and gain hands-on experience with data, reporting, and process improvement.</p>
                            <span class="badge bg-warning text-dark">Graduate</span>
                            <p class="mt-2 mb-0"><strong>Location:</strong> Manchester</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- For Students -->
    <section id="students" class="py-5">
        <div class="container">
            <h2 class="text-primary mb-4">For Students</h2>
            <p class="lead">
                At Codelis, we help students stand out. Register with us to access exclusive job openings, CV workshops, interview coaching, and networking events.
            </p>
            <ul class="list-group list-group-flush mb-4">
                <li class="list-group-item">Browse curated job listings</li>
                <li class="list-group-item">Get personalized career support</li>
                <li class="list-group-item">Participate in skill-building events</li>
            </ul>
            <a href="#contact" class="btn btn-primary btn-lg">Register Now</a>
        </div>
    </section>

    <!-- For Employers -->
    <section id="employers" class="py-5 bg-light">
        <div class="container">
            <h2 class="text-primary mb-4">For Employers</h2>
            <p class="lead">
                Want to discover emerging talent? Post your roles with Codelis to tap into our pool of motivated, ambitious students seeking real-world experience.
            </p>
            <ul class="list-group list-group-flush mb-4">
                <li class="list-group-item">List internships, part-time, and graduate positions</li>
                <li class="list-group-item">Connect directly with candidates</li>
                <li class="list-group-item">Promote your company at student events</li>
            </ul>
            <a href="#contact" class="btn btn-primary btn-lg">Post a Job</a>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-5 bg-warning">
        <div class="container">
            <h2 class="text-primary mb-4">Contact Us</h2>
            <div class="row">
                <div class="col-lg-8">
                    <form class="row g-3">
                        <div class="col-md-6">
                            <input type="text" class="form-control" placeholder="Your Name" required>
                        </div>
                        <div class="col-md-6">
                            <input type="email" class="form-control" placeholder="Your Email" required>
                        </div>
                        <div class="col-12">
                            <textarea class="form-control" rows="4" placeholder="Your Message" required></textarea>
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary btn-lg">Send Message</button>
                        </div>
                    </form>
                </div>
                <div class="col-lg-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Get in Touch</h5>
                            <p class="card-text">
                                <strong>Email:</strong> <a href="mailto:info@codelis.co.uk">info@codelis.co.uk</a><br>
                                <strong>Phone:</strong> +44 123 456 7890<br>
                                <strong>Office:</strong> Newcastle-under-Lyme, England
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-primary text-white text-center py-3">
        <div class="container">
            <p class="mb-0">&copy; 2025 Codelis. All rights reserved.</p>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
