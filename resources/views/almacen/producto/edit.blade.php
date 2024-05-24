@extends('layouts.admin')
@section('contenido')
    
<!-- left column --> 
    <div class="col-md-6">
        <!-- general form elements -->
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Editar Producto</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form action="{{route('producto.store')}}" method="POST" enctype="multipart/form-data" class="form">
                @csrf
                <div class="col-md-6 col-12">
                    <div class="form-group">
                        <label for="nombre"> Nombre </label>
                        <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Ingresa el nombre del producto">
                    </div> 
                     <div class="col-md-6 col-12">
                        <div class="form-group">
                            <label"> Categoria </label>
                            <select name="id_categoria" class="form-control" id="id_categoria">
                                
                                @foreach ($categorias as $cat)
                                    <option value="{{$cat->ID_Categoria}}">{{$cat->Categoria}}</option>
                                @endforeach
                                
                            </select>
                        </div>
                    </div> 
                
                    <div class="col-md-6 col-12"> 
                        <div class="form-group">
                            <label for="codigo">Codigo</label>
                            <input type="text" class="form-control" name="codigo" id="codigo" placeholder= "Ingresa el código del producto">
                        </div>
                    </div>
                    <div class="col-md-6 col-12"> 
                        <div class="form-group">
                            <label for="stock">Stock</label>
                            <input type="text" class="form-control" name="stock" id="stock" placeholder= "Ingresa el stock del producto">
                        </div>
                    </div>
                    <div class="col-md-6 col-12"> 
                        <div class="form-group">
                            <label for="unidad"> Unidad</label> 
                            <select name="unidad" class="form-control" id="unidad">
                                <option>Piezas</option> 
                                <option>kilos</option> 
                                <option>cajas</option>
                                <option>Paquetes</option>
                            </select> 
                        </div>
                    </div>
                    <div class="col-md-6 col-12">
                        <div class="form-group">
                            <label for="descripcion">Descripción</label>
                            <input type="text" class="form-control" name="descripcion" id="descripcion" plakeholder="Ingresa la descripción del producto">
                        </div>
                    </div>
                    <div class="col-md-12 col-12">
                        <div class="form-group">
                            <label for="descripcion">Imagen</label>
                            <input type="file" class="form-control" id="imagen" name="imagen">
                        </div>
                    </div>
I
                    <!-- /.card-body -->

                    <div class="card-footer">
                        <button type="submit" class="btn btn-succes me-1 mb-1">Guardar</button>
                        <button type="reset" class="btn btn-danger me-1 mb-1">Cancelar</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <!-- /.card -->
</div>
<!-- /.row -->

@endsection