@extends('layouts.AdminLTE.index')
@section('title', '')
@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title"> Ajuste de Inventario </h3>
        </div>
        <div class="card-body">
            <div class="col-md-6">
                <ul>
                    <li><strong>Fecha ajuste:</strong> {{ date('d-m-Y', strtotime($ajuste->created_at)) }}</li>

                    <li><strong>Monto total:</strong>
                        Gs {{ number_format($ajuste->costo_neto + $ajuste->monto_imp, 0, ',', '.') }}</li>
                    <li><strong>Entradas:</strong> {{ number_format($ajuste->entradas, 0, ',', '.') }}</li>
                    <li><strong>Salidas:</strong> {{ number_format($ajuste->salidas, 0, ',', '.') }}</li>
                    <li><strong>Observaciones: </strong>{{ $ajuste->observaciones }}</li>
                    <li><strong>Usuario: </strong> {{ $ajuste->user->name }}</li>
                </ul>
            </div>

            <!-- Fin contenido -->
        </div>

        <!-- /.card-body -->
        <!-- /.card-footer-->
    </div>
    <br>
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Detalle ajuste </h3>
        </div>
        <div class="card-body">
            <table id="example" class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <td>Codigo</td>
                        <td>Descripcion</td>
                        <td>Entradas</td>
                        <td>Salidas</td>
                        <td>Unitario</td>
                        <td>I.V.A.</td>
                        <td>Total</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($detalle as $d)
                        <tr>
                            <th>{{ $d->Producto->cod_interno }}</th>
                            <td>{{ $d->Producto->descripcion }}</td>
                            <td>{{ number_format($d->salidas, 0, ',', '.') }}</td>
                            <td>{{ number_format($d->entradas, 0, ',', '.') }}</td>
                            <td>Gs {{ number_format($d->costo_neto, 0, ',', '.') }}</td>
                            <td>Gs {{ number_format($d->costo_imp, 0, ',', '.') }}</td>
                            @if ($d->entradas > 0)
                                <td>Gs {{ number_format(($d->costo_neto + $d->costo_imp) * $d->entradas, 0, ',', '.') }}
                                </td>
                            @else
                                <td>Gs {{ number_format(($d->costo_neto + $d->costo_imp) * $d->salidas, 0, ',', '.') }}
                                </td>
                            @endif
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <br />
        </div>
@endsection

@section('layout_js')
    <script>
        $(document).ready(function() {
            $("#example").DataTable({
                order: [
                    [0, "desc"]
                ],
                columnDefs: [{
                    targets: [2],
                    visible: true,
                    searchable: true,
                }, ],
                dom: 'Bfrtip',
                buttons: [

                    'csvHtml5',

                    {
                        extend: 'print',
                        text: 'Imprimir',
                        autoPrint: true,

                        customize: function(win) {
                            $(win.document.body).css('font-size', '40pt');
                            $(win.document.body).find('table')
                                .addClass('compact')
                                .css(['font-size', 'inherit'], [
                                    'border', '1px solid #000'
                                ]);

                        }
                    },
                    {
                        extend: 'pdfHtml5',
                        text: 'PDF',
                        filename: 'ajuste.pdf',

                        title: 'Ajuste {{ $ajuste->id }}',
                        pageSize: 'LETTER', 


                    }





                ],
                language: {
                    url: "//cdn.datatables.net/plug-ins/1.10.16/i18n/Spanish.json",
                },
            });
        });
    </script>
@endsection
