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
        
        <!-- /.row TARJETAS INFORMATIVAS -->
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
                <i class="ion ion-cash"></i>
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
                <i class="ion ion-ios-cart"></i>
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
                <i class="ion ion-ios-pie"></i>
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
                <i class="ion ion-android-remove-circle"></i>
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
                <i class="ion ion-android-calendar"></i>
              </div>
              <a style="cursor:pointer;"class="small-box-footer">Mas Info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          </div>

         </div>

         <!-- /.row GRAFICO DE BARRAS -->

         <div class="row">
          <div class="col-12">
            <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title" id="card-title"></h3>
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

        <!-- /.row LISTA PRODUCRTOS MAS VENDIDOS Y POCO STOCK -->

         <div class="row">
          <div class="col-lg-6">

          <div class="card card-info">
            <div class="card-header">
              <h3 class="card-title">Los 10 productos mas vendidos</h3>
                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove">
                      <i class="fas fa-times"></i>
                  </button>
                </div> <!-- ./ end card-tools -->
              </div> <!-- ./ end card-header -->
            <div class="card-body">
              <div class="table-responsive">
                <table class="table" id="tbl_productos_mas_vendidos">
                  <thead>
                    <tr> 
                      <th>Cod.producto</th>
                      <th>Producto</th>
                      <th>Cantidad</th>
                      <th>Ventas</th>
                    </tr>
                  </thead>
                  <tbody>

                
                  </tbody>
                </table>
              </div>
            </div> <!-- ./ end card-body -->
          </div>
           

          </div>
          <div class="col-lg-6">
            <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">Listado de productos con poco stock</h3>
                  <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                      <i class="fas fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove">
                        <i class="fas fa-times"></i>
                    </button>
                  </div> <!-- ./ end card-tools -->
                </div> <!-- ./ end card-header -->
              <div class="card-body">
              <table class="table" id="tbl_productos_poco_stock">
                  <thead>
                    <tr> 
                      <th>Cod.producto</th>
                      <th>Producto</th>
                      <th>Stock Actual</th>
                      <th>Minimo Stock</th>
                    </tr>
                  </thead>
                  <tbody>

                    

                  </tbody>
                </table>
              </div> <!-- ./ end card-body -->
            </div>
            
          </div>
         </div>

          
          
      </div><!-- /.container-fluid -->
    </div>

  <!-- SOLICITUD AJAX -->
  <script>
 
    // solicitud AJAX TARJETAS INFORMATICAS
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
      
      
    });

    </script>
  <script>
        // solicitud AJAX GRAFICO DE BARRAS
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

                $("#card-title").html('Ventas del Mes : $' + total_ventas_mes.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ","));

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
    onComplete: function(context) {
        // 'context' se refiere al contexto de la animación, que incluye la instancia del gráfico
        var chartInstance = context.chart;
        var ctx = chartInstance.ctx; // Obtenemos el contexto del gráfico

        // Configuración de la fuente
        ctx.font = Chart.helpers.toFont({
            family: Chart.defaults.font.family,
            size: Chart.defaults.font.size,
            style: 'bold',
            weight: 'bold'
        });

        ctx.textAlign = 'center';
        ctx.textBaseline = 'bottom';

        // Iterar sobre los datasets del gráfico
        chartInstance.data.datasets.forEach(function(dataset) {
            // Obtener los metadatos de los datasets
            var meta = chartInstance.getDatasetMeta(dataset.index);
            // Iterar sobre los puntos de datos en el dataset
            meta.data.forEach(function(element, index) {
                var data = dataset.data[index];
                if (data !== null && data !== undefined) {
                    var position = element.tooltipPosition();
                    var y_pos = position.y;

                    ctx.fillStyle = '#ffa500';
                    ctx.fillText(data, position.x, y_pos - 5);
                }
            });
        });
    }
}

         }

           new Chart(barChartCanvas, {
            type: 'bar',
            data: barChartData,
            ptions: barChartOptions
         });

            
}
            
        });

        // Definir la función formatNumber fuera del bloque $(document).ready()
        function formatNumber(num) {
            return num.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
        }
    </script>
  <script>
    // solicitud AJAX PRODUCTOS MAS VENDIDOS 
    $.ajax({
        url: "ajax/dashboard.ajax.php",
        method: "POST",
        data: {
            'accion': 2 // listar los 10 productos más vendidos
        },
        dataType: 'json',
        success: function(respuesta) {
            console.log("respuesta", respuesta);

            for (let i = 0; i < respuesta.length; i++) {
                let filas = '<tr>' +
                            '<td>' + respuesta[i]["codigo_producto"] + '</td>' +
                            '<td>' + respuesta[i]["descripcion_producto"] + '</td>' +
                            '<td>' + respuesta[i]["cantidad"] + '</td>' +
                            '<td> $' + respuesta[i]["total_venta"] + '</td>' +
                            '</tr>';

                $("#tbl_productos_mas_vendidos tbody").append(filas);
            }
        }
    });

    // solicitud AJAX PRODUCTOS POCO STOCK

    $.ajax({
        url: "ajax/dashboard.ajax.php",
        method: "POST",
        data: {
            'accion': 3 // listar los productos poco stock
        },
        dataType: 'json',
        success: function(respuesta) {
            console.log("respuesta", respuesta);

            for (let i = 0; i < respuesta.length; i++) {
                let filas = '<tr>' +
                            '<td>' + respuesta[i]["codigo_producto"] + '</td>' +
                            '<td>' + respuesta[i]["descripcion_producto"] + '</td>' +
                            '<td>' + respuesta[i]["stock_producto"] + '</td>' +
                            '<td>' + respuesta[i]["minimo_stock_producto"] + '</td>' +
                            '</tr>';

                $("#tbl_productos_poco_stock tbody").append(filas);
            }
        }
    });
</script>






