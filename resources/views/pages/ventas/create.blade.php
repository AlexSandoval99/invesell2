@extends('layouts.AdminLTE.index')
@section('title', 'Crear Ventas')
@section('content')
    <div class="card">
        <div class="card-body">
            <div class="row">
                    <form role="form" action="{{ route('ventas.addarticulo') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="form-group col-md-4" >
                                <label>Articulo</label>
                                <select id="articulo" autofocus name="articulo" onchange="ActualizaPrecioVenta()" required
                                    class="form-control select2">
                                    <option value="">Buscar articulo</option>
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
                                            '</option>                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    ';
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="form-group col-md-4" >
                                <label>Neto unitario</label>
                                <input name="venta_neto" id="venta_neto" min="1" class="form-control" required
                                    type="number" oninput="ActualizaValorCostoTotal()">
                            </div>
                            <div class="form-group col-md-4" >
                                <label>I.V.A.</label>
                                <input name="venta_imp" id="venta_imp" readonly required type="number"
                                    class="form-control">
                            </div>
                        </div>



                        <div class="row">
                            <div class="form-group col-md-4" >
                                <label>Total unitario</label>
                                <input name="venta_total" id="venta_total" min="1" required type="number"
                                    oninput="ActualizaValorCostoNeto()" class="form-control">
                            </div>
                            <div class="form-group col-md-4" >
                                <label>Unidades</label>
                                <input name="unidades" id="unidades"  type="number"
                                    class="form-control">
                            </div>
                        </div>
                        {{-- <div class="form-goup row">
                            <div class="form-group col-6">
                                <label>Costo total</label>
                                <input name="costo_total" id="costo_total" min="1" required type="number" readonly
                                    class="form-control">
                            </div>
                            <div class="col-6">
                                <label>Ganancia</label>
                                <input name="ganancia" id="ganancia" readonly required type="number" class="form-control">
                                <input id="costo_imp" name="costo_imp" type="hidden" class="form-control input-sm"
                                    value=" ">

                                <input id="costo_neto" name="costo_neto" type="hidden" class="form-control input-sm"
                                    value="">

                            </div>
                        </div> --}}
                        <br>
                        <button type="submit" class="btn btn-primary pull-left">Agregar articulo</button>
                        @if (session('venta'))
                            <div class="btn-group float-right">
                                <button type="button" class="btn btn-warning pull-right" style="margin-left: 15px" data-toggle="modal"
                                    data-target="#modal-default">
                                    Finalizar venta
                                </button>
                            </div>
                        @endif

                    </form>




                    @if (session('venta'))
                        @php
                            $total_unidades = 0;
                            $total_venta_neto = 0;
                            $total_venta_imp = 0;
                            $total_venta_total = 0;
                            $ganancia_total = 0;
                            $costo_neto = 0;
                            $costo_imp = 0;
                            
                            foreach (session('venta') as $r) {
                                $total_unidades += $r->cantidad;
                                $total_venta_neto += $r->precio_unitario * $r->cantidad;
                                $total_venta_imp += $r->impuesto_unitario * $r->cantidad;
                                $total_venta_total += ($r->precio_unitario + $r->impuesto_unitario) * $r->cantidad;
                                $ganancia_total += $r->ganancia * $r->cantidad;
                                $costo_neto += $r->articulo->costo_neto * $r->cantidad;
                                $costo_imp += $r->articulo->costo_imp * $r->cantidad;
                            }
                        @endphp
                        <div class="modal fade" id="modal-default">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title">Finalizar venta</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span></button>
                                    </div>
                                    <div class="modal-body">
                                        <form role="form" action="{{ route('ventas.store') }}" method="POST">
                                            @csrf
                                            <div class="form-group">
                                                <label>Medio de pago</label>
                                                <select id="medio_de_pago" required name="medio_de_pago"
                                                    class="form-control select2">
                                                    @foreach ($medios_pago as $t)
                                                        <option value="{{ $t->id }}">{{ $t->medio_de_pago }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label>Tipo documento</label>
                                                <select id="tipo_documento" name="tipo_documento"
                                                    class="form-control select2" required onchange="nextEmitido()">
                                                    @foreach ($tipo_documento as $t)
                                                        <option value="{{ $t->id }}">{{ $t->tipo_documento }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label>Numero documento</label>
                                                <select  name="cliente" id="client_id" class="form-control" style="width: 100%" ></select>
                                            </div>
                                            <input id="document" name="numero_documento" type="hidden">

                                            {{-- <div class="form-group">
                                                <label>Cliente</label>
                                                <select id="cliente" name="cliente" required
                                                    class="form-control select2">
                                                    <option value="">Seleccionar</option>
                                                    @foreach ($clientes as $p)
                                                        <option value="{{ $p->id }}">{{ $p->nombre }}
                                                            ({{ $p->rut }})
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div> --}}
                                            <div class="form-group">
                                                <label>Monto total</label>
                                                <input id="monto_total" name="monto_total" disabled type="text"
                                                    class="form-control input-sm"
                                                    value="Gs {{ number_format($total_venta_total, 0, ',', '.') }}">
                                                <input id="monto_neto" name="monto_neto" type="hidden"
                                                    class="form-control input-sm" value="{{ $total_venta_neto }}">
                                                <input id="monto_imp" name="monto_imp" type="hidden"
                                                    class="form-control input-sm" value="{{ $total_venta_imp }}">
                                                <input id="costo_neto" name="costo_neto" type="hidden"
                                                    class="form-control input-sm" value=" {{ $costo_neto }}">
                                                <input id="costo_imp" name="costo_imp" type="hidden"
                                                    class="form-control input-sm" value=" {{ $costo_imp }}">



                                            </div>

                                            <div class="form-group">
                                                <label>Total articulos</label>
                                                <input id="total_articulos" name="total_articulos" readonly
                                                    type="text" class="form-control input-sm"
                                                    value="{{ number_format($total_unidades, 0, ',', '.') }}">
                                            </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default pull-left"
                                            data-dismiss="modal">Cancelar</button>
                                        <button type="submit" class="btn btn-primary">Agregar venta</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif



                </div>
                @if (session('venta'))
                    <div class="col-md-6">
                        <ol>
                            <li><Strong>Total unidades: </Strong>{{ number_format($total_unidades, 0, ',', '.') }}</li>
                            <li><Strong>Total venta neto: </Strong>Gs {{ number_format($total_venta_neto, 0, ',', '.') }}
                            </li>
                            <li><Strong>Total venta impuesto: </Strong>Gs {{ number_format($total_venta_imp, 0, ',', '.') }}
                            </li>
                            <li><Strong>Total venta: </Strong>Gs {{ number_format($total_venta_total, 0, ',', '.') }}
                            </li>
                            <li><Strong>Total ganancia: </Strong>Gs {{ number_format($ganancia_total, 0, ',', '.') }}
                            </li>
                        </ol>

                    </div>
                @endif
            </div>
        </div>
    </div>
    @if (session('venta'))
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Detalle venta </h3>
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
                            <td>Ganancia</td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach (session('venta') as $r)
                            <tr>
                                <th>{{ $r->articulo->id }}</th>
                                <td>{{ $r->articulo->descripcion }}</td>
                                <td>{{ number_format($r->cantidad, 0, ',', '.') }}</td>
                                <td>Gs {{ number_format($r->precio_unitario, 0, ',', '.') }}</td>
                                <td>Gs {{ number_format($r->impuesto_unitario, 0, ',', '.') }}</td>
                                <td>Gs {{ number_format(($r->precio_unitario + $r->impuesto_unitario) * $r->cantidad, 0, ',', '.') }}
                                </td>
                                <td>Gs {{ number_format($r->ganancia * $r->cantidad, 0, ',', '.') }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <br />
            </div>
    @endif
@endsection

@section('layout_js')
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>
    <script src="{{ asset('js/select2/es-4.0.5.min.js') }}"></script>

    <script>
        function ActualizaValorCostoTotal() {
            let valor = document.getElementById("venta_neto").value;
            document.getElementById("venta_total").value = Math.round(valor * 1.19);
            document.getElementById("venta_imp").value = Math.round((valor * 1.19) - valor);
            document.getElementById("ganancia").value = Math.round((valor * 1.19) - document.getElementById("costo_total")
                .value);

        }

        function ActualizaPrecioVenta() {
            let articulosAdd = [];

            @foreach ($articulos as $a)

                articulosAdd.push({
                    id: {{ $a->id }},
                    venta_neto: {{ $a->venta_neto }},
                    venta_imp: {{ $a->venta_imp }},
                    costo_total: {{ $a->costo_neto + $a->costo_imp }},
                    costo_imp: {{ $a->costo_imp }},
                    costo_neto: {{ $a->costo_neto }},
                    stock: {{ $a->stock }}
                });
            @endforeach
            console.table(articulosAdd);
            let id = document.getElementById("articulo").value;
            let venta_neto = articulosAdd.find(a => a.id == id).venta_neto;
            let venta_imp = articulosAdd.find(a => a.id == id).venta_imp;
            document.getElementById("venta_neto").value = Math.round(venta_neto);
            document.getElementById("venta_total").value = Math.round(venta_neto + venta_imp);
            document.getElementById("venta_imp").value = Math.round(venta_imp);
            document.getElementById("costo_total").value = Math.round(articulosAdd.find(a => a.id == id).costo_total);
            document.getElementById("ganancia").value = Math.round((venta_neto + venta_imp) - articulosAdd.find(a => a.id ==
                    id)
                .costo_total);
            document.getElementById("unidades").max = articulosAdd.find(a => a.id == id).stock;


        }

        function ActualizaValorCostoNeto() {
            let valor = document.getElementById("venta_total").value;
            document.getElementById("venta_neto").value = Math.round(valor / 1.19);
            document.getElementById("venta_imp").value = Math.round(valor - (valor / 1.19));
            document.getElementById("ganancia").value = Math.round(valor - document.getElementById("costo_total")
                .value);

        }

        function nextEmitido() {

            let nextEmitido = [];

            @foreach ($tipo_documento as $a)

                nextEmitido.push({
                    id: {{ $a->id }},
                    nextEmitido: {{ $a->ultima_emision + 1 }}
                });
            @endforeach
            console.table(nextEmitido);
            let id = document.getElementById("tipo_documento").value;
            console.log(id);

            if (id) {
                document.getElementById("numero_documento").value = nextEmitido.find(a => a.id == id).nextEmitido;
            } else {
                document.getElementById("numero_documento").value = "";
            }




        }

        
        
        $("#client_id").select2({
                language: 'es',
                minimumInputLength: 2,
                ajax: {
                    url: '{{ url('ajax/clients') }}',
                    dataType: 'json',
                    // cache: true,
                    method: 'GET',
                    delay: 250,
                    data: function (params) {
                        return {
                            q: params.term,
                        };
                    },
                    processResults: function (data, params) {
                        return {
                            results: data.items
                        };
                    }
                },
                escapeMarkup: function (markup) { return markup; },
                templateResult: function (repo) {
                    if (repo.loading) return repo.nombre;

                    var markup = repo.nombre + "<br>" + "<i class='fa fa-id-card'></i> " + repo.rut;

                    return markup;
                },
                templateSelection: function (repo) {
                    return repo.nombre;
                }
            }).on("select2:select", function (e) {
                var data_item = e.params.data;
                $('#document').val(data_item.rut);
            });
    </script>
@endsection
