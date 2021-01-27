@extends('layout')

@section('title')
    Contacto
@endsection

@section('content')
<div class="container m-5 p-5">
    <div class="row">
        <div class="col text-center">

            <h1>Contáctanos</h1>

        </div>
    </div>
</div>

<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="row">
				<div class="col-md-8">

                    <div class="row d-flex justify-content-center">
                        @if (session('mensajeEnviado'))
                          <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <strong>{{ session('mensajeEnviado') }}</strong>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          @endif
                      </div>

                    <form action="{{url('info-store-contac')}}" method="POST">
                        @csrf
                        <div class="form-group">
                          <label for="exampleInputEmail1">Email</label>
                            <input name="name" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                        </div>
                        <div class="form-group">
                            <label for="validationTextarea">Mensaje</label>
                            <textarea name="correo" class="form-control" placeholder="Required example textarea" required></textarea>
                        </div>

                        <!-- oculto -->
                        <input name="precio" type="hidden" value="">
                        <input name="producto" type="hidden" value="">
                        <input name="telefono" type="hidden" value="">
                        <input name="direccion" type="hidden" value="">
                        <input name="cp" type="hidden" value="">
                        <input name="ciudad" type="hidden" value="">
                        <input name="provincia" type="hidden" value="">
                        
                        <button type="submit" class="btn btn-primary">Enviar</button>
                      </form>
				</div>
				<div class="col-md-4">
                    <p>
						Lorem ipsum dolor sit amet, <strong>consectetur adipiscing elit</strong>. Aliquam eget sapien sapien. Curabitur in metus urna. In hac habitasse platea dictumst. Phasellus eu sem sapien, sed vestibulum velit. Nam purus nibh, lacinia non faucibus et, pharetra in dolor. Sed iaculis posuere diam ut cursus. <em>Morbi commodo sodales nisi id sodales. Proin consectetur, nisi id commodo imperdiet, metus nunc consequat lectus, id bibendum diam velit et dui.</em> Proin massa magna, vulputate nec bibendum nec, posuere nec lacus. <small>Aliquam mi erat, aliquam vel luctus eu, pharetra quis elit. Nulla euismod ultrices massa, et feugiat ipsum consequat eu.</small>
					</p>
				</div>
			</div>
		</div>
	</div>
</div>


@endsection


@section('javascripts')

<!--  <script src=" url('js/ajax.js') "></script> -->

  <script>

  /**/


  </script>

    
@endsection