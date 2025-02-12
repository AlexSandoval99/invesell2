@extends('layouts.AdminLTE.index')
@section('title', 'Crear Recepcion')
@section('content')
    <div class="card">
        <div class="card-body">
                    <form role="form" action="{{ route('recepciones.addarticulo') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="form-group col-md-4" >
                                <label>Articulo</label>
                                <div class="row">
                                    <div class="form-group col-md-11">
                                            <select id="articulo" autofocus name="articulo" class="form-control select2">
                                                <option value="">Buscar artículo</option>
                                                <?php
                                                foreach ($articulos as $t) {
                                                    echo '<option value="' .
                                                        $t['id'] .
                                                        '">' .
                                                        $t['cod_barras'] .
                                                        ' - ' .
                                                        $t['cod_interno'] .
                                                        ' - ' .
                                                        $t['descripcion'] .
                                                        '</option>';
                                                }
                                                ?>
                                            </select>
                                        </div>
                                        <div class="form-group col-md-1" style="margin-left: -30px;">
                                            <a type="button" class="btn btn-success" href="{{ route('articulos.create') }}">
                                                <i class="fa fa-plus"></i>
                                            </a>
                                        </div>
                                </div>
                            </div>                        
                            <div class="form-group col-md-4" >
                                <label>Precio unitario</label>
                                <input name="costo_neto" id="costo_neto" min="1" class="form-control" required
                                    type="text" oninput="ActualizaValorCostoTotal()">
                            </div>
                            <div class="form-group col-md-4" >
                                <label>I.V.A.</label>
                                <input name="costo_imp" id="costo_imp" readonly required type="number"
                                    class="form-control">
                            </div>
                        </div>


                        <div class="row">
                            <div class="form-group col-md-4">
                                <label>Total unitario</label>
                                <input name="costo_total" id="costo_total" min="1" required type="text"
                                    oninput="ActualizaValorCostoNeto()" class="form-control">
                            </div>
                            <div class="form-group col-md-4">
                                <label>Unidades</label>
                                <input name="unidades" required min="1" type="number" class="form-control">
                            </div>
                        </div>


                        
                        <div class="btn-group">
                    </form>
                        <button type="submit" class="btn btn-primary pull-left">Agregar articulo</button>
                        @if (session('recepcion'))
                            <button type="button" class="btn btn-warning pull-right"  style="margin-left: 15px" data-toggle="modal" data-target="#modal-default">
                                Finalizar recepcion
                            </button>
                        @endif
                        <br><br>
                        @if (session('recepcion'))
                            @php
                                $total_unidades = 0;
                                $total_costo_neto = 0;
                                $total_costo_imp = 0;
                                $total_costo_total = 0;
                                
                                foreach (session('recepcion') as $r) {
                                    $total_unidades += $r->cantidad;
                                    $total_costo_neto += $r->precio_unitario * $r->cantidad;
                                    $total_costo_imp += $r->impuesto_unitario * $r->cantidad;
                                    $total_costo_total += ($r->precio_unitario + $r->impuesto_unitario) * $r->cantidad;
                                }
                            @endphp
                        @endif
        </div>
                @if (session('recepcion'))     
                    <div class="modal fade" id="modal-default">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title">Finalizar recepcion</h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span></button>
                                </div>
                                <div class="modal-body">
                                    <form role="form" action="{{ route('recepciones.store') }}" method="POST">
                                        @csrf
                                        <div class="form-group">
                                            <label>Tipo documento</label>
                                            <select id="tipo_documento" name="tipo_documento" class="form-control select2">
                                                @foreach ($tipo_documento as $t)
                                                    <option value="{{ $t->id }}">{{ $t->tipo_documento }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Numero documento</label>
                                            <input id="numero_documento" name="numero_documento" required type="number"
                                                class="form-control input-sm">
                                        </div>

                                        <div class="form-group">
                                            <label>Proveedor</label>
                                            <select id="proveedor" name="proveedor" required class="form-control select2">
                                                <option value="">Seleccionar</option>
                                                @foreach ($proveedores as $p)
                                                    <option value="{{ $p->id }}">{{ $p->razon_social }}
                                                        ({{ $p->rut }})
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Observaciones</label>
                                            <input id="observaciones" required name="observaciones" type="text"
                                                class="form-control input-sm" value="">
                                        </div>
                                        <div class="form-group">
                                            <label>Monto total</label>
                                            <input id="monto_total" name="monto_total" disabled type="text"
                                                class="form-control input-sm"
                                                value="{{ number_format($total_costo_total, 0, ',', '.') }}">
                                            <input id="monto_neto" name="monto_neto" type="hidden"
                                                class="form-control input-sm" value="{{ $total_costo_neto }}">
                                            <input id="monto_imp" name="monto_imp" type="hidden"
                                                class="form-control input-sm" value=" {{ $total_costo_imp }}">
                                        </div>

                                        <div class="form-group">
                                            <label>Total articulos</label>
                                            <input id="total_articulos" name="total_articulos" readonly type="text"
                                                class="form-control input-sm"
                                                value="{{ number_format($total_unidades, 0, ',', '.') }}">
                                        </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default pull-left"
                                        data-dismiss="modal">Cancelar</button>
                                    <button type="submit" class="btn btn-primary">Agregar recepcion</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
    </div>
            @if (session('recepcion'))
                <div class="col-md-6">



                    <ol>
                        <li><Strong>Total unidades: </Strong>{{ number_format($total_unidades, 0, ',', '.') }}</li>
                        <li><Strong>Total costo neto: </Strong>Gs {{ number_format($total_costo_neto, 0, ',', '.') }}</li>
                        <li><Strong>Total costo impuesto: </Strong>Gs {{ number_format($total_costo_imp, 0, ',', '.') }}
                        </li>
                        <li><Strong>Total costo total: </Strong>Gs {{ number_format($total_costo_total, 0, ',', '.') }}
                        </li>
                    </ol>

                    <br>

                </div>
            @endif
        </div>
    </div>

    <br>

    <!-- Fin contenido -->


    <!-- /.card-body -->
    <!-- /.card-footer-->
    </div>
    @if (session('recepcion'))
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">
                    Detalle recepcion </h3>
            </div>
            <div class="card-body">

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
                        @foreach (session('recepcion') as $r)
                            <tr>
                                <th>{{ $r->articulo->id }}</th>
                                <td>{{ $r->articulo->descripcion }}</td>
                                <td>{{ number_format($r->cantidad, 0, ',', '.') }}</td>
                                <td>Gs {{ number_format($r->precio_unitario, 0, ',', '.') }}</td>
                                <td>Gs {{ number_format($r->impuesto_unitario, 0, ',', '.') }}</td>
                                <td>Gs {{ number_format(($r->precio_unitario + $r->impuesto_unitario) * $r->cantidad, 0, ',', '.') }}
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <br />
            </div>
    @endif
@stop

@section('layout_js')
    <script>
        function ActualizaValorCostoTotal() {
            let valor = document.getElementById("costo_neto").value;
            document.getElementById("costo_total").value = Math.round(valor * 1.1);
            document.getElementById("costo_imp").value = Math.round((valor * 1.1) - valor);

        }

        function ActualizaValorCostoNeto() {
            let valor = document.getElementById("costo_total").value;
            document.getElementById("costo_neto").value = Math.round(valor / 1.1);
            document.getElementById("costo_imp").value = Math.round(valor - (valor / 1.1));

        }
        $(document).ready(function() {
            $("#example").DataTable({
                order: [
                    [0, "desc"]
                ],

                language: {
                    url: "//cdn.datatables.net/plug-ins/1.10.16/i18n/Spanish.json",
                },
            });
        });
    </script>
@endsection
