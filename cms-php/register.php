<?php include "./partials/header.php"; ?>
<?php include "./partials/navbar.php";?>
<?php 
    if(isPostrequest()) {
        //
        $name = getPostParams('name');
        $email = getPostParams('email');
        $password = getPostParams('password');
        $re_pass = getPostParams('confirm-password');
        //

        $user_object = [
            "username" => $name,
            "email" => $email,
            "password" => $password,
            "re_try" => $re_pass
        ];
        // user instance
        $user_registered = new User();
        if($password == $re_pass) {
            //
            if($user_registered->createUser($name,$email,$password)) {
                echo 'user registered';
                header("location: http://localhost:8888/php_basics/CMS-OOP/cms-php/login.php");
            }else {
                 echo "registration failed";
            }
        }else {
             echo "password does not match";
        }
    }

?>
<!-- Main Content -->
<header class="bg-black text-white py-5">
    <div class="container">
        <h1 class="display-4">Register</h1>
        <p class="lead">We'd love to hear from you!</p>
    </div>
</header>


<!-- Main Content -->
<main class="container my-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="register-card">
                <h2 class="text-center mb-4">Register</h2>
                <form action="" method="post">
                    <div class="mb-3">
                        <label for="name" class="form-label">Full Name *</label>
                        <input type="text" class="form-control" id="name" name="name" required />
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email Address *</label>
                        <input type="email" class="form-control" id="email" name="email" required />
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password *</label>
                        <input type="password" class="form-control" id="password" name="password" required />
                    </div>
                    <div class="mb-3">
                        <label for="confirm-password" class="form-label">Confirm Password *</label>
                        <input type="password" class="form-control" id="confirm-password" name="confirm-password"
                            required />
                    </div>
                    <button type="submit" class="btn btn-success w-100">
                        Register
                    </button>
                </form>
                <p class="mt-3 text-center">
                    Already have an account?
                    <a href="login.php">Login here</a>.
                </p>
            </div>
        </div>
    </div>
</main>

<!-- Footer -->
<?php include "./partials/footer.php"; ?>