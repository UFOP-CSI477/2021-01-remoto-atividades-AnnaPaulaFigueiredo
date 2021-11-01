const input_from_amount = document.getElementById("from_amount");
const label_to_currency = document.getElementById("to_currency");
const input_to_amount = document.getElementById("to_amount");

const tax_info = document.getElementById("tax_info");
const swap = document.getElementById("swap");

function calcular() {
  var label_from_currency = document.getElementById("from_currency");
  var from_currency =
    label_from_currency.options[label_from_currency.selectedIndex].value;

  var label_to_currency = document.getElementById("to_currency");
  var to_currency =
    label_to_currency.options[label_to_currency.selectedIndex].value;

  var from_amount = document.getElementById("from_amount").value;

  if (from_currency == to_currency || from_currency <= 0) {
    window.alert(
      "Não foi possível realizar operação !\nVerifique os dados informados!"
    );
  }

  if (from_currency == "EUR") {
    console.log("transform euro em ..");
    console.log(to_currency);
    getApi(from_currency, to_currency, from_amount);
    getGraph(from_currency, to_currency);
  }

  if (from_currency == "BRL") {
    console.log("transform real em ..");
    getApi(from_currency, to_currency, from_amount);
  }

  if (from_currency == "USD") {
    console.log("transform dolar em ..");
    getApi(from_currency, to_currency, from_amount);
  }
}

function getApi(from_currency, to_currency, value) {
  var stringApi =
    "https://economia.awesomeapi.com.br/json/daily/" +
    from_currency +
    "-" +
    to_currency;
  console.log(stringApi);
  fetch(stringApi)
    .then((response) => response.json())
    .then((data) => calculateValue(data, value))
    .catch((error) => console.error(error));
}

function getGraph(from_currency, to_currency) {
  var stringApi =
    "https://economia.awesomeapi.com.br/json/daily/" +
    from_currency +
    "-" +
    to_currency +
    "/30";
  console.log(stringApi);
  fetch(stringApi)
    .then((response) => response.json())
    .then((data) => getDataGraph(data))
    .catch((error) => console.error(error));
}

function getDataGraph(data) {
  const labels1 = [];
  const elements1 = [];

  for (var i = 0; i < 30; i++) {
    labels1.push(data[i]);
    elements1.push(data[i]["high"]);
  }
}
function calculateValue(data, value) {
  console.log(data[0]["high"]);

  var result = Number(data[0]["high"]) * Number(value);

  document.getElementById("to_amount").value = result;

  console.log(result);
}

