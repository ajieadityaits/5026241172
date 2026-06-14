@extends('template')

@section('title', 'Tambah Meja')

@section('konten')

    <h3>Tambah Data DVD</h3>

    <form action="/storedvd" method="post">
    {{ csrf_field() }}

    <div class="form-group">
        <label>Merk DVD</label>
        <input type="text" name="merkdvd" class="form-control" required>
    </div>

    <div class="form-group">
        <label>Stock DVD</label>
        <input type="number" name="stockdvd" class="form-control" required>
    </div>

    <br>

    <input type="submit" value="Simpan Data" class="btn btn-primary">
    <a href="/dvd" class="btn btn-secondary">Kembali</a>
</form>

@endsection
