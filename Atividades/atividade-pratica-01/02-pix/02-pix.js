function carregarBancos() {
  fetch("https://brasilapi.com.br/api/banks/v1")
    .then((response) => response.json())
    .then((data) => preencherBancos(data))
    .catch((error) => console.error(error));
}

function preencherBancos(data) {
  let bancos = document.getElementById("bancos");

  for (let index in data) {
    const { name } = data[index];

    let option = document.createElement("option");
    option.value = name;
    option.innerHTML = `${name}`;

    bancos.appendChild(option);
  }
}

function validateChavePix() {
  console.log("entrou validate");

  var hoje = new Date();
  var dia = String(hoje.getDate()).padStart(2, "0");
  var mes = String(hoje.getMonth() + 1).padStart(2, "0");
  var ano = hoje.getFullYear();

  var data = document.getElementById("dataTransacao").value;

  hoje = ano + "-" + mes + "-" + dia;

  var tipoChavePix = document.querySelector(
    'input[name="destinatario"]:checked'
  ).value;

  var tipoTransacao = document.getElementById("idTipoTransacao");
  var tipoTransacao = tipoTransacao.options[tipoTransacao.selectedIndex].value;

  console.log(tipoTransacao);
  var chave = document.getElementById("CHAVEPIX").value;

  var valorTransacao = document.getElementById("valorTransacao").value;

  var banco = document.getElementById("bancos");
  var banco = banco.options[banco.selectedIndex].value;

  var saldo = document.getElementById("saldo").value;

  if (data >= hoje) {
    if (matchChavePix(tipoChavePix, chave) & (tipoTransacao == "envio")) {
      balanco = eval(saldo - valorTransacao);
      window.alert(
        `Você irá realizar uma transação do tipo ${tipoTransacao}\nUm valor de:${valorTransacao}\nPara a chave:${chave}\nCujo Banco é o: ${banco}\nSeu saldo agora é de: ${balanco}`
      );
    }
    if (matchChavePix(tipoChavePix, chave) & (tipoTransacao == "recebimento")) {
      balanco = eval(saldo + valorTransacao);
      window.alert(
        `Você irá realizar uma transação do tipo ${tipoTransacao}\nUm valor de:${valorTransacao}\nPara a chave:${chave}\nCujo Banco é o: ${banco}\nSeu saldo será de: ${balanco}`
      );
    } else {
      window.alert("Data Inválida");
    }
  }
}

function matchChavePix(tipoChavePix, chave) {
  console.log("entrou no match");

  console.log("Destinatário", tipoChavePix);
  console.log("Chave", chave);

  if (tipoChavePix == "CPF") {
    if (TestaCPF(chave)) {
      console.log("é cpf ");
      return true;
    } else {
      windows.alert("CPF inválido");
    }
  }
  if (tipoChavePix == "CNPJ") {
    if (validarCNPJ(chave)) {
      console.log("é CNPJ");
      return true;
    } else {
      window.alert("CNPJ Inválido");
    }
  }
  if (tipoChavePix == "e-mail") {
    if (checarEmail(chave)) {
      console.log("é e-mail");
      return true;
    } else {
      window.alert("e-mail Inválido");
    }
  }
  if (tipoChavePix == "celular") {
    if (validarTelefone(chave)) {
      console.log("é celular");
      return true;
    } else {
      window.alert("celular Inválido");
    }
  }
  if (tipoChavePix == "chave aleatória") {
    console.log("é chave aleatória");
    return true;
  }
}

function checarEmail(chave) {
  if (chave == "" || chave.indexOf("@") == -1 || chave.indexOf(".") == -1) {
    windows.alert("Por favor, informe um E-MAIL válido!");
    return false;
  }
}

function TestaCPF(chave) {
  var soma;
  var resto;
  soma = 0;
  if (chave == "00000000000") return false;

  for (i = 1; i <= 9; i++)
    soma = soma + parseInt(chave.substring(i - 1, i)) * (11 - i);
  resto = (soma * 10) % 11;

  if (resto == 10 || resto == 11) resto = 0;
  if (resto != parseInt(chave.substring(9, 10))) return false;

  soma = 0;
  for (i = 1; i <= 10; i++)
    soma = soma + parseInt(chave.substring(i - 1, i)) * (12 - i);
  resto = (soma * 10) % 11;

  if (resto == 10 || Resto == 11) Resto = 0;
  if (Resto != parseInt(chave.substring(10, 11))) return false;
  return true;
}

// referência https://www.geradorcnpj.com/javascript-validar-cnpj.htm
function validarCNPJ(chave) {
  chave = chave.replace(/[^\d]+/g, "");

  if (chave == "") return false;

  if (chave.length != 14) return false;

  if (
    chave == "00000000000000" ||
    chave == "11111111111111" ||
    chave == "22222222222222" ||
    chave == "33333333333333" ||
    chave == "44444444444444" ||
    chave == "55555555555555" ||
    chave == "66666666666666" ||
    chave == "77777777777777" ||
    chave == "88888888888888" ||
    chave == "99999999999999"
  )
    return false;

  tamanho = chave.length - 2;
  numeros = chave.substring(0, tamanho);
  digitos = chave.substring(tamanho);
  soma = 0;
  pos = tamanho - 7;
  for (i = tamanho; i >= 1; i--) {
    soma += numeros.charAt(tamanho - i) * pos--;
    if (pos < 2) pos = 9;
  }
  resultado = soma % 11 < 2 ? 0 : 11 - (soma % 11);
  if (resultado != digitos.charAt(0)) return false;

  tamanho = tamanho + 1;
  numeros = chave.substring(0, tamanho);
  soma = 0;
  pos = tamanho - 7;
  for (i = tamanho; i >= 1; i--) {
    soma += numeros.charAt(tamanho - i) * pos--;
    if (pos < 2) pos = 9;
  }
  resultado = soma % 11 < 2 ? 0 : 11 - (soma % 11);
  if (resultado != digitos.charAt(1)) return false;

  return true;
}

function validarTelefone(chave) {
  var resultado =
    /^(1\s|1|)?((\(\d{3}\))|\d{3})(\-|\s)?(\d{3})(\-|\s)?(\d{4})$/.test(chave);

  return resultado;
}
