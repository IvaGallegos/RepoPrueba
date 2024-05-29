<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\ClienteFormRequest;
use Illuminate\Support\Facades\DB;

class ClienteController extends Controller
{
    //
    public function index(request $request)
    {
        //
        if ($request)
        {
            $query=trim($request->get('texto'));
            $clientes=DB::table('cliente')->where('nombre','LIKE','%'.$query.'%')
            ->where('estatus', '=', '1')
            ->orderBy('id_cliente', 'desc')
            ->paginate(7);
            return view('ventas.clientes.index',["clientes"=>$clientes,"texto"=>$query]);
        }

    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view("ventas.clientes.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ClienteFormRequest $request)
    {
        //
        $cliente = new Cliente;
        $cliente -> nombre = $request -> input('nombre');
        $cliente->apellido = $request->input('apellido');
        $cliente->correo = $request->input('correoelectronico');
        $cliente->contraseña = $request->input('contraseña');
        $cliente->telefono = $request->input('telefono');
        $cliente->direccion = $request->input('direccion');
        $cliente->ciudad = $request->input('ciudad');
        $cliente->estatus = '1';
    
        $cliente -> save();

    return Redirect::to('clientes.index');
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
        return view("ventas.clientes.show",["clientes" => Cliente::findorFail($id)]);
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
        return view("ventas.clientes.edit",["cliente" => Cliente::findOrFail($id)]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ClienteFormRequest $request, $id)
    {
        //
        $cliente=Cliente::findOrFail($id);
        $cliente -> nombre = $request -> get('nombre');
        $cliente -> apellido = $request -> get('apellido');
        $cliente -> correo = $request -> get('correoelectronico');
        $cliente -> contraseña = $request -> get('contraseña');
        $cliente -> telefono = $request -> get('telefono');
        $cliente -> direccion = $request -> get('direccion');
        $cliente -> ciudad = $request -> get('ciudad');
        $cliente->update();
    return Redirect::to('ventas/clientes');
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
        $cliente=Cliente::findOrFail($id);
        $cliente->estatus='0';
        $cliente->update();
        return Redirect()->route('clientes.index')
            ->with('success','Cliente eliminada correctamente');
    }
}
