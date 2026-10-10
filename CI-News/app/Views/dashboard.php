<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f3f3f3;
            font-family: Arial, sans-serif;
        }

        .dashboard-box {
            width: 100%;
            max-width: 1200px;
            margin: 40px auto;
            background: #f1f1f1;
            border: 1px solid #d9d9d9;
            border-radius: 12px;
            padding: 50px 40px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.05);
        }

        .dashboard-box h1 {
            font-size: 4rem;
            font-weight: 700;
            margin-bottom: 20px;
            line-height: 1.2;
        }

        .dashboard-box p {
            font-size: 1.9rem;
            margin-bottom: 20px;
        }

        .btn-danger {
            background-color: #d93a2f;
            border: none;
            padding: 14px 24px;
            font-size: 1.1rem;
            border-radius: 8px;
        }

        .btn-primary {
            background-color: #0d6efd;
            border: none;
            padding: 14px 24px;
            font-size: 1.1rem;
            border-radius: 8px;
            margin-right: 12px;
        }
    </style>
</head>
<body class="container py-5">

    <div class="dashboard-box">
        <h1>Selamat Datang, <?= session()->get('fullname') ?: 'Kenzhie' ?>!</h1>
        <p>Username Anda: <strong><?= session()->get('username') ?></strong></p>

        <div class="mt-4">
            <a href="<?= base_url('admin') ?>" class="btn btn-primary">Admin</a>
            <a href="<?= base_url('auth/logout') ?>" class="btn btn-danger">Logout</a>
        </div>
    </div>

</body>
</html>