<x-layout>
    <div class="card">
        <div class="card-body">
            <h3 class="fw-semibold">Pengaduan</h3>
            <p class="mb-0">Tampilan keseluruhan yang memudahkan pengelolaan data stokis, penjualan, dan wilayah secara
                efisien.
            </p>
            @if ($pengaduans->isEmpty())
                <div class="alert alert-warning mt-5" role="alert">
                    Belum ada data pengaduan.
                </div>
            @else
                <div class="table-responsive mt-5">
                    <table class="table">
                        <thead class="table-dark">
                            <tr class="border-0">
                                <th class="rounded-start">No</th>
                                <th>Tanggal</th>
                                <th>Nama</th>
                                <th>Deskripsi Pengaduan</th>
                                <th>Status</th>
                                <th class="rounded-end">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($pengaduans as $index => $pengaduan)
                                <tr>
                                    <td>{{ $index + 1 }}</td>
                                    <td>{{ $pengaduan->created_at->format('d-m-Y') }}</td>
                                    <td>{{ $pengaduan->nama }}</td>
                                    <td>{{ $pengaduan->deskripsi_pengaduan }}</td>
                                    <td>{{ $pengaduan->tindakanPengaduans->last()->status ?? 'Belum Ditindaklanjuti' }}
                                    </td>
                                    <td>
                                        <a href="{{ route('pengaduan.show', $pengaduan->id) }}"
                                            class="btn btn-info btn-sm">Lihat</a>
                                        <a href="{{ route('pengaduan.edit', $pengaduan->id) }}"
                                            class="btn btn-warning btn-sm">Tindak</a>
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
