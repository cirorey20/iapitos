@extends('layout')

@section('title')
    Compra
@endsection

@section('content')

<div class="container m-5 p-5">
    <div class="row">
        <div class="col text-center">

            <h1>Producto a comprar</h1>

        </div>
    </div>
</div>

<div class="container">
    <div class="row d-flex justify-content-center">
        
        
            
            
            <div class="col">
                <img src="{{asset("$produc->img")}}" class="img-thumbnail border-0" alt="...">
            </div>
            <div class="col">
                <div class="card border-0" style="width: 18rem;">
                    <div class="card-body ">
                      <h5 class="card-title">{{$produc->name}}</h5>
                      <h6 class="card-subtitle mb-2 text-muted">${{ $produc->price }}</h6>
                      <p class="card-text">{{ $produc->description }}</p>
                      <form action="{{url('compra-datos')}}/{{$produc->id}}" method="POST">
                        @csrf
                        <input type="submit" name="btn" class="btn btn-primary" value="Ir a la Compra">

                      </form>
                    </div>
                </div>
            </div>

            
        
            
    </div> 
</div>       

@endsection

@section('footer')
    
@endsection