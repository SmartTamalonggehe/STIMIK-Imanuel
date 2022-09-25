<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aset Bergerak</title>
    <style>
        /* reset */
        body {
            margin: 0 10px;
            padding: 0;
            box-sizing: border-box;
            font-size: 12px;
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6,
        p {
            margin: 0;
            padding: 0;
        }

        ol,
        ul {
            margin: 0;
            padding-left: 20px
        }

        .text-center {
            text-align: center;
        }

        .text-right {
            text-align: right;
        }

        .text-underline {
            text-decoration: underline;
        }

        .mt-1 {
            margin-top: 0.3em;
        }

        .mt-2 {
            margin-top: 0.5em;
        }

        .mt-3 {
            margin-top: 1em;
        }

        .mt-4 {
            margin-top: 1.5em;
        }

        hr {
            margin: 0;
        }

        hr.garis_surat {
            border: 1px solid #000;
            height: 1px;
            background-color: #000;
            margin-bottom: 2px
        }

        .table {
            border-collapse: collapse;
            width: 100%;
        }

        .table td,
        th {
            padding: 3px 0;
        }

        .table-borderless {
            border-collapse: collapse;
            float: left;
        }

        .table-borderless th {
            border: 1px solid rgb(31, 30, 30);
            padding: 8px 10px;
        }

        .table-borderless td {
            border: 1px solid rgb(31, 30, 30);
            padding: 5px 20px;
        }

        .isi-gaji {
            width: auto;
            margin: auto
        }

        .clearfix {
            clear: both;
        }

        .float-left {
            float: left;
        }

        .float-right {
            float: right;
        }

        .d-inline {
            display: inline;
        }

        .d-inline-block {
            display: inline-block;
        }

        .img {
            width: 50px;
            height: auto;
        }

        .uppercase {
            text-transform: uppercase;
        }
    </style>
</head>

<body>
    <header>
        <img src="{{ public_path('assets/logo/papua-1.png') }}" class="float-left img" alt="" srcset="">
        <div class="text-center">
            <h3>PEMERINTAH PROVINSI PAPUA</h3>
            <h2 class="mt-1">SEKRETARIAT DAERAH</h2>
            <h3 class="uppercase">Laporan {{ $jenis ? $jenis->nama : '' }} Aset Bergerak</h3>
        </div>
        <hr class="garis_surat mt-2">
        <hr>
    </header>
    {{-- isi laporan --}}
    <div class="table-responsive mt-3">
        @foreach ($data->keyBy('ruangan_id') as $ruang)
            <h2 style="margin-bottom: 10px; margin-left: 10px">{{ $ruang->ruangan->nama }}</h2>
            <table style="margin-bottom: 20px;" class="table table-borderless">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Merk</th>
                        <th>Jumlah</th>
                        <th>Satuan</th>
                        <th>Ket</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $no = 0;
                    @endphp

                    @foreach ($data as $item)
                        @if ($item->ruangan_id == $ruang->ruangan_id)
                            @php
                                $no++;
                            @endphp
                            <tr>
                                <td>{{ $no }}</td>
                                <td>{{ $item->nama }}</td>
                                <td>{{ $item->merk }}</td>
                                <td>{{ $item->satuan }}</td>
                                <td>{{ $item->jmlh }}</td>
                                <td>{{ $item->ket }}</td>
                            </tr>
                        @endif
                    @endforeach
                </tbody>
            </table>
        @endforeach

    </div>
</body>

</html>
