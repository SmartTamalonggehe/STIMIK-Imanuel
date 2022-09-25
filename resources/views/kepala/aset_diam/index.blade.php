@extends('kepala.layouts.default')

@section('halaman', 'Aset Tidak Bergerak')

@section('content')
    <div class="content-body">
        <!-- Kick start -->
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Silahkan memilih jenis aset yang akan dicetak</h4>
            </div>
            <div class="card-body">
                <form action="{{ route('laporan.pdf.aset-diam') }}" method="GET" target="_blank">
                    <div class="row">
                        <div class="col-12 col-lg-10">
                            <select class="form-select" id="basicSelect" name="jenis_id">
                                <option selected value="">Pilih Jenis Aset Tidak Bergerak</option>
                                <option value="1">Barang Masuk</option>
                                <option value="2">Barang Keluar</option>
                            </select>
                        </div>
                        <div class="col-12 col-lg-2">
                            <button type="submit" class="btn btn-relief-info btn-block" style="width: 100%">
                                Cetak PDF
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!--/ Kick end -->
    </div>
@endsection
