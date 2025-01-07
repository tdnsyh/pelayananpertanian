<x-layout>
    <div class="card">
        <div class="card-body">
            <h3 class="fw-semibold">Pelayanan</h3>
            <p class="mb-0">Tampilan keseluruhan yang memudahkan pengelolaan data stokis, penjualan, dan wilayah secara
                efisien.
            </p>
            <div class="mt-4">
                <x-alert></x-alert>
                <a href="{{ route('pelayanan.create') }}" class="btn btn-primary mb-3">Tambah Pelayanan</a>
                @if ($unitKerja->isEmpty())
                    <div class="alert alert-warning" role="alert">
                        Tidak ada unit kerja yang memiliki pelayanan.
                    </div>
                @endif
                @foreach ($unitKerja as $unit)
                    <div class="unitkerja">
                        <h5>{{ $unit->nama_unit_kerja }}</h5>
                        <p class="mb-0"><strong>Deskripsi:</strong> {{ $unit->deskripsi_singkat }}</p>
                        <p><strong>Jenis Pelayanan:</strong> {{ $unit->jenis_pelayanan }}</p>
                    </div>

                    <div class="pelayanan">
                        @foreach ($unit->pelayanan->groupBy('kategori_pelayanan') as $kategori => $pelayananList)
                            <div class="mb-4">
                                <h6>{{ $kategori }}</h6>
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead class="table-dark">
                                            <tr class="border-0">
                                                <th class="rounded-start">Komponen</th>
                                                <th>Uraian</th>
                                                <th class="rounded-end">Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($pelayananList as $pelayanan)
                                                @foreach ($pelayanan->detailPelayanan as $detail)
                                                    <tr>
                                                        <td>{{ $detail->komponen }}</td>
                                                        <td>{{ $detail->uraian }}</td>
                                                        <td>
                                                            <a href="{{ route('pelayanan.edit', $detail->id) }}"
                                                                class="btn btn-primary btn-sm">Edit</a>

                                                            <form action="{{ route('pelayanan.destroy', $detail->id) }}"
                                                                method="POST" style="display: inline;">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button type="submit"
                                                                    class="btn btn-danger btn-sm">Hapus</button>
                                                            </form>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        @endforeach
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</x-layout>
