<?php include "./partials/header.php"; ?>
<?php include "./partials/navbar.php";?>

<!-- Main Content -->
<header class="bg-black text-white py-5">
    <div class="container">
        <h1 class="display-4">Login</h1>
        <p class="lead">We'd love to hear from you!</p>
    </div>
</header>
<main class="container my-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="login-box">
                <h3 class="text-center mb-4">Login to Your Account</h3>
                <form action="dashboard.html" method="post">
                    <div class="mb-3">
                        <label for="email" class="form-label">Email address <span class="text-danger">*</span></label>
                        <input type="email" class="form-control" id="email" required>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password <span class="text-danger">*</span></label>
                        <input type="password" class="form-control" id="password" required>
                    </div>
                    <button type="submit" class="btn btn-success w-100">Login</button>
                </form>
                <div class="mt-3 text-center">
                    <small>
                        Don't have an account? <a href="register.html">Register here</a>.
                    </small>
                </div>
            </div>
        </div>
    </div>
</main>
<?php include "./partials/footer.php"; ?>