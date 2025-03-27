function atualizarStatusCliente(idCliente) {

    const status = document.getElementById("status-cliente").value;
    const datas = {
        acao: "atualizar_status_cliente",
        cliente: idCliente,
        status: status
    };

    fetch("../../api/controllers/clientes.php", {
        method: "POST",
        body: JSON.stringify(datas)
    })
        .then(response => response.json())
        .then(data => {

            if (data.status) {
                window.location.reload();
            } else {
                alert(data.message);
            };

        })
        .catch(error => {
            console.error("Erro:", error);
        });
};