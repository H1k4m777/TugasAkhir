@extends('home')

@section('content')
<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Rules</h6>
    </div>
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

                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Game</th>
                        <th>Editing</th>
                        <th>Office</th>
                        <th>Programming</th>
                        <th>Then</th>

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

                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
@endsection