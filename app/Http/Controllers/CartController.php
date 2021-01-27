<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Cart;
use App\Models\Producto;

class CartController extends Controller
{
    
    public function ver(){
        
        return view('Cart.ver');

    }

    public function add(Request $request)
    {
        $producto = Producto::find($request->producto_id);
            Cart::add(
                $producto->id,
                $producto->name,
                $producto->price,
                1,
                //array("urlfoto"=>$producto->urlfoto)
            );
            return redirect('/')->with('status', "$producto->name se agregó al carrito");
                //back->se queda en la pag
    }

    public function updateMenos($id){
        //elimina una cantidad del producto si es que hay mas de uno
        Cart::update($id, array(
            
            'quantity' => -1, 
        ));
        return back();
    }

    public function updateMas($id){
        //elimina una cantidad del producto si es que hay mas de uno
        Cart::update($id, array(
            
            'quantity' => 1, 
        ));
        return back();
    }

    
    public function delete($id){
        //$producto = Producto::where('id', $request->id)-firstOrFail();
        Cart::remove($id);
        return back()->with('success', "producto eliminado del carrito");
    }


   

    
}

