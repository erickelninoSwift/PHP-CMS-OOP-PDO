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