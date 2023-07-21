<?php
    // Pega os dados dos cursos no banco de dados e coloca em um array
    require_once  __DIR__ . '/../../../config/config.php';
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
?>
<link rel="stylesheet" href="dist/css/courses.min.css">
<section class="courses">
    <h2>MEUS CURSOS</h2>
    <div class="linha"></div>
    <div class="courses-container">
        <?php foreach ($cursos as $curso) : ?>
            <?php
                //verificar o a data que foi criado o curso e insere a faixa de 'novo'
                $dataAtual = time();
                $dataCriacao = strtotime($curso['createdAt']);
                $diferencaSegundos = $dataAtual - $dataCriacao;
                $diferencaDias = floor($diferencaSegundos / (60 * 60 * 24));
                $mostrarFaixa = $diferencaDias < 14;
            ?>
            <div class="course-box">
                <?php if ($mostrarFaixa): ?>
                <span class="faixa-inclinada"></span>
                <?php endif; ?>
                <img src="<?= 'public/images/' . $curso['IMAGE'] ?>" alt="Imagem do Card">
                <div class="content-course-box">
                    <h2><?= $curso['TITLE'] ?></h2>
                    <p><?= $curso['TEXT'] ?></p>
                </div>
                <button onclick="exibirModalCRUD(<?= htmlspecialchars(json_encode($curso)) ?>)">VER CURSO</button>
            </div>
        <?php endforeach; ?>
        <!-- CRUD para inserir novo curso-->
        <div onclick="exibirModalCRUD()" class="course-box-empty">
            <img src="public/images/add-file.png" alt="Imagem do Card">
            <span>ADICIONAR</span>
            <h3>CURSO</h3>
        </div>
    </div>
</section>