<?php
require_once 'config/db.php';
require_once 'models/paciente.php';

class PacienteController {
    private $db;
    private $paciente;

    public function __construct() {
        $database = new Database();
        $this->db = $database->getConnection();
        $this->paciente = new Paciente($this->db);
    }

    public function create() {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            header('Content-Type: application/json');
            if(empty($_POST['numero_documento']) || empty($_POST['nombre_completo'])) {
                echo json_encode(["status" => "error", "message" => "Documento y Nombre son obligatorios."]);
                exit;
            }

            if($this->paciente->create($_POST)) {
                echo json_encode(["status" => "success", "message" => "Paciente registrado correctamente."]);
            } else {
                echo json_encode(["status" => "error", "message" => "Error al guardar en la base de datos."]);
            }
            exit;
        }
        require 'views/create.php';
    }

    public function index() {
        $stmt = $this->paciente->readAll();
        $pacientes = $stmt->fetchAll(PDO::FETCH_ASSOC);
        require 'views/read.php';
    }

    public function edit() {
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        header('Content-Type: application/json');
        if($this->paciente->update($_POST)) {
            echo json_encode(["status" => "success", "message" => "Datos actualizados."]);
        } else {
            echo json_encode(["status" => "error", "message" => "No se pudo actualizar."]);
        }
        exit;
    }
    if(isset($_GET['id'])) {
        $p = $this->paciente->getById($_GET['id']);
        require 'views/update.php';
    }
    }

    public function delete() {
        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['id'])) {
            $this->paciente->delete($_POST['id']);
            header("Location: index.php?action=index");
            exit;
        }
        if(isset($_GET['id'])) {
            $p = $this->paciente->getById($_GET['id']);
            require 'views/delete.php';
        }
    }

}
?>