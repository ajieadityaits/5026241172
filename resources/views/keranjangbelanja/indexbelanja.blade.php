@extends('template')

@section('title', 'keranjangbelanja')

@section('konten')
    <center>



        <br />
        <br />
        <br />


        <p>Keranjang Belanja</p>

        <table class="table table-striped table-hover">
            <tr>
                <th>Kode Pembelian</th>
                <th>Kode Barang</th>
                <th>Jumlah Pembelian</th>
                <th>Harga per item</th>
                <th>Total</th>
                <th>Action</th>
            </tr>
            @foreach ($keranjangbelanja as $kb)
                <tr>
                    <td>{{ $kb->ID }}</td>
                    <td>{{ $kb->KodeBarang }}</td>
                    <td>{{ $kb->Jumlah }}</td>
                    <td>{{ $kb->Harga }}</td>
                    <td>{{ number_format($kb->Jumlah * $kb->Harga, 0, ',', '.') }}</td>

                    <td>

                        <a href="/belanjabeli" class="btn btn-success">Beli</a>
                        |
                        <a href="/belanjahapus/{{ $kb->ID }}" class="btn btn-danger"
                            onclick="return confirm('Yakin ingin membatalkan pembelian ini?')">
                            Batal
                        </a>

                    </td>
                </tr>
            @endforeach
        </table>

        {{-- <ul class="pagination " style="margin:28px 0">

            {{ $pegawai->links() }}
        </ul>

        <a href="/pegawaitambah" class="btn btn-primary mt-1 mb-5"> + Tambah Pegawai Baru</a> --}}

    </center>


@endsection
