@extends('admin.layouts.default')

@php
$folder = 'ruangan';
@endphp

@section('halaman', 'Ruangan')

@section('css')
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
@endsection

@section('content')
    <div id="route" style="display: none"><?= $folder ?></div>
    <div class="content-body">
        <div class="card">
            <div class="card-header">
                <p>Silahkan menambah dan merubah data ruangan</p>
                <button type="button" class="btn btn-outline-primary" id="tambah">Tambah Data</button>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table" id="my_table">
                        <thead class="table-light">
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
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
        $(document).ready(function() {
            $('#my_table').DataTable({
                scrollX: true,
                processing: true,
                serverSide: true,
                order: [
                    [1, 'asc']
                ],
                ajax: `/crud/${route}`,
                columns: [{
                        data: 'DT_RowIndex',
                        orderable: false,
                        searchable: false
                    },
                    {
                        data: 'nama',
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
