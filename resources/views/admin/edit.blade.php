@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-sm">

        <form method="get" action="{{ url ('/producto/actualizado')}}/{{$editar->id}}">
                <div class="form-row">
                    <label for="">Nombre</label>
                    <input type="text" name="name" class="form-control" required value="{{ $editar->name }}">
                    
                    
                    <label for="">Descripción</label>
                    <input type="text" name="description" class="form-control" required value="{{ $editar->description }}">

                    <label for="">Categoria</label>
                    <input type="text" name="category" class="form-control" required value="{{ $editar->category }}">

                    <label for="">Precio</label>
                    <input type="text" name="price" class="form-control" placeholder="sin puntos ni comas" required value="{{ $editar->price }}">

                    <input type="file" name="img" class="mt-2" accept="image/*" required value="{{ asset("$editar->img") }}">
                    <br>
                    @error('file')
                        <small class="text-danger">{{$message}}</small>
                    @enderror
                    <br><br>

                    <button type="submit" class="btn btn-primary form-control">Guardar</button>
                </div>
        </form>
            
        </div>
    </div>
</div>

@endsection
