<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">Tambah Report CS</h5>
                </div>
                <div class="card-body">
                    <form action="#" method="POST">
                        <div class="form-group mb-3">
                            <label for="title">Judul Laporan</label>
                            <input type="text" name="title" id="title" class="form-control" placeholder="Masukkan judul laporan" required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="category">Kategori</label>
                            <select name="category" id="category" class="form-control" required>
                                <option value="">Pilih Kategori</option>
                                <option value="technical">Teknis</option>
                                <option value="billing">Billing</option>
                                <option value="general">Umum</option>
                            </select>
                        </div>
                        <div class="form-group mb-3">
                            <label for="description">Deskripsi</label>
                            <textarea name="description" id="description" class="form-control" rows="5" placeholder="Masukkan deskripsi laporan" required></textarea>
                        </div>
                        <div class="form-group mb-3">
                            <label for="status">Status</label>
                            <select name="status" id="status" class="form-control">
                                <option value="pending">Pending</option>
                                <option value="in_progress">In Progress</option>
                                <option value="completed">Completed</option>
                            </select>
                        </div>
                        <div class="mt-4">
                            <button type="submit" class="btn btn-primary">Simpan</button>
                            <a href="<?= base_url('reportcs'); ?>" class="btn btn-secondary">Kembali</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>