function carregarNames() {
  fetch("https://servicodados.ibge.gov.br/api/v2/censos/nomes/ranking")
    .then((response) => response.json())
    .then((data) => preencherSelectNames(data))
    .catch((error) => console.error(error));
}

async function getData() {
  const response = await fetch(
    "https://servicodados.ibge.gov.br/api/v2/censos/nomes/ranking"
  );

  return response.json();
}

function preencherSelectNames(data) {
  let select_names = document.getElementById("select_names");

  for (const d of data) {
    for (const res of d.res) {
      const { nome } = res;

      let option = document.createElement("option");

      option.value = nome;
      option.innerHTML = nome;
      select_names.appendChild(option);
    }
  }
}

function mostrarRanking() {
  const selected_name = document.getElementById("select_names");
  const select_index = selected_name.selectedIndex;
  const select_value = selected_name.options[select_index].value;

  window.alert(`Você selecionou o nome: ${select_value}`);
}

async function carregarRanking() {
  const apiResponse = await getData();
  const selected_name = document.getElementById("select_names");
  const select_index = selected_name.selectedIndex;
  const select_value = selected_name.options[select_index].value;

  for (const d of apiResponse) {
    for (const res of d.res) {
      const { nome, ranking } = res;

      if (nome === select_value) {
        document.getElementById("result-ranking").innerHTML =
          "Posição:" + ranking;
      }
    }
  }
}
