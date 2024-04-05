@extends('layouts.AdminLTE.index')
@section('', 'Ventas')
@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title"> Datos </h3>
        </div>
        <div class="card-body">
            <div class="row">
                <ul>
                    <li><strong>Cliente: </strong>{{ $venta->Cliente->nombre }}
                        ({{ $venta->CLiente->rut }})</li>
                    <li><strong>Fecha venta:</strong> {{ date('d-m-Y', strtotime($venta->created_at)) }}</li>
                    <li><strong> {{ $venta->TipoDocumento->tipo_documento }}:</strong> {{ $venta->documento }}</li>
                    <li><strong>Monto total:</strong>
                        Gs {{ number_format($venta->monto_neto + $venta->monto_imp, 0, ',', '.') }}</li>
                    <li><strong>Costo total:</strong>
                        Gs {{ number_format($venta->costo_neto + $venta->costo_imp, 0, ',', '.') }}</li>
                    <li><strong>Ganancia total:</strong>
                        Gs {{ number_format($venta->monto_neto + $venta->monto_imp - ($venta->costo_neto + $venta->costo_imp), 0, ',', '.') }}
                    </li>
                    <li><strong>Unidades:</strong> {{ number_format($venta->unidades, 0, ',', '.') }}</li>
                    <li><strong>Usuario: </strong> {{ $venta->user->name }}</li>
                </ul>
            </div>
            <div class="row" style="margin-left: 5px">
                <h3>Detalle Ventas</h3>
                <table id="example" class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <td>Codigo</td>
                            <td>Descripcion</td>
                            <td>Unidades</td>
                            <td>Unitario</td>
                            <td>I.V.A.</td>
                            <td>Total</td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($detalleVentas as $d)
                            <tr>
                                <th>{{ $d->Producto->cod_interno }}</th>
                                <td>{{ $d->Producto->descripcion }}</td>
                                <td>{{ number_format($d->cantidad, 0, ',', '.') }}</td>
                                <td>Gs {{ number_format($d->precio_neto, 0, ',', '.') }}</td>
                                <td>Gs {{ number_format($d->precio_imp, 0, ',', '.') }}</td>
                                <td>Gs {{ number_format(($d->precio_neto + $d->precio_imp) * $d->cantidad, 0, ',', '.') }}
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <br>
                <button type="button" class="btn btn-primary" id="imprimirTicket">Imprimir Ticket</button> <!-- Agrega este botón -->
            </div>
        </div>
    </div>

@endsection

@section('layout_js')
    <script>
        $(document).ready(function() {
            $("#imprimirTicket").click(function() {
                // Obtener los datos que deseas enviar a ticket.php
                var datos = @json($venta);
                var csrfToken = $('meta[name="csrf-token"]').attr('content');
                // Enviar los datos a ticket.php utilizando una solicitud POST
                $.ajax({
                    url: '{{ route('ticket.print') }}',
                    method: 'POST',
                    headers: {
                        'X-CSRF-TOKEN': csrfToken
                    },
                    data: datos,
                    success: function(response) {
                        // Manejar la respuesta de ticket.php si es necesario
                    },
                    error: function(xhr, status, error) {
                        // Manejar errores si es necesario
                    }
                });
            });
        });
    </script>
@endsection
