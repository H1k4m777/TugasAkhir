@extends('home')

@section('content')
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Hasil Fuzzifikasi</h6>
    </div>
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
        <a href="defuzzifikasi">hasil</a>
    </div>
</div>
@endsection