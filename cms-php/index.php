<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>CMS PDO System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
    <style>
    body {
        font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
    }

    .navbar {
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    header {
        background: linear-gradient(to right, #343a40, #212529);
    }

    .post-card {
        background-color: #fff;
        border: none;
        border-radius: 8px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.05);
        transition: transform 0.2s ease;
    }

    .post-card:hover {
        transform: translateY(-4px);
    }

    footer {
        background-color: #f8f9fa;
        border-top: 1px solid #dee2e6;
    }

    img {
        object-fit: cover;
        height: 100%;
        width: 100%;
    }
    </style>
</head>

<body>
    <!-- Navigation Bar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white">
        <div class="container">
            <a class="navbar-brand fw-bold" href="#">CMS PDO System</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" href="index.html">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="admin.html">Admin</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.html">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.html">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="login.html">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="register.html">Register</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Header Section -->
    <header class="text-white d-flex align-items-center" style="
        background: linear-gradient(to right, #343a40, #212529);
        min-height: 60vh;
      ">
        <div class="container text-center py-5">
            <h1 class="display-3 fw-bold">Welcome to the CMS PDO System</h1>
            <p class="lead fs-4 mt-3">
                Manage and publish your content efficiently with our modern CMS.
            </p>
        </div>
    </header>

    <!-- Main Content -->
    <main class="container my-5">
        <!-- Blog Post 1 -->
        <div class="row mb-5 post-card p-4">
            <div class="col-md-4">
                <img src="https://source.unsplash.com/random/350x200?technology" class="img-fluid rounded"
                    alt="Tech Image" />
            </div>
            <div class="col-md-8">
                <h3 class="mb-2">Tech Innovations in 2045</h3>
                <p>
                    Discover how technology is reshaping the world with futuristic
                    gadgets and AI-powered tools.
                </p>
                <a href="article.html" class="btn btn-outline-primary">Read More</a>
            </div>
        </div>

        <!-- Blog Post 2 -->
        <div class="row mb-5 post-card p-4">
            <div class="col-md-4">
                <img src="https://source.unsplash.com/random/350x200?coding" class="img-fluid rounded"
                    alt="Coding Image" />
            </div>
            <div class="col-md-8">
                <h3 class="mb-2">Mastering PHP and PDO</h3>
                <p>
                    A guide to writing clean, secure, and scalable PHP OOP code with PDO
                    and modern practices.
                </p>
                <a href="#" class="btn btn-outline-primary">Read More</a>
            </div>
        </div>

        <!-- Blog Post 3 -->
        <div class="row mb-5 post-card p-4">
            <div class="col-md-4">
                <img src="https://source.unsplash.com/random/350x200?cms" class="img-fluid rounded" alt="CMS Image" />
            </div>
            <div class="col-md-8">
                <h3 class="mb-2">Why Build Your Own CMS?</h3>
                <p>
                    Learn the benefits of building a custom CMS from scratch using PHP,
                    OOP, and MySQL.
                </p>
                <a href="#" class="btn btn-outline-primary">Read More</a>
            </div>
        </div>
    </main>

    <!-- Footer -->
    <footer class="py-4 text-center">
        <div class="container">
            <p class="mb-0 text-muted">
                &copy; 2045 CMS PDO System. All rights reserved by Eriik Elnino
            </p>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>