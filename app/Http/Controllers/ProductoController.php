<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\ProductoFormRequest;
use Illuminate\Support\Facades\DB;
use App\Models\Categoria;
use Illuminate\Support\Str;




class ProductoController extends Controller
{
    public function __construct()
{
}

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(request $request)
    {
        //
            $texto=trim($request->get('texto'));
            $productos=DB::table('producto as a')
                ->join('categoria as c','a.Categoria_ID','=','c.ID_Categoria')
                ->select('a.ID_Producto','a.Nombre','a.Codigo','a.Stock','c.Categoria','a.Descripcion','a.Estado','a.imagen')
                ->where('a.nombre','LIKE','%'.$texto.'%')
                ->orwhere('a.Codigo','LIKE','%'.$texto.'%')
                ->orderBy('a.ID_Producto','desc')
                ->paginate(10);
            return view('almacen.producto.index', compact("productos", "texto"));
        
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        // Obtener todas las categorías
    $categorias = DB::table('categoria')->where('Estatus', '=', '1')->get();
    return view("almacen.producto.create", ["categorias" => $categorias]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductoFormRequest $request)
    {
        //
        $producto = new Producto;
        $producto->Categoria_ID = $request->input('id_categoria');
        $producto -> Codigo = $request -> get('codigo');
        $producto -> Nombre = $request -> get('nombre');
        $producto -> Stock = $request -> get('stock');
        $producto -> Descripcion = $request -> get('descripcion');
        $producto -> Estado='1';
        // para subir una imagen
        if($request->hasFile("imagen")){
            $imagen = $request->file("imagen");
            $nombreimagen = Str::slug($request->nombre).".".$imagen->guessExtension();
            $ruta = public_path('imagenes/productos/');

            //copy($imagen->getRealPath(), $ruta.$nombreimagen);
            $imagen->move($ruta, $nombreimagen);
            $producto->imagen = $nombreimagen;
        }
        $producto -> save();
        return Redirect::to('almacen/producto')->with('success', 'Producto creado correctamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        return view("almacen.producto.show",["producto" => Producto::findorFail($id)]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        //return view("almacen.producto.edit",["producto" => Producto::findOrFail($id)]);
        

        $categorias = DB::table('categoria')->where('Estatus', '=', '1')->get();
        return view('almacen.producto.edit', ["producto" => Producto::findOrFail($id), "categorias" => $categorias]);
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProductoFormRequest $request, $id)
    {
        //
        $producto=Producto::findOrFail($id);
        $producto->Nombre=$request->get('nombre');
        $producto->Descripcion=$request->get('descripcion');
        $producto->Codigo=$request->get('codigo');
        $producto->Stock=$request->get('stock');
        $producto->Categoria_ID = $request->input('id_categoria');

        if ($request->hasFile('imagen')) {
            $imagen = $request->file('imagen');
            $nombreimagen = Str::slug($request->nombre) . '.' . $imagen->guessExtension();
            $ruta = public_path('imagenes/productos/');
            $imagen->move($ruta, $nombreimagen);
            $producto->imagen = $nombreimagen;
        }

        $producto->update();
        return Redirect::to('almacen/producto')->with('success', 'Producto actualizado correctamente.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $producto=Producto::findOrFail($id);
        $producto->delete();
        return Redirect()->route('almacen/producto')
            ->with('success','Producto eliminado correctamente');
    }
}
