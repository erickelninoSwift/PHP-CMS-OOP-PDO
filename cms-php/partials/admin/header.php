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