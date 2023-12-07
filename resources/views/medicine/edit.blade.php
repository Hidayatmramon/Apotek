@extends('template.medicine')

@section('content')
<form action="{{ route('medicine.update', $medicine['id']) }}" method="post" class="card p-5">
@csrf
@method('PATCH')

@if ($errors->any())
<ul class="alert alert-danger p-3">
    @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
    @endforeach
</ul>
@endif
    <div class="mb-3 row">
        <label for="name" class="col-sm-2 col-form-label">Nama Obat:</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="name" name="name" value="{{ $medicine['name'] }}">
        </div>
    </div>
    
    <div class="mb-3 row">
        <label for="name" class="col-sm-2 col-form-label">Jenis Obat:</label>
        <div class="col-sm-10">
            <select name="type" id="type" class="form-select">
                <option selected disabled hidden>Pilih</option>
                <option value="tablet" {{ $medicine['type'] == 'tablet' ? 'selected' : '' }}>tablet</option>
                <option value="sirup" {{ $medicine['type'] == 'sirup' ? 'selected' : '' }}>sirup</option>
                <option value="kapsul" {{ $medicine['type'] == 'kapsul' ? 'selected' : '' }}>kapsul</option>
            </select>
        </div>
    </div>
    
    <div class="mb-3 row">
        <label for="price" class="col-sm-2 col-form-label">Harga Obat:</label>
        <div class="col-sm-10">
            <input type="number" class="form-control" id="price" name="price" value="{{ $medicine['price'] }}">
        </div>
    </div>

<button type="submit" class="btn btn-primary mt-3">Ubah Data</button>
</form>
@endsection