<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Nuevas Regiones</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <h1>Regiones</h1>
        <div class="row">
            <div class="col col-4">
                <form action="agregar_regiones" method="post">
                    <div class="mb-3">
                        <label for="txtCodRegion" class="form-label">Codigo de Region:</label>
                        <input type="text" id="txtCodRRegion" name="txtCodRegion" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="txtApellido" class="form-label">Nombre:</label>
                        <input type="text" id="txtApellido" name="txtNombre" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="txtDescripcion" class="form-label">Descripción:</label>
                        <input type="number" id="txtDescripcion" name="txtDescripcion" class="form-control">
                    </div>
                    <div class="mb-3">
                        <input type="submit" id="btnGuardarRegiones" name="btnGuardarRegiones" class="form-control" value="Guardar Regiones">
                    </div>
                </form>
            </div>
        </div>
    </div>
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>