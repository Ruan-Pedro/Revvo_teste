// configuração do carrossel swiper.js
const swiper = new Swiper('.swiper', {
    // Optional parameters
    direction: 'horizontal',
    loop: true,
  
    // If we need pagination
    pagination: {
      el: '.swiper-pagination',
    },
  
    // Navigation arrows
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
  
    // And if we need scrollbar
    scrollbar: {
      el: '.swiper-scrollbar',
    },
  });

function exibirModal() {
  document.getElementById('modal').style.display = 'flex';
}
function atualizarCamposModal(curso) {
  document.getElementById('idInput').value = curso.ID;
  document.getElementById('titleInput').value = curso.TITLE;
  document.getElementById('textInput').value = curso.TEXT;
  document.getElementById('linkInput').value = curso.LINK;
  document.getElementById('imageInput').value = curso.IMAGE;
  document.getElementById('image_db').src = `public/images/${curso.IMAGE}`;
}
function limparCampos() {
  document.getElementById('idInput').value = "";
  document.getElementById('titleInput').value = "";
  document.getElementById('textInput').value = "";
  document.getElementById('linkInput').value = "";
  document.getElementById('imageInput').value = "";
}
function exibirModalCRUD(curso) {
  if(curso) {
    atualizarCamposModal(curso);
    document.getElementById('insert-btn').setAttribute('onclick', 'atualizarCurso()');
    document.getElementById('delete-btn').style.display = 'block'
    document.getElementById('insert-btn').textContent = 'ATUALIZAR';
  } else {
    limparCampos();
    document.getElementById('insert-btn').setAttribute('onclick', 'inserirCurso()');
    document.getElementById('delete-btn').style.display = 'none'
    document.getElementById('insert-btn').textContent = 'INSERIR'
  }
  document.getElementById('modal-crud').style.display = 'flex';
}

// FECHAR MODAIS
function fecharModal() {
  document.getElementById('modal').style.display = 'none';
}
function fecharModalCRUD() {
  document.getElementById('modal-crud').style.display = 'none';
}

// MODAL APARECE AO CARREGAR A PÁGINA
window.onload = function() {
  exibirModal();
};