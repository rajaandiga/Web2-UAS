<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pusat Penelitian Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Header Styling */
        header {
            background: linear-gradient(90deg, #007bff, #4f94d4);
            color: white;
        }
        header h1 {
            font-size: 2.5rem;
        }
        /* Card Styling */
        .card {
            transition: transform 0.3s, box-shadow 0.3s;
        }
        .card:hover {
            transform: scale(1.05);
            box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.2);
        }
        /* Footer Styling */
        footer {
            background-color: #343a40;
        }
        footer p {
            margin: 0;
        }
        /* Search Section Styling */
        .form-control {
            border-radius: 0.5rem;
        }
        .btn-primary {
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .btn-primary i {
            margin-right: 0.5rem;
        }
    </style>
</head>
<body>
    <header class="py-4">
        <div class="container text-center">
            <h1>Selamat Datang di Pusat Penelitian Mahasiswa</h1>
            <p class="lead">Temukan karya mahasiswa yang telah dipublikasikan di sini.</p>
        </div>
    </header>
    <main class="container mt-5">
        <!-- Search Section -->
        <div class="row bg-light p-4 rounded">
            <div class="col-md-6 mb-4">
                <h2>Cari Sebuah Artikel</h2>
                <form action="/search" method="GET">
                    <div class="mb-3">
                        <label for="title" class="form-label">Judul Artikel</label>
                        <input type="text" name="title" id="title" class="form-control" placeholder="Masukkan Judul Artikel">
                    </div>
                    <div class="mb-3">
                        <label for="category" class="form-label">Kategori</label>
                        <select name="category" id="category" class="form-control">
                            <option value="">-- Pilih Kategori --</option>
                            <option value="karyailmiah">Karya ilmiah</option>
                            <option value="proyek">Proyek</option>
                            <option value="presentasi">Presentasi</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="author" class="form-label">Penulis</label>
                        <input type="text" name="author" id="author" class="form-control" placeholder="Masukkan Nama Penulis">
                    </div>
                    <button type="submit" class="btn btn-primary">
                        <i class="bi bi-search"></i>Cari
                    </button>
                </form>
            </div>
            <div class="col-md-6 text-center">
                <img src="/images/uinsutha.png" alt="uinsutha" class="img-fluid">
            </div>
        </div>

        <!-- Popular Resources Section -->
        <section class="mt-5">
            <h2 class="mb-4">Saran Artikel</h2>
            <div class="row">
                <!-- Card Item -->
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="/images/datastruktur.jpg" class="card-img-top" alt="Resource 1">
                        <div class="card-body">
                            <h5 class="card-title">Pengertian Struktur Data</h5>
                            <p class="card-text">Catatan Lengkap Struktur Data</p>
                            <a href="#" class="btn btn-primary">Lihat Detail</a>
                        </div>
                    </div>
                </div>
                <!-- Repeat for other resources -->
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="/images/machinelearning.jpg" class="card-img-top" alt="Resource 2">
                        <div class="card-body">
                            <h5 class="card-title">Proyek Machine Learning</h5>
                            <p class="card-text">Catatan Lengkap Machine Learning</p>
                            <a href="#" class="btn btn-primary">Lihat Detail</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="/images/thesis.jpg" class="card-img-top" alt="Resource 3">
                        <div class="card-body">
                            <h5 class="card-title">Cara Menulis Thesis</h5>
                            <p class="card-text">Langkah-Langkah dalam Menulis Thesis</p>
                            <a href="#" class="btn btn-primary">Lihat Detail</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <footer class="text-center py-3 text-white">
        <p>&copy; 2024 UAS Mhd. Raja Habib Andiga. | All Rights Reserved</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
