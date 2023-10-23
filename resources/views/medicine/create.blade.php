@extends('medicine.main')

@section('content')
<form action="{{ route('medicine.store') }}" method="post" class="card p-5">
    @csrf

    @if (Session::get('success'))
    <div class="alert alert-success">{{ Session::get('success') }}</div>
    @endif
    @if ($errors->any())
        <ul class="alert alert-danger">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif
        
<div class="mb-3 row">
    <label for="name" class="col-sm-2 col-form-label">Nama Obat: </label>
    <div class="col-sm-10">
        <input type="text" class="form-control" id="name" name="name">
    </div>
</div>
<div class="mb-3 row">
    <label for="type" class="col-sm-2 col-form-label">Jenis Obat: </label>
    <div class="col-sm-10">
        <select name="type" id="type" class="form-select">
            <option selected disabled hidden>Pilih:</option>
            <option value="tablet">tablet</option>
            <option value="sirup">sirup</option>
            <option value="kapsul">kapsul</option>
        </select>
    </div>
</div>
<div class="mb-3 row">
    <label for="price" class="col-sm-2 col-form-label">Harga Obat: </label>
    <div class="col-sm-10">
        <input type="number" name="price" id="price" class="form-control">
    </div>
</div>
<div class="mb-3 row">
    <label for="stock" class="col-sm-2 col-form-label">Stock Tersedia: </label>
    <div class="col-sm-10">
        <input type="number" name="stock" id="stock" class="form-control">
    </div>
</div>
<div class="mb-3 row">
    <label for="photo" class="col-sm-2 col-form-label">Foto Obat:</label> 
    <div class="col-sm-10">
        <input type="file" name="photo" id="photo" class="form-control">
    </div>
</div>
<button type="submit" class="btn btn-primary mt-3">Tambah Data</button>
</form>
@endsection