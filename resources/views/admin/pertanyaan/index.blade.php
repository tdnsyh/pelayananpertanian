<x-layout>
    <div class="card">
        <div class="card-body">
            <h3 class="fw-semibold">Pertanyaan</h3>
            <p class="mb-0">Tampilan keseluruhan yang memudahkan pengelolaan data stokis, penjualan, dan wilayah secara
                efisien.
            </p>
            <a href="{{ route('pertanyaan.create') }}" class="btn btn-primary mb-3 mt-4">Tambah Pertanyaan</a>
            <x-alert></x-alert>

            @if ($pertanyaans->isEmpty())
                <div class="alert alert-warning" role="alert">
                    Belum ada data pertanyaan.
                </div>
            @else
                <div class="table-responsive">
                    <table class="table">
                        <thead class="table-dark">
                            <tr class="border-0">
                                <th class="rounded-start">#</th>
                                <th>Pertanyaan</th>
                                <th class="rounded-end">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($pertanyaans as $pertanyaan)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $pertanyaan->pertanyaan }}</td>
                                    <td>
                                        <a href="{{ route('pertanyaan.edit', $pertanyaan->id) }}"
                                            class="btn btn-warning btn-sm">Edit</a>
                                        <form action="{{ route('pertanyaan.destroy', $pertanyaan->id) }}" method="POST"
                                            class="d-inline">
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
