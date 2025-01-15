<x-guard>
    <x-navbar></x-navbar>
    <div class="container mt-5 mb-5">
        <x-alert></x-alert>
        <h3 class="mb-3">
            Form Kunjungan
        </h3>
        <form action="{{ route('kunjungan.store') }}" method="POST">
            @csrf
            <div class="form-group mb-3">
                <label for="unit_kerja_id">Unit Kerja</label>
                <select name="unit_kerja_id" id="unit_kerja_id" class="form-control">
                    <option value="">Pilih Unit Kerja</option>
                    @foreach ($unit_kerja as $unit)
                        <option value="{{ $unit->id }}">{{ $unit->nama_unit_kerja }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group mb-3">
                <label for="nama">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama" required>
            </div>
            <div class="form-group mb-3">
                <label for="alamat">Alamat</label>
                <textarea class="form-control" id="alamat" name="alamat" required></textarea>
            </div>
            <div class="form-group mb-3">
                <label for="no_telf_aktif">Nomor Telepon</label>
                <input type="text" class="form-control" id="no_telf_aktif" name="no_telf_aktif" required>
            </div>
            <div class="form-group mb-3">
                <label for="keperluan">Keperluan</label>
                <select class="form-control" id="keperluan" name="keperluan" required>
                    <option value="Biasa">Biasa</option>
                    <option value="Pelayanan">Pelayanan</option>
                    <option value="Lainnya">Lainnya</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary mt-3">Tambah Kunjungan</button>
        </form>
    </div>
</x-guard>
