<link rel="stylesheet" href="public/css/modal-crud.css">
<div id="modal-crud" class="modal-crud">
    <div class="modal-crud-content">
        <span class="close" onclick="fecharModalCRUD()">&times;</span>
        <img src="public/images/course_img.jpg" alt="Imagem do Card">
        <div class="modal-crud-text">
            <input type="text" name="TITLE" value="" placeholder="Titulo">
            <input type="text" name="TEXT" value="" placeholder="Descrição">
            <input type="text" name="LINK" value="" placeholder="Link da Imagem">
            <div class="buttons">
                <button onclick="fecharModalCRUD()">Atualizar</button>
                <button onclick="fecharModalCRUD()">Excluir</button>
            </div>
        </div>
    </div>
</div>