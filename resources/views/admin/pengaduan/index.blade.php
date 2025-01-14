<x-layout>
    <div class="card">
        <div class="card-body">
            <h3 class="fw-semibold">Pengaduan</h3>
            <p class="mb-0">Tampilan keseluruhan yang memudahkan pengelolaan data stokis, penjualan, dan wilayah secara
                efisien.
            </p>
            <div class="mt-4">
                @if ($pengaduans->isEmpty())
                    <div class="alert alert-warning mt-4" role="alert">
                        Belum ada data pengaduan.
                    </div>
                @else
            </div>
            <div class="mt-4">
                <div class="row">
                    <div class="col">
                        <form action="{{ route('pengaduan.index') }}" method="GET" class="row g-3">
                            <div class="col-md-3">
                                <label for="start_date" class="form-label">Tanggal Mulai</label>
                                <input type="date" id="start_date" name="start_date" class="form-control"
                                    value="{{ request('start_date') }}">
                            </div>
                            <div class="col-md-3">
                                <label for="end_date" class="form-label">Tanggal Akhir</label>
                                <input type="date" id="end_date" name="end_date" class="form-control"
                                    value="{{ request('end_date') }}">
                            </div>
                            <div class="col-md-3">
                                <label for="status" class="form-label">Status</label>
                                <select id="status" name="status" class="form-select">
                                    <option value="">-- Semua Status --</option>
                                    <option value="pending" {{ request('status') == 'pending' ? 'selected' : '' }}>
                                        Pending</option>
                                    <option value="proses" {{ request('status') == 'proses' ? 'selected' : '' }}>In
                                        Proses</option>
                                    <option value="completed" {{ request('status') == 'selesai' ? 'selected' : '' }}>
                                        Selesai</option>
                                </select>
                            </div>
                            <div class="col-md-3 align-self-end">
                                <button type="submit" class="btn btn-primary">Filter</button>
                                <a href="{{ route('pengaduan.index') }}" class="btn btn-secondary">Reset</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="table-responsive mt-4">
                <table class="table">
                    <thead class="table-dark">
                        <tr class="border-0">
                            <th class="rounded-start">No</th>
                            <th>Tanggal</th>
                            <th>Nama</th>
                            <th>Deskripsi</th>
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
                                <td>
                                    @php
                                        $status =
                                            $pengaduan->tindakanPengaduans->last()->status ?? 'Belum Ditindaklanjuti';
                                        $badgeClass = match ($status) {
                                            'selesai' => 'badge bg-success',
                                            'proses' => 'badge bg-warning',
                                            'pending' => 'badge bg-danger',
                                            default => 'badge bg-secondary',
                                        };
                                    @endphp
                                    <span class="{{ $badgeClass }}">{{ $status }}</span>
                                </td>
                                <td>
                                    <a href="{{ route('pengaduan.show', $pengaduan->id) }}"
                                        class="btn btn-info btn-sm">Lihat</a>
                                    <a href="{{ route('pengaduan.edit', $pengaduan->id) }}"
                                        class="btn btn-warning btn-sm mt-2 mt-md-0">Tindak</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                @endif
            </div>
            <div class="mt-3">
                <button id="downloadExcel" class="btn btn-success">
                    <i class="fas fa-file-excel"></i> Unduh Excel
                </button>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/xlsx/dist/xlsx.full.min.js"></script>
    <script>
        document.getElementById('downloadExcel').addEventListener('click', function() {
            const tableData = [
                ["No", "Tanggal", "Nama", "Deskripsi Pengaduan", "Status Pengaduan", "Deskripsi Tindakan",
                    "Waktu Tindakan", "Status Tindakan"
                ]
            ];

            @foreach ($pengaduans as $index => $pengaduan)
                const tindakan = @json($pengaduan->tindakanPengaduans->toArray());

                if (tindakan.length === 0) {
                    tableData.push([
                        "{{ $index + 1 }}",
                        "{{ $pengaduan->created_at->format('d-m-Y') }}",
                        "{{ $pengaduan->nama }}",
                        "{{ $pengaduan->deskripsi_pengaduan }}",
                        "{{ $pengaduan->tindakanPengaduans->last()->status ?? 'Belum Ditindaklanjuti' }}",
                        "-", "-", "-", "-"
                    ]);
                } else {
                    tindakan.forEach((tindakanItem, tindakanIndex) => {
                        tableData.push([
                            tindakanIndex === 0 ? "{{ $index + 1 }}" :
                            "", // Nomor hanya pada baris pertama
                            tindakanIndex === 0 ? "{{ $pengaduan->created_at->format('d-m-Y') }}" :
                            "",
                            tindakanIndex === 0 ? "{{ $pengaduan->nama }}" : "",
                            tindakanIndex === 0 ? "{{ $pengaduan->deskripsi_pengaduan }}" : "",
                            tindakanIndex === 0 ?
                            "{{ $pengaduan->tindakanPengaduans->last()->status ?? 'Belum Ditindaklanjuti' }}" :
                            "",
                            tindakanItem.deskripsi_tindakan ?? "-",
                            tindakanItem.waktu_tindakan ?? "-",
                            tindakanItem.status ?? "-",
                        ]);
                    });
                }
            @endforeach

            const worksheet = XLSX.utils.aoa_to_sheet(tableData);

            const workbook = XLSX.utils.book_new();
            XLSX.utils.book_append_sheet(workbook, worksheet, "Data Pengaduan");

            XLSX.writeFile(workbook, 'data_pengaduan.xlsx');
        });
    </script>
</x-layout>
