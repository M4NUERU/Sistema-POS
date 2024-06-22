
    <!-- Content Header (Page header) -->
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0">Carga masiva de productos</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Inicio</a></li>
          <li class="breadcrumb-item active">Carga masiva de productos</li>
        </ol>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<div class="content">
  <div class="container-fluid">

  <!--FILA PARA INPUT FILE -->
   <div class="row">
    <div class="col-lg-12">
      <div class="card card-info">
        <div class="card-header">
          <h3 class="card-title">Seleccionar Archivo de Carga (Excel):</h3>
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

        <form method="post" enctype="multipart/form-data" id="form_carga_productos">
        <div class="row">
              <div class="col-lg-10">

              <input type="file" name="fileProductos"id="fileProductos" class="form-control" accept=".xls,xlsx"> 
              
            </div>
            <div class="col-lg-2">

            <button type="submit" value="Cargar Productos" class="btn btn-primary" id="btnCargar">Cargar Productos</button>

            </div>
        </form>
          
          </div>
        </div> <!-- ./ end card-body -->
      </div>
    </div>
   </div>
<!--FILA PARA IMAGEN GIF -->
<div class="row mx-0" >
  <div class="col-lg-12 mx-0 text-center">
  <img src="vistas/assets/images/loading.gif" id="img_carga" style="display:none;">
  </div>
</div>

  </div><!-- /.container-fluid -->
</div>
<!-- /.content -->





<script>
  $(document).ready(function() {

    $("#form_carga_productos").on('submit', function(e) {
        e.preventDefault();

        /*===================================================================*/
        //VALIDAR QUE SE SELECCIONE UN ARCHIVO
        /*===================================================================*/
        if ($("#fileProductos").get(0).files.length === 0) {
            Swal.fire({
                position: 'center',
                icon: 'warning',
                title: 'Debe seleccionar un archivo (Excel).',
                showConfirmButton: false,
                timer: 2500
            });
            return; // Detener la ejecución si no hay archivo seleccionado
        } else {

            /*===================================================================*/
            //VALIDAR QUE EL ARCHIVO SELECCIONADO SEA EN EXTENSION XLS O XLSX
            /*===================================================================*/
            var extensiones_permitidas = [".xls", ".xlsx"];
            var input_file_productos = $("#fileProductos").get(0);
            var exp_reg = new RegExp("([a-zA-Z0-9\s_\\-.\:])+(" + extensiones_permitidas.join('|') + ")$");

            if (!exp_reg.test(input_file_productos.files[0].name.toLowerCase())) {
                Swal.fire({
                    position: 'center',
                    icon: 'warning',
                    title: 'Debe seleccionar un archivo .xls o .xlsx',
                    showConfirmButton: false,
                    timer: 2500
                });
                return; // Detener la ejecución si el archivo no tiene la extensión correcta
            }

            alert("cumple las verificaciones");

            var formData = new FormData($(this)[0]);
            formData.append('accion', 'carga_masiva_productos');

            $("#btnCargar").prop("disabled", true);
        $("#img_carga").prop("style","display:block");
        $("#img_carga").prop("style","height:200px");
        $("#img_carga").prop("style","width:200px");
           

        }

        // Aquí puedes agregar la lógica para enviar el formulario utilizando AJAX
        $.ajax({
            url: "ajax/productos.ajax.php",
            type: "POST",
            data: formData,
            cache: false,
            contentType: false,
            processData: false,
            success: function(respuesta) {
                console.log("respuesta", respuesta);
            }
        });
    });

  });
</script>

 




              