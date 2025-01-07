<x-layout>
    <div class="card">
        <div class="card-body">
            <h3 class="fw-semibold">Unit Kerja</h3>
            <p class="mb-0">Tampilan keseluruhan yang memudahkan pengelolaan data stokis, penjualan, dan wilayah secara
                efisien.
            </p>
            <a href="{{ route('jenis-layanan.create') }}" class="btn btn-primary mb-3 mt-4">Tambah Jenis Layanan</a>
            <x-alert></x-alert>
            @if ($layanan->isEmpty())
                <div class="alert alert-warning" role="alert">
                    Belum ada data layanan.
                </div>
            @else
                <div class="table-responsive">
                    <table class="table">
                        <thead class="table-dark">
                            <tr class="border-0">
                                <th class="rounded-start">#</th>
                                <th>Nama Layanan</th>
                                <th>Deskripsi</th>
                                <th class="rounded-end">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($layanan as $jenisLayanan)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $jenisLayanan->nama_layanan }}</td>
                                    <td>{{ $jenisLayanan->deskripsi }}</td>
                                    <td>
                                        <a href="{{ route('jenis-layanan.edit', $jenisLayanan->id) }}"
                                            class="btn btn-warning btn-sm">Edit</a>
                                        <form action="{{ route('jenis-layanan.destroy', $jenisLayanan->id) }}"
                                            method="POST" class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            @endif
        </div>
    </div>
</x-layout>
