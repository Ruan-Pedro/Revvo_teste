<link rel="stylesheet" href="public/css/courses.css">
<section class="courses">
    <h2>MEUS CURSOS</h2>
    <div class="linha"></div>
    <div class="courses-container">
        <?php foreach ($cursos as $curso): ?>
        <div class="course-box">
            <img src="public/images/course_img.jpg" alt="Imagem do Card">
            <div class="content-course-box">
                <h2><?= $curso['TITLE'] ?></h2>
                <p><?= $curso['TEXT'] ?></p>
                <button>VER CURSO</button>
            </div>
        </div>
        <?php endforeach; ?>

        <div class="course-box-empty">
            <img src="public/images/add-file.png" alt="Imagem do Card">
            <span>ADICIONAR</span>
            <h3>CURSO</h3>
        </div>

    </div>

</section>