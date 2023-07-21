<?php
require_once __DIR__ . '/../../config/config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['action'])) {
        $action = $_POST['action'];
        switch ($action) {
            case 'insert':
                insertCurso();
                break;
            case 'update':
                updateCurso();
                break;
            case 'delete':
                deleteCurso();
                break;
        }
    }
}

function connectDatabase()
{
    $connection = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
    if (!$connection) {
        die('Erro na conexão: ' . mysqli_connect_error());
    }
    return $connection;
}

function insertCurso()
{
    if (isset($_POST['TITLE']) && isset($_POST['TEXT']) && isset($_POST['LINK'])) {
        $connection = connectDatabase();
        $title = $_POST['TITLE'];
        $text = $_POST['TEXT'];
        $link = $_POST['LINK'];
        isset($_POST['IMAGE']) ? $image = $_POST['IMAGE'] : $image = 'default_img.jpg';
        $query = "INSERT INTO Cursos (TITLE, TEXT, LINK, IMAGE) VALUES ('$title', '$text', '$link', '$image')";

        if (mysqli_query($connection, $query)) {
            http_response_code(201);
            echo json_encode(['msg' => 'Novo curso inserido com sucesso!']);
        } else {
            http_response_code(500);
            echo json_encode(['error' => 'Erro ao inserir no banco de dados: ' . mysqli_error($connection)]);
        }
        mysqli_close($connection);
    } else {
        http_response_code(400);
        echo json_encode(['error' => 'Dados ausentes no formulário.']);
    }
}

function updateCurso()
{
    if (isset($_POST['ID']) && isset($_POST['TITLE']) && isset($_POST['TEXT']) && isset($_POST['LINK'])) {
        $connection = connectDatabase();
        $id = $_POST['ID'];
        $title = $_POST['TITLE'];
        $text = $_POST['TEXT'];
        $link = $_POST['LINK'];
        if (isset($_POST['IMAGE'])) $image = $_POST['IMAGE'];
        $query = "UPDATE Cursos SET TITLE = '$title', TEXT = '$text', LINK = '$link', IMAGE = " . (isset($image) ? "'$image'" : "IMAGE") . " WHERE ID = $id";

        if (mysqli_query($connection, $query)) {
            http_response_code(201);
            echo json_encode(['msg' => 'Atualização realizada com sucesso!']);
        } else {
            http_response_code(500);
            echo json_encode(['error' => 'Erro ao atualizar: ' . mysqli_error($connection)]);
        }
        mysqli_close($connection);
    } else {
        http_response_code(400);
        echo json_encode(['error' => 'Dados ausentes no formulario.']);
    }
}

function deleteCurso()
{
    if (isset($_POST['ID'])) {
        $connection = connectDatabase();
        $id = $_POST['ID'];
        $query = "DELETE FROM Cursos WHERE ID = $id";

        if (mysqli_query($connection, $query)) {
            http_response_code(201);
            echo json_encode(['msg' => 'Curso excluído com sucesso!']);
        } else {
            http_response_code(500);
            echo json_encode(['error' => 'Erro ao excluir: ' . mysqli_error($connection)]);
        }
        mysqli_close($connection);
    } else {
        http_response_code(400);
        echo json_encode(['error' => 'ID ausente no formulário.']);
    }
}
?>
