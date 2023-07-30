<div class="row">
    <div class="col-12">

    @include('admin-lte/flash')
    @include('petugas/buku/create')
    @include('petugas/buku/edit')
    @include('petugas/buku/delete')
    @include('petugas/buku/show')



 

    <div class="card">
    <div class="card-header">
    <span wire:click="create" class="btn btn-sm btn-primary">Tambah</span>
 

    <div class="card-tools">
        <div class="input-group input-group-sm" style="width: 150px;">
        <input wire:model="search" type="text" name="table_search" class="form-control float-right" placeholder="Cari Buku">
        <div class="input-group-append">
        </div>
        </div>
        </div>
        </div>

        @if ($buku->isNotEmpty())
        <div class="card-body table-responsive p-0">
        <table class="table table-hover text-nowrap">
        <thead>
        <tr>
        <th width="10%">No</th>
        <th>Sampul</th>
        <th>Judul</th>
        <th>Penulis</th>
        <th>Kategori</th>
        <th width="15%">Aksi</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($buku as $item)
        <tr>
            <td>{{$loop->iteration}}</td>
            <td><img src="/storage/{{$item->sampul}}" alt="{{$item->judul}}" width="60" height="80"></td>
            <td>{{$item->judul}}</td>
            <td>{{$item->penulis}}</td>
            <td>{{$item->kategori->name}}</td>
            <td>
                <div class="btn-group">
                    <span wire:click="show({{$item->id}})" class="btn btn-sm btn-success mr-2">Lihat</span>
                    <span wire:click="edit({{$item->id}})" class="btn btn-sm btn-primary mr-2">Edit</span>
                    <span wire:click="delete({{$item->id}})"class="btn btn-sm btn-danger">Hapus</span>
                </div>
            </td>
        </tr>
        @endforeach
        </tbody>
        </table>
    </div>
    @endif
    </div>

    <div class="row justify-content-center">
        {{$buku->links()}}
    </div>
    @if ($buku->isEmpty())
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