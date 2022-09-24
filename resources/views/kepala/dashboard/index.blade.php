@extends('kepala.layouts.default')

@section('halaman', 'Home')

@section('content')
    <div class="content-body">
        <!-- Kick start -->
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Selamat datang kepala biro umum</h4>
            </div>
            <div class="card-body">
                <div id="chart"></div>
            </div>
        </div>
        <!--/ Kick start -->

    </div>
@endsection
@section('scripts')
    <script src="{{ mix('js/my-chart.js') }}"></script>
@endsection
