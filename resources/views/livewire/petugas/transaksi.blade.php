<div class="row">
    <div class="col-12">

    @include('admin-lte/flash')
    {{-- @include('petugas/rak/create')
    @include('petugas/rak/edit')
    @include('petugas/rak/delete') --}}



 

    <div class="card">
    <div class="card-header">
    <span wire:click="create" class="btn btn-sm btn-primary">Tambah</span>


    @if ($transaksi->isnotEmpty())
    <div class="card-tools">
        <div class="input-group input-group-sm" style="width: 150px;">
        <input type="text" name="table_search" class="form-control float-right" placeholder="Search">
        <div class="input-group-append">
        <button type="submit" class="btn btn-default">
        <i class="fas fa-search"></i>
        </button>
        </div>
        </div>
        </div>
        </div>
        
        <div class="card-body table-responsive p-0">
        <table class="table table-hover text-nowrap">
        <thead>
        <tr>
        <th width="10%">No</th>
        <th>Kode Pinjam</th>
        <th>Buku</th>
        <th>Lokasi</th>
        <th>Tanggal Pinjam</th>
        <th>Tanggal Kembali</th>
        <th>Status</th>
        <th width="15%">Aksi</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($transaksi as $item)
        <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$item->kode_pinjam}}</td>
            <td>
                <ul>
                    @foreach ($item->detail_peminjaman as $detail_peminjaman)
                    <li>{{ $detail_peminjaman->buku->judul}}</li>
                    @endforeach
                </ul>
            </td>
            <td>
                <ul>
                    @foreach ($item->detail_peminjaman as $detail_peminjaman)
                    <li>Rak :{{ $detail_peminjaman->buku->rak->rak}}, Baris : {{ $detail_peminjaman->buku->rak->baris }}</li>
                    @endforeach
                </ul>
            </td>
            <td>{{\Carbon\Carbon::create($item->tanngal_pinjam)->format('d-m-Y')}}</td>
            <td>{{\Carbon\Carbon::create($item->tanngal_kembali)->format('d-m-Y')}}</td>
            <td>
                @if ($item->status==1)
                <span class="badge bg-indigo">Belum Dipinjam</span>
                @elseif ($item->status==2)
                <span class="badge bg-olive">Sedang Dipinjam</span>
                @else
                <span class="badge bg-fuchsia">Selesai Dipinjam</span>
                @endif
            </td>
            <td>
                @if ($item->status == 1)
                <span wire:click="edit({{$item->id}})" class="btn btn-sm btn-success">Pinjam</span>
                @elseif ($item->status == 2)
                <span wire:click="edit({{$item->id}})"class="btn btn-sm btn-primary">Kembali</span>
                @endif
            </td>
        </tr>
        @endforeach
        </tbody>
        </table>
        
    @endif
    </div>
    </div>
    <div class="row justify-content-center">
        {{$transaksi->links()}}
    </div>

    @if ($transaksi->isEmpty())
        <div class="card">
            <div class="card-body">
                <div class="alert alert-warning">
                    Anda tidak memiliki data.
                </div>
            </div>
        </div>
        
    @endif
    
    </div>
    
    </div>