@extends('layouts.AdminLTE.index')
@section('title', 'Recepcion')
@section('content')
    <div class="ibox-title">
        <div class="ibox-tools text-right">
            <a href="{{{route('recepciones.create')}}}" class="btn btn-primary btn-xs"><i class="fa fa-plus"></i> Agregar</a>
        </div>
    </div>
    <div class="ibox-content pb-0">
        <form method="GET">
            <div class="row">
                <div class="form-group col-sm-3">
                    <input type="text" class="form-control" name="r" placeholder="Buscar" value="{{ request()->r }}">
                </div>
                <div class="form-group col-sm-2">
                    <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i></button>
                    @if(request()->r)
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
                            <td>Proveedor</td>
                            <td>Documento</td>
                            <td>Observaciones</td>
                            <td>Unidades</td>
                            <td>Monto</td>
                            <td>Usuario</td>
                            <td>Fecha</td>
                            <td>Ver</td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($recepciones as $u)
                            <tr>
                                <td>{{ $u->id }}</td>
                                <td>
                                    {{ $u->Proveedor->nombre_fantasia }} ({{ $u->Proveedor->rut }})
                                </td>
                                <td>
                                    {{ $u->documentos->tipo_documento }}: {{ $u->documento }}
                                </td>
                                <td>{{ $u->observaciones }}</td>
                                <td>{{ $u->unidades }}</td>
                                <td>
                                    Gs
                                    {{ number_format($u->total_neto + $u->total_iva, 0, '', '.') }}
                                </td>
                                <td>{{ $u->user->name }}</td>
                                <td>{{ $u->fecha_recepcion }}</td>
                                <td>
                                    <div class="btn-group">
                                        <a type="button" class="btn btn-success"
                                            href="{{ route('recepciones.view', $u->id) }}">Datos</a>
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
		
    }); </script>
@endsection