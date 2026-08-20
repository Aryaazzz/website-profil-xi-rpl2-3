<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portofolio Arya</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(135deg, #f8fafc 0%, #e2e8f0 100%);
            font-family: 'Segoe UI', sans-serif;
        }
        .profile-img {
            width: 220px;
            height: 220px;
            object-fit: cover;
            border: 6px solid #fff;
            box-shadow: 0 10px 25px rgba(0,0,0,0.15);
        }
        .card:hover {
            transform: translateY(-5px);
            transition: 0.3s ease;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
        <div class="container">
            <a class="navbar-brand fw-bold" href="#">Arya Portfolio</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="#about">Tentang</a></li>
                    <li class="nav-item"><a class="nav-link" href="#skills">Skills</a></li>
                    <li class="nav-item"><a class="nav-link" href="#projects">Karya</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contact">Kontak</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <header class="py-5">
        <div class="container">
            <div class="row align-items-center gy-4">
                <div class="col-lg-7">
                    <h5 class="text-primary fw-semibold">Halo, saya</h5>
                    <h1 class="display-5 fw-bold mb-3">Arya Pamukluhur Prabawa</h1>
                    <p class="lead text-muted">Saya adalah pengembang web yang senang membuat website modern, responsif, dan fungsional dengan Laravel, Bootstrap, dan teknologi frontend terbaru.</p>
                    <a href="#projects" class="btn btn-primary btn-lg me-2">Lihat Karya</a>
                    <a href="#contact" class="btn btn-outline-secondary btn-lg">Hubungi Saya</a>
                </div>
                <div class="col-lg-5 text-center">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR-adjKSmtOGut8RC90yikoWKlgYc0yDGawwBAOGwPz2A&s=10" alt="Arya Pamukluhur Prabawa" class="profile-img rounded-circle">
                </div>
            </div>
        </div>
    </header>

    <section id="about" class="py-5 bg-white">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <h2 class="fw-bold mb-3">Tentang Saya</h2>
                    <p class="text-muted">Saya adalah mahasiswa/pengembang yang fokus pada pengembangan website, desain antarmuka, dan pengalaman pengguna. Saya suka membangun solusi digital yang cepat, rapi, dan mudah digunakan.</p>
                </div>
                <div class="col-lg-6">
                    <h2 class="fw-bold mb-3">Moto</h2>
                    <p class="text-muted">“Selalu belajar, terus berkembang, dan membuat karya yang bermanfaat.”</p>
                </div>
            </div>
        </div>
    </section>

    <section id="skills" class="py-5">
        <div class="container">
            <h2 class="fw-bold text-center mb-4">Skills Saya</h2>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title">Frontend</h5>
                            <p class="card-text text-muted">HTML, CSS, JavaScript, Bootstrap, dan desain responsif.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title">Backend</h5>
                            <p class="card-text text-muted">PHP, Laravel, REST API, dan logika bisnis aplikasi.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title">Tools</h5>
                            <p class="card-text text-muted">Git, VS Code, XAMPP, dan deployment sederhana.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="projects" class="py-5 bg-white">
        <div class="container">
            <h2 class="fw-bold text-center mb-4">Karya Saya</h2>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="card h-100 shadow-sm">
                        <img src="https://images.unsplash.com/photo-1498050108023-c5249f4df085?auto=format&fit=crop&w=800&q=80" class="card-img-top" alt="Project 1">
                        <div class="card-body">
                            <h5 class="card-title">Website Company Profile</h5>
                            <p class="card-text text-muted">Landing page modern untuk bisnis dengan desain elegan dan responsive.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100 shadow-sm">
                        <img src="https://images.unsplash.com/photo-1516321497487-e288fb19713f?auto=format&fit=crop&w=800&q=80" class="card-img-top" alt="Project 2">
                        <div class="card-body">
                            <h5 class="card-title">Sistem Informasi Sederhana</h5>
                            <p class="card-text text-muted">Aplikasi CRUD berbasis Laravel untuk mengelola data dengan tampilan yang rapi.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100 shadow-sm">
                        <img src="https://images.unsplash.com/photo-1552664730-d307ca884978?auto=format&fit=crop&w=800&q=80" class="card-img-top" alt="Project 3">
                        <div class="card-body">
                            <h5 class="card-title">Dashboard Admin</h5>
                            <p class="card-text text-muted">Dashboard interaktif untuk monitoring data dengan desain clean dan user-friendly.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="contact" class="py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="card border-0 shadow-lg p-4 text-center">
                        <h2 class="fw-bold mb-3">Hubungi Saya</h2>
                        <p class="text-muted">Saya terbuka untuk kerja sama, project, maupun kesempatan belajar bersama.</p>
                        <a href="mailto:arya@example.com" class="btn btn-primary btn-lg">Email Saya</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer class="bg-dark text-white py-4 text-center">
        <p class="mb-0">© 2026 Arya Pamukluhur Prabawa. All rights reserved.</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>