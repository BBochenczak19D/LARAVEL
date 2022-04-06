@extends('layout.main')

@section('content')
@extends('layout.main')

<div class="container">
    <div class="container d-flex justify-content-around">

        <div class="col-x col-xl-3 col-md-6 mb-4">
            <div class="card border-left shadow-sm py-2 h-100">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Liczba gier</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $stats['count'] }}</div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-gamepad fa-2x text-gray-300"></i>
                     </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="col-x col-xl-3 col-md-6 mb-4">
            <div class="card border-left shadow-sm py-2 h-100">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">id < 5</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $stats['countId'] }}</div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-gamepad fa-2x text-gray-300"></i>
                     </div>
                    </div>
                </div>
            </div>
        </div>


    </div>
    <div class="card mt-3">
        <div class="card">
            <div class="card-header"><i class="fas fa-table mr-1"></i>Gry</div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th>Lp</th>
                            <th>Tytuł</th>
                            <th>Gatunek</th>
                            <th>Ocena</th>
                            <th>Kategoria</th>
                            <th>Opcje</th>
                        </tr>
                        </thead>
                        <tfoot>

                        <tbody>
                            @foreach($games ?? [] as $game)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $game->title }}</td>
                                    <td>{{ $game->genre_name }}</td>
                                    <td>{{ $game->id }}</td>
                                    <td>

                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


