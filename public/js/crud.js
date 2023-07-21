const API_URL = "http://localhost:8080";
function inserirCurso() {
  const title = document.getElementById("titleInput").value;
  const text = document.getElementById("textInput").value;
  const link = document.getElementById("linkInput").value;
  const image = document.getElementById("imageInput").value;

  fetch(`${API_URL}/src/controllers/cursoController.php`, {
    method: "POST",
    headers: {
      "Content-Type": "application/x-www-form-urlencoded",
    },
    body: `action=insert&TITLE=${title}&TEXT=${text}&LINK=${link}&IMAGE=${image}`,
  })
    .then((response) => {
      document.getElementById("modal-crud").style.display = "none";
      response.json();
      location.reload();
    })
    .catch((error) => {
      console.error("Erro:", error);
      alert(error);
    });
}

function atualizarCurso() {
  const id = document.getElementById("idInput").value;
  const title = document.getElementById("titleInput").value;
  const text = document.getElementById("textInput").value;
  const link = document.getElementById("linkInput").value;
  const image = document.getElementById("imageInput").value;

  fetch(`${API_URL}/src/controllers/cursoController.php`, {
    method: "POST",
    headers: {
      "Content-Type": "application/x-www-form-urlencoded",
    },
    body: `action=update&ID=${id}&TITLE=${title}&TEXT=${text}&LINK=${link}&IMAGE=${image}`,
  }).then((response) => {
    document.getElementById("modal-crud").style.display = "none";
    response.json();
  }).catch((error) => {
    console.error("Erro:", error);
    alert(error);
  });
}

function excluirCurso() {
  console.log("aaaa");
  const id = document.getElementById("idInput").value;
  fetch(`${API_URL}/src/controllers/cursoController.php`, {
    method: "POST",
    headers: {
      "Content-Type": "application/x-www-form-urlencoded",
    },
    body: `action=delete&ID=${id}`,
  }).then((response) => {
    document.getElementById("modal-crud").style.display = "none";
    response.json();
    location.reload();
  }).catch((error) => {
    console.error("Erro:", error);
    alert(error);
  });
}
