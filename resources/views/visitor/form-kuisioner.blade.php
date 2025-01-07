<x-guard>
    <x-navbar></x-navbar>
    <div class="container mt-5">
        <x-alert></x-alert>
        <form action="{{ route('kuisioner.store') }}" method="POST">
            @csrf

            <div class="mb-3">
                <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                <select class="form-control" id="jenis_kelamin" name="jenis_kelamin" required>
                    <option value="Laki-laki">Laki-laki</option>
                    <option value="Perempuan">Perempuan</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="usia" class="form-label">Usia</label>
                <input type="number" class="form-control" id="usia" name="usia" required>
            </div>

            <div class="mb-3">
                <label for="pendidikan" class="form-label">Pendidikan</label>
                <input type="text" class="form-control" id="pendidikan" name="pendidikan" required>
            </div>

            <div class="mb-3">
                <label for="pekerjaan" class="form-label">Pekerjaan</label>
                <input type="text" class="form-control" id="pekerjaan" name="pekerjaan" required>
            </div>

            <div class="mb-3">
                <label for="jenis_layanan" class="form-label">Jenis Layanan</label>
                <select class="form-control" id="jenis_layanan" name="jenis_layanan" required>
                    @foreach ($layanan as $layananItem)
                        <option value="{{ $layananItem->id }}">{{ $layananItem->nama_layanan }}</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <h3>Pertanyaan</h3>
                @foreach ($pertanyaan as $pertanyaanItem)
                    <div class="form-group">
                        <label for="pertanyaan{{ $pertanyaanItem->id }}"
                            class="form-label">{{ $pertanyaanItem->pertanyaan }}</label>
                        <div class="mb-3">
                            <div>
                                <label>
                                    <input type="radio" name="pertanyaan[{{ $pertanyaanItem->id }}]" value="a"
                                        required>
                                    Tidak sesuai
                                </label>
                            </div>

                            <div>
                                <label>
                                    <input type="radio" name="pertanyaan[{{ $pertanyaanItem->id }}]" value="b"
                                        required>
                                    Kurang sesuai
                                </label>
                            </div>

                            <div>
                                <label>
                                    <input type="radio" name="pertanyaan[{{ $pertanyaanItem->id }}]" value="c"
                                        required>
                                    Sesuai
                                </label>
                            </div>

                            <div>
                                <label>
                                    <input type="radio" name="pertanyaan[{{ $pertanyaanItem->id }}]" value="d"
                                        required>
                                    Sangat sesuai
                                </label>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <button type="submit" class="btn btn-primary">Kirim Kuisioner</button>
        </form>
    </div>
</x-guard>
