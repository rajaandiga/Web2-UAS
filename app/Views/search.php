<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin - Pusat Penelitian Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <style>
        body {
            background-color: #f5f6fa;
        }

        .sidebar {
            position: fixed;
            top: 0;
            left: 0;
            width: 250px;
            height: 100vh;
            background-color: white;
            padding: 1.5rem;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.05);
            overflow-y: auto;
        }

        .main-content {
            margin-left: 250px;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        .brand-title {
            font-size: 1.1rem;
            font-weight: 600;
            color: #1458d6;
            text-decoration: none;
            display: flex;
            align-items: center;
            gap: 0.5rem;
            margin-bottom: 2rem;
        }

        .brand-title:hover {
            color: #1458d6;
        }

        .nav-section {
            margin-bottom: 1.5rem;
        }

        .nav-link {
            color: #4f5d75;
            padding: 0.75rem 1rem;
            border-radius: 0.5rem;
            display: flex;
            align-items: center;
            gap: 0.75rem;
            transition: background-color 0.2s ease;
            font-size: 0.875rem;
            margin-bottom: 0.25rem;
        }

        .nav-link:hover {
            background-color: #f8f9fa;
            color: #1458d6;
        }

        .nav-link.active {
            background-color: #1458d6;
            color: white;
        }

        .top-navbar {
            background-color: white;
            padding: 1rem;
            margin-bottom: 2rem;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.05);
        }

        .content {
            flex: 1;
            padding: 2rem;
        }

        .footer {
            padding: 1.5rem;
            text-align: center;
            color: #6b7280;
            background-color: white;
            border-top: 1px solid #e5e7eb;
        }

        .footer p {
            margin: 0;
            font-size: 0.875rem;
        }

        .dropdown-toggle::after {
            display: none;
        }

        .user-profile {
            width: 35px;
            height: 35px;
            background-color: #1458d6;
            color: white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .dropdown-item {
            display: flex;
            align-items: center;
            padding: 0.5rem 1rem;
        }

        .dropdown-item i {
            font-size: 1.1rem;
        }

        .under-development {
            text-align: center;
            padding: 50px;
            background-color: #fff3cd;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        .under-development h1 {
            font-size: 2rem;
            color: #856404;
        }

        .under-development p {
            font-size: 1.25rem;
            color: #856404;
        }

        @media (max-width: 768px) {
            .sidebar {
                width: 100%;
                position: relative;
                height: auto;
            }

            .main-content {
                margin-left: 0;
            }
        }
    </style>
</head>

<body>
        <div class="content">
            <!-- Under Development Message -->
            <div class="under-development">
                <h1>Maaf, Fitur Ini Masih dalam Pengembangan</h1>
                <p>Terima kasih atas pengertian Anda. Kami sedang berusaha untuk memberikan pengalaman yang lebih baik.</p>
            </div>
        </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>
