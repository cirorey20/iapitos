@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">

                <form action="{{route('nuevo')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                        <div class="card-body">
                            <label for="">Nombre</label>
                            <input type="text" name="name" class="form-control" required>
                            
                            
                            <label for="">Descripción</label>
                            <input type="text" name="description" class="form-control" required>

                            <label for="">Categoria</label>
                            <input type="text" name="category" class="form-control" required>

                            <label for="">Precio</label>
                            <input type="text" name="price" class="form-control" placeholder="sin puntos ni comas" required>

                            <input type="file" name="img" class="mt-2" accept="image/*" required>
                            <br>
                            @error('file')
                                <small class="text-danger">{{$message}}</small>
                            @enderror
                            <br><br>

                            <button type="submit" class="btn btn-primary form-control">Guardar</button>
                            
                        </div>
                        <!-- -->
                        
                </form>   

            </div>
        </div>
    </div>
</div>
@endsection