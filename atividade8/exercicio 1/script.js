let nome = document.querySelector("#nome");
let job = document.querySelector("#job");
let form = document.querySelector("#form");

form.addEventListener("submit", function (event) {
  event.preventDefault(); //o form nao sera atualizado

  //pegando as infos digitadas nos campos
  let dados = {
    nome: nome.value,
    job: job.value
  };

  fetch("https://reqres.in/api/users", {
    method: "POST",
    body: JSON.stringify(dados)
  }).then(function(response){
    return response.json()
  }).then(function(response) {
    alert("Usuario cadastrado com sucesso!")
  })
});
