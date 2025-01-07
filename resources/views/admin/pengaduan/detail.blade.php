<x-layout>
    <div class="card">
        <div class="card-body">
            <h3 class="fw-semibold">Pengaduan</h3>
            <p class="mb-0">Tampilan keseluruhan yang memudahkan pengelolaan data stokis, penjualan, dan wilayah secara
                efisien.
            </p>
            <div class="mt-4">
                <div class="row row-cols-1 row-cols-md-2">
                    <div class="col">
                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama</label>
                            <input type="text" class="form-control" value="{{ $pengaduan->nama }}" disabled>
                        </div>

                        <div class="mb-3">
                            <label for="unit_kerja_id" class="form-label">Unit Kerja</label>
                            <input type="text" class="form-control"
                                value="{{ $pengaduan->unitKerja->nama_unit_kerja }}" disabled>
                        </div>

                        <div class="mb-3">
                            <label for="no_telf" class="form-label">No Telf</label>
                            <input type="text" class="form-control" value="{{ $pengaduan->no_telf }}" disabled>
                        </div>

                        <div class="mb-3">
                            <label for="deskripsi_pengaduan" class="form-label">Deskripsi Pengaduan</label>
                            <textarea class="form-control" rows="5" disabled>{{ $pengaduan->deskripsi_pengaduan }}</textarea>
                        </div>

                        @if ($pengaduan->gambar)
                            <div class="mb-3">
                                <label for="gambar" class="form-label">Gambar Pengaduan</label>
                                <img src="{{ asset('storage/' . $pengaduan->gambar) }}" alt="Gambar Pengaduan"
                                    class="img-fluid rounded object-fit-cover">
                            </div>
                        @endif
                    </div>
                    <div class="col">
                        <div class="mb-3">
                            <label for="status" class="form-label">Status Pengaduan</label>
                            <input type="text" class="form-control"
                                value="{{ $tindakanPengaduan->status ?? 'Belum Ditindaklanjuti' }}" disabled>
                        </div>

                        <div class="mb-3">
                            <label for="deskripsi_tindakan" class="form-label">Deskripsi Tindakan</label>
                            <textarea class="form-control" rows="5" disabled>{{ $tindakanPengaduan->deskripsi_tindakan ?? 'Belum ada deskripsi tindakan' }}</textarea>
                        </div>

                        <div class="mb-3">
                            <label for="created_at" class="form-label">Waktu Pengaduan</label>
                            <input type="text" class="form-control"
                                value="{{ $pengaduan->created_at->format('Y-m-d H:i:s') }}" disabled>
                        </div>

                        <div class="mb-3">
                            <label for="updated_at" class="form-label">Waktu Tindakan</label>
                            <input type="text" class="form-control"
                                value="{{ $tindakanPengaduan->updated_at->format('Y-m-d H:i:s') ?? 'Belum ada tindakan' }}"
                                disabled>
                        </div>
                        <div class="mb-3">
                            @php
                                $cleanNumber = preg_replace('/\D/', '', $pengaduan->no_telf);
                                if (substr($cleanNumber, 0, 1) === '0') {
                                    $cleanNumber = '+62' . substr($cleanNumber, 1);
                                }

                                $responseMessage = "Terima kasih atas laporan yang Anda kirimkan:\n\n";
                                $responseMessage .= "Nama: {$pengaduan->nama}\n";
                                $responseMessage .= "Alamat: {$pengaduan->alamat}\n";
                                $responseMessage .= "Tanggal Pengaduan: {$pengaduan->created_at->format('d-m-Y')}\n";
                                $responseMessage .= "Deskripsi Pengaduan: {$pengaduan->deskripsi_pengaduan}\n\n";
                                $responseMessage .= "Status Pengaduan: {$tindakanPengaduan->status}\n";
                                $responseMessage .= "Deskripsi Tindakan yang telah diambil: {$tindakanPengaduan->deskripsi_tindakan}\n\n";
                                $responseMessage .=
                                    "Kami sedang memproses pengaduan ini, dan kami akan melakukan tindakan lebih lanjut sesuai kebutuhan. Jika ada hal yang perlu ditanyakan, Anda dapat menghubungi kami kapan saja.\n\n";
                                $responseMessage .= 'Mohon ditunggu, dan terima kasih atas perhatian Anda.';

                                $responseMessage = urlencode($responseMessage);
                            @endphp

                            <a href="https://wa.me/{{ $cleanNumber }}?text={{ $responseMessage }}"
                                class="btn btn-success" target="_blank">
                                <i class="fab fa-whatsapp"></i> Kirim Jawaban via WhatsApp
                            </a>
                            <a href="{{ route('pengaduan.index') }}" class="btn btn-secondary">Kembali</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>
