<?php include "./partials/header.php"; ?>
<?php include "./partials/admin/navbar.php";?>

<style>
main.container {
    padding-top: 3rem;
    padding-bottom: 4rem;
    background-color: #f9fafb;
    min-height: 80vh;
}

.form-container {
    background: white;
    padding: 3rem 3rem 4rem;
    border-radius: 12px;
    box-shadow: 0 8px 20px rgb(0 0 0 / 0.05);
}

.form-label {
    font-weight: 600;
    margin-bottom: 0.75rem;
}

textarea.form-control-lg {
    resize: vertical;
}

.btn-publish {
    background: linear-gradient(135deg, #28a745, #218838);
    border: none;
    box-shadow: 0 6px 12px rgb(40 167 69 / 0.3);
    transition: background 0.3s ease;
}

.btn-publish:hover {
    background: linear-gradient(135deg, #218838, #1e7e34);
}
</style>

<header class="bg-secondary text-white py-5">
    <div class="container">
        <h1 class="display-4">Create Article</h1>
        <p class="lead">We'd love to read your articles!</p>
    </div>
</header>


<!-- Main Content -->
<main class="container">
    <div class="form-container mx-auto" style="max-width: 900px;">
        <h2 class="mb-5 text-center text-primary fw-bold">Create New Article</h2>
        <form action="admin.html" method="post" novalidate>
            <div class="row g-4 mb-4">
                <div class="col-md-6">
                    <label for="title" class="form-label">Article Title <span class="text-danger">*</span></label>
                    <input type="text" class="form-control form-control-lg" id="title" placeholder="Enter article title"
                        required />
                </div>
                <div class="col-md-6">
                    <label for="author" class="form-label">Author <span class="text-danger">*</span></label>
                    <input type="text" class="form-control form-control-lg" id="author" placeholder="Enter author name"
                        required />
                </div>
            </div>
            <div class="mb-4">
                <label for="date" class="form-label">Published Date <span class="text-danger">*</span></label>
                <input type="date" class="form-control form-control-lg" id="date" required />
            </div>
            <div class="mb-4">
                <label for="excerpt" class="form-label">Excerpt <span class="text-danger">*</span></label>
                <textarea class="form-control form-control-lg" id="excerpt" rows="3" placeholder="Enter a short excerpt"
                    required></textarea>
            </div>
            <div class="mb-5">
                <label for="content" class="form-label">Content <span class="text-danger">*</span></label>
                <textarea class="form-control form-control-lg" id="content" rows="10"
                    placeholder="Enter article content" required></textarea>
            </div>
            <div class="mb-5">
                <label for="image" class="form-label">Featured Image URL</label>
                <input type="url" class="form-control form-control-lg" id="image" placeholder="Enter image URL" />
            </div>
            <div class="d-flex justify-content-center">
                <button type="submit" class="btn btn-publish btn-lg px-5 me-3 text-white">Publish Article</button>
                <a href="admin.html" class="btn btn-outline-secondary btn-lg px-5">Cancel</a>
            </div>
        </form>
    </div>
</main>

<!-- Footer -->
<?php include "./partials/footer.php"; ?>