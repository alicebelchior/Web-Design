let name = document.querySelector("#name");
let job = document.querySelector("#job");
let form = document.querySelector("#form");

form.addEventListener("submit", function (event) {
  event.preventDefault(); //o form nao sera atualizado

  //pegando as infos digitadas nos campos
  let dados = {
    name: name.value,
    job: job.value
  };

  console.log(dados);
});
