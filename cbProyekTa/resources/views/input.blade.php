@extends('home')

@section('content')
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Input durasi penggunaan jenis aplikasi</h6>
    </div>
    <div class="card-body">
        <form action="hasil" method="POST">
            @csrf
            <div class="form-group mt-3">
                <label for="range1" class="formControlRange mx-3">Game</label>
                <input type="range" class="form-control-range w-75" value="0" min="0" max="24" step="0.1" id="range1" name="range1" oninput="this.nextElementSibling.value = this.value">
                <output class="mx-3">0</output>
            </div>
            <div class="form-group mt-5">
                <label for="range2" class="formControlRange mx-3">Editing</label>
                <input type="range" class="form-control-range w-75" value="0" min="0" max="24" step="0.1" id="range2" name="range2" oninput="this.nextElementSibling.value = this.value">
                <output class="mx-3">0</output>
            </div>
            <div class="form-group mt-5">
                <label for="range3" class="formControlRange mx-3">Office</label>
                <input type="range" class="form-control-range w-75" value="0" min="0" max="24" step="0.1" id="range3" name="range3" oninput="this.nextElementSibling.value = this.value">
                <output class="mx-3">0</output>
            </div>
            <div class="form-group mt-5">
                <label for="range4" class="formControlRange mx-3">Programming</label>
                <input type="range" class="form-control-range w-75" value="0" min="0" max="24" step="0.1" id="range4" name="range4" oninput="this.nextElementSibling.value = this.value">
                <output class="mx-3">0</output>
            </div>
            <div class="form-group mt-5 d-flex justify-content-center">
                <button type="submit" class="btn btn-primary">Confirm</button>
            </div>
        </form>
    </div>
</div>
@endsection