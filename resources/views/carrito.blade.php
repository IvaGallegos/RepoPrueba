<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

  <title>carrito</title>
</head>

<header>
<nav class="navbar navbar-expand-sm bg-dark navbar-dark sticky-top">
  <!-- Brand -->
  <a class="navbar-brand" href="#">Logo</a>

  <!-- Links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="/inicio">Inicio</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="/contacto">Contacto</a>
    </li>

    <!-- Dropdown -->
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        Catalogo
      </a>
      <div class="dropdown-menu">
        <!-- Herramientas Manuales -->
        <div class="dropdown-submenu">
          <a class="dropdown-item dropdown-toggle" href="#" id="navbarDropdownManual" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Herramientas Manuales
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdownManual">
            <a class="dropdown-item" href="/martillos">Martillos</a>
            <a class="dropdown-item" href="/destornilladores">Destornilladores</a>
            <a class="dropdown-item" href="/llaves">Llaves</a>
          </div>
        </div>
        <!-- Herramientas Eléctricas -->
        <div class="dropdown-submenu">
          <a class="dropdown-item dropdown-toggle" href="#" id="navbarDropdownElectric" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Herramientas Eléctricas
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdownElectric">
            <a class="dropdown-item" href="/taladros">Taladros</a>
            <a class="dropdown-item" href="/sierras">Sierras</a>
            <a class="dropdown-item" href="/lijadoras">Lijadoras</a>
            <a class="dropdown-item" href="/materiales_construccion">Materiales de Construcción</a>
          </div>
        </div>
        <!-- Materiales Básicos -->
        <div class="dropdown-submenu">
          <a class="dropdown-item dropdown-toggle" href="#" id="navbarDropdownBasic" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Materiales Básicos
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdownBasic">
            <a class="dropdown-item" href="/cemento">Cemento</a>
            <a class="dropdown-item" href="/arena">Arena</a>
            <a class="dropdown-item" href="/ladrillos">Ladrillos</a>
            <a class="dropdown-item" href="/acabados">Acabados</a>
            <a class="dropdown-item" href="/pinturas">Pinturas</a>
            <a class="dropdown-item" href="/barnices">Barnices</a>
            <a class="dropdown-item" href="/ceramicos">Cerámicos</a>
          </div>
        </div>
        <!-- Equipos de Seguridad -->
        <a class="dropdown-item" href="/equipos_seguridad">Equipos de Seguridad</a>
        <!-- Tornillos y Anclajes -->
        <a class="dropdown-item" href="/tornillos_anclajes">Tornillos y Anclajes</a>
        <!-- Fijaciones y Adhesivos -->
        <a class="dropdown-item" href="/fijaciones_adhesivos">Fijaciones y Adhesivos</a>
        <!-- Equipos de Medición -->
        <a class="dropdown-item" href="/equipos_medicion">Equipos de Medición</a>
      </div>
    </li>
  </ul>
</nav>
</header>

<div class="py-5 text-dark">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h1>Su carrito</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 p-3">
                <h2>¿Cómo funciona?</h2>
                <ol>
                    <li>Agrega productos al carrito: Explora nuestro catálogo y selecciona los productos que deseas comprar.</li>
                    <li>Revisa tu carrito: Verifica los productos, cantidades y precios en tu carrito de compras.</li>
                    <li>Procede al pago: Elige el método de pago y completa la transacción de forma segura.</li>
                    <li>Recibe tus productos: Una vez confirmado el pago, enviaremos tus productos a la dirección indicada.</li>
                    <li>Disfruta de tus compras: ¡Recibe tus productos y disfruta de una excelente experiencia de compra!</li>
                </ol>
            </div>
        </div>
    </div>
