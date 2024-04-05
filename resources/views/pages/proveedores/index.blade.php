@extends('layouts.AdminLTE.index')
@section('title', 'Proveedor')
@section('content')
<div class="ibox-title">
    <div class="ibox-tools text-right">
        <a href="{{{route('proveedores.create')}}}" class="btn btn-primary btn-xs"><i class="fa fa-plus"></i> Agregar</a>
    </div>
</div>
    <div class="card">
        <div class="card-body">
            <table id="example"  class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <td>ID</td>
                        <td>Nombre</td>
                        <td>RUC</td>
                        <td>Telefono</td>
                        <td>Ciudad</td>
                        <td>Editar</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($proveedores as $u)
                    <tr>
                            <td>{{$u->id}}</td>
                            <td>{{$u->nombre_fantasia}}</td>
                            <td>{{$u->rut}}</td>
                            <td>{{$u->telefono}}</td>
                            <td>{{$u->comuna['comuna']}}</td>
                            
                            <td><div class="btn-group">
                                <a type="button" class="btn btn-success" href="{{route('proveedores.editar', $u->id)}}">Datos</a>
                                
                            </div></td>
                        </tr>
                    
                    @endforeach
                </tbody>
            </table>
            <br>
            </div>
    </div>
@endsection

