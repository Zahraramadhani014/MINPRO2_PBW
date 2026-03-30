<?php require 'koneksi.php'; ?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio - Zahraturramadhani</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">

    <!-- AOS Animation -->
    <link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="style.css">
</head>

<body>

    <div id="app">

        <!-- NAVBAR -->
        <nav id="navbar" class="navbar navbar-expand-lg fixed-top custom-navbar">
            <div class="container">
                <a class="navbar-brand custom-brand" href="#">
                    <i class="bi bi-stars"></i> Zahra's Portfolio <i class="bi bi-stars"></i>
                </a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navMenu">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navMenu">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item"><a class="nav-link" href="#home">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="#about">About Me</a></li>
                        <li class="nav-item"><a class="nav-link" href="#certificates">Certificates</a></li>
                    </ul>
                </div>
            </div>
        </nav>

        <!-- HERO -->
        <section id="home" class="hero-section d-flex align-items-center">
            <div class="container">
                <div class="row align-items-center">

                    <!-- LEFT -->
                    <div class="col-lg-5 offset-lg-1 hero-left">
                        <h1>Hi, I'm <span>Zahra</span> 👋</h1>
                        <h2 class="hero-role">Web Developer</h2>
                        <?php
                        $query = mysqli_query($conn, "SELECT description FROM profile LIMIT 1");
                        $data = mysqli_fetch_assoc($query);
                        ?>

                        <p class="hero-desc"><?= $data['description']; ?></p>

                        <div class="mt-3">
                            <span class="tech-badge">Web Developer</span>
                            <span class="tech-badge">UI/UX Enthusiast</span>
                            <span class="tech-badge">Frontend Focused</span>
                        </div>

                        <div class="hero-line"></div>

                        <a href="#about" class="btn btn-soft mt-3">Get to Know Me</a>

                        <div class="hero-stats">
                            <div class="stat-item">
                                <h4>10+</h4>
                                <p>Projects</p>
                            </div>
                            <div class="stat-item">
                                <h4>10+</h4>
                                <p>Certificates</p>
                            </div>
                            <div class="stat-item">
                                <h4>1+</h4>
                                <p>Years Learning</p>
                            </div>
                        </div>

                        <p class="hero-quote">
                            "Design with purpose. Build with logic"
                        </p>
                    </div>

                    <!-- RIGHT -->
                    <div class="col-md-6 text-center" data-aos="fade-left">
                        <div class="profile-frame">
                            <img src="assets/profile1.jpeg" class="img-fluid profile-img">
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <div class="hero-divider"></div>

        <div class="scroll-indicator">
            ↓
        </div>

        <!-- ABOUT -->
        <section id="about">
            <div class="container about-wrapper">

                <!-- MAIN TITLE -->
                <h2 class="about-main-title text-center">About Me</h2>

                <!-- PROFILE -->
                <div class="row mt-5 align-items-start">

                    <!-- PROFILE -->
                    <div class="col-lg-6 text-center">
                        <h4 class="sub-title">Profile</h4>
                        <p class="about-text mt-3">
                            Hi, I’m <strong class="text-primary">Zahraturramadhani</strong>,
                            an <strong class="text-primary">Information Systems student at Mulawarman
                                University</strong>, who is
                            passionate about <strong class="text-primary">Web Development and UI/UX Design</strong>. I
                            focus on building responsive and user-friendly web applications with clean and modern
                            design.
                            I believe that combining technology and creativity can create meaningful digital solutions
                            that provide real value to users.
                        </p>

                        <p class="about-text mt-3">
                            I am a dedicated learner with strong attention to detail and a genuine interest in
                            technology. I value continuous improvement and see every challenge as an opportunity to
                            grow. My goal is to produce work that is efficient, well-structured, and meaningful for
                            users.
                        </p>
                    </div>

                    <!-- SKILLS -->
                    <div class="col-lg-6 mt-4 mt-lg-0">
                        <h4 class="sub-title text-center">Skills</h4>

                        <div class="skills-progress mt-4">

                            <?php
                            $skills = mysqli_query($conn, "SELECT * FROM skills");
                            while ($skill = mysqli_fetch_assoc($skills)) {
                                ?>

                                <div class="skill-item">
                                    <div class="d-flex justify-content-between">
                                        <span><?= $skill['name']; ?></span>
                                        <span><?= $skill['level']; ?>%</span>
                                    </div>

                                    <div class="progress custom-progress">
                                        <div class="progress-bar skill-bar" style="width: <?= $skill['level']; ?>%"></div>
                                    </div>
                                </div>

                            <?php } ?>
                        </div>
                    </div>
                </div>

                <!-- EXPERIENCE -->
                <div class="experience-section mt-5">
                    <h4 class="sub-title text-center">Experience</h4>

                    <div class="timeline mt-5">

                        <?php
                        $exp = mysqli_query($conn, "SELECT * FROM experiences");
                        while ($row = mysqli_fetch_assoc($exp)) {
                            ?>

                            <div class="timeline-item">

                                <div class="timeline-dot"></div>

                                <div class="timeline-content">
                                    <h6 class="exp-title"><?= $row['title']; ?></h6>
                                    <span class="exp-year"><?= $row['year']; ?></span>
                                    <p class="exp-desc mt-2">
                                        <?= $row['description']; ?>
                                    </p>
                                </div>

                            </div>

                        <?php } ?>
                    </div>
                </div>
            </div>
        </section>


        <!-- CERTIFICATES -->
        <section id="certificates" class="py-5 bg-soft">
            <div class="container">
                <h2 class="certificates-title mb-5">Certificates</h2>


                <div class="row">
                    <?php
                    $certificates = mysqli_query($conn, "SELECT * FROM certificates");
                    while ($cert = mysqli_fetch_assoc($certificates)) {
                        ?>
                        <div class="col-lg-4 col-md-6 mb-4">

                            <div class="card custom-card h-100">

                                <img src="<?= $cert['image']; ?>" alt="certificate" class="card-img-top" data-bs-toggle="modal"
                                    data-bs-target="#modal<?= $cert['id']; ?>">

                                <div class="card-body text-center">
                                    <h6 class="mt-2"><?= $cert['title']; ?></h6>

                                    <button class="btn btn-primary mt-3" data-bs-toggle="modal"
                                        data-bs-target="#modal<?= $cert['id']; ?>">
                                        Preview
                                    </button>
                                </div>

                            </div>

                        </div>

                    <?php } ?>
                </div>

                <?php
                $certificates = mysqli_query($conn, "SELECT * FROM certificates");
                while ($cert = mysqli_fetch_assoc($certificates)) {
                    ?>
                    <div class="modal fade" id="modal<?= $cert['id']; ?>" tabindex="-1">
                        <div class="modal-dialog modal-dialog-centered modal-xl">
                            <div class="modal-content bg-dark">

                                <button type="button" class="btn-close btn-close-white position-absolute top-0 end-0 m-3"
                                    data-bs-dismiss="modal"></button>

                                <div class="modal-body d-flex justify-content-center align-items-center p-0">

                                    <img src="<?= $cert['image']; ?>" class="img-fluid zoom-img" onclick="toggleZoom(this)">

                                </div>

                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </section>

        <!-- FOOTER -->
        <footer class="footer-soft text-center py-4">
            © 2026 Zahra | Portfolio Website
        </footer>

    </div>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>

    <script>
        function toggleZoom(img) {
            img.classList.toggle("zoomed");
        }
        AOS.init({ duration: 1000 });
    </script>

</body>

</html>