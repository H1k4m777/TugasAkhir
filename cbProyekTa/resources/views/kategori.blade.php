@extends('home')

@section('content')
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Edit Parameter Variabel</h6>
    </div>
    <div class="card-body">
        <form method="POST" action="{{ route('kategori.update') }}">
            @csrf

            <!-- Kategori Game -->
            <div class="form-row">
                <div class="form-group col-md-3">
                    <label for="kategori_game_sebentar">Kategori Game: Sebentar</label>
                    <input type="text" name="kategori_game_sebentar" id="kategori_game_sebentar" class="form-control" value="{{ $kategori['game']['sebentar'] }}">
                </div>
                <div class="form-group col-md-3">
                    <label for="kategori_game_sedang">Kategori Game: Sedang</label>
                    <input type="text" name="kategori_game_sedang" id="kategori_game_sedang" class="form-control" value="{{ $kategori['game']['sedang'] }}">
                </div>
                <div class="form-group col-md-3">
                    <label for="kategori_game_lama">Kategori Game: Lama</label>
                    <input type="text" name="kategori_game_lama" id="kategori_game_lama" class="form-control" value="{{ $kategori['game']['lama'] }}">
                </div>
            </div>

            <!-- Kategori Office -->
            <div class="form-row">
                <div class="form-group col-md-3">
                    <label for="kategori_office_sebentar">Kategori Office: Sebentar</label>
                    <input type="text" name="kategori_office_sebentar" id="kategori_office_sebentar" class="form-control" value="{{ $kategori['office']['sebentar'] }}">
                </div>
                <div class="form-group col-md-3">
                    <label for="kategori_office_sedang">Kategori Office: Sedang</label>
                    <input type="text" name="kategori_office_sedang" id="kategori_office_sedang" class="form-control" value="{{ $kategori['office']['sedang'] }}">
                </div>
                <div class="form-group col-md-3">
                    <label for="kategori_office_lama">Kategori Office: Lama</label>
                    <input type="text" name="kategori_office_lama" id="kategori_office_lama" class="form-control" value="{{ $kategori['office']['lama'] }}">
                </div>
            </div>

            <!-- Kategori Editing -->
            <div class="form-row">
                <div class="form-group col-md-3">
                    <label for="kategori_editing_sebentar">Kategori Editing: Sebentar</label>
                    <input type="text" name="kategori_editing_sebentar" id="kategori_editing_sebentar" class="form-control" value="{{ $kategori['editing']['sebentar'] }}">
                </div>
                <div class="form-group col-md-3">
                    <label for="kategori_editing_sedang">Kategori Editing: Sedang</label>
                    <input type="text" name="kategori_editing_sedang" id="kategori_editing_sedang" class="form-control" value="{{ $kategori['editing']['sedang'] }}">
                </div>
                <div class="form-group col-md-3">
                    <label for="kategori_editing_lama">Kategori Editing: Lama</label>
                    <input type="text" name="kategori_editing_lama" id="kategori_editing_lama" class="form-control" value="{{ $kategori['editing']['lama'] }}">
                </div>
            </div>

            <!-- Kategori Programming -->
            <div class="form-row">
                <div class="form-group col-md-3">
                    <label for="kategori_programming_sebentar">Kategori Programming: Sebentar</label>
                    <input type="text" name="kategori_programming_sebentar" id="kategori_programming_sebentar" class="form-control" value="{{ $kategori['programming']['sebentar'] }}">
                </div>
                <div class="form-group col-md-3">
                    <label for="kategori_programming_sedang">Kategori Programming: Sedang</label>
                    <input type="text" name="kategori_programming_sedang" id="kategori_programming_sedang" class="form-control" value="{{ $kategori['programming']['sedang'] }}">
                </div>
                <div class="form-group col-md-3">
                    <label for="kategori_programming_lama">Kategori Programming: Lama</label>
                    <input type="text" name="kategori_programming_lama" id="kategori_programming_lama" class="form-control" value="{{ $kategori['programming']['lama'] }}">
                </div>
            </div>

            <div class="form-group mt-3 d-flex justify-content-center">
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
        </form>

    </div>
</div>
@endsection