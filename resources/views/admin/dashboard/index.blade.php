<x-layout>
    <div class="card">
        <div class="card-body">
            <h3 class="fw-semibold">Dashboard</h3>
            <div class="row">
                <!-- Statistik Kunjungan -->
                <div class="col-md-3">
                    <div class="card text-white bg-primary border-0">
                        <div class="card-body">
                            <h4 class="text-white">Kunjungan</h4>
                            <h2 class="text-white">{{ $kunjunganCount }}</h2>
                        </div>
                    </div>
                </div>

                <!-- Statistik Unit Kerja -->
                <div class="col-md-3">
                    <div class="card text-white bg-success border-0">
                        <div class="card-body">
                            <h4 class="text-white">Unit Kerja</h4>
                            <h2 class="text-white">{{ $unitKerjaCount }}</h2>
                        </div>
                    </div>
                </div>

                <!-- Statistik Pengaduan -->
                <div class="col-md-3">
                    <div class="card text-white bg-info border-0">
                        <div class="card-body">
                            <h4 class="text-white">Pengaduan</h4>
                            <h2 class="text-white">{{ $pengaduanCount }}</h2>
                        </div>
                    </div>
                </div>

                <!-- Statistik Tindakan Pengaduan -->
                <div class="col-md-3">
                    <div class="card text-white bg-warning border-0">
                        <div class="card-body">
                            <h4 class="text-white">Tindakan</h4>
                            <h2 class="text-white">{{ $tindakanPengaduanCount }}</h2>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Daftar Terbaru Kunjungan -->
            <div class="row">
                <div class="col-md-12">
                    <div class="card bg-primary-subtle border-0">
                        <div class="card-body">
                            <h4>Daftar Kunjungan Terbaru</h4>
                            <ul class="list-group">
                                @foreach ($latestKunjungan as $kunjungan)
                                    <li class="list-group-item">
                                        <strong>{{ $kunjungan->nama }}</strong> - {{ $kunjungan->alamat }}
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Daftar Terbaru Pengaduan -->
            <div class="row">
                <div class="col-md-12">
                    <div class="card bg-info-subtle border-0">
                        <div class="card-body">
                            <h4>Daftar Pengaduan Terbaru</h4>
                            <ul class="list-group">
                                @foreach ($latestPengaduan as $pengaduan)
                                    <li class="list-group-item">
                                        <strong>{{ $pengaduan->nama }}</strong> - {{ $pengaduan->deskripsi_pengaduan }}
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Daftar Terbaru Tindakan Pengaduan -->
            <div class="row">
                <div class="col-md-12">
                    <div class="card bg-warning-subtle border-0">
                        <div class="card-body">
                            <h4>Daftar Tindakan Pengaduan Terbaru</h4>
                            <ul class="list-group">
                                @foreach ($latestTindakan as $tindakan)
                                    <li class="list-group-item">
                                        <strong>{{ $tindakan->deskripsi_tindakan ?? 'Tindakan belum diambil' }}</strong>
                                        -
                                        <em>{{ $tindakan->created_at->format('d M Y H:i') }}</em>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>
