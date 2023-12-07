    @extends('template.user')

    @section('content')
    <form action="{{ route('user.update', $user['id']) }}" method="post" class="card p-5">
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
            <label for="username" class="col-sm-2 col-form-label">Username:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="username" name="username" value="{{ $user['username'] }}">
            </div>
        </div>
        
        <div class="mb-3 row">
            <label for="name" class="col-sm-2 col-form-label">Role:</label>
            <div class="col-sm-10">
                <select name="role" id="type" class="form-select">
                    <option selected disabled hidden>Pilih</option>
                    <option value="admin" {{ $user['role'] == 'admin' ? 'selected' : '' }}>Admin</option>
                    <option value="user" {{ $user['role'] == 'user' ? 'selected' : '' }}>User</option>
                    <option value="kasir" {{ $user['role'] == 'kasir' ? 'selected' : '' }}>Kasir</option>
                </select>
            </div>
        </div>
        
        <div class="mb-3 row">
            <label for="password" class="col-sm-2 col-form-label">Password:</label>
            <div class="col-sm-10">
                <input type="password" class="form-control" id="password" name="password" placeholder="Silahkan diisi">
            </div>
        </div>

    <button type="submit" class="btn btn-primary mt-3">Ubah Data</button>
    </form>
    @endsection
