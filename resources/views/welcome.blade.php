@extends('layout')

@section('title')
    Iapitos
@endsection

@section('content')
<div class="container m-3 p-3">
  <div class="row">
      <div class="col text-center">

      

      </div>
  </div>
</div>
<div class="text-center">
    <div class="p-5 mb-2 px-3" style="background-image: url(https://cdn.pixabay.com/photo/2015/07/31/15/02/knit-869221_960_720.jpg); background-repeat: no-repeat, repeat; background-size: cover; position: relative; background-position: center; z-index: 1;">
          
        <h1 class="text-white text-center invisible" style="font-size:50px;">IAPITOS <br>IAPITOS</h1>
          
      </div>
</div>
<div class="container">
  <div class="row d-flex justify-content-center">
    @if (session('status'))
      <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>{{ session('status') }}</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      @endif
  </div>

  <div class="row d-flex justify-content-center">
    @if (session('success'))
      <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>{{ session('success') }}</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      @endif
  </div>

</div>

<div class="container">
    <h1 style="font-family: 'Fraunces', serif;" class="text-center">IAPITOS</h1>
    <div class="row d-flex justify-content-center">

      <div class="row">
        @foreach ($produc as $item)
            
        
        <div class="col-lg-4 col-md-6 mb-4">
          <div class="card h-100">
            <a href="{{url('compra-add')}}/{{$item->id}}"><img class="card-img-top" src="{{asset("$item->img")}}" alt=""></a>
            <div class="card-body">
              <h4 class="card-title">
                <a href="{{url('compra-add')}}/{{$item->id}}">{{ $item->name }}</a>
              </h4>
              <h5>${{ $item->price }}</h5>
              <p class="card-text">{{ $item->description }}</p>
            </div>
            
            <div class="card-footer d-flex">
              <div class="m-1 p-1 ">
                <form action="{{route('cart.add')}}" method="GET"  id="add">
                  
                  <input type="hidden" name="producto_id" value="{{$item->id}}">
                  <input type="submit" class="btn btn-success" value="AñadirCarrito">
                </form>
              </div>
              
              <div class="m-1 p-1">
                <form action="{{url('compra-add')}}/{{$item->id}}" method="GET">
                
                  <input type="submit" id="cargar" name="btn" class="btn btn-success" value="Comprar">
                </form>
              </div>
              
            </div>
            <div class="card-footer">
              <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
            </div>
          </div>
        </div>
      @endforeach
      </div>
      <!-- /.row -->

    </div>
    <!-- /.col-lg-9 -->

  </div>
  <!-- /.row -->
      
<br>    
@endsection


@section('javascripts')

<!--  <script src=" url('js/ajax.js') "></script> -->

  <script>

  /**/


  </script>

    
@endsection