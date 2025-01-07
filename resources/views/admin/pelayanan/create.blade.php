<x-layout>
    <div class="card">
        <div class="card-body">
            <h3 class="fw-semibold">Pelayanan</h3>
            <p class="mb-0">Tampilan keseluruhan yang memudahkan pengelolaan data stokis, penjualan, dan wilayah secara
                efisien.
            </p>
            <div class="mt-4">
                <x-alert></x-alert>
                <form action="{{ route('pelayanan.store') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="unit_kerja_id" class="form-label">Unit Kerja</label>
                        <select name="unit_kerja_id" id="unit_kerja_id" class="form-control" required>
                            <option value="">Pilih Unit Kerja</option>
                            @foreach ($unitKerja as $unit)
                                <option value="{{ $unit->id }}">{{ $unit->nama_unit_kerja }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="kategori_pelayanan" class="form-label">Kategori Pelayanan</label>
                        <select name="kategori_pelayanan" id="kategori_pelayanan" class="form-control" required>
                            <option value="" disabled selected>Pilih Kategori</option>
                            <option value="Service Delivery">Service Delivery</option>
                            <option value="Manufacturing">Manufacturing</option>
                        </select>
                    </div>

                    <div id="detail-pelayanan">
                        <h4>Detail Pelayanan</h4>

                        <div class="mb-3">
                            <label for="komponen[]" class="form-label">Komponen</label>
                            <input type="text" name="komponen[]" class="form-control" required>
                        </div>

                        <div class="mb-3">
                            <label for="uraian[]" class="form-label">Uraian</label>
                            <textarea name="uraian[]" class="form-control" rows="3" required></textarea>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-success">Simpan Pelayanan</button>
                    <a href="{{ route('pelayanan.index') }}" class="btn btn-primary">Kembali</a>
                </form>
            </div>
        </div>
    </div>
</x-layout>
