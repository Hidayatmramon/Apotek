@extends('medicine.main')

@section('content')

@if (Session::get('success'))
    <div class="alert alert-success"> {{ Session::get('success') }}</div>
@endif
@if (Session::get('deleted'))
    <div class="alert alert-warning"> {{ Session::get('deleted') }}</div>
@endif
<table class="table table-striped table-bordered table-hover">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Tipe</th>
            <th>Harga</th>
            <th>Stock</th>
            <th class="text-center">
                Aksi
            </th>
        </tr>
    </thead>
    <tbody>
        @php $no = 1; @endphp
        @foreach ($medicine as $item)
            <tr>
                <td>{{ $no++ }}</td>
                <td>{{ $item['name'] }}</td>
                <td>{{ $item['type'] }}</td>
                <td>{{ $item['price'] }}</td>
                <td>{{ $item['stock'] }}</td>
                <td class="d-flex justify-content-center">
                    <a href="{{ route('medicine.edit', $item['id']) }}" class="btn btn-primary me-3">Edit</a>
                    <form action="{{ route('medicine.delete', $item['id']) }}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Hapus</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection