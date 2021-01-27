@extends('layout')

@section('title')
    Pagos
@endsection

<div class="container"><br><br><br><br><br>
    <h1 class="text-center">Tus datos fueron enviados correctamente. Muchas gracias :)</h1>
    <div class="row d-flex justify-content-center">
      
        <div class="card">
            <div class="card-body">
                <h2>En instantes recibiras un correo de un representante de iapitos</h2>
                <!--
                <form action="{!! URL::to('paypal') !!}" method="post">
                    @csrf
                    <h1 class="text-center">API Paypal</h1>
                    <h4 class="text-center">{{$produc->name}}</h4>
                    <td><input type="hidden" name="Item 1" value="{{ $produc->name }}"></td>
                    <td><input type="hidden" name="amount" value="{{ $produc->price }}"></td>
                    <td><input type="submit" name="paynow" value="Pay Now"></td>
                -->    
            </div>
          </div>
                </form>

    </div>
</div>