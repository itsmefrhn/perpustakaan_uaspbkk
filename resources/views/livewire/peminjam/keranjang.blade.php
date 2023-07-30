<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Keranjang</h1>
        </div>
    </div>

    @include('admin-lte/flash')


<div class="row">
    <div class="col-md-12 mb-4">
        <label for="tanngal_pinjam">Tanggal Pinjam</label>
        <input wire:model="tanngal_pinjam" type="date" class="form-control" id="tanngal_pinjam">
        @error('tanngal_pinjam') <small class="text-danger">{{ $message }}</small> @enderror
    </div>
</div>


    <div class="row">
        <div class="col-md-12 mb-2">

            @if ($keranjang->tanngal_pinjam)
                <strong>Tanggal Pinjam : {{ $keranjang->tanngal_pinjam }}</strong>
            @else
                <button wire:click ="pinjam({{ $keranjang->id }})"class="btn btn-sm btn-success">Pinjam</button>
            @endif
            <strong class="float-end">Kode Pinjam : {{ $keranjang->kode_pinjam }}</strong>


        </div>
    </div>


    <div class="row">
        <div class="col-md-12">
            <table class="table table-hover text-nowrap">
                
                <thead>
                <tr>
                <th>No</th>
                <th>Judul</th>
                <th>Penulis</th>
                <th>Rak</th>
                <th>Baris</th>
                @if (!$keranjang->tanngal_pinjam)
                <th></th>
                @endif

                </tr>
                </thead>
                <tbody>
                    @foreach ($keranjang->detail_peminjaman as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->buku->judul }}</td>
                        <td>{{ $item->buku->penulis }}</td>
                        <td>{{ $item->buku->rak->rak }}</td>
                        <td>{{ $item->buku->rak->baris }}</td>
                        <td>
                            @if (!$keranjang->tanngal_pinjam)
                            <button wire:click="hapus({{ $keranjang->id }}, {{ $item->id }})"class="btn btn-sm btn-danger">Hapus</button>
                            @endif
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            @if (!$keranjang->tanngal_pinjam)
            <button wire:click="hapusMasal" class="btn btn-sm btn-danger">Hapus Semua</button>
            @endif
            
        </div>
    </div>
</div>