<div>
    <!-- Content tabel pasien -->
    <div class="container mb-4">
        <div class="row mt-5">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <p><i class="fas fa-table me-1"></i> Datatable Pasien</p>

                        <div class="mt-4">
                            <input type="search" wire:model.debounce.500ms="search" class="form-control float-end mx-2"
                                placeholder="Search..." style="width: 230px" />
                        </div>
                    </div>
                    
                    <div class="card-body table-responsive">
                        <table class="table table-bordered text-center">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">Umur</th>
                                    <th scope="col">Alamat</th>
                                    <th scope="col">Penyakit</th>
                                </tr>
                            </thead>

                            <tbody class="table-group-divider">
                                @php
                                $no = 1;
                                @endphp

                                @forelse ($semua_pasien as $data)
                                <tr>
                                    <td>{{ $no++ }}</td>
                                    <td>{{ $data->nama }}</td>
                                    <td>{{ $data->umur }}</td>
                                    <td>{{ $data->alamat }}</td>
                                    <td>{{ $data->penyakit }}</td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="5">Data Tidak Di Temukan.</td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                        <div>
                            {{ $semua_pasien->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- </Akhir content tabel pasien -->
</div>
