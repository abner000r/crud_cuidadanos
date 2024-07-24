<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Nuevas Regiones</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h1>Ciudadanos</h1>
        <div class="row">
            <div class="col col-4">
                <form action="agregar_ciudadanos" method="post">
                    <div class="mb-3">
                        <label for="txtDpi" class="form-label">Dpi:</label>
                        <input type="text" id="txtDpi" name="txtDpi" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="txtApellido" class="form-label">Apellido:</label>
                        <input type="text" id="txtApellido" name="txtApellido" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="txtNombre" class="form-label">Nombre:</label>
                        <input type="number" id="txtNombre" name="txtNombre" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="txtDireccion" class="form-label">Direccion:</label>
                        <input type="text" id="txtDireccion" name="txtDireccion" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="txtTelCasa" class="form-label">Telefono de casa:</label>
                        <input type="text" id="txtTelCasa" name="txtTelCasa" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="txtTelMovil" class="form-label">Telefono Movil:</label>
                        <input type="number" id="txtTelMovil" name="txtTelMovil" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="txtEmail" class="form-label">Email:</label>
                        <input type="text" id="txtEmail" name="txtEmail" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="txtFechaNac" class="form-label">Fecha de nacimiento:</label>
                        <input type="text" id="txtFechaNac" name="txtFechaNac" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="txtAcademico" class="form-label">Codigo de ivel academico:</label>
                        <input type="number" id="txtAcademico" name="txtAcademico" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="txtMunicipio" class="form-label">Codigo de Municipio:</label>
                        <input type="text" id="txtMunicipio" name="txtMunicipio" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="txtContra" class="form-label">Contraseña:</label>
                        <input type="text" id="txtContra" name="txtContra" class="form-control">
                    </div>
                    <div class="mb-3">
                        <input type="submit" id="btnGuardarCiudadanos" name="btnGuardarCiudadanos"
                            class="form-control" value="Guardar Ciudadanos">
                    </div>
                </form>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>