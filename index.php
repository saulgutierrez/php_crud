<!DOCTYPE html>
<html lang="en">
  <head>
    <?php require_once("mainhead.php");?>
    <title>Mantenimiento de Producto</title>
  </head>

  <body>
    <?php require_once("mainleftpanel.php");?>
    <?php require_once("mainheadpanel.php");?>
    <?php require_once("mainrightpanel.php");?>

    <!-- ########## START: MAIN PANEL ########## -->
    <div class="br-mainpanel">
      <div class="br-pageheader pd-y-15 pd-l-20">
        <nav class="breadcrumb pd-0 mg-0 tx-12">
          <a class="breadcrumb-item" href="#">Mantenimiento</a>
          <span class="breadcrumb-item active">Producto</span>
        </nav>
      </div><!-- br-pageheader -->
      <div class="pd-x-20 pd-sm-x-30 pd-t-20 pd-sm-t-30">
        <h4 class="tx-gray-800 mg-b-5">Producto</h4>
        <p class="mg-b-0">Desde esta ventana podra dar mantenimiento a productos</p>
      </div>

      <div class="br-pagebody">
        <div class="br-section-wrapper">
            <h6 class="tx-gray-800 tx-uppercase tx-bold tx-14 mg-b-10">Mantenimiento de Producto</h6>
            <button id="btnnuevo" class="btn btn-outline-primary btn-block mg-b-10">Nuevo Registro</button>

            <div class="table-wrapper">
              <table id="producto_data" class="table display responsive nowrap">
                <thead>
                  <tr>
                  <th class="wd-15p">Categoria</th>
                    <th class="wd-15p">Nombre</th>
                    <th class="wd-15p">Descripcion</th>
                    <th class="wd-15p">Cant.</th>
                    <th class="wd-15p"></th>
                    <th class="wd-20p"></th>
                  </tr>
                </thead>
                <tbody>

                </tbody>
              </table>
            </div>
        </div>
      </div>

    </div><!-- br-mainpanel -->
    <!-- ########## END: MAIN PANEL ########## -->

    <!-- Llamada a Modal -->
    <?php require_once("view/MntProducto/modalmantenimiento.php");?>
    <?php require_once("mainjs.php");?>
    <script type="text/javascript" src="view/MntProducto/mntproducto.js"></script>
  </body>
</html>
