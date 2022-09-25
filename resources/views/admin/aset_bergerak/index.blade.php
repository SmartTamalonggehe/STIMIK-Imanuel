@extends('admin.layouts.default')

@php
$folder = 'aset_bergerak';
@endphp

@section('halaman', 'Aset Bergerak')

@section('css')
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
@endsection

@section('content')
    <div id="route" style="display: none"><?= $folder ?></div>
    <div id="jenis" style="display: none"><?= $jenis ?></div>
    <div class="content-body">
        <div class="card">
            <div class="card-header">
                <p>Silahkan menambah dan merubah data aset bergerak</p>
                <button type="button" class="btn btn-outline-primary" id="tambah">Tambah Data</button>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table" id="my_table">
                        <thead class="table-light">
                            <tr>
                                <th>No</th>
                                <th>Jenis</th>
                                <th>Nama</th>
                                <th>Tipe</th>
                                <th>Merk</th>
                                <th>Jumlah</th>
                                <th>Keterangan</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

@include("admin.$folder.form")

@section('scripts')
    <script src="{{ mix('js/my-crud.js') }}"></script>
    <script src="{{ asset('app-assets/vendors/js/tables/datatable/jquery.dataTables.min.js') }}"></script>
    <script>
        const jenis = document.getElementById('jenis').textContent

        $(document).ready(function() {
            $('#my_table').DataTable({
                scrollX: true,
                processing: true,
                serverSide: true,
                order: [
                    [1, 'asc']
                ],
                ajax: `/crud/${route}?jenis=${jenis}`,
                columns: [{
                        data: 'DT_RowIndex',
                        orderable: false,
                        searchable: false
                    },
                    {
                        data: 'jenis_barang',
                    },
                    {
                        data: 'nama',
                    },
                    {
                        data: 'type',
                    },
                    {
                        data: 'merk',
                    },
                    {
                        data: 'jmlh',
                    },
                    {
                        data: 'ket',
                    },
                    {
                        data: 'action',
                        orderable: false,
                        searchable: false
                    }
                ]
            });
        });
    </script>
@endsection
