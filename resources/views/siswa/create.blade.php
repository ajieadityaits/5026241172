@extends('template')
@section('title', 'Data Siswa')
@section('konten')

    <h2>Tambah Siswa</h2>

    @if ($errors->any())
        <ul style="color: red;">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form action="{{ route('siswa.store') }}" method="POST" onsubmit="return validasiForm()">
        @csrf


        <div class="mb-3">
                <label>NRP</label>
                <input type="text"
                       name="NRP"
                       class="form-control"
                       id = "NRP"
                       maxlength="10"
                       value="{{ old('NRP') }}">
        </div>

        <div class="mb-3">
                <label>Nama</label>
                <input type="text"
                       name="Nama"
                       class="form-control"
                       id = "Nama"
                       maxlength="20"
                       value="{{ old('Nama') }}">
        </div>

        <div class="mb-3">
                <label>Kelas</label>
                <input type="text"
                       name="Kelas"
                       class="form-control"
                       id = "Kelas"
                       maxlength="20"
                       value="{{ old('Kelas') }}">
        </div>

        <div class="mb-3">
                <label>Tanggal Lahir</label>
                <input type="date"
                       name="TanggalLahir"
                       class="form-control"
                       id = "TanggalLahir"
                       value="{{ old('TanggalLahir') }}">
        </div>

        <p>
            <label>Tanggal Lahir</label><br>
            <input type="date" name="TanggalLahir" id="TanggalLahir" value="{{ old('TanggalLahir') }}">
        </p>

        <button type="submit">Simpan</button>
        <button><a href="{{ route('siswa.index') }}">Kembali</a></button>

    </form>

    <script>
        function validasiForm() {
            let nrp = document.getElementById('NRP').value.trim();
            let nama = document.getElementById('Nama').value.trim();
            let kelas = document.getElementById('Kelas').value.trim();
            let tanggal = document.getElementById('TanggalLahir').value;

            if (nrp === '') {
                Swal.fire({
                    title: "Kesalahan Input Data!",
                    text: "NRP wajib diisi",
                    icon: "error"
                });
                return false;
            }

            if (nrp.length > 10) {
                Swal.fire({
                    title: "Kesalahan Input Data!",
                    text: "NRP maksimal 10 karakter",
                    icon: "error"
                });
                return false;
            }

            if (nama === '') {
                Swal.fire({
                    title: "Kesalahan Input Data!",
                    text: "Nama wajib diisi",
                    icon: "error"
                });
                return false;
            }

            if (nama.length > 20) {
                Swal.fire({
                    title: "Kesalahan Input Data!",
                    text: "Nama maksimal 20 karakter",
                    icon: "error"
                });
                return false;
            }

            if (kelas === '') {
                Swal.fire({
                    title: "Kesalahan Input Data!",
                    text: "Kelas wajib diisi",
                    icon: "error"
                });
                return false;
            }

            if (kelas.length > 5) {
                Swal.fire({
                    title: "Kesalahan Input Data!",
                    text: "Kelas maksimal 5 karakter",
                    icon: "error"
                });
                return false;
            }

            if (tanggal === '') {
                Swal.fire({
                    title: "Kesalahan Input Data!",
                    text: "Tanggal lahir wajib diisi",
                    icon: "error"
                });
                return false;

            }

            return true;
        }
    </script>
@endsection
