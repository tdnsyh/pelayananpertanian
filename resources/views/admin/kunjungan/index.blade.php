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
                <div class="mt-5">
                    <div class="table-responsive">
                        <table class="table">
                            <thead class="table-dark">
                                <tr class="border-0">
                                    <th class="rounded-start">No</th>
                                    <th>Waktu</th>
                                    <th>Nama</th>
                                    <th>Unit Kerja</th>
                                    <th class="rounded-end">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($kunjungan as $key => $k)
                                    <tr>
                                        <td>{{ $key + 1 }}</td>
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
                                                        @php
                                                            $cleanNumber = preg_replace('/\D/', '', $k->no_telf_aktif);
                                                            if (substr($cleanNumber, 0, 1) === '0') {
                                                                $cleanNumber = '+62' . substr($cleanNumber, 1);
                                                            }

                                                            $responseMessage = "Terima kasih atas Kunjungan anda :\n\n";
                                                            $responseMessage .= "Nama: {$k->nama}\n";
                                                            $responseMessage .= "Alamat: {$k->alamat}\n";
                                                            $responseMessage .= "Tanggal Kunjungan : {$k->created_at}\n\n";
                                                            $responseMessage .= "Jenis Keperluan : {$k->keperluan}\n";
                                                            $responseMessage = urlencode($responseMessage);
                                                        @endphp

                                                        <a href="https://wa.me/{{ $cleanNumber }}?text={{ $responseMessage }}"
                                                            class="btn btn-success mt-3" target="_blank">
                                                            <i class="fab fa-whatsapp"></i> Hubungi via WhatsApp
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
