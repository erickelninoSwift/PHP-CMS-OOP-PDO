<?php include "./partials/header.php"; ?>
<?php include "./partials/navbar.php";?>

<!-- Main Content -->
<header class="bg-black text-white py-5">
    <div class="container">
        <h1 class="display-4">Welcome to the CMS PDO System</h1>
        <p class="lead">Manage and publish your content efficiently with our modern CMS.</p>
    </div>
</header>

<!-- Main Content -->
<main class="container my-5">
    <!-- Blog Post 1 -->
    <div class="row mb-5 post-card p-4">
        <div class="col-md-4">
            <img src="https://placehold.co/350x200" class="img-fluid rounded" alt="Tech Image" />
        </div>
        <div class="col-md-8">
            <h3 class="mb-2">Tech Innovations in 2045</h3>
            <p>
                Discover how technology is reshaping the world with futuristic
                gadgets and AI-powered tools.
            </p>
            <a href="article.php" class="btn btn-outline-primary">Read More</a>
        </div>
    </div>

    <!-- Blog Post 2 -->
    <div class="row mb-5 post-card p-4 mt-3">
        <div class="col-md-4">
            <img src="https://placehold.co/350x200" class="img-fluid rounded" alt="Coding Image" />
        </div>
        <div class="col-md-8">
            <h3 class="mb-2">Mastering PHP and PDO</h3>
            <p>
                A guide to writing clean, secure, and scalable PHP OOP code with PDO
                and modern practices.
            </p>
            <a href="article.php" class="btn btn-outline-primary">Read More</a>
        </div>
    </div>

    <!-- Blog Post 3 -->
    <div class="row mb-5 post-card p-4">
        <div class="col-md-4">
            <img src="https://placehold.co/350x200" class="img-fluid rounded" alt="CMS Image" />
        </div>
        <div class="col-md-8">
            <h3 class="mb-2">Why Build Your Own CMS?</h3>
            <p>
                Learn the benefits of building a custom CMS from scratch using PHP,
                OOP, and MySQL.
            </p>
            <a href="article.php" class="btn btn-outline-primary">Read More</a>
        </div>
    </div>
</main>
<?php include "./partials/footer.php"; ?>