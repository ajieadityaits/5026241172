@extends('template')

@section('title', 'Kode Soal tagihan_air')

@section('konten')

    <h2>Tambah Data Tagihan</h2>

    <form action="/tagihanairstore" method="POST" onsubmit="return validasiForm()">
        @csrf


        <div class="col-sm-2 col-form-label">
            <label>N0 Meter</label>
            <input type="text" name="NoMeteran" class="form-control" id = "NoMeteran" maxlength="6"
                value="{{ old('NoMeteran') }}">
        </div>

        <div class="col-sm-2 col-form-label">
            <label>Meter Awal</label>
            <input type="text" name="MeterAwal" class="form-control" id = "MeterAwal" value="{{ old('MeterAwal') }}">
        </div>

        <div class="col-sm-2 col-form-label">
            <label>Meter Akhir</label>
            <input type="text" name="MeterAkhir" class="form-control" id = "MeterAkhir" value="{{ old('MeterAkhir') }}">
        </div>

        <script>
            function validasiForm() {
                let NoMeteran = document.getElementById('NoMeteran').value.trim();
                let MeterAwal = document.getElementById('MeterAwal').value.trim();
                let MeterAkhir = document.getElementById('MeterAkhir').value.trim();

                if (NoMeteran === '') {
                    Swal.fire({
                        title: "Kesalahan Input Data!",
                        text: "No Meteran wajib diisi",
                        icon: "error"
                    });
                    return false;
                }

                if (MeteranAwal.length > MeterAkhir.length) {
                    Swal.fire({
                        title: "Kesalahan Input Data!",
                        text: "Meteran Awal Harus Lebih Kecil dari Meteran Akhir",
                        icon: "error"
                    });
                    return false;
                }

                if (MeterAwal.trim() === "" || isNaN(MeterAwal)) {
                    Swal.fire({
                        icon: 'error',
                        title: 'Input Tidak Valid',
                        text: 'Meter awal harus diisi dengan angka!',
                    });
                    // Validasi: Pastikan angka yang dimasukkan adalah bilangan bulat (integer)
                } else if (!Number.isInteger(Number(MeterAwal))) {
                    Swal.fire({
                        icon: 'warning',
                        title: 'Format Salah',
                        text: 'Meter awal harus berupa bilangan bulat (tanpa desimal)!',
                    });

                    return false;
                }
                return true;
            }
        </script>


        <button type="submit">Simpan</button>
        <button><a href="/eas">Kembali</a></button>

    </form>
@endsection
