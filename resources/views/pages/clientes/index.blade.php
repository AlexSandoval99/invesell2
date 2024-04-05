@extends('layouts.AdminLTE.index')
@section('title', 'Clientes')
@section('content')
<div class="ibox-title">
    <div class="ibox-tools text-right">
        <a href="{{{route('clientes.create')}}}" class="btn btn-primary btn-xs"><i class="fa fa-plus"></i> Agregar</a>
    </div>
</div>
<div class="ibox-content pb-0">
    <form method="GET">
        <div class="row">
            <div class="form-group col-sm-3">
                <input type="text" class="form-control" name="s" placeholder="Buscar" value="{{ request()->s }}">
            </div>
            <div class="form-group col-sm-2">
                <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i></button>
                @if(request()->s)
                    <a href="{{ request()->url() }}" class="btn btn-warning"><i class="fa fa-times"></i></a>
                @endif
            </div>
        </div>
    </form>
</div>
<div class="col-md-12">
    <div class="row" style="display: inline !important;">
        <table id="example" class="table table-striped">
            <thead>
                <tr>
                    <td>ID</td>
                    <td>Nombre</td>
                    <td>RUC</td>
                    <td>Telefono</td>
                    <td>Ciudad</td>
                    <td>Accion</td>
                </tr>
            </thead>
            <tbody>
                @foreach ($clientes as $u)
                <tr>
                    <td>{{$u->id}}</td>
                    <td>{{$u->nombre.' '.$u->giro}}</td>
                    <td>{{$u->rut}}</td>
                    <td>{{$u->telefono}}</td>
                    <td>{{$u->comuna['comuna']}}</td>
                    <td>
                        <div class="btn-group">
                            <a href="{{route('clientes.editar', $u->id)}}"><i class="fa fa-pencil"></i></a>
                        </div>
                    </td>
                </tr>
                    
                @endforeach
            </tbody>
        </table>
            {{ $clientes->appends(request()->query())->links() }}
    </div>
</div>
@endsection

@section('layout_js')
    <script> 
    $(document).ready(function() {
		
    }); </script>
@endsection