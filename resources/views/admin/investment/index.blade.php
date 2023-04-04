@extends('admin.layout')

@section('content')
    <div class="container-fluid">
        <div class="card">
            <div class="card-head container-fluid">
                <div class="row">
                    <div class="col-6 pl-0">
                        <h4 class="page-title row"><i class="fe-home"></i>Przeglądaj inwestycje</h4>
                    </div>
                </div>
            </div>
            <div class="table-overflow">
                @if (session('success'))
                    <div class="alert alert-success border-0 mb-0">
                        {{ session('success') }}
                        <script>window.setTimeout(function(){$(".alert").fadeTo(500,0).slideUp(500,function(){$(this).remove()})},3000);</script>
                    </div>
                @endif
                <table class="table mb-0" id="sortable">
                    <thead class="thead-default">
                    <tr>
                        <th>#</th>
                        <th>Nazwa</th>
                        <th class="text-center">Status</th>
                        <th>Typ</th>
                        <th>Data modyfikacji</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody class="content">
                    @foreach ($list as $index => $p)
                        <tr id="recordsArray_{{ $p->id }}">
                            <th class="position" scope="row">{{ $index+1 }}</th>
                            <td>
                                @if ($p->type == 1)
                                    <a href="{{route('admin.developro.investment.building.index', $p->id)}}">{{ $p->name }}</a>
                                @endif
                                @if ($p->type == 2)
                                    <a href="{{route('admin.developro.investment.floor.index', $p->id)}}">{{ $p->name }}</a>
                                @endif
                                @if ($p->type == 3)
                                    <a href="{{route('admin.developro.investment.house.index', $p->id)}}">{{ $p->name }}</a>
                                @endif
                            </td>
                            <td><span class="badge inwest-list-status-{{ $p->status }}">{{ investmentStatus($p->status) }}</span></td>
                            <td>{{ investmentType($p->type) }}</td>
                            <td>{{ $p->updated_at }}</td>
                            <td class="option-120">
                                <div class="btn-group">
                                    <a href="{{route('admin.developro.plan.index', $p->id)}}" class="btn action-button me-1" data-toggle="tooltip" data-placement="top" title="Plan inwestycji"><i class="fe-image"></i></a>
                                    @if ($p->type == 1)
                                        <a href="{{route('admin.developro.investment.building.index', $p->id)}}" class="btn action-button me-1" data-toggle="tooltip" data-placement="top" title="Lista budynków"><i class="fe-grid"></i></a>
                                    @endif
                                    @if ($p->type == 2)
                                        <a href="{{route('admin.developro.investment.floor.index', $p->id)}}" class="btn action-button me-1" data-toggle="tooltip" data-placement="top" title="Lista kondygnacji"><i class="fe-layers"></i></a>
                                    @endif
                                    @if ($p->type == 3)
                                        <a href="{{route('admin.developro.investment.house.index', $p->id)}}" class="btn action-button me-1" data-toggle="tooltip" data-placement="top" title="Lista domów"><i class="fe-archive"></i></a>
                                    @endif

                                    <a href="{{route('admin.developro.edit', $p->id)}}" class="btn action-button me-1" data-toggle="tooltip" data-placement="top" title="Edytuj"><i class="fe-edit"></i></a>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
