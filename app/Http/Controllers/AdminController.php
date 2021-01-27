<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function ver()
    {
        $productos = Producto::all();
        return view('admin.home', ['produc' => $productos]);
    }

    public function vistaCrear()
    {
        
        return view('admin.crear');//dentro del view va el blade
    }

    public function nuevo(Request $request)
    {
        //$request->validate(['file' => 'required|image|max:2048']);
        //dd($request->all());
        $newProducto = new Producto();

        $newProducto->name = $request->name;
        $newProducto->description = $request->description;
        $newProducto->category = $request->category;
        $newProducto->price = $request->price;

        $newProducto->img = Storage::url($request->file('img')->store('public'));

        $newProducto->save();
        
        //return view('welcome');
        //return back();
        return redirect('/admin');
    }

    public function eliminar($eliminar)
    {
        $url = Producto::where('id', $eliminar)->first();
        $img = str_replace('storage', 'public', $url->img);
        Storage::delete($img);

        $eliminarProducto = Producto::find($eliminar);

        $eliminarProducto->delete();


        return back();//vuelve a la pagina anterior
        
    }

    public function editar($id)
    {
        $editar = Producto::find($id); //find = id
        
        return view('admin.edit', compact('editar')); //compact trae los datos de la DB a el 
    }

    public function actualizar(Request $request, $id){

        $nombre = $request->input('name');
        $descripcion = $request->input('description');
        $categoria = $request->input('category');
        $precio = $request->input('price');
        $imagen = $request->input('img');

        $producto = Producto::find($id);

        $producto->name = $nombre;
        $producto->description = $descripcion;
        $producto->category = $categoria;
        $producto->price = $precio;
        $producto->img = $imagen;

        $producto->save();

        return redirect('/admin');

    }
}
