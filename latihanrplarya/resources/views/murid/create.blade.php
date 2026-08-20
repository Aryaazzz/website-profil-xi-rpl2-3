<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Murid</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(135deg, #f8fafc 0%, #e2e8f0 100%);
            font-family: 'Segoe UI', sans-serif;
        }
        .card-custom {
            border: 0;
            border-radius: 16px;
            box-shadow: 0 10px 30px rgba(15, 23, 42, 0.08);
        }
    </style>
</head>
<body>
    <div class="container py-5">
        <div class="card card-custom">
            <div class="card-body p-4">
                <h2 class="fw-bold mb-3">Tambah Murid</h2>
                <p class="text-muted mb-4">Isi data murid di bawah ini untuk menambahkannya ke daftar.</p>

                <form action="{{ route('murid.store') }}" method="POST">
                    @csrf
                    <div class="row g-3">
                        <div class="col-md-2">
                            <label class="form-label">NISN</label>
                            <input type="number" name="nisn" class="form-control" required>
                        </div>
                        <div class="col-md-3">
                            <label class="form-label">Nama</label>
                            <input type="text" name="nama" class="form-control" required>
                        </div>
                        <div class="col-md-2">
                            <label class="form-label">Jenis Kelamin</label>
                            <select name="jenis_kelamin" class="form-select" required>
                                <option value="">Pilih</option>
                                <option value="Laki-laki">Laki-laki</option>
                                <option value="Perempuan">Perempuan</option>
                            </select>
                        </div>
                        <div class="col-md-3">
                            <label class="form-label">Alamat</label>
                            <input type="text" name="alamat" class="form-control" required>
                        </div>
                        <div class="col-md-2 d-flex align-items-end">
                            <button type="submit" class="btn btn-primary w-100">Simpan</button>
                        </div>
                    </div>
                </form>

                <div class="mt-4">
                    <a href="{{ route('murid.index') }}" class="btn btn-outline-secondary">Kembali ke Daftar</a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>