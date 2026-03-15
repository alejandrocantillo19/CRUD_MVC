<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>IPS ALMA VIDA - Editar</title>
    <link rel="stylesheet" href="assets/css/styles.css">
    <style>
        .grid-2 { display: grid; grid-template-columns: 1fr 1fr; gap: 15px; }
        .full-width { grid-column: span 2; }
    </style>
</head>
<body>
    <div class="container" style="max-width: 800px;">
        <h3>Editar Paciente: <?= htmlspecialchars($p['nombre_completo']) ?></h3>
        <form id="editForm">
            <input type="hidden" name="id" value="<?= $p['id'] ?>">
            
            <div class="grid-2">
                <div class="form-group full-width">
                    <label>Nombre Completo:</label>
                    <input type="text" name="nombre_completo" value="<?= htmlspecialchars($p['nombre_completo']) ?>" required>
                </div>
                <div class="form-group">
                    <label>Tipo Documento:</label>
                    <select name="tipo_documento">
                        <option value="CC" <?= $p['tipo_documento'] == 'CC' ? 'selected' : '' ?>>Cédula de Ciudadanía</option>
                        <option value="TI" <?= $p['tipo_documento'] == 'TI' ? 'selected' : '' ?>>Tarjeta de Identidad</option>
                        <option value="CE" <?= $p['tipo_documento'] == 'CE' ? 'selected' : '' ?>>Cédula de Extranjería</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Número de Documento:</label>
                    <input type="text" name="numero_documento" id="num_doc" value="<?= htmlspecialchars($p['numero_documento']) ?>" required>
                </div>
                <div class="form-group">
                    <label>Fecha de Nacimiento:</label>
                    <input type="date" name="fecha_nacimiento" value="<?= htmlspecialchars($p['fecha_nacimiento']) ?>" required>
                </div>
                <div class="form-group">
                    <label>Edad:</label>
                    <input type="number" name="edad" value="<?= htmlspecialchars($p['edad']) ?>" required>
                </div>
                <div class="form-group">
                    <label>Dirección:</label>
                    <input type="text" name="direccion" value="<?= htmlspecialchars($p['direccion']) ?>">
                </div>
                <div class="form-group">
                    <label>Teléfono Fijo:</label>
                    <input type="text" name="telefono" value="<?= htmlspecialchars($p['telefono']) ?>">
                </div>
                <div class="form-group">
                    <label>Celular:</label>
                    <input type="text" name="celular" value="<?= htmlspecialchars($p['celular']) ?>" required>
                </div>
                <div class="form-group">
                    <label>EPS:</label>
                    <input type="text" name="eps" value="<?= htmlspecialchars($p['eps']) ?>" required>
                </div>
                <div class="form-group">
                    <label>Contacto Adicional:</label>
                    <input type="text" name="contacto_adicional" value="<?= htmlspecialchars($p['contacto_adicional']) ?>">
                </div>
                <div class="form-group">
                    <label>Parentesco:</label>
                    <input type="text" name="parentesco" value="<?= htmlspecialchars($p['parentesco']) ?>">
                </div>
                <div class="form-group">
                    <label>Empresa que Solicita:</label>
                    <input type="text" name="empresa_solicita" value="<?= htmlspecialchars($p['empresa_solicita']) ?>" required>
                </div>
                <div class="form-group">
                    <label>Tipo de Examen:</label>
                    <input type="text" name="tipo_examen" value="<?= htmlspecialchars($p['tipo_examen']) ?>" required>
                </div>
                <div class="form-group full-width">
                    <label>Fecha del Examen:</label>
                    <input type="date" name="fecha_examen" value="<?= htmlspecialchars($p['fecha_examen']) ?>" required>
                </div>
            </div>

            <button type="submit" class="btn btn-success" style="width: 100%; margin-top:15px;">Guardar Cambios</button>
            <p style="text-align: center; margin-top: 15px;"><a href="index.php">Cancelar</a></p>
        </form>
        <div id="res"></div>
    </div>

    <script src="assets/js/scripts.js"></script>
</body>
</html>