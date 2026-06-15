@extends('template')


@section('title', 'Kode Soal tagihan_air')
<!-- isi bagian konten -->
<!-- cara penulisan isi section yang panjang-->
@section('konten')

<center>
        <center>
            <br />

            <table class="table table-striped table-hover">
                <tr>
                    <th>ID</th>
                    <th>No Meteran</th>
                    <th>Meter Awal</th>
                    <th>Meter Akhir</th>
                    <th>Penggunaan</th>
                    <th>Total Tagihan</th>
                </tr>

                @foreach ($tagihan_air as $t)
                    <tr>
                        <td>{{ $t->ID }}</td>
                        <td>{{ $t->NoMeteran }}</td>
                        <td>{{ $t->MeterAwal }}</td>
                        <td>{{ $t->MeterAkhir }}</td>
                        <td>{{ $t->Penggunaan = $t->MeterAkhir - $t->MeterAwal }}</td>
                        <td>{{ $t->Penggunaan*5000 }}</td>
                    </tr>
                @endforeach
            </table>

            <a href="/tagihanairtambah" class="btn btn-primary">Input Tagihan Baru</a>

        </center>

    @endsection
