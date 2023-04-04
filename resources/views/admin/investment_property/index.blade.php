@extends('admin.layout')

@section('content')
    <div class="container-fluid">
        <div class="card">
            <div class="card-head container-fluid">
                <div class="row">
                    <div class="col-12 pl-0">
                        <h4 class="page-title"><i class="fe-home"></i><a href="{{route('admin.developro.index')}}">Inwestycje</a><span class="d-inline-flex me-2 ms-2">/</span>{{$investment->name}} - {{ $floor->name }}</h4>
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
                            <th class="text-center">Status</th>
                            <th class="text-center">Pokoje</th>
                            <th class="text-center">Metraż</th>
                            <th>Data modyfikacji</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody class="content">
                        @foreach ($list->floorRooms as $index => $p)
                            <tr id="recordsArray_{{ $p->id }}">
                                <th class="position" scope="row">{{ $index+1 }}</th>
                                <td>{{ $p->name }}</td>
                                <td><span class="badge room-list-status-{{ $p->status }}">{{ roomStatus($p->status) }}</span></td>
                                <td class="text-center">{{ $p->rooms }}</td>
                                <td class="text-center">{{ $p->area }} m<sup>2</sup></td>
                                <td>{{ $p->updated_at }}</td>
                                <td class="option-120">
                                    <div class="btn-group">
                                        <a href="{{route('admin.developro.investment.floor.property.edit', [$investment, $floor, $p])}}" class="btn action-button me-1" data-toggle="tooltip" data-placement="top" title="Edytuj"><i class="fe-edit"></i></a>
                                        <form method="POST" action="{{route('admin.developro.investment.floor.property.destroy', [$investment, $floor, $p->id])}}">
                                            {{ csrf_field() }}
                                            {{ method_field('DELETE') }}
                                            <button type="submit" class="btn action-button confirm" data-toggle="tooltip" data-placement="top" title="Usuń" data-id="{{ $p->id }}"><i class="fe-trash-2"></i></button>
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
                    <a href="{{route('admin.developro.investment.floor.property.create', [$investment, $floor])}}" class="btn btn-primary">Dodaj</a>
                </div>
            </div>
        </div>
    </div>
@endsection
