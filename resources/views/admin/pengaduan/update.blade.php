<x-layout>
    <div class="card">
        <div class="card-body">
            <h3 class="fw-semibold">Pengaduan</h3>
            <p class="mb-0">Tampilan keseluruhan yang memudahkan pengelolaan data stokis, penjualan, dan wilayah secara
                efisien.
            </p>
            <div class="mt-4">
                <x-alert></x-alert>
                <form action="{{ route('pengaduan.update', $pengaduan->id) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="mb-3">
                        <label for="unit_kerja_id" class="form-label">Unit Kerja</label>
                        <input type="text" class="form-control" value="{{ $pengaduan->unitKerja->nama_unit_kerja }}"
                            disabled>
                    </div>

                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" class="form-control" value="{{ $pengaduan->nama }}" disabled>
                    </div>

                    <div class="mb-3">
                        <label for="no_telf" class="form-label">No Telepon</label>
                        <input type="text" class="form-control" value="{{ $pengaduan->no_telf }}" disabled>
                    </div>

                    <div class="mb-3">
                        <label for="deskripsi_pengaduan" class="form-label">Deskripsi Pengaduan</label>
                        <textarea class="form-control" rows="5" disabled>{{ $pengaduan->deskripsi_pengaduan }}</textarea>
                    </div>

                    <div class="mb-3">
                        <label for="status" class="form-label">Status</label>
                        <select class="form-select" name="status" id="status" required>
                            <option value="pending" {{ $tindakanPengaduan->status == 'pending' ? 'selected' : '' }}>
                                Pending</option>
                            <option value="proses" {{ $tindakanPengaduan->status == 'proses' ? 'selected' : '' }}>Proses
                            </option>
                            <option value="selesai" {{ $tindakanPengaduan->status == 'selesai' ? 'selected' : '' }}>
                                Selesai</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="deskripsi_tindakan" class="form-label">Deskripsi Tindakan</label>
                        <textarea class="form-control" name="deskripsi_tindakan" rows="5">{{ old('deskripsi_tindakan', $tindakanPengaduan->deskripsi_tindakan) }}</textarea>
                    </div>

                    <div class="mb-3">
                        <label for="updated_at" class="form-label">Waktu Tindakan</label>
                        <input type="text" class="form-control" value="{{ now()->format('Y-m-d H:i:s') }}" disabled>
                    </div>

                    <input type="hidden" name="user_id" value="{{ auth()->id() }}">

                    <button type="submit" class="btn btn-primary">Update Tindakan</button>
                    <a href="{{ route('pengaduan.index') }}" class="btn btn-secondary">Kembali</a>
                </form>

            </div>
        </div>
    </div>
</x-layout>
