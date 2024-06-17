<!-- Content Wrapper. Contains page content -->

     <!-- Content Header (Page header) -->
     <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Tablero Principal</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Inicio</a></li>
              <li class="breadcrumb-item active">Tablero Principal</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->



     <!-- Main content -->
     <div class="content">
      <div class="container-fluid">
        
        <!-- /.row -->
         <div class="row">
          <div class="col-lg-2">
            <div class="small-box">
              <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h4 id="totalProductos"></h4>

                <p>Productos Registrados</p>
              </div>
              <div class="icon">
                <i class="ion ion-clipboard"></i>
              </div>
              <a style="cursor:pointer;"class="small-box-footer">Mas Info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>

          <!-- TARJETA TOTAL COMPRAS -->

          </div>
          <div class="col-lg-2">
            <div class="small-box">
              <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h4 id="totalCompras"></h4>

                <p>Total Compras</p>
              </div>
              <div class="icon">
                <i class="ion ion-clipboard"></i>
              </div>
              <a style="cursor:pointer;"class="small-box-footer">Mas Info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>

           <!-- TARJETA TOTAL VENTAS -->

          </div>
          <div class="col-lg-2">
            <div class="small-box">
              <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h4 id="totalVentas"></h4>

                <p>Total Ventas</p>
              </div>
              <div class="icon">
                <i class="ion ion-cash"></i>
              </div>
              <a style="cursor:pointer;"class="small-box-footer">Mas Info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>

           <!-- TARJETA TOTAL GANANCIAS -->

          </div>
          <div class="col-lg-2">
            <div class="small-box">
              <!-- small box -->
            <div class="small-box bg-primary">
              <div class="inner">
                <h4 id="totalGanancias"></h4>

                <p>Ganancias</p>
              </div>
              <div class="icon">
                <i class="ion ion-clipboard"></i>
              </div>
              <a style="cursor:pointer;"class="small-box-footer">Mas Info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>

           <!-- TARJETA TOTAL POCOSTOCK -->

          </div>
          <div class="col-lg-2">
            <div class="small-box">
              <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h4 id="totalProductosMinStock"></h4>

                <p>Productos poco stock</p>
              </div>
              <div class="icon">
                <i class="ion ion-clipboard"></i>
              </div>
              <a style="cursor:pointer;"class="small-box-footer">Mas Info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>

           <!-- TARJETA TOTAL VENTAS DIA ACTUAL -->

          </div>
          <div class="col-lg-2">
            <div class="small-box">
              <!-- small box -->
            <div class="small-box bg-secondary">
              <div class="inner">
                <h4 id="totalVentasHoy"></h4>

                <p>Ventas del dia</p>
              </div>
              <div class="icon">
                <i class="ion ion-clipboard"></i>
              </div>
              <a style="cursor:pointer;"class="small-box-footer">Mas Info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          </div>

         </div>
          
          
      </div><!-- /.container-fluid -->
    </div>

  <!-- /.content -->
  <script>
  $(document).ready(function() {
    $.ajax({
      url: "ajax/dashboard.ajax.php",
      dataType: 'json',
      success: function(respuesta) {
        console.log("respuesta", respuesta);
        if (respuesta && respuesta[0]) {
          $("#totalProductos").html(respuesta[0]['totalProductos']);
          $("#totalCompras").html('$ ' + formatNumber(respuesta[0]['totalCompras']))
          $("#totalVentas").html('$ ' + formatNumber(respuesta[0]['totalVentas']))
          $("#totalGanancias").html('$ ' + formatNumber(respuesta[0]['ganancias']))
          $("#totalProductosMinStock").html(  formatNumber(respuesta[0]['productosPocoStock']))
          $("#totalVentasHoy").html( '$ ' +  formatNumber(respuesta[0]['ventasHoy']));


        } else {
          console.error("Respuesta en formato inesperado:", respuesta);
        }
      },
      error: function(jqXHR, textStatus, errorThrown) {
        console.error("Error en la solicitud AJAX:", textStatus, errorThrown);
      }
    });

    function formatNumber(num) {
      return num.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
    }
  });
</script>

