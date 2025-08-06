<?php include "./partials/header.php"; ?>
<?php include "./partials/navbar.php";?>

<!-- Main Content -->
<header class="bg-black text-white py-5">
    <div class="container">
        <h1 class="display-4">Profile</h1>
        <p class="lead">Manage and publish your content efficiently with our modern CMS.</p>
    </div>
</header>


<!-- Main Content -->
<main class="container-xl px-4 mt-5 mb-5">
    <nav class="nav nav-borders mb-4">
        <a class="nav-link active" href="profile.php">Profile</a>
    </nav>

    <div class="row g-4">
        <!-- Profile Picture -->
        <div class="col-xl-4">
            <div class="card">
                <div class="card-header">Profile Picture</div>
                <div class="card-body text-center">
                    <img class="img-account-profile rounded-circle mb-3" src="https://via.placeholder.com/150"
                        alt="Profile" />
                    <div class="small text-muted mb-2">JPG or PNG, max size 5 MB</div>
                    <input class="form-control" type="file" name="profile_image" />
                </div>
            </div>
        </div>

        <!-- Account Details -->
        <div class="col-xl-8 mb-5 mt-5">
            <div class="card">
                <div class="card-header">Account Details</div>
                <div class="card-body">
                    <form method="POST" enctype="multipart/form-data">
                        <div class="mb-3">
                            <label class="form-label">Username</label>
                            <input class="form-control" type="text" value="edwindiaz" disabled />
                        </div>

                        <div class="row gx-3 mb-3">
                            <div class="col-md-6">
                                <label class="form-label">First Name</label>
                                <input class="form-control" type="text" name="first_name" value="Edwin" />
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Last Name</label>
                                <input class="form-control" type="text" name="last_name" value="Diaz" />
                            </div>
                        </div>

                        <div class="row gx-3 mb-3">
                            <div class="col-md-6">
                                <label class="form-label">Organization</label>
                                <input class="form-control" type="text" name="organization" value="Acme Corporation" />
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Location</label>
                                <input class="form-control" type="text" name="location" value="New York, USA" />
                            </div>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Email Address</label>
                            <input class="form-control" type="email" name="email" value="EdwinDiaz@edwindiaz.com" />
                        </div>

                        <div class="row gx-3 mb-3">
                            <div class="col-md-6">
                                <label class="form-label">Phone Number</label>
                                <input class="form-control" type="tel" name="phone" value="+1 (555) 123-4567" />
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Birthday</label>
                                <input class="form-control" type="date" name="birthday" value="1990-01-01" />
                            </div>
                        </div>

                        <div class="d-grid">
                            <button class="btn btn-primary" type="submit">
                                Save Changes
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>

<!-- Footer -->
<?php include "./partials/footer.php"; ?>