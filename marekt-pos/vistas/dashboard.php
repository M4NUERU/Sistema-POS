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
     <!-- BIBLIOTECAS -->
     <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
     <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

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

         <div class="row">
          <div class="col-12">
            <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title"></h3>
                <div class="card-tools">
                  <button type="button" class="btn btn-tool"data-card-widget="collapse">

                  <i class="fas fa-minus"></i>

                  </button>
                  <buttontype="button" class="btn btn-tool"data-card-widget="remove">

                  <i class="fas fa-times"></i>

                  </button>
                </div>
              </div>
              <div class="card-body">
                <div class="chart">
                  <canvas id="barChart" style="min-height: 250px; height: 300p; max-height: 350px; width: 100%;">
                   
                  </canvas>
                </div>
              </div>
            </div>
          </div>

         </div>
          
          
      </div><!-- /.container-fluid -->
    </div>

  <!-- SOLICITUD AJAX -->
  <script>
 
    // Primera solicitud AJAX
    $.ajax({
      url: "ajax/dashboard.ajax.php",
      dataType: 'json',
      success: function(respuesta) {
        console.log("respuesta", respuesta);
        if (respuesta && respuesta[0]) {
          $("#totalProductos").html(respuesta[0]['totalProductos']);
          $("#totalCompras").html('$ ' + formatNumber(respuesta[0]['totalCompras']));
          $("#totalVentas").html('$ ' + formatNumber(respuesta[0]['totalVentas']));
          $("#totalGanancias").html('$ ' + formatNumber(respuesta[0]['ganancias']));
          $("#totalProductosMinStock").html(formatNumber(respuesta[0]['productosPocoStock']));
          $("#totalVentasHoy").html('$ ' + formatNumber(respuesta[0]['ventasHoy']));
        } else {
          console.error("Respuesta en formato inesperado:", respuesta);
        }
      },
      error: function(jqXHR, textStatus, errorThrown) {
        console.error("Error en la solicitud AJAX:", textStatus, errorThrown);
      }
    });

    </script>
<script>
        // Segunda solicitud AJAX
        $.ajax({
            url: "ajax/dashboard.ajax.php",
            method: "POST",
            data: {
                'accion': 1 // parámetro ventas mes
            },
            dataType: 'json',
            success: function(respuesta) {

                console.log("respuesta", respuesta);

                var fecha_venta = [];
                var total_venta = [];
                var total_ventas_mes = 0;

                for (let i = 0; i < respuesta.length; i++) {
                    fecha_venta.push(respuesta[i]['fecha_venta']);
                    total_venta.push(respuesta[i]['total_venta']);
                    total_ventas_mes += parseFloat(respuesta[i]['total_venta']);
                }

                $(".card-title").html('Ventas del Mes : $' + total_ventas_mes.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ","));

                var barChartCanvas = $("#barChart").get(0).getContext('2d');

                var areaChartData = {
                    labels: fecha_venta,
                    datasets: [
                        {
                            label: "Ventas del Mes",
                            backgroundColor: 'rgba(60,141,188,0.9)',
                            data: total_venta
                        }
                    ]
                }

                var barChartData = $.extend(true, {}, areaChartData);

                var barChartOptions = {
                    maintainAspectRatio: false,
                    responsive: true,
                    plugins: {
                        legend: {
                            display: true
                        },
                        tooltip: {
                            enabled: true
                        }
                    },
                    scales: {
                        x: {
                            stacked: true
                        },
                        y: {
                            stacked: true
                        }
                    },
                    animation: {
                        duration: 500,
                        easing: "easeOutQuart",
                        onComplete: function() {
                            var ctx = this.chart.ctx;
                            ctx.font = Chart.helpers.toFont({
                                family: Chart.defaults.font.family,
                                size: Chart.defaults.font.size,
                                style: 'bold',
                                weight: 'bold'
                            });
                            ctx.textAlign = 'center';
                            ctx.textBaseline = 'bottom';

                            this.data.datasets.forEach(function(dataset) {
                                dataset.data.forEach(function(data, i) {
                                    var model = dataset._meta[Object.keys(dataset._meta)[0]].data[i].tooltipPosition();
                                    var y_pos = model.y;

                                    ctx.fillStyle = '#ffa500';
                                    ctx.fillText(data, model.x, y_pos - 5);
                                });
                            });
                        }
                    }
                }

                new Chart(barChartCanvas, {
                    type: 'bar',
                    data: barChartData,
                    options: barChartOptions
                });

            },
            error: function(jqXHR, textStatus, errorThrown) {
                console.error("Error en la solicitud AJAX:", textStatus, errorThrown);
            }
        });

        // Definir la función formatNumber fuera del bloque $(document).ready()
        function formatNumber(num) {
            return num.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
        }
    </script


