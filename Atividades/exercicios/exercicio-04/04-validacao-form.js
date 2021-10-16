function Pessoa(nome, sobrenome, idade, curso, celular) {
  this.nome = nome;
  this.sobrenome = sobrenome;
  this.idade = idade;
  this.curso = curso;
  this.celular = celular;
}

function carregar_dados_do_form() {
  const nome = document.frmDados.nome.value;
  const sobrenome = document.frmDados.sobrenome.value;
  const idade = document.frmDados.idade.value;
  const curso = document.frmDados.curso.value;
  const celular = document.frmDados.celular.value;

  if (!nome || nome.length === 0) {
    return window.alert("Nome está vazio ou incorreto!");
  }

  if (!sobrenome || sobrenome.length === 0) {
    return window.alert("Sobrenome vazio ou incorreto!");
  }

  if (!idade || isNaN(parseInt(idade)) || idade === 0 || idade >= 120) {
    return window.alert("Idade está vazio ou incorreto!");
  }

  if (curso === "default") {
    return window.alert("Selecione um curso válido!");
  }

  if (!celular || celular.length < 9) {
    return window.alert("Celular inválido!");
  }

  const pessoa = new Pessoa(nome, sobrenome, idade, curso, celular);

  window.alert(
    `Dados carregado com sucesso: ${pessoa.nome} ${pessoa.idade} ${pessoa.curso} ${celular}`
  );
}
