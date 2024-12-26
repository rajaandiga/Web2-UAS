<?= $this->extend('admin/layout'); ?>

<?= $this->section('mainadmin'); ?>
    <div class="row bg-light p-4 rounded">
        <div class="col-md-6 mb-4">
            <h2>Cari Artikel</h2>
            <form action="/search" method="GET">
                <div class="mb-3">
                    <label for="title" class="form-label">Judul Artikel</label>
                    <input type="text" name="title" id="title" class="form-control" placeholder="Masukkan Judul Artikel" aria-describedby="titleHelp">
                    <small id="titleHelp" class="form-text text-muted">Masukkan judul artikel untuk pencarian.</small>
                </div>
                <div class="mb-3">
                    <label for="category" class="form-label">Kategori</label>
                    <select name="category" id="category" class="form-select">
                        <option value="">-- Pilih Kategori --</option>
                        <option value="karyailmiah">Karya Ilmiah</option>
                        <option value="proyek">Proyek</option>
                        <option value="presentasi">Presentasi</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="author" class="form-label">Penulis</label>
                    <input type="text" name="author" id="author" class="form-control" placeholder="Masukkan Nama Penulis">
                </div>
                <button type="submit" class="btn btn-primary w-100">Cari</button>
            </form>
        </div>
        <div class="col-md-6 text-center">
            <img src="/images/uinsutha.png" alt="Logo UIN Sutha" class="img-fluid rounded">
        </div>
    </div>
<?= $this->endSection(); ?>
