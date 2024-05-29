@extends('layouts.admin')
@section('contenido')
    
<!-- left column --> 
    <div class="col-md-6">
        <!-- general form elements -->
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Nuevo Cliente</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form action="{{route('clientes.store')}}" method="POST" class="form">
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label for="nombre"> Nombre </label>
                        <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Ingresa el nombre del cliente">
                    </div> 
                    <div class="form-group">
                        <label for="apellido"> Apellido</label>
                        <input type="text" class="form-control" name="apellido" id="apellido" placeholder="Ingresa el Apellido"> 
                    </div>
                    <div class="form-group">
                        <label for="correoelectronico"> Correo Electronico</label>
                        <input type="text" class="form-control" name="correoelectronico" id="correoelectronico" placeholder="Ingresa el Correo"> 
                    </div>
                    <div class="form-group">
                        <label for="contraseña"> Contraseña</label>
                        <input type="text" class="form-control" name="contraseña" id="contraseña" placeholder="Ingresa la Contraseña"> 
                    </div>
                    <div class="form-group">
                        <label for="telefono"> Telefono</label>
                        <input type="text" class="form-control" name="telefono" id="telefono" placeholder="Ingresa el Telefono"> 
                    </div>
                    <div class="form-group">
                        <label for="direccion"> Direccion</label>
                        <input type="text" class="form-control" name="direccion" id="direccion" placeholder="Ingresa el Correo"> 
                    </div>
                    <div class="form-group">
                        <label for="ciudad"> Ciudad</label>
                        <input type="text" class="form-control" name="ciudad" id="ciudad" placeholder="Ingresa el Correo"> 
                    </div>
                    
                    <!-- /.card-body -->

                    <div class="card-footer">
                        <button type="submit" class="btn btn-succes me-1 mb-1">Guardar</button>
                        <button type="reset" class="btn btn-danger me-1 mb-1">Cancelar</button>
                    </div>
                </div>
            </form>
        </div>
        <!-- /.card -->
</div>
<!-- /.row -->

@endsection