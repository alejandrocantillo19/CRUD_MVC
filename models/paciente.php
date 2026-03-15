<?php
class Paciente {
    private $conn;
    private $table_name = "pacientes";

    public function __construct($db) {
        $this->conn = $db;
    }

    public function create($datos) {
        $query = "INSERT INTO " . $this->table_name . " SET 
            nombre_completo=:nombre, tipo_documento=:tipo_doc, numero_documento=:num_doc, 
            direccion=:dir, telefono=:tel, celular=:cel, fecha_nacimiento=:f_nac, 
            edad=:edad, eps=:eps, contacto_adicional=:contacto, parentesco=:parentesco, 
            tipo_examen=:examen, empresa_solicita=:empresa, fecha_examen=:f_examen";

        $stmt = $this->conn->prepare($query);

        $stmt->bindParam(":nombre", $datos['nombre_completo']);
        $stmt->bindParam(":tipo_doc", $datos['tipo_documento']);
        $stmt->bindParam(":num_doc", $datos['numero_documento']);
        $stmt->bindParam(":dir", $datos['direccion']);
        $stmt->bindParam(":tel", $datos['telefono']);
        $stmt->bindParam(":cel", $datos['celular']);
        $stmt->bindParam(":f_nac", $datos['fecha_nacimiento']);
        $stmt->bindParam(":edad", $datos['edad']);
        $stmt->bindParam(":eps", $datos['eps']);
        $stmt->bindParam(":contacto", $datos['contacto_adicional']);
        $stmt->bindParam(":parentesco", $datos['parentesco']);
        $stmt->bindParam(":examen", $datos['tipo_examen']);
        $stmt->bindParam(":empresa", $datos['empresa_solicita']);
        $stmt->bindParam(":f_examen", $datos['fecha_examen']);

        return $stmt->execute();
    }

    public function readAll() {
    $query = "SELECT * FROM " . $this->table_name . " ORDER BY id DESC";
    $stmt = $this->conn->prepare($query);
    $stmt->execute();
    return $stmt;
}

    public function getById($id) {
    $query = "SELECT * FROM " . $this->table_name . " WHERE id = ? LIMIT 0,1";
    $stmt = $this->conn->prepare($query);
    $stmt->bindParam(1, $id);
    $stmt->execute();
    return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function update($datos) {
        $query = "UPDATE " . $this->table_name . " SET 
            nombre_completo=:nombre, tipo_documento=:tipo_doc, numero_documento=:num_doc, 
            direccion=:dir, telefono=:tel, celular=:cel, fecha_nacimiento=:f_nac, 
            edad=:edad, eps=:eps, contacto_adicional=:contacto, parentesco=:parentesco, 
            tipo_examen=:examen, empresa_solicita=:empresa, fecha_examen=:f_examen 
            WHERE id=:id";

        $stmt = $this->conn->prepare($query);

        $stmt->bindParam(":nombre", $datos['nombre_completo']);
        $stmt->bindParam(":tipo_doc", $datos['tipo_documento']);
        $stmt->bindParam(":num_doc", $datos['numero_documento']);
        $stmt->bindParam(":dir", $datos['direccion']);
        $stmt->bindParam(":tel", $datos['telefono']);
        $stmt->bindParam(":cel", $datos['celular']);
        $stmt->bindParam(":f_nac", $datos['fecha_nacimiento']);
        $stmt->bindParam(":edad", $datos['edad']);
        $stmt->bindParam(":eps", $datos['eps']);
        $stmt->bindParam(":contacto", $datos['contacto_adicional']);
        $stmt->bindParam(":parentesco", $datos['parentesco']);
        $stmt->bindParam(":examen", $datos['tipo_examen']);
        $stmt->bindParam(":empresa", $datos['empresa_solicita']);
        $stmt->bindParam(":f_examen", $datos['fecha_examen']);
        $stmt->bindParam(":id", $datos['id']);

        return $stmt->execute();
    }

    public function delete($id) {
        $query = "DELETE FROM " . $this->table_name . " WHERE id = ?";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(1, $id);
        return $stmt->execute();
    }
}
?>