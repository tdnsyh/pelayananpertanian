<x-guard>
    <x-navbar></x-navbar>
    <div class="container mt-5">
        <x-alert></x-alert>
        <form action="{{ route('kunjungan.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="unit_kerja_id">Unit Kerja</label>
                <select name="unit_kerja_id" id="unit_kerja_id" class="form-control">
                    <option value="">Pilih Unit Kerja</option>
                    @foreach ($unit_kerja as $unit)
                        <option value="{{ $unit->id }}">{{ $unit->nama_unit_kerja }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama" required>
            </div>
            <div class="form-group">
                <label for="alamat">Alamat</label>
                <textarea class="form-control" id="alamat" name="alamat" required></textarea>
            </div>
            <div class="form-group">
                <label for="no_telf_aktif">Nomor Telepon</label>
                <input type="text" class="form-control" id="no_telf_aktif" name="no_telf_aktif" required>
            </div>
            <div class="form-group">
                <label for="keperluan">Keperluan</label>
                <textarea class="form-control" id="keperluan" name="keperluan" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary mt-3">Tambah Kunjungan</button>
        </form>
    </div>
</x-guard>
