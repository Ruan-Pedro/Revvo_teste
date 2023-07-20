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



// FUNÇÃO PARA ABRIR O MODAL
function exibirModal() {
  document.getElementById('modal').style.display = 'flex';
}

function exibirModalCRUD() {
  document.getElementById('modal-crud').style.display = 'flex';
  console.log(document.getElementById('modal-crud'));
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