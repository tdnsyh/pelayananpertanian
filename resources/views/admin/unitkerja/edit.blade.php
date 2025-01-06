<x-layout>
    <div class="card">
        <div class="card-body">
            <h3 class="fw-semibold">Unit Kerja</h3>
            <p class="mb-0">Tampilan keseluruhan yang memudahkan pengelolaan data stokis, penjualan, dan wilayah secara
                efisien.
            </p>
            <div class="mt-4">
                <form action="{{ route('unitkerja.update', $unitKerja->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="nama_unit_kerja" class="form-label">Nama Unit Kerja</label>
                        <input type="text" class="form-control" id="nama_unit_kerja" name="nama_unit_kerja"
                            value="{{ $unitKerja->nama_unit_kerja }}" required>
                    </div>
                    <div class="mb-3">
                        <label for="deskripsi_singkat" class="form-label">Deskripsi Singkat</label>
                        <textarea class="form-control" id="deskripsi_singkat" name="deskripsi_singkat">{{ $unitKerja->deskripsi_singkat }}</textarea>
                    </div>
                    <div class="mb-3">
                        <label for="jenis_pelayanan" class="form-label">Jenis Pelayanan</label>
                        <input type="text" class="form-control" id="jenis_pelayanan" name="jenis_pelayanan"
                            value="{{ $unitKerja->jenis_pelayanan }}" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
            </div>
        </div>
    </div>
</x-layout>
