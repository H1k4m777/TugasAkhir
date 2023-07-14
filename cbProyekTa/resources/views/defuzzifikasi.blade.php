@extends('home')

@section('content')
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Harga Rekomendasi</h6>
    </div>
    <div class="card-body">
        <h4 class="text-center">Rekomendasi harga Laptop adalah <strong>{{ $rumus }}</strong> Juta</h4>
    </div>
</div>

<div class="card shadow mb-4">
    <!-- Card Header - Accordion -->
    <a href="#collapseCardExample" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="collapseCardExample">
        <h6 class="m-0 font-weight-bold text-primary">Fuzzifikasi</h6>
    </a>
    <!-- Card Content - Collapse -->
    <div class="collapse" id="collapseCardExample">
        <div class="card-body">
            <h4>Nilai Keanggotaan Kategori Game:</h4>
            <pre>
            {{ print_r($hitungx_game) }}
            </pre>

            <h4>Nilai Keanggotaan Kategori Office:</h4>
            <pre>
            {{ print_r($hitungx_office) }}
            </pre>

            <h4>Nilai Keanggotaan Kategori Editing:</h4>
            <pre>
            {{ print_r($hitungx_editing) }}
            </pre>

            <h4>Nilai Keanggotaan Kategori Programming:</h4>
            <pre>
            {{ print_r($hitungx_programming) }}
            </pre>
            <!-- <a href="defuzzifikasi">hasil</a> -->
        </div>
    </div>
</div>

<div class="card shadow mb-4">
    <!-- Card Header - Accordion -->
    <a href="#collapseCardTable" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="collapseCardTable">
        <h6 class="m-0 font-weight-bold text-primary">inferensi</h6>
    </a>
    <!-- Card Content - Collapse -->
    <div class="collapse" id="collapseCardTable">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Game</th>
                            <th>Editing</th>
                            <th>Office</th>
                            <th>Programming</th>
                            <th>Then</th>
                            <th>Nilai</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Game</th>
                            <th>Editing</th>
                            <th>Office</th>
                            <th>Programming</th>
                            <th>Then</th>
                            <th>Nilai</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach ($inferensi as $inferensi)
                        <tr>
                            <td>{{ $inferensi->game }}</td>
                            <td>{{ $inferensi->edit }}</td>
                            <td>{{ $inferensi->office }}</td>
                            <td>{{ $inferensi->programming }}</td>
                            <td>{{ $inferensi->then }}</td>
                            <td>{{ $inferensi->nilai }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<div class="card shadow mb-4">
    <!-- Card Header - Accordion -->
    <a href="#collapseCardDefuzz" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="collapseCardDefuzz">
        <h6 class="m-0 font-weight-bold text-primary">Defuzzifikasi</h6>
    </a>
    <!-- Card Content - Collapse -->
    <div class="collapse" id="collapseCardDefuzz">
        <div class="card-body">
            <h4>Nilai Maksimal Low: {{ $max_low }}</h4>
            <h4>Nilai Maksimal Low Mid: {{ $max_low_mid }}</h4>
            <h4>Nilai Maksimal Mid: {{ $max_mid }}</h4>
            <h4>Nilai Maksimal Mid High: {{ $max_mid_high }}</h4>
            <h4>Nilai Maksimal High: {{ $max_high }}</h4>

            <h4>Hasil Rumus: {{ $rumus }}</h4>
        </div>
    </div>
</div>
@endsection