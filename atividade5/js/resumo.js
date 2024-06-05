var resumo = document.getElementById("descricao");
var qtdProduto = document.getElementById("qtdProduto");
var total = document.getElementById("valorTotal");
var valorCaneca;
var valorTotalCompra

resumo.innerHTML = "<p><strong> Descrição da caneca </strong></p>" + sessionStorage.descricao + "<strong>" + sessionStorage.valor + "</strong>";
qtdProduto.addEventListener("change", calculaValorTotalCompra);
valorCaneca = sessionStorage.valor;
valorCaneca = valorCaneca.replaceAll("R$", " ");

function calculaValorTotalCompra(){
          valorCaneca = Number(valorCaneca);
          valorTotalCompra = valorCaneca * qtdProduto.value;
          total.innerHTML = "<p><strong>Valor total da compra: </strong></p>" + "<strong>R$" + valorTotalCompra
}