function login() {
    const email = document.getElementById("email").value;
    const senha = document.getElementById("senha").value;

    const mensagem = document.getElementById("mensagem");
    mensagem.innerHTML = "";

    const datas = {
        acao: "login",
        email: email,
        senha: senha
    };

    if (!email || !senha) {
        mensagem.innerHTML = "É necesário preencher os campos para entrar no sistema.";
        return false;
    };

    fetch("../../api/controllers/usuarios.php", {
        method: "POST",
        body: JSON.stringify(datas)
    })
        .then(response => response.json())
        .then(data => {

            if (data.status) {
                window.location.href = "leads.php";
            } else {
                mensagem.innerHTML = data.message;
            };

        })
        .catch(error => {
            console.error("Erro:", error);
        });
};