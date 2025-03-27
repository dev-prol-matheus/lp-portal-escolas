function salvarSenha() {
    var senha = document.getElementById("senha").value;
    localStorage.setItem("senha", senha);
    document.getElementById("mensagem").innerText = "Senha salva com sucesso!";
};

// Esta função pode ser chamada em qualquer lugar do seu código para recuperar a senha salva.
function lembrarSenha() {
    var senhaSalva = localStorage.getItem("senha");
    if (senhaSalva) {
        alert("Sua senha é: " + senhaSalva);
    } else {
        alert("Nenhuma senha foi salva ainda.");
    };
};

function aplicarFiltro(filtro) {
    const forms = document.getElementById(filtro);
    if (forms) {
        forms.submit();
    } else {
        console.error("Nenhum filtro encontrado.");
    };
};