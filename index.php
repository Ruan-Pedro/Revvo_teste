<?php require_once  __DIR__ . '/config/config.php';
    $connection = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
    if (!$connection) {
        die('Erro na conexão: ' . mysqli_connect_error());
    }
    $query = "SELECT * FROM Cursos";
    $result = mysqli_query($connection, $query);
    $cursos = array();
    while ($row = mysqli_fetch_assoc($result)) {
        $cursos[] = $row;
    }
    // foreach ($cursos as $curso) {
    //     // Acesse os valores de cada coluna por meio do array associativo $curso
    //     // echo "ID: " . $curso['ID'] . ", IMAGE: " . $curso['IMAGE'] . ", TITLE: " . $curso['TITLE'] . ", TEXT: " . $curso['TEXT'] . "<br>";
    //     echo $curso['TITLE'];
    // }
    ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Revvo</title>
    <link rel="stylesheet" href="public/css/main.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Sharp:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
</head>

<body>
    <?php
    include __DIR__ . '/src/views/index.php';
    ?>
</body>

</html>