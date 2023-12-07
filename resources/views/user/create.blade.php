@extends('template.user')

@section('content')
<form action="{{ route('user.store') }}" method="post" class="card p-5" enctype="multipart/form-data">
    @csrf

    @if (Session::get('success'))
    <div class="alert alert-success">{{ Session::get('success') }}</div>
    @endif
    @if ($errors->any())
        <ul class="alert alert-danger">
            @foreach ($errors->all() as $errors)
                <li>{{ $errors }}</li>
            @endforeach
        </ul>
    @endif
        
<div class="mb-3 row">
    <label for="username" class="col-sm-2 col-form-label">Username: </label>
    <div class="col-sm-10">
        <input type="text" class="form-control" id="username" name="username">
    </div>
</div>
<div class="mb-3 row">
    <label for="type" class="col-sm-2 col-form-label">Role: </label>
    <div class="col-sm-10">
        <select name="role" id="role" class="form-select">
            <option selected disabled hidden>Pilih:</option>
            <option value="admin">admin</option>
            <option value="user">user</option>
            <option value="kasir">kasir</option>
        </select>
    </div>
</div>
<div class="mb-3 row">
    <label for="namadok" class="col-sm-2 col-form-label">Nama Dokter: </label>
    <div class="col-sm-10">
        <input type="text" name="namadok" id="namadok" class="form-control">
    </div>
</div>
<div class="mb-3 row">
    <label for="ruang" class="col-sm-2 col-form-label">Ruang: </label>
    <div class="col-sm-10">
        <input type="text" name="ruang" id="ruang" class="form-control">
    </div>
</div>
<div class="mb-3 row">
    <label for="hari" class="col-sm-2 col-form-label">Hari: </label>
    <div class="col-sm-10">
        <input type="text" name="hari" id="hari" class="form-control">
    </div>
</div>
<div class="mb-3 row">
    <label for="password" class="col-sm-2 col-form-label">Password: </label>
    <div class="col-sm-10">
        <input type="password" name="password" id="password" class="form-control">
    </div>
</div>

<button type="submit" class="btn btn-primary mt-3">Tambah Data</button>
</form>
@endsection