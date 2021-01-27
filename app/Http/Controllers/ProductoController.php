<?php

namespace App\Http\Controllers;
use App\Models\Producto;
use Illuminate\Http\Request;
use App\Mail\ContactanosMailable;
use Illuminate\Support\Facades\Mail;

class ProductoController extends Controller
{
    //VISTAS PRINCIPALES
    public function get(){
        $productos = Producto::all();
        return view('welcome', ['produc' => $productos]);
    }

    public function compraIapitos(){

        return view('como-compro');
    }

    public function quienSomos(){

        return view('quien-somos');
    }

    public function contacto(){

        return view('contacto');
    }

    public function storeContac(Request $request){//Recoge los datos que se llenaron en el formulario de contacto

        $correo = new ContactanosMailable($request->all());//seleciona todos los campos
        Mail::to('desarrollonov@gmail.com')->send($correo);//Los envia al correo del administrador de la página

        

        return back()->with('mensajeEnviado', "Tu mensaje fue enviado con exito");
        //return redirect('/')");
        

    }

















    public function verCompra(){
        
        return view('Cart.compra');

    }

    public function compra($id)
    {

        $producto = Producto::find($id);
        //$producto = json_encode($producto);
        $producto = json_decode($producto);
        //$producto = print_r($producto);
        //dd($producto->name);
        //$producto->name;
        return view('Cart.compra', ['produc' => $producto]);
                //back->se queda en la pag
    }

    public function datCompra($id){//formulario para un solo producto
        $producto = Producto::find($id);
        return view('Cart.datos-compra', ['produc' => $producto]);
    }

    public function datCompraCart(Request $request){//formulario para muchos producos del carrito

        $productos = $request->all();
        //$total = json_decode($productos);
        //dd($productos);
        return view('Cart.datos-compra-cart');

    }

    public function store(Request $request, $id){//Recoge los datos que se llenaron en el formulario de contacto

        $correo = new ContactanosMailable($request->all());//seleciona todos los campos
        Mail::to('desarrollonov@gmail.com')->send($correo);//Los envia al correo del administrador de la página

        $producto = Producto::find($id);

        return view('Cart.realizar-compra', ['produc' => $producto]);

    }

    public function store2(Request $request){//Recoge los datos que se llenaron en el formulario de contacto

        $correo = new ContactanosMailable($request->all());//seleciona todos los campos
        Mail::to('desarrollonov@gmail.com')->send($correo);//Los envia al correo del administrador de la página


        return view('Cart.realizar-compra-cart');

    }

}
