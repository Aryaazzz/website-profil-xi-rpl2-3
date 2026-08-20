<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Kopdes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { background: #f3f6fb; }
        .form-card { border-radius: 2rem; box-shadow: 0 20px 45px rgba(15, 23, 42, 0.12); }
        .form-label { font-weight: 600; }
    </style>
</head>
<body>
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="card form-card overflow-hidden">
                    <div class="card-body p-5">
                        <div class="d-flex align-items-center justify-content-between mb-4">
                            <div>
                                <h2 class="fw-bold mb-1">Tambah Data Kopdes</h2>
                                <p class="text-muted mb-0">Isi formulir untuk menambahkan catatan koperasi desa baru.</p>
                            </div>
                            <a href="{{ route('kopdes.index') }}" class="btn btn-outline-secondary">Kembali ke Daftar</a>
                        </div>

                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <strong>Periksa kembali data Anda:</strong>
                                <ul class="mb-0 mt-2">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <form action="{{ route('kopdes.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label class="form-label">ID Kopdes</label>
                                <input type="number" name="id_kopdes" value="{{ old('id_kopdes') }}" class="form-control form-control-lg" placeholder="Masukkan ID Kopdes" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Nama Kopdes</label>
                                <input type="text" name="nama_kopdes" value="{{ old('nama_kopdes') }}" class="form-control form-control-lg" placeholder="Masukkan nama koperasi desa" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Nama Manager</label>
                                <input type="text" name="nama_manager" value="{{ old('nama_manager') }}" class="form-control form-control-lg" placeholder="Nama manager koperasi" required>
                            </div>
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <label class="form-label">Tanggal Berdiri</label>
                                    <input type="date" name="tanggal_berdiri" value="{{ old('tanggal_berdiri') }}" class="form-control form-control-lg" required>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Gambar Kopdes</label>
                                    <input type="file" name="gambar" class="form-control form-control-lg" accept="image/*">
                                </div>
                            </div>
                            <div class="mb-3 mt-3">
                                <label class="form-label">Alamat</label>
                                <textarea name="alamat" rows="4" class="form-control form-control-lg" placeholder="Tuliskan alamat koperasi desa" required>{{ old('alamat') }}</textarea>
                            </div>

                            <div class="d-flex gap-2 justify-content-end mt-4">
                                <a href="{{ route('kopdes.index') }}" class="btn btn-outline-secondary">Batal</a>
                                <button type="submit" class="btn btn-primary btn-lg">Simpan Data</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
