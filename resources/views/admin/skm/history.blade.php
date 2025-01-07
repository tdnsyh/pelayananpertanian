<x-layout>
    <div class="card">
        <div class="card-body">
            <h3 class="fw-semibold">Survei Kepuasan Masyarakat</h3>
            <p class="mb-0">Tampilan keseluruhan yang memudahkan pengelolaan data stokis, penjualan, dan wilayah secara
                efisien.
            </p>
            <div class="mt-4">
                @if ($responden->count() > 0)
                    @foreach ($responden as $r)
                        <p class="mb-0">
                            <strong>Waktu Survei :</strong> {{ $r->created_at }}
                        </p>
                        <p class="mb-0">
                            <strong>Jenis Kelamin :</strong> {{ $r->jenis_kelamin }}
                        </p>
                        <p class="mb-0">
                            <strong>Usia :</strong>{{ $r->usia }}
                        </p>
                        <p class="mb-0">
                            <strong>Pendidikan :</strong>{{ $r->pendidikan }}
                        </p>
                        <p class="mb-0">
                            <strong>Pekerjaan :</strong> {{ $r->pekerjaan }}
                        </p>
                    @endforeach
                    @php
                        $jenisLayanan = $jawaban->first()?->jenisLayanan;
                    @endphp

                    @if ($jenisLayanan)
                        <p>
                            <strong>Jenis Layanan:</strong> {{ $jenisLayanan->nama_layanan }}
                        </p>
                    @else
                        <div class="alert alert-warning">
                            <strong>Jenis Layanan:</strong> Tidak tersedia
                        </div>
                    @endif
                    <div class="table-responsive">
                        <table class="table mt-3">
                            <thead class="table-dark">
                                <tr class="border-0">
                                    <th class="rounded-start">Pertanyaan</th>
                                    <th class="rounded-end">Jawaban</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($pertanyaan as $pertanyaan)
                                    <tr>
                                        <td>{{ $pertanyaan->pertanyaan }}</td>
                                        <td>
                                            @foreach ($jawaban as $jawabanItem)
                                                @if ($jawabanItem->pertanyaan_id == $pertanyaan->id)
                                                    @php
                                                        $jawabanLabel = '';
                                                        if ($jawabanItem->jawaban == 'a') {
                                                            $jawabanLabel = 'Tidak Sesuai';
                                                        } elseif ($jawabanItem->jawaban == 'b') {
                                                            $jawabanLabel = 'Kurang Sesuai';
                                                        } elseif ($jawabanItem->jawaban == 'c') {
                                                            $jawabanLabel = 'Sesuai';
                                                        } elseif ($jawabanItem->jawaban == 'd') {
                                                            $jawabanLabel = 'Sangat Sesuai';
                                                        } else {
                                                            $jawabanLabel = 'Jawaban Tidak Dikenal';
                                                        }
                                                    @endphp
                                                    <span
                                                        class="badge 
                                                        @if ($jawabanItem->jawaban == 'a') text-bg-danger
                                                        @elseif($jawabanItem->jawaban == 'b') text-bg-warning
                                                        @elseif($jawabanItem->jawaban == 'c') text-bg-success
                                                        @elseif($jawabanItem->jawaban == 'd') text-bg-primary
                                                        @else text-bg-warning @endif">{{ $jawabanLabel }}</span>
                                                @endif
                                            @endforeach
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="mt-4">
                        {{ $responden->links('pagination::bootstrap-5') }}
                    </div>
                @else
                    <p>No data available.</p>
                @endif
            </div>
        </div>
    </div>
</x-layout>
