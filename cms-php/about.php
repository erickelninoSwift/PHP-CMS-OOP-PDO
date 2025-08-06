<?php include "./partials/header.php"; ?>
<?php include "./partials/navbar.php";?>

<!-- Main Content -->
<header class="bg-black text-white py-5">
    <div class="container">
        <h1 class="display-4">About us</h1>
        <p class="lead">We'd love to hear from you!</p>
    </div>
</header>

<!-- Main Content -->
<main class="container my-5">
    <section>
        <h2 class="mb-4">Our Story</h2>
        <p>
            Welcome to the CMS PDO System, an open-source content management
            platform built with PHP, PDO, and MySQL. Created by Erick El Nino,
            this system is designed to simplify content publishing while adhering
            to secure and modern coding practices.
        </p>
        <p>
            From clean code to customizable components, our goal is to provide
            developers and content creators with a solid foundation for building
            reliable web applications.
        </p>
    </section>

    <section class="mt-5">
        <h2 class="mb-4">Meet the Team</h2>
        <div class="row">
            <!-- Team Member 1 -->
            <div class="col-md-4 text-center mb-4">
                <img src="https://placehold.co/150x150" class="rounded-circle mb-3" alt="Erick El Nino" />
                <h5>Erick El Nino</h5>
                <p class="text-muted">Founder & Lead Developer</p>
            </div>

            <!-- Team Member 2 -->
            <div class="col-md-4 text-center mb-4">
                <img src="https://placehold.co/150x150" class="rounded-circle mb-3" alt="Team Member" />
                <h5>Linda M.</h5>
                <p class="text-muted">Content Strategist</p>
            </div>

            <!-- Team Member 3 -->
            <div class="col-md-4 text-center mb-4">
                <img src="https://placehold.co/150x150" class="rounded-circle mb-3" alt="Team Member" />
                <h5>Jay K.</h5>
                <p class="text-muted">UI/UX Designer</p>
            </div>
        </div>
    </section>
</main>

<?php include "./partials/footer.php"; ?>