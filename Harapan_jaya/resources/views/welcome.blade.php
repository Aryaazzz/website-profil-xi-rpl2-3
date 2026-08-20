<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Koperasi Desa Harapan Jaya</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { background: radial-gradient(circle at top, #e8f4ff 0%, #fbfcff 45%, #f8fafc 100%); color: #1f2937; }
        .hero-card { border-radius: 2rem; background: rgba(255,255,255,0.92); backdrop-filter: blur(18px); box-shadow: 0 30px 80px rgba(15, 23, 42, 0.12); }
        .btn-primary { box-shadow: 0 12px 28px rgba(59, 130, 246, 0.18); }
    </style>
</head>
<body>
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-xl-10">
                <div class="hero-card p-5 p-lg-6">
                    <div class="row gy-5 align-items-center">
                        <div class="col-lg-6">
                            <span class="badge bg-primary bg-opacity-12 text-primary mb-3">Aplikasi Formulir Kopdes</span>
                            <h1 class="display-5 fw-semibold mb-4">Kelola koperasi desa <br>dengan tampilan yang modern.</h1>
                            <p class="lead text-secondary mb-4">Tambahkan, edit, dan hapus data koperasi desa dengan mudah menggunakan formulir yang rapi dan responsif.</p>
                            <div class="d-flex flex-column flex-sm-row gap-3">
                                <a href="{{ route('kopdes.index') }}" class="btn btn-primary btn-lg">Buka Formulir Kopdes</a>
                                <a href="{{ url('/rpl') }}" class="btn btn-outline-secondary btn-lg">Lihat Halaman ARYA</a>
                            </div>
                        </div>
                        <div class="col-lg-6 text-center">
                            <div class="rounded-4 overflow-hidden" style="background: #eef7ff;">
                                <img src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?auto=format&fit=crop&w=900&q=80" alt="Koperasi Desa" class="img-fluid rounded-4 shadow-sm">
                            </div>
                        </div>
                    </div>
                    <div class="row row-cols-1 row-cols-md-3 g-4 mt-5">
                        <div class="col">
                            <div class="card border-0 shadow-sm rounded-4 p-4 h-100">
                                <h5 class="mb-2">CRUD Lengkap</h5>
                                <p class="text-muted mb-0">Tambah, edit, dan hapus data anggota koperasi dengan cepat.</p>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card border-0 shadow-sm rounded-4 p-4 h-100">
                                <h5 class="mb-2">Data Terpusat</h5>
                                <p class="text-muted mb-0">Semua entri Kopdes tersimpan dalam satu tabel yang mudah dikelola.</p>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card border-0 shadow-sm rounded-4 p-4 h-100">
                                <h5 class="mb-2">Tampilan Responsif</h5>
                                <p class="text-muted mb-0">Rapi di desktop maupun perangkat mobile, sehingga operasional lebih nyaman.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
