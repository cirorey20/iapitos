@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center">
                    <a class="btn btn-primary" href="{{route('crear')}}" role="button">Nuevo Producto</a>
                </div>
            </div>
        </div>

        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center">
                    
                    
                        <table class="table table-bordered table-striped">
                            <thead>
                            @foreach ($produc as $item)    
                                <tr>
                                    <th>ID</th>
                                    <th>Nombre</th>
                                    <th>Descripcion</th>
                                    <th>Categoria</th>
                                    <th>Precio</th>
                                    <th>Eliminar</th>
                                    <th>Editar</th>
                                </tr>
                            </thead>
                            <tbody>
                                
                                    <tr>
                                        <td>{{ $item->id }}</td>
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->description }}</td>
                                        <td>{{ $item->category }}</td>
                                        <td>${{ $item->price }}</td>
                                        <td>                                        
                                            <a href="{{ url('/producto/eliminar/') }}/{{ $item->id }}" class="btn btn-sm btn-outline-danger" > Eliminar </a>                                        
                                        </td>
                                        <td>                                        
                                            <a href="{{ url('/producto/editar/') }}/{{ $item->id }}" class="btn btn-outline-success" > Editar </a>                                       
                                        </td>
                                    </tr>
                            @endforeach        
                                
                            </tbody>
                        </table>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
