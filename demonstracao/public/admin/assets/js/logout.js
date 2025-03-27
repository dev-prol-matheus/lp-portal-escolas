function logout() {
    const datas = {
        acao: "logout"
    };

    fetch("../../api/controllers/usuarios.php", {
        method: "POST",
        body: JSON.stringify(datas)
    })
        .then(response => response.json())
        .then(data => {
            if (data.status) {
                /** encaminhar para página de login */
                window.location.href = "index.php";
            };
        })
        .catch(error => {
            console.error("Erro:", error);
        });
};