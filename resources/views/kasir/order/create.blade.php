@extends('template.order')
@section('content')
    <div class="container mt-3">
        <form action="{{ route('order.store') }}" class="card m-auto p-5" method="POST">
            @csrf

            @if ($errors->any())
                <ul class="alert alert-danger p-3">
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            @endif
            @if (Session::get('failed'))
                <div class="alert alert-danger">{{ Session::get('failed')}}</div>
            @endif
            <p>Penanggung Jawab : <b>{{ Auth::user()->username }}</b></p>
            <div class="mb-3 row">
                <label for="username" class="col-sm-2 col-form-label">Nama Pembeli</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="username" name="username">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="medicine" class="col-sm-2 col-form-label">Obat</label>
                <div class="col-sm-10">
                    <select name="medicine[]" id="medicine" class="form-select">
                        <option selected hidden disabled>Pesanan 1</option>
                        @foreach ($medicine as $item)
                            <option value="{{ $item['id'] }}">{{ $item['name']}}</option>
                        @endforeach
                    </select>
                    <div id="wrap-medicine"></div>
                    <br>
                    <p class="text-primary" style="cursor: pointer" id="add-select">+ tambah obat</p>
                </div>
            </div>
            <button type="submit" class="btn btn-block btn-lg btn-primary">Konfirmasi Pembelian</button>
        </form>
    </div>
@endsection

@push('script')
<script>
    let no = 2;

    $("#add-select").on("click", function() {
        let el = `<br><select name="medicine[]" id="medicine" class="form-select">
        <option selected hidden disabled>Pesanan ${no}</option>
        @foreach ($medicine as $item)
            <option value="{{ $item['id'] }}">{{ $item['name'] }}</option>
            @endforeach
        </select>`;

        $("#wrap-medicine").append(el);
        no++;
    });
</script>
@endpush