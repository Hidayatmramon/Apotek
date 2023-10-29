@extends('template.medicine')

@section('home')
@if (Session::get('success'))
    <div class="alert alert-success">{{ Session::get('success') }}</div>
@endif
@if (Session::get('deleted'))
    <div class="alert alert-warning">{{ Session::get('deleted') }}</div>
@endif

@php $no = 1; @endphp
@foreach ($medicine as $item)
    <div class="products-row">
        <button class="cell-more-button">
            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical">
                <circle cx="12" cy="12" r="1" />
                <circle cx="12" cy="5" r="1" />
                <circle cx="12" cy="19" r="1" />
            </svg>
        </button>
        <div class="product-cell image">
            <img src="">
            <span>{{ $item['type'] }}</span>
        </div>
        <div class="product-cell category"><span class="cell-label">Name:</span>{{ $item['name'] }}</div>
        <div class="product-cell stock"><span class="cell-label">Stock:</span>{{ $item['stock'] }}</div>
        <div class="product-cell price"><span class="cell-label">Price:</span>{{ $item['price'] }}</div>
        <div class="product-cell aksi">
            <span class="cell-label">Aksi:</span>
            <a href="{{ route('medicine.edit', $item['id']) }}" class="btn btn-primary me-3">Edit</a>
            <form action="{{ route('medicine.delete', $item['id']) }}" method="post">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Hapus</button>
            </form>
        </div>
    </div>
@endforeach
@endsection

@extends('template.navbar')
