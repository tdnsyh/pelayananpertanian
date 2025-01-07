<x-layout>
    <div class="card">
        <div class="card-body">
            <h3 class="fw-semibold">Unit Kerja</h3>
            <p class="mb-0">Tampilan keseluruhan yang memudahkan pengelolaan data stokis, penjualan, dan wilayah secara
                efisien.
            </p>
            <div class="mt-4">
                <form action="{{ route('jenis-layanan.update', $jenisLayanan->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="nama_layanan" class="form-label">Nama Layanan</label>
                        <input type="text" class="form-control" id="nama_layanan" name="nama_layanan"
                            value="{{ $jenisLayanan->nama_layanan }}" required>
                    </div>
                    <div class="mb-3">
                        <label for="deskripsi" class="form-label">Deskripsi</label>
                        <textarea class="form-control" id="deskripsi" name="deskripsi" required>{{ $jenisLayanan->deskripsi }}</textarea>
                    </div>
                    <button type="submit" class="btn btn-warning">Perbarui</button>
                </form>
            </div>
        </div>
    </div>
</x-layout>
