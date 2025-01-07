<x-layout>
    <div class="card">
        <div class="card-body">
            <h3 class="fw-semibold">Survei Kepuasan Masyarakat</h3>
            <p class="mb-0">Tampilan keseluruhan yang memudahkan pengelolaan data stokis, penjualan, dan wilayah secara
                efisien.
            </p>
            <div class="mt-4">
                <form method="GET" action="{{ route('kuisioner.index') }}">
                    <div class="mb-3">
                        <label for="jenis_layanan_id" class="form-label">Filter Jenis Layanan</label>
                        <select name="jenis_layanan_id" id="jenis_layanan_id" class="form-select">
                            <option value="">Semua Layanan</option>
                            @foreach ($jenisLayanans as $jenisLayanan)
                                <option value="{{ $jenisLayanan->id }}"
                                    {{ $jenisLayanan->id == $jenisLayananId ? 'selected' : '' }}>
                                    {{ $jenisLayanan->nama_layanan }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Filter</button>
                </form>

                @if ($noResponden)
                    <div class="alert alert-warning mt-4">
                        Belum ada responden yang mengisi kuisioner.
                    </div>
                @else
                    <div class="table-responsive">
                        <table class="table mt-4 table-borderless">
                            <thead class="table-dark">
                                <tr class="border-0">
                                    <th class="rounded-start">No</th>
                                    <th>Pertanyaan</th>
                                    <th>A</th>
                                    <th>B</th>
                                    <th>C</th>
                                    <th class="rounded-end">D</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($pertanyaan as $index => $pertanyaanItem)
                                    <tr>
                                        <td>{{ $index + 1 }}</td>
                                        <td>{{ $pertanyaanItem->pertanyaan }}</td>
                                        <td>{{ number_format($persentaseJawaban[$pertanyaanItem->id]['a'] ?? 0, 2) }}%
                                        </td>
                                        <td>{{ number_format($persentaseJawaban[$pertanyaanItem->id]['b'] ?? 0, 2) }}%
                                        </td>
                                        <td>{{ number_format($persentaseJawaban[$pertanyaanItem->id]['c'] ?? 0, 2) }}%
                                        </td>
                                        <td>{{ number_format($persentaseJawaban[$pertanyaanItem->id]['d'] ?? 0, 2) }}%
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="keterangan mt-4">
                        <h4 class="mb-3">
                            Keterangan
                        </h4>
                        <ul class="list-group list-group-flush">
                            <div class="row row-cols-1 row-cols-md-4">
                                <div class="col">
                                    <button type="button" class="btn btn-danger btn-sm">A</button> Tidak Sesuai
                                </div>
                                <div class="col">
                                    <button type="button" class="btn btn-warning btn-sm">B</button> Kurang Sesuai
                                </div>
                                <div class="col">
                                    <button type="button" class="btn btn-info btn-sm">C</button> Sesuai
                                </div>
                                <div class="col">
                                    <button type="button" class="btn btn-success btn-sm">D</button> Sangat Sesuai
                                </div>
                            </div>
                        </ul>
                    </div>
                    <div class="mt-4">
                        <a href="{{ route('history.index') }}" class="btn btn-secondary">History</a>
                    </div>
                @endif
            </div>
        </div>
    </div>
</x-layout>
