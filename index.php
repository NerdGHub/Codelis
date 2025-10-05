<?php
include("_partial/_header.php");
?>

<body>

    <!-- Bootstrap Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top custom-navbar" id="navbar">
        <div class="container">
            <a class="navbar-brand fw-bold fs-3" href="#home">Codelis</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#how-it-works">How It Works</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#employers">For Employers</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#candidates">For Candidates</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="container-fluid custom-content">
        <!-- Hero Section -->
        <section id="home" class="hero-section min-vh-100 d-flex align-items-center">
            <div class="container text-center">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <h1 class="display-2 fw-bold mb-4 text-white hero-title">Connect Top Talent with Perfect
                            Opportunities</h1>
                        <p class="lead mb-5 text-white hero-subtitle">Codelis uses smart matching technology to bring
                            employers and candidates together, creating meaningful connections that drive career growth
                            and business success.</p>
                        <div class="d-flex gap-3 justify-content-center flex-wrap">
                            <a href="#employers" class="btn btn-primary btn-lg px-4 py-3 rounded-pill">Find Your Next
                                Hire</a>
                            <a href="#candidates" class="btn btn-secondary btn-lg px-4 py-3 rounded-pill">Discover
                                Your Career</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- How It Works Section -->
        <section id="how-it-works" class="custom-section">
            <div class="container dark-bg">
                <div class="row">
                    <div class="col-12">
                        <h2 class="text-center mb-5 section-title">How It Works</h2>
                        <div class="row g-4">
                            <div class="col-lg-3 col-md-6">
                                <div class="text-center p-4">
                                    <div
                                        class="step-circle bg-primary text-white rounded-circle d-flex align-items-center justify-content-center mx-auto mb-3">
                                        <span class="fs-3 fw-bold">1</span>
                                    </div>
                                    <h4 class="mb-3 text-white">Create Your Profile</h4>
                                    <p class="text-light">Tell us about your company culture and role requirements, or
                                        share your skills and career goals.</p>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="text-center p-4">
                                    <div
                                        class="step-circle bg-primary text-white rounded-circle d-flex align-items-center justify-content-center mx-auto mb-3">
                                        <span class="fs-3 fw-bold">2</span>
                                    </div>
                                    <h4 class="mb-3 text-white">Smart Matching</h4>
                                    <p class="text-light">Our intelligent algorithm identifies the best mutual matches
                                        based on skills, experience, and culture fit.</p>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="text-center p-4">
                                    <div
                                        class="step-circle bg-primary text-white rounded-circle d-flex align-items-center justify-content-center mx-auto mb-3">
                                        <span class="fs-3 fw-bold">3</span>
                                    </div>
                                    <h4 class="mb-3 text-white">Connect & Engage</h4>
                                    <p class="text-light">Receive curated matches and start meaningful conversations
                                        with pre-qualified prospects.</p>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="text-center p-4">
                                    <div
                                        class="step-circle bg-primary text-white rounded-circle d-flex align-items-center justify-content-center mx-auto mb-3">
                                        <span class="fs-3 fw-bold">4</span>
                                    </div>
                                    <h4 class="mb-3 text-white">Hire with Confidence</h4>
                                    <p class="text-light">Make informed decisions with detailed compatibility scores and
                                        comprehensive insights.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- For Employers Section -->
        <section id="employers" class="custom-section">
            <div class="container dark-bg">
                <h2 class="text-center mb-5 section-title">For Employers</h2>
                <div class="row g-4">
                    <div class="col-lg-6">
                        <div class="benefit-card h-100 p-4 rounded">
                            <h4 class="mb-3">Access Pre-Screened Talent</h4>
                            <p>Connect with qualified candidates who match your specific requirements and company
                                culture.</p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="benefit-card h-100 p-4 rounded">
                            <h4 class="mb-3">Reduce Time-to-Hire</h4>
                            <p>Streamlined recruitment process that cuts hiring time by up to 50% compared to
                                traditional methods.</p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="benefit-card h-100 p-4 rounded">
                            <h4 class="mb-3">Improve Retention Rates</h4>
                            <p>Better job matches lead to higher employee satisfaction and longer tenure with your
                                company.</p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="benefit-card h-100 p-4 rounded">
                            <h4 class="mb-3">Eliminate Hiring Bias</h4>
                            <p>Objective, skills-based matching reduces unconscious bias in your recruitment process.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- For Candidates Section -->
        <section id="candidates" class="custom-section">
            <div class="container dark-bg">
                <h2 class="text-center mb-5 section-title">For Candidates</h2>
                <div class="row g-4">
                    <div class="col-lg-6">
                        <div class="benefit-card h-100 p-4 rounded">
                            <h4 class="mb-3">Discover Hidden Opportunities</h4>
                            <p>Get matched with roles you might not have found through traditional job searching.</p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="benefit-card h-100 p-4 rounded">
                            <h4 class="mb-3">Save Time on Job Searching</h4>
                            <p>No more endless scrolling through irrelevant job posts. Get quality matches delivered to
                                you.</p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="benefit-card h-100 p-4 rounded">
                            <h4 class="mb-3">Find Culture-Fit Positions</h4>
                            <p>Connect with companies that match your values, work style, and career aspirations.</p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="benefit-card h-100 p-4 rounded">
                            <h4 class="mb-3">Career Growth Guidance</h4>
                            <p>Receive insights on skill gaps and opportunities for career advancement in your field.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- About Section -->
        <section id="about" class="custom-section">
            <div class="container dark-bg">
                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        <h2 class="text-center mb-5 section-title">About Codelis</h2>
                        <p class="lead text-center mb-5">At Codelis, we believe that the right career match transforms
                            lives. Our mission is to revolutionize recruitment by creating meaningful connections
                            between talented professionals and forward-thinking employers, fostering growth for
                            individuals and businesses alike.</p>

                        <h3 class="mb-4 text-white">Our Approach</h3>
                        <p class="mb-5">We combine advanced matching algorithms with human insight to create a platform
                            that understands both the technical requirements of roles and the cultural nuances that make
                            partnerships successful. Our technology learns from successful placements to continuously
                            improve match quality.</p>

                        <h3 class="mb-4 text-white">Our Values</h3>
                        <div class="row g-4">
                            <div class="col-lg-6">
                                <div class="benefit-card h-100 p-4 rounded">
                                    <h4 class="mb-3">Transparency</h4>
                                    <p>Clear communication throughout the entire matching process.</p>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="benefit-card h-100 p-4 rounded">
                                    <h4 class="mb-3">Quality over Quantity</h4>
                                    <p>We focus on meaningful connections rather than volume.</p>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="benefit-card h-100 p-4 rounded">
                                    <h4 class="mb-3">Continuous Innovation</h4>
                                    <p>Always improving our matching technology and user experience.</p>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="benefit-card h-100 p-4 rounded">
                                    <h4 class="mb-3">Mutual Success</h4>
                                    <p>Creating win-win outcomes for all parties involved.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Contact Section -->
        <section id="contact" class="custom-section">
            <div class="container dark-bg">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <h2 class="text-center mb-5 section-title">Contact Us</h2>
                        <div class="contact-form-wrapper p-4 rounded">
                            <form>
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <label for="name" class="form-label">Name *</label>
                                        <input type="text" class="form-control custom-input" id="name" name="name"
                                            required placeholder="Your full name">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="email" class="form-label">Email *</label>
                                        <input type="email" class="form-control custom-input" id="email" name="email"
                                            required placeholder="your.email@example.com">
                                    </div>
                                    <div class="col-12">
                                        <label for="user-type" class="form-label">I am a: *</label>
                                        <select class="form-select custom-input" id="user-type" name="user-type"
                                            required>
                                            <option value="">Please select...</option>
                                            <option value="employer">Employer</option>
                                            <option value="candidate">Job Candidate</option>
                                            <option value="other">Other</option>
                                        </select>
                                    </div>
                                    <div class="col-12">
                                        <label for="message" class="form-label">How can we help you?</label>
                                        <textarea class="form-control custom-input" id="message" name="message" rows="5"
                                            placeholder="Tell us about your needs or questions..."></textarea>
                                    </div>
                                    <div class="col-12 text-center">
                                        <button type="submit" class="btn btn-primary btn-lg px-5 rounded-pill">Send
                                            Message</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <?php
    include("_partial/_footer.php");
    ?>
</body>

</html>