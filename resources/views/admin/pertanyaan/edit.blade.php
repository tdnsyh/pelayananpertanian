<x-layout>
    <div class="card">
        <div class="card-body">
            <h3 class="fw-semibold">Edit Pertanyaan</h3>
            <p class="mb-0">Tampilan keseluruhan yang memudahkan pengelolaan data stokis, penjualan, dan wilayah secara
                efisien.
            </p>
            <div class="mt-4">
                <form action="{{ route('pertanyaan.update', $pertanyaan->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="pertanyaan" class="form-label">Pertanyaan</label>
                        <textarea class="form-control" id="pertanyaan" name="pertanyaan" required>{{ $pertanyaan->pertanyaan }}</textarea>
                    </div>
                    <button type="submit" class="btn btn-warning">Perbarui</button>
                    <a href="{{ route('pertanyaan.index') }}" class="btn btn-secondary">Kembali</a>
                </form>
            </div>
        </div>
    </div>
</x-layout>