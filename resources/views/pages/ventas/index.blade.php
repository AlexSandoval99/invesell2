@extends('layouts.AdminLTE.index')
@section('title', 'Ventas')
@section('content')
    <div class="ibox-title">
        <div class="ibox-tools text-right">
            <a href="{{{route('ventas.create')}}}" class="btn btn-primary btn-xs"><i class="fa fa-plus"></i> Agregar</a>
        </div>
    </div>
    <div class="ibox-content pb-0">
        <form method="GET">
            <div class="row">
                <div class="form-group col-sm-3">
                    <input type="text" class="form-control" name="v" placeholder="Buscar" value="{{ request()->v }}">
                </div>
                <div class="form-group col-sm-2">
                    <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i></button>
                    @if(request()->v)
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
                            <td>Cliente</td>
                            <td>Documento</td>
                            <td>Monto</td>
                            <td>Medio de pago</td>
                            <td>Fecha</td>
                            <td>Usuario</td>
                            <td>Acciones</td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($ventas as $v)
                            <tr>
                                <td>{{ $v->id }}</td>
                                <td>{{ $v->Cliente->nombre }} ({{ $v->Cliente->rut }})</td>
                                <td>{{ $v->TipoDocumento->tipo_documento }}: {{ $v->documento }}</td>
                                <td>Gs {{ number_format($v->monto_neto + $v->monto_imp, 0, '', '.') }}</td>
                                <td>{{ $v->MedioDePago->medio_de_pago }}</td>
                                <td>{{ date('d/m/Y', strtotime($v->created_at)) }}</td>
                                <td>{{ $v->user->name }}</td>
                                <td>
                                    <div class="btn-group">
                                        <a type="button" class="btn btn-success"
                                            href="{{ route('ventas.show', $v->id) }}">Ver</a>
                                        <a type="button" class="btn btn-primary"
                                            href="{{ route('ticket.pdf', $v->id) }}">Ticket</a>
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
