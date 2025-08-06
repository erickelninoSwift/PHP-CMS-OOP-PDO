<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <title>Admin Dashboard - CMS PDO System</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />

    <style>
    html,
    body {
        height: 100%;
        margin: 0;
    }

    body {
        display: flex;
        flex-direction: column;
        font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
    }

    main {
        flex: 1;
    }

    header.hero {
        background: linear-gradient(to right, #343a40, #212529);
        color: white;
        min-height: 50vh;
        display: flex;
        align-items: center;
        justify-content: center;
        text-align: center;
    }

    header.hero h1 {
        font-size: 3rem;
        font-weight: bold;
    }

    .table td,
    .table th {
        vertical-align: middle;
    }

    .btn-sm {
        padding: 0.35rem 0.65rem;
        font-size: 0.875rem;
    }

    footer {
        background-color: #212529;
        color: #ccc;
    }
    </style>
</head>

<body>
    <!-- Navigation Bar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-sm">
        <div class="container">
            <a class="navbar-brand fw-bold" href="index.html">CMS Admin</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" href="admin.html">Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="create-article.html">Create Article</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.html">View Site</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="login.html">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <header class="hero">
        <div class="container">
            <h1>Admin Dashboard</h1>
            <p class="lead mt-3">
                Manage articles, authors, and content from one central place.
            </p>
        </div>
    </header>

    <!-- Main Content -->
    <main class="container my-5">
        <div class="table-responsive">
            <table class="table table-hover table-bordered shadow-sm">
                <thead class="table-dark">
                    <tr>
                        <th>ID</th>
                        <th>Title</th>
                        <th>Author</th>
                        <th>Published Date</th>
                        <th>Excerpt</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Example Article Row -->
                    <tr>
                        <td>1</td>
                        <td>Article Title 1</td>
                        <td>Edwin Diaz</td>
                        <td>January 1, 2045</td>
                        <td>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                            Phasellus feugiat elit vitae enim lacinia semper...
                        </td>
                        <td>
                            <a href="edit-article.html?id=1" class="btn btn-sm btn-primary me-1">Edit</a>
                            <button class="btn btn-sm btn-danger" onclick="confirmDelete(1)">
                                Delete
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Article Title 2</td>
                        <td>Jose Diaz</td>
                        <td>February 15, 2045</td>
                        <td>
                            Quisque fermentum, nisl a pulvinar tincidunt, nunc purus laoreet
                            massa, nec tempor arcu urna vel nisi...
                        </td>
                        <td>
                            <a href="edit-article.html?id=2" class="btn btn-sm btn-primary me-1">Edit</a>
                            <button class="btn btn-sm btn-danger" onclick="confirmDelete(2)">
                                Delete
                            </button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </main>

    <!-- Footer -->
    <footer class="py-3 mt-auto">
        <div class="container text-center">
            <p class="mb-0">
                &copy; 2045 CMS PDO System. All rights reserved by Edwin Diaz from
                EdwinDiaz.com
            </p>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Delete Confirmation -->
    <script>
    function confirmDelete(articleId) {
        if (confirm("Are you sure you want to delete this article?")) {
            alert("Article " + articleId + " deleted.");
            // You could add AJAX deletion here
        }
    }
    </script>
</body>

</html>