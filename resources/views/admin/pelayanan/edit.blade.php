<x-layout>
    <div class="card">
        <div class="card-body">
            <h3 class="fw-semibold">Pelayanan</h3>
            <p class="mb-0">Tampilan keseluruhan yang memudahkan pengelolaan data stokis, penjualan, dan wilayah secara
                efisien.
            </p>
            <div class="mt-4">
                <form action="{{ route('pelayanan.update', $detailPelayanan->id) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="mb-3">
                        <label for="komponen" class="form-label">Komponen</label>
                        <input type="text" name="komponen" id="komponen" class="form-control"
                            value="{{ old('komponen', $detailPelayanan->komponen) }}" required>
                    </div>

                    <div class="mb-3">
                        <label for="uraian" class="form-label">Uraian</label>
                        <textarea name="uraian" id="uraian" class="form-control" rows="3" required>{{ old('uraian', $detailPelayanan->uraian) }}</textarea>
                    </div>

                    <button type="submit" class="btn btn-success">Simpan Perubahan</button>
                    <a href="{{ route('pelayanan.index') }}" class="btn btn-secondary">Kembali</a>
                </form>

            </div>
        </div>
    </div>
</x-layout>
