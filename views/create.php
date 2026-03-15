<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>IPS ALMA VIDA - Registro</title>
    <link rel="stylesheet" href="assets/css/styles.css">
    <style>
        .grid-2 { display: grid; grid-template-columns: 1fr 1fr; gap: 15px; }
        .full-width { grid-column: span 2; }
    </style>
</head>
<body>
    <div class="container" style="max-width: 800px;">
        <h2>Registrar Paciente</h2>
        <form id="pacienteForm">
            <div class="grid-2">
                <div class="form-group full-width">
                    <label>Nombre Completo:</label>
                    <input type="text" name="nombre_completo" required>
                </div>
                <div class="form-group">
                    <label>Tipo Documento:</label>
                    <select name="tipo_documento">
                        <option value="CC">Cédula de Ciudadanía</option>
                        <option value="TI">Tarjeta de Identidad</option>
                        <option value="CE">Cédula de Extranjería</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Número de Documento:</label>
                    <input type="text" name="numero_documento" id="num_doc" required>
                </div>
                <div class="form-group">
                    <label>Fecha de Nacimiento:</label>
                    <input type="date" name="fecha_nacimiento" required>
                </div>
                <div class="form-group">
                    <label>Edad:</label>
                    <input type="number" name="edad" required>
                </div>
                <div class="form-group">
                    <label>Dirección:</label>
                    <input type="text" name="direccion">
                </div>
                <div class="form-group">
                    <label>Teléfono Fijo:</label>
                    <input type="text" name="telefono">
                </div>
                <div class="form-group">
                    <label>Celular:</label>
                    <input type="text" name="celular" required>
                </div>
                <div class="form-group">
                    <label>EPS:</label>
                    <input type="text" name="eps" required>
                </div>
                <div class="form-group">
                    <label>Contacto Adicional:</label>
                    <input type="text" name="contacto_adicional">
                </div>
                <div class="form-group">
                    <label>Parentesco:</label>
                    <input type="text" name="parentesco">
                </div>
                <div class="form-group">
                    <label>Empresa que Solicita:</label>
                    <input type="text" name="empresa_solicita" required>
                </div>
                <div class="form-group">
                    <label>Tipo de Examen:</label>
                    <input type="text" name="tipo_examen" required>
                </div>
                <div class="form-group full-width">
                    <label>Fecha del Examen:</label>
                    <input type="date" name="fecha_examen" required>
                </div>
            </div>

            <button type="submit" class="btn btn-primary" style="margin-top: 15px;">Guardar Información</button>
            <p style="text-align: center; margin-top: 15px;"><a href="index.php">Volver a la lista</a></p>
        </form>
        <div id="mensaje"></div>
    </div>

    <script src="assets/js/scripts.js"></script>
</body>
</html>