<x-guard>
    <x-navbar></x-navbar>
    <div class="container mt-5">
        <x-alert></x-alert>
        <form action="{{ route('pengaduan.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="unit_kerja_id" class="form-label">Unit Kerja</label>
                <select class="form-select" id="unit_kerja_id" name="unit_kerja_id" required>
                    <option value="" selected>Pilih Unit Kerja</option>
                    @foreach ($unitKerjas as $unitKerja)
                        <option value="{{ $unitKerja->id }}">{{ $unitKerja->nama_unit_kerja }}</option>
                    @endforeach
                </select>
                @error('unit_kerja_id')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama" value="{{ old('nama') }}"
                    required>
                @error('nama')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="alamat" class="form-label">Alamat</label>
                <textarea class="form-control" id="alamat" name="alamat" rows="3" required>{{ old('alamat') }}</textarea>
                @error('alamat')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="no_telf" class="form-label">No. Telepon</label>
                <input type="text" class="form-control" id="no_telf" name="no_telf" value="{{ old('no_telf') }}"
                    required>
                @error('no_telf')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="deskripsi_pengaduan" class="form-label">Deskripsi Pengaduan</label>
                <textarea class="form-control" id="deskripsi_pengaduan" name="deskripsi_pengaduan" rows="5" required>{{ old('deskripsi_pengaduan') }}</textarea>
                @error('deskripsi_pengaduan')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="gambar" class="form-label">Gambar (Opsional)</label>
                <input type="file" class="form-control" id="gambar" name="gambar" accept="image/*">
                @error('gambar')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Kirim Pengaduan</button>
        </form>
    </div>
</x-guard>
