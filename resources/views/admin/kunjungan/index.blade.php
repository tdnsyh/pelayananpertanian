<x-layout>
    <div class="card">
        <div class="card-body">
            <h3 class="fw-semibold">Kunjungan</h3>
            <p class="mb-0">Tampilan keseluruhan yang memudahkan pengelolaan data stokis, penjualan, dan wilayah secara
                efisien.
            </p>
            @if ($kunjungan->isEmpty())
                <div class="alert alert-warning mt-4" role="alert">
                    Belum ada data kunjungan.
                </div>
            @else
                <div class="mt-4">
                    <div class="table-responsive">
                        <table class="table">
                            <thead class="table-dark">
                                <tr class="border-0">
                                    <th class="rounded-start">Waktu</th>
                                    <th>Nama</th>
                                    <th>Unit Kerja</th>
                                    <th class="rounded-end">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($kunjungan as $key => $k)
                                    <tr>
                                        <td>{{ $k->created_at->format('d-m-Y H:i') }}</td>
                                        <td>{{ $k->nama }}</td>
                                        <td>{{ $k->unitKerja->nama_unit_kerja }}</td>
                                        <td>
                                            <button class="btn btn-primary btn-sm" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#detail-{{ $key }}"
                                                aria-expanded="false" aria-controls="detail-{{ $key }}">
                                                <i class="ti ti-eye"></i> Detail
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="4" class="p-0 border-0">
                                            <div class="collapse" id="detail-{{ $key }}">
                                                <div class="card card-body">
                                                    <p class="card-text">
                                                        <strong>Alamat:</strong> {{ $k->alamat }}
                                                    </p>
                                                    <p>
                                                        <strong>Keperluan:</strong> {{ $k->keperluan }}
                                                    </p>
                                                    <p>
                                                        <strong>Nomor Telepon:</strong>{{ $k->no_telf_aktif }} <br>
                                                        <a href="https://wa.me/62{{ preg_replace('/^0/', '', preg_replace('/\D/', '', $k->no_telf_aktif)) }}"
                                                            target="_blank" class="btn btn-success btn-sm mt-3">
                                                            Hubungi via WhatsApp
                                                        </a>
                                                    </p>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            @endif
        </div>
    </div>
</x-layout>
