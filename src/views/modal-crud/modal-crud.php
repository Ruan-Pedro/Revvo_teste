<link rel="stylesheet" href="dist/css/modal-crud.min.css">
<div id="modal-crud" class="modal-crud">
    <input id="idInput" type="hidden" value="id">
    <div class="modal-crud-content">
        <span class="close" onclick="fecharModalCRUD()">&times;</span>
        <img id="image_db" src="public/images/course_img.jpg" alt="Imagem do Card">
        <div class="modal-crud-text">
            <input type="text" id="titleInput" placeholder="Titulo">
            <input type="text" id="textInput" placeholder="Descrição">
            <input type="text" id="linkInput" placeholder="Link">
            <select id="imageInput">
                <option value="default_img.jpg" disabled selected>Selecione um nome da imagem + extensão</option>
                <option value="default_img.jpg">default_img.jpg</option>
                <option value="course_img.jpg">course_img.jpg</option>
            </select>
            <div class="buttons">
                <!-- <button onclick="inserirCurso()">Inserir</button> -->
                <button id="insert-btn"></button>
                <button id="delete-btn" onclick="excluirCurso()">EXCLUIR</button>
            </div>
        </div>
    </div>
</div>
<script src="/dist/js/crud.js"></script>