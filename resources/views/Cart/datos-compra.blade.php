@extends('layout')
@section('title')
    Formulario de envio
@endsection

<div class="container"><br><br><br>
    <h1 class="text-center">Llena tus datos para realizar el envio</h1>
    <div class="row d-flex justify-content-center">

        <div class="card" style="width: 18rem;">
          <ul class="list-group list-group-flush">
            <li class="list-group-item">${{$produc->price}}</li>
            <li class="list-group-item">{{$produc->name}}</li>
            <li class="list-group-item">{{$produc->category}}</li>
          </ul>
          <div class="card-footer">
            <img src="{{asset("$produc->img")}}" class="card-img" alt="...">
          </div>
          
        </div>
      
        <div class="card border-0">
            <div class="card-body">
                <form action="{{url('info-store')}}/{{$produc->id}}" method="POST" class="needs-validation" novalidate>
                  @csrf

                    <input name="producto" type="hidden" value="{{$produc->name}}">
                    <input name="precio" type="hidden" value="{{$produc->price}}">

                    <div class="form-row">                        
                        <div class="col">
                          <label for="inputNombre">Nombre</label>
                          <input name="name" type="text" class="form-control" id="inputNombre" placeholder="Nombre" required>
                          <div class="valid-feedback">Completado!</div>
                          <div class="invalid-feedback">Completar campo!</div>
                        </div>
                        <div class="col">
                          <label for="inputApellido">Apellido</label>
                          <input type="text" class="form-control" id="inputApellido" placeholder="Apellido" required>
                          <div class="valid-feedback">Completado!</div>
                          <div class="invalid-feedback">Completar campo!</div>
                        </div>
                    </div>
                    <div class="form-row">
                      <div class="form-group col-md-6">
                        <label for="inputEmail4">Email</label>
                        <input name="correo" type="email" class="form-control" id="inputEmail4" placeholder="Email" required>
                        <div class="valid-feedback">Completado!</div>
                          <div class="invalid-feedback">Completar campo!</div>
                      </div>
                      <div class="form-group col-md-6">
                        <label for="inputPassword4">Telefono/Cel (Opcional)</label>
                        <input name="telefono" type="text" class="form-control" id="inputPassword4" placeholder="Tel">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputAddress">Dirección</label>
                      <input name="direccion" type="text" class="form-control" id="inputAddress" placeholder="Calle 1234 Dirección 6576" required>
                      <div class="valid-feedback">Completado!</div>
                          <div class="invalid-feedback">Completar campo!</div>
                    </div>
                    <div class="form-row">
                      <div class="form-group col-md-4">
                        <label for="inputCity">Ciudad</label>
                        <input name="ciudad" type="text" class="form-control" id="inputCity" placeholder="Ciudad" required>
                        <div class="valid-feedback">Completado!</div>
                          <div class="invalid-feedback">Completar campo!</div>
                      </div>
                      <div class="form-group col-md-4">
                        <label for="inputState">Província</label>
                        <select name="provincia" id="inputState" class="form-control">
                          <option selected>Selecciona...</option>
                          <option>Buenos Aires</option>
                          <option>Catamarca</option>
                          <option>Chaco</option>
                          <option>Chubut</option>
                          <option>Córdoba</option>
                          <option>Corrientes</option>
                          <option>Entre Ríos</option>
                          <option>Formosa</option>
                          <option>Jujuy</option>
                          <option>La Pampa</option>
                          <option>La Rioja</option>
                          <option>Mendoza</option>
                          <option>Misiones</option>
                          <option>Neuquén</option>
                          <option>Río Negro</option>
                          <option>Salta</option>
                          <option>San Juan</option>
                          <option>San Luis</option>
                          <option>Santa Cruz</option>
                          <option>Santa Fe</option>
                          <option>Santiago del Estero</option>
                          <option>Tierra del Fuego</option>
                          <option>Tucumán</option>
                        </select>
                        <div class="valid-feedback">Completado!</div>
                          <div class="invalid-feedback">Completar campo!</div>
                      </div>
                      <div class="form-group col-md-4">
                        <label for="inputZip">Código Postal</label>
                        <input name="cp" type="text" class="form-control" id="inputZip" required>
                        <div class="valid-feedback">Completado!</div>
                          <div class="invalid-feedback">Completar campo!</div>
                      </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Enviar</button>
                  </form>
            </div>
          </div>
      

    </div>
</div>

@section('javascripts')

<script>
  // Example starter JavaScript for disabling form submissions if there are invalid fields
  (function() {
    'use strict';
    window.addEventListener('load', function() {
      // Fetch all the forms we want to apply custom Bootstrap validation styles to
      var forms = document.getElementsByClassName('needs-validation');
      // Loop over them and prevent submission
      var validation = Array.prototype.filter.call(forms, function(form) {
        form.addEventListener('submit', function(event) {
          if (form.checkValidity() === false) {
            event.preventDefault();
            event.stopPropagation();
          }
          form.classList.add('was-validated');
        }, false);
      });
    }, false);
  })();
  </script>
    
@endsection