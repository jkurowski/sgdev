@extends('admin.layout')

@section('content')
    <div class="container-fluid">
        <div class="card">
            <div class="card-head container-fluid">
                <div class="row">
                    <div class="col-6 pl-0">
                        <h4 class="page-title row"><i class="fe-map-pin"></i>Przeglądaj</h4>
                    </div>
                    <div class="col-6 d-flex justify-content-end align-items-center form-group-submit">
                        <a href="{{route('admin.map.create')}}" class="btn btn-primary">Dodaj punkt</a>
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
                <table class="table mb-0">
                    <thead class="thead-default">
                    <tr>
                        <th>Nazwa</th>
                        <th>Kategoria</th>
                        <th>Adres</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody class="content">
                    @foreach ($list as $p)
                        <tr id="recordsArray_{{ $p->id }}">
                            <td>{{ $p->name }}</td>
                            <td>{{ mapCategory($p->group_id) }}</td>
                            <td>{{ $p->address }}</td>
                            <td class="option-120">
                                <div class="btn-group">
                                    <a href="{{route('admin.map.edit', $p->id)}}" class="btn action-button me-1" data-toggle="tooltip" data-placement="top" title="Edytuj wpis"><i class="fe-edit"></i></a>
                                    <form method="POST" action="{{route('admin.map.destroy', $p->id)}}">
                                        {{ csrf_field() }}
                                        {{ method_field('DELETE') }}
                                        <button
                                            type="submit"
                                            class="btn action-button confirm"
                                            data-toggle="tooltip"
                                            data-placement="top"
                                            title="Usuń wpis"
                                            data-id="{{ $p->id }}"
                                        ><i class="fe-trash-2"></i></button>
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
    <div class="form-group form-group-submit">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 d-flex justify-content-end">
                    <a href="{{route('admin.map.create')}}" class="btn btn-primary">Dodaj punkt</a>
                </div>
            </div>
        </div>
    </div>
@endsection
