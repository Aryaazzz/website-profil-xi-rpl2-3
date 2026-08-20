<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Kopdes | Harapan Jaya</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { background: #f6f8fb; }
        .page-card { border-radius: 1.5rem; box-shadow: 0 24px 60px rgba(15, 23, 42, 0.08); }
        .table thead th { border-bottom-width: 2px; }
        .badge-soft { background-color: rgba(56, 189, 248, 0.12); color: #0369a1; }
    </style>
</head>
<body>
    <div class="container py-5">
        <div class="d-flex flex-column flex-md-row align-items-start justify-content-between gap-3 mb-4">
            <div>
                <h1 class="h3 mb-1">Data Koperasi Desa Harapan Jaya</h1>
                <p class="text-muted mb-0">Kelola anggota, manager, dan data alamat koperasi desa dalam satu tampilan.</p>
            </div>
            <div class="d-flex flex-wrap gap-2">
                <a href="{{ url('/') }}" class="btn btn-outline-secondary">Beranda</a>
                <a href="{{ route('kopdes.create') }}" class="btn btn-primary">+ Tambah Data</a>
            </div>
        </div>

        @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Berhasil!</strong> {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        <div class="row g-4 mb-4">
            <div class="col-md-4">
                <div class="card page-card border-0 p-4">
                    <div class="text-uppercase text-secondary small mb-3">Total Data</div>
                    <div class="h3 mb-0">{{ $data->count() }}</div>
                    <p class="text-muted mb-0 mt-2">Jumlah entri koperasi desa yang tersimpan.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card page-card border-0 p-4">
                    <div class="text-uppercase text-secondary small mb-3">Manfaat</div>
                    <p class="text-muted mb-0">Memudahkan pengelolaan data koperasi desa dengan tampilan profesional.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card page-card border-0 p-4">
                    <div class="text-uppercase text-secondary small mb-3">Aksi Cepat</div>
                    <p class="text-muted mb-0">Edit dan hapus data langsung dari tabel.</p>
                </div>
            </div>
        </div>

        <div class="card page-card border-0 shadow-sm overflow-hidden">
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-hover align-middle mb-0">
                        <thead class="bg-light">
                            <tr>
                                <th class="text-center">No</th>
                                <th>Gambar</th>
                                <th>ID Kopdes</th>
                                <th>Nama Kopdes</th>
                                <th>Nama Manager</th>
                                <th>Tanggal Berdiri</th>
                                <th>Alamat</th>
                                <th class="text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($data as $item)
                                <tr>
                                    <td class="text-center">{{ $loop->iteration }}</td>
                                    <td style="width:120px;">
                                        @if($item->gambar)
                                            <img src="{{ asset('storage/'.$item->gambar) }}" alt="Gambar Kopdes" class="img-fluid rounded" style="max-height:80px; width:auto;">
                                        @else
                                            <span class="badge bg-secondary">Tidak ada</span>
                                        @endif
                                    </td>
                                    <td>{{ $item->id_kopdes }}</td>
                                    <td>{{ $item->nama_kopdes }}</td>
                                    <td>{{ $item->nama_manager }}</td>
                                    <td>{{ date('d M Y', strtotime($item->tanggal_berdiri)) }}</td>
                                    <td>{{ $item->alamat }}</td>
                                    <td class="text-center" style="min-width: 160px;">
                                        <a href="{{ route('kopdes.edit', $item->id) }}" class="btn btn-sm btn-outline-warning me-1">Edit</a>
                                        <form action="{{ route('kopdes.destroy', $item->id) }}" method="POST" class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-outline-danger" onclick="return confirm('Yakin ingin menghapus data ini?')">Hapus</button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="8" class="text-center py-5 text-muted">Belum ada data. Silakan tambah data koperasi desa terlebih dahulu.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
