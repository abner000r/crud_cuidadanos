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
        <h1>Municipios</h1>
        <div class="row">
            <div class="col col-4">
                <form action="agregar_regiones" method="post">
                    <div class="mb-3">
                        <label for="txtCodMuni" class="form-label">Codigo de municipios:</label>
                        <input type="text" id="txtCodMuni" name="txtCodMuni" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="txtNombreMuni" class="form-label">Nombre de municipios:</label>
                        <input type="text" id="txtNombreMuni" name="txtNombreMuni" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="txtCodDepto" class="form-label">Codigo de departamento:</label>
                        <input type="number" id="txtCodDepto" name="txtCodDepto" class="form-control">
                    </div>
                    <div class="mb-3">
                        <input type="submit" id="btnGuardarMunicipios" name="btnGuardarMunicipios" class="form-control" value="Guardar Municipios">
                    </div>
                </form>
            </div>
        </div>
    </div>
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>