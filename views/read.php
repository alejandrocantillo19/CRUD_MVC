<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>IPS ALMA VIDA - Lista</title>
    <link rel="stylesheet" href="assets/css/styles.css">
</head>
<body>
    <h1>Gestión de Pacientes - IPS ALMA VIDA</h1>
    <a href="index.php?action=create" class="btn btn-primary" style="width: auto; margin-bottom: 15px;">Registrar Nuevo Paciente</a>
    
    <div style="overflow-x: auto; background: white; padding: 15px; border-radius: 8px; box-shadow: 0 4px 10px rgba(0,0,0,0.1);">
        <table style="min-width: 1100px;">
            <thead>
                <tr>
                    <th>ID</th> <th>Documento</th>
                    <th>Nombre Completo</th>
                    <th>Edad</th>
                    <th>Celular</th>
                    <th>EPS</th>
                    <th>Empresa</th>
                    <th>Examen</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($pacientes as $p): ?>
                <tr>
                    <td><strong><?= $p['id'] ?></strong></td>
                    <td><?= htmlspecialchars($p['tipo_documento']) ?> <?= htmlspecialchars($p['numero_documento']) ?></td>
                    <td><?= htmlspecialchars($p['nombre_completo']) ?></td>
                    <td><?= htmlspecialchars($p['edad']) ?> años</td>
                    <td><?= htmlspecialchars($p['celular']) ?></td>
                    <td><?= htmlspecialchars($p['eps']) ?></td>
                    <td><?= htmlspecialchars($p['empresa_solicita']) ?></td>
                    <td><?= htmlspecialchars($p['tipo_examen']) ?></td>
                    <td style="white-space: nowrap;">
                        <a href="index.php?action=edit&id=<?= $p['id'] ?>" class="btn btn-success" style="padding: 5px 10px; font-size: 13px;">Editar</a>
                        <a href="index.php?action=delete&id=<?= $p['id'] ?>" class="btn btn-danger" style="padding: 5px 10px; font-size: 13px;">Eliminar</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>
</html>