</div>
<div class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Productos en el carrito</h2>
                <table class="table">
                    <thead>
                        <tr>
                            <th>Producto</th>
                            <th>Precio</th>
                            <th>Cantidad</th>
                            <th>Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Producto 1</td>
                            <td>$10.00</td>
                            <td>
                                <div class="input-group">
                                    <span class="input-group-btn">
                                        <button type="button" class="btn btn-default btn-number" disabled="disabled" data-type="minus" data-field="quant[1]">
                                            <span class="fa fa-minus"></span>
                                        </button>
                                    </span>
                                    <input type="text" name="quant[1]" class="form-control input-number" value="2" min="1" max="10">
                                    <span class="input-group-btn">
                                        <button type="button" class="btn btn-default btn-number" data-type="plus" data-field="quant[1]">
                                            <span class="fa fa-plus"></span>
                                        </button>
                                    </span>
                                </div>
                            </td>
                            <td>$20.00</td>
                        </tr>
                        <tr>
                            <td>Producto 2</td>
                            <td>$15.00</td>
                            <td>
                                <div class="input-group">
                                    <span class="input-group-btn">
                                        <button type="button" class="btn btn-default btn-number" disabled="disabled" data-type="minus" data-field="quant[2]">
                                            <span class="fa fa-minus"></span>
                                        </button>
                                    </span>
                                    <input type="text" name="quant[2]" class="form-control input-number" value="1" min="1" max="10">
                                    <span class="input-group-btn">
                                        <button type="button" class="btn btn-default btn-number" data-type="plus" data-field="quant[2]">
                                            <span class="fa fa-plus"></span>
                                        </button>
                                    </span>
                                </div>
                            </td>
                            <td>$15.00</td>
                        </tr>
                        <tr>
                            <td>Producto 3</td>
                            <td>$5.00</td>
                            <td>
                                <div class="input-group">
                                    <span class="input-group-btn">
                                        <button type="button" class="btn btn-default btn-number" disabled="disabled" data-type="minus" data-field="quant[3]">
                                            <span class="fa fa-minus"></span>
                                        </button>
                                    </span>
                                    <input type="text" name="quant[3]" class="form-control input-number" value="3" min="1" max="10">
                                    <span class="input-group-btn">
                                        <button type="button" class="btn btn-default btn-number" data-type="plus" data-field="quant[3]">
                                            <span class="fa fa-plus"></span>
                                        </button>
                                    </span>
                                </div>
                            </td>
                            <td>$15.00</td>
                        </tr>
                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="3" class="text-right">Total:</td>
                            <td>$50.00</td>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <a href="#" class="btn btn-primary">Continuar Compra</a>
                <a href="#" class="btn btn-danger">Cancelar Compra</a>
            </div>
        </div>
    </div>
</div>
  <div class="py-5 text-center bg-light">
    <div class="container">
      <div class="row">
        <div class="mx-auto col-lg-5 col-md-7 col-10">
          <h1>Estimado&nbsp;</h1>
          <p class="mb-3">Podrás acceder a futuras ofertas, y nuevos productos si te registras con nosotros</p> <a class="btn btn-primary" href="#">Registro</a>
        </div>
      </div>
    </div>
  </div>
  <div class="py-5" style="">
    <div class="container">
      <div class="row">
        <div class="col-md-9">
          <p class="lead">Recibe noticias sobre la acutalización del sitio</p>
          <form class="form-inline">
            <div class="form-group"> <input type="email" class="form-control" placeholder="Gmail"> </div> <button type="submit" class="btn btn-primary ml-3">Registrar Correo</button>
          </form>
        </div>
        <div class="col-4 col-md-1 align-self-center"> <a href="#">
            <i class="fa fa-fw fa-facebook text-muted fa-2x"></i>
          </a> </div>
        <div class="col-4 col-md-1 align-self-center"> <a href="#">
            <i class="fa fa-fw fa-twitter text-muted fa-2x"></i>
          </a> </div>
        <div class="col-4 col-md-1 align-self-center"> <a href="#">
            <i class="fa fa-fw fa-instagram text-muted fa-2x"></i>
          </a> </div>
      </div>
      <div class="row">
        <div class="col-md-12 mt-3 text-center">
          <p>© Copyright 2024 Ferremas - Todos los derechos Reservados.<br></p>
        </div>
      </div>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


</body>

</html>