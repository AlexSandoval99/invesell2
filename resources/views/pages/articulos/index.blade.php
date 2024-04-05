@extends('layouts.AdminLTE.index')
@section('title', 'Articulos')
@section('content')
<div class="ibox-title">
    <div class="ibox-tools text-right">
        <a href="{{{route('articulos.create')}}}" class="btn btn-primary btn-xs"><i class="fa fa-plus"></i> Agregar</a>
    </div>
</div>
<div class="ibox-content pb-0">
    <form method="GET">
        <div class="row">
            <div class="form-group col-sm-3">
                <input type="text" class="form-control" name="a" placeholder="Buscar" value="{{ request()->a }}">
            </div>
            <div class="form-group col-sm-2">
                <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i></button>
                @if(request()->a)
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
                        <td>Codigo interno</td>
                        <td>Codigo de barras</td>
                        <td>Descripcion</td>
                        <td>Stock</td>
                        <td>Precio Venta</td>
                        <td>Activo</td>
                        <td>Acciones</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($articulos as $u)
                        <tr>
                            <td>{{ $u->id }}</td>
                            <td>{{ $u->cod_interno }}</td>
                            <td>{{ $u->cod_barras }}</td>
                            <td>{{ $u->descripcion }}</td>
                            <td>{{ $u->stock }}</td>
                            <td>Gs {{ number_format($u->venta_neto + $u->venta_imp, 0, '', '.') }}</td>
                            @if ($u->activo)
                                <td>Activo</td>
                            @else
                                <td>Inactivo</td>
                            @endif


                            <td>
                                <div class="btn-group">
                                    <button type="button" class="btn btn-success dropdown-toggle"
                                        data-toggle="dropdown">Acciones</button>

                                    <div class="dropdown-menu" role="menu">
                                        <a class="dropdown-item" href="{{ route('articulos.editar', $u->id) }}">Editar</a>
                                        <a class="dropdown-item"
                                            href="{{ route('articulos.historial', $u->id) }}">Historial</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $articulos->links() }}
        </div>
    </div>


@endsection

@section('layout_js')
    <script> 
    $(document).ready(function() {
		
    }); </script>
@endsection