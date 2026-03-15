<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Eliminar Paciente</title>
    <link rel="stylesheet" href="assets/css/styles.css">
</head>
<body>
    <div class="confirm-box">
        <h2 style="color: #dc3545;">¿Confirmas la eliminación?</h2>
        <p>Vas a borrar de la base de datos a:</p>
        <p><strong><?= htmlspecialchars($p['nombre_completo']) ?></strong></p>
        <p>Documento: <?= htmlspecialchars($p['numero_documento']) ?></p>
    
        <form action="index.php?action=delete" method="POST" style="margin-top: 20px;">
            <input type="hidden" name="id" value="<?= $p['id'] ?>">
            <button type="submit" class="btn btn-danger">SÍ, ELIMINAR PACIENTE</button>
            <a href="index.php" class="btn btn-secondary" style="margin-left: 10px;">No, regresar</a>
        </form>
    </div>
</body>
</html>