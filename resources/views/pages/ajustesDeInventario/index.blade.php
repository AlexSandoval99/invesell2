@extends('layouts.AdminLTE.index')
@section('title', 'Ajuste Inventario')
@section('content')
    <div class="ibox-title">
        <div class="ibox-tools text-right">
            <a href="{{{route('ajustesdeinventario.create')}}}" class="btn btn-primary btn-xs"><i class="fa fa-plus"></i>Agregar</a>
        </div>
    </div>
    <div class="ibox-content pb-0">
        <form method="GET">
            <div class="row">
                <div class="form-group col-sm-3">
                    <input type="text" class="form-control" name="i" placeholder="Buscar" value="{{ request()->i }}">
                </div>
                <div class="form-group col-sm-2">
                    <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i></button>
                    @if(request()->i)   
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
                            <td>Salidas</td>
                            <td>Entradas</td>
                            <td>Tipo de movimiento</td>
                            <td>Observaciones</td>
                            <td>Monto</td>
                            <td>Usuario</td>
                            <td>Fecha</td>
                            <td>Ver</td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($ajustesDeInventario as $u)
                            <tr>
                                <td>{{ $u->id }}</td>
                                <td>{{ $u->salidas }}</td>
                                <td>{{ $u->entradas }}</td>
                                <td>{{ $u->observaciones }}</td>
                                <td>{{ $u->movimiento->tipo_movimiento }}</td>
                                <td>
                                    
                                    Gs {{ number_format($u->costo_neto + $u->costo_imp, 0, '', '.') }}
                                </td>
                                <td>{{ $u->user->name }}</td>
                                <td>{{ $u->created_at }}</td>
                                <td>
                                    <div class="btn-group">
                                        <a type="button" class="btn btn-success"
                                            href="{{ route('ajustesdeinventario.view', $u->id) }}">Datos</a>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <br />
            </div>
        </div>

@endsection

@section('layout_js')
    <script> 
        $(document).ready(function() {
            
        }); 
    </script>
@endsection