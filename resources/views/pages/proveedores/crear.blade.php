@extends('layouts.AdminLTE.index')
@section('title', 'Crear Proveedor')
@section('content')
<div class="card">
  <div class="card-body">
      <form role="form" action="{{route('proveedores.store')}}" method="POST">
        @csrf
        <div class="row">
        <div class="form-group col-md-4">
          <label>RUC</label>
          <input oninput="checkRut(this)" name="rut" required type="text" class="form-control">
        </div>
        <div class="form-group col-md-4">
          <label>Nombre del Proveedor</label>
          <input name="nombre_fantasia" required type="text" class="form-control">
        </div>
        <div class="form-group col-md-4">
          <label>Razon social</label>
          <input name="razon_social" required type="text" class="form-control">
        </div>
        </div>
        <div class="row">
        <div class="form-group col-md-4">
          <label>Giro</label>
          <input name="giro"  type="text" class="form-control">
        </div>
        <div class="form-group col-md-4">
          <label>Direccion</label>
          <input name="direccion" required type="text" class="form-control">
        </div>

        <div class="form-group col-md-4">
          <label>Region</label>
          <select id="region" name="region" class="form-control">
            <option>Selecciona una region </option>
            @foreach ($regiones as $r)
          <option value="{{$r->id}}">{{$r->region}}</option>
           @endforeach
          </select>
        </div>
       </div>
       <div class="row">
        <div class="form-group col-md-4">
            <label>Comuna</label>
          <select id="comuna" name="comuna" class="form-control">
            <option>Selecciona una region </option>
           
          </select>
        </div>
        <div class="form-group col-md-4">
          <label>E-mail</label>
          <input name="email" required type="text" class="form-control">
        </div>
        <div class="form-group col-md-4">
          <label>Telefono</label>
          <input name="telefono" required type="number" class="form-control">
        </div>
        </div>
        <button type="button" class="btn btn-primary pull-left" data-toggle="modal" data-target="#modal">Crear
          proveedor</button>
        <div class="modal fade" id="modal">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">

                <h4 class="modal-title">Crear proveedor</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
              </div>
              <div class="modal-body">
                <p>Seguro que quiere guardar los cambios?&hellip;</p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Cancelar</button>
                <button type="submit" class="btn btn-primary">Guardar cambios</button>
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
      </form>
    <!-- Fin contenido -->
  </div>
</div>

@endsection
@section('layout_js')
<script>
    var csrfToken = '{{ csrf_token() }}';
  document.getElementById('region').addEventListener('change', (e) => {
    fetch('../GetComunasPorRegion', {
      method: 'POST',
      body: JSON.stringify({ region: e.target.value }),
      headers: {
        'Content-Type': 'application/json',
        "X-CSRF-Token": csrfToken
      }
    }).then(response => {
      return response.json()
    }).then(data => {
      var opciones = "<option value=''>Elegir</option>";
      for (let i in data.lista) {
        opciones += '<option value="' + data.lista[i].id + '">' + data.lista[i].comuna + '</option>';
      }
      document.getElementById("comuna").innerHTML = opciones;
    }).catch(error => console.error(error));
  })
</script>
<script>
  function checkRut(rut) {
    // Despejar Puntos
    var valor = rut.value.replace('.','');
    // Despejar Guión
    valor = valor.replace('-','');
    
    // Aislar Cuerpo y Dígito Verificador
    cuerpo = valor.slice(0,-1);
    dv = valor.slice(-1).toUpperCase();
    
    // Formatear RUN
    rut.value = cuerpo + '-'+ dv
    
    // Si no cumple con el mínimo ej. (n.nnn.nnn)
    if(cuerpo.length < 7) { rut.setCustomValidity("RUT Incompleto"); return false;}
    
    // Calcular Dígito Verificador
    suma = 0;
    multiplo = 2;
    
    // Para cada dígito del Cuerpo
    for(i=1;i<=cuerpo.length;i++) {
    
        // Obtener su Producto con el Múltiplo Correspondiente
        index = multiplo * valor.charAt(cuerpo.length - i);
        
        // Sumar al Contador General
        suma = suma + index;
        
        // Consolidar Múltiplo dentro del rango [2,7]
        if(multiplo < 7) { multiplo = multiplo + 1; } else { multiplo = 2; }
  
    }
    
    // Calcular Dígito Verificador en base al Módulo 11
    dvEsperado = 11 - (suma % 11);
    
    // Casos Especiales (0 y K)
    dv = (dv == 'K')?10:dv;
    dv = (dv == 0)?11:dv;
    
    // Validar que el Cuerpo coincide con su Dígito Verificador
    // if(dvEsperado != dv) { rut.setCustomValidity("RUT Inválido"); return false; }
    
    // Si todo sale bien, eliminar errores (decretar que es válido)
    rut.setCustomValidity('');
}
</script>
@endsection