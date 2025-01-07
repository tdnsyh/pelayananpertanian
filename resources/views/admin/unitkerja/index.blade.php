<x-layout>
    <div class="card">
        <div class="card-body">
            <h3 class="fw-semibold">Unit Kerja</h3>
            <p class="mb-0">Tampilan keseluruhan yang memudahkan pengelolaan data stokis, penjualan, dan wilayah secara
                efisien.
            </p>
            <a href="{{ route('unitkerja.create') }}" class="btn btn-primary mb-3 mt-4">Tambah Unit Kerja</a>
            <x-alert></x-alert>
            @if ($unitKerja->isEmpty())
                <div class="alert alert-warning" role="alert">
                    Belum ada data unit kerja.
                </div>
            @else
                <div class="table-responsive">
                    <table class="table">
                        <thead class="table-dark">
                            <tr class="border-0">
                                <th class="rounded-start">No</th>
                                <th>Nama</th>
                                <th>Deskripsi</th>
                                <th class="rounded-end">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($unitKerja as $index => $unit)
                                <tr>
                                    <td>{{ $index + 1 }}</td>
                                    <td>{{ $unit->nama_unit_kerja }}</td>
                                    <td>{{ \Str::limit($unit->deskripsi_singkat, 20, '...') }}</td>
                                    <td>
                                        <a href="{{ route('unitkerja.edit', $unit->id) }}"
                                            class="btn btn-warning btn-sm">
                                            <i class="ti ti-pencil"></i>
                                        </a>
                                        <form action="{{ route('unitkerja.destroy', $unit->id) }}" method="POST"
                                            style="display:inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm">
                                                <i class="ti ti-trash"></i>
                                            </button>
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
