@extends('template')

@section('title', 'Tambah Nilai')
<!-- isi bagian konten -->
<!-- cara penulisan isi section yang panjang -->
@section('konten')
    <center>


        <br />
        <br />

        <div class="card">
            <div class="card-header">
                Form Tambah Data Nilai
            </div>

            <div class="card-body">
                <form action="/nilaikuliahstore" method="post">
                    {{ csrf_field() }}

                    <div class="row mb-3">
                        <label for="nrp" class="col-sm-2 col-form-label">NRP</label>
                        <div class="col-sm-10">
                            <input type="text" name="NRP" id="nrp" class="form-control" required>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="NilaiAngka" class="col-sm-2 col-form-label">Nilai Angka</label>
                        <div class="col-sm-10">
                            <input type="text" name="NilaiAngka" id="jabatan" class="form-control" required>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="SKS" class="col-sm-2 col-form-label">SKS</label>
                        <div class="col-sm-10">
                            <input type="number" name="SKS" id="sks" class="form-control" required>
                        </div>
                    </div>

                    <div class="row">
                        <div class="offset-sm-2 col-sm-10">
                            <input type="submit" value="Simpan Data" class="btn btn-primary">
                        </div>
                    </div>

                </form>
            </div>
        </div>
        <br />
        <br />
        <a href="/nilaikuliah" class="btn btn-info"> Kembali</a>
    </center>
@endsection
