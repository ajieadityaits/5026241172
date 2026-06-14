@extends('template')


@section('title', 'Data DVD')
<!-- isi bagian konten -->
<!-- cara penulisan isi section yang panjang-->
@section('konten')

    <center>
        <center>
            <br />

            <table class="table table-striped table-hover">
                <tr>
                    <th>ID DVD</th>
                    <th>Merk DVD</th>
                    <th>Stock DVD</th>
                    <th>Tersedia</th>

                </tr>

                @foreach ($dvd as $d)
                    <tr>
                        <td>{{ $d->kodedvd }}</td>
                        <td>{{ $d->merkdvd }}</td>
                        <td>{{ $d->stockdvd }}</td>
                        <td>
                            @if ($d->stockdvd > 0)
                                <span class="badge bg-success">Tersedia</span>
                            @else
                                <span class="badge bg-danger">Tidak Tersedia</span>
                            @endif
                        </td>

                    </tr>
                @endforeach
            </table>

            <a href="/tambahdvd" class="btn btn-primary">Tambah Merk DVD Baru</a>

        </center>

    @endsection
