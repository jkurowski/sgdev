@extends('admin.layout')

@section('content')
    <div class="container-fluid">
        <div class="card">
            <div class="card-head container-fluid">
                <div class="row">
                    <div class="col-12 pl-0">
                        <h4 class="page-title row"><i class="fe-home"></i><a href="{{route('admin.developro.index')}}">Inwestycje</a><span class="d-inline-flex ml-2 mr-2">/</span>{{$investment->name}}<span class="d-inline-flex ml-2 mr-2">/</span>{{$building->name}}</h4>
                    </div>
                </div>
            </div>

            @include('admin.investment_shared.menu')
        </div>
        <div class="card mt-3">
            <div class="card-body card-body-rem p-0">
                <div class="table-overflow">
                    @if (session('success'))
                        <div class="alert alert-success border-0 mb-0">
                            {{ session('success') }}
                            <script>setTimeout(function(){$(".alert").slideUp(500,function(){$(this).remove()})},3000)</script>
                        </div>
                    @endif
                    <table class="table mb-0" id="sortable">
                        <thead class="thead-default">
                        <tr>
                            <th>#</th>
                            <th>Nazwa</th>
                            <th class="text-center">Lokale</th>
                            <th>Data modyfikacji</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody class="content">
                        @foreach ($list as $index => $p)
                            <tr id="recordsArray_{{ $p->id }}">
                                <th class="position" scope="row">{{ $index+1 }}</th>
                                <td><a href="{{route('admin.developro.investment.building.floor.property.index', [$investment, $building, $p])}}">{{$p->name}}</a></td>
                                <td class="text-center">{{$p->properties_count}}</a></td>
                                <td>{{ $p->updated_at }}</td>
                                <td class="option-120">
                                    <div class="btn-group">
                                        <a href="{{route('admin.developro.building.floor.copy', [$investment, $building, $p])}}" class="btn action-button me-1" data-bs-toggle="tooltip" data-placement="top" data-bs-title="Kopiuj piętro"><i class="fe-copy"></i></a>
                                        <a href="{{route('admin.developro.investment.building.floor.property.index', [$investment, $building, $p])}}" class="btn action-button mr-1" data-toggle="tooltip" data-placement="top" title="Pokaż piętro"><i class="fe-folder"></i></a>
                                        <a href="{{route('admin.developro.investment.building.floor.edit', [$investment, $building, $p])}}" class="btn action-button mr-1" data-toggle="tooltip" data-placement="top" title="Edytuj piętro"><i class="fe-edit"></i></a>
                                        <form method="POST" action="{{route('admin.developro.investment.building.floor.destroy', [$investment, $building, $p])}}">
                                            {{ csrf_field() }}
                                            {{ method_field('DELETE') }}
                                            <button type="submit" class="btn action-button confirm" data-toggle="tooltip" data-placement="top" title="Usuń piętro" data-id="{{ $p->id }}"><i class="fe-trash-2"></i></button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="form-group form-group-submit">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 d-flex justify-content-end">
                    <a href="{{route('admin.developro.investment.building.floor.create', [$investment, $building])}}" class="btn btn-primary">Dodaj piętro</a>
                </div>
            </div>
        </div>
    </div>
@endsection
