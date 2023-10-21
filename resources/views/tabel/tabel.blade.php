@extends('tabel.main')
@section('tabel')

    <div class="container">
        <br>
        <br>
        <br>
        <br>
        <table class="table table-bordered">
            <tr>
                <th>No</th>
                <th>nama</th>
                <th>ruang</th>
                <th>hari</th>
            </tr>
            @foreach($students as $student)
                @if($student->name=="admin")
                @else
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{ $student->username }}</td>
                        <td>{{ $student->ruang }}</td>
                        <td>{{ $student->hari }}</td>
                    </tr>
                @endif
            @endforeach
        </table>
    </div>
@endsection
