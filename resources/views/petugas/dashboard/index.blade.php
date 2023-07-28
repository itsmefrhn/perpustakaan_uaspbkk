@extends('admin-lte/app')
@section('title', 'Dashboard')
@section('active-dashboard', 'active')


@section('content')
<div class="row">
<div class="col-lg-3 col-6">

<div class="small-box bg-info">
<div class="inner">
<h3>{{ $count_buku }}</h3>
<p>Buku</p>
</div>
<div class="icon">
<i class="fas fa-book"></i>
</div>
</div>
</div>

<div class="col-lg-3 col-6">

<div class="small-box bg-success">
<div class="inner">
    <h3>{{ $count_user }}</h3>
<p>Peminjam</p>
</div>
<div class="icon">
<i class="fas fa-users"></i>
</div>
</div>
</div>

<div class="col-lg-3 col-6">

<div class="small-box bg-warning">
<div class="inner">
    <h3>{{ $count_sedang_dipinjam }}</h3>
<p>Sedang Dipinjam</p>
</div>
<div class="icon">
<i class="fas fa-clock"></i>
</div>
</div>
</div>

<div class="col-lg-3 col-6">

<div class="small-box bg-danger">
<div class="inner">
    <h3>{{ $count_selesai_dipinjam }}</h3>
<p>Selesai Dipinjam</p>
</div>
<div class="icon">
<i class="fas fa-check"></i>
</div>
</div>
</div>

</div>
@endsection