var resumo = document.getElementById("descricao");
var qtdProduto = document.getElementById("qtdeProduto");
var total = document.getElementById("valorTotal");
var valor = document.getElementById("valor");
var valorCaneca;
var valorTotalCompra

resumo.innerHTML = "<p><strong> Descrição da caneca </strong></p>" + sessionStorage.descricao + "<strong>" + sessionStorage.valor + "</strong>";
qtdeProduto.addEventListener("change", calculaValorTotalCompra);
valorCaneca = Number(sessionStorage.valor.replace("R$", "").trim());


function calculaValorTotalCompra(){
          valorTotalCompra = valorCaneca * qtdProduto.value;
          total.innerHTML = "<p><strong>Valor total da compra: </strong></p>" + "<strong> R$ " + valorTotalCompra + "</strong>";
}