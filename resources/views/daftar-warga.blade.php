@php
    $warga = \App\Models\Warga::all();
@endphp

<h1>daftar warga</h1>
@foreach ($warga as $data)
    id warga : {{ $data->id }} <br>
    nama warga : {{ $data->nama }} <br>
    nik : {{ $data->ktp->nik }} <br>
    jenis kelamin : {{ $data->jenis_kelamin }}<br>
    alamat : {{ $data->alamat }}<br>
    <hr>
@endforeach
