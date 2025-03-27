function carregarBanner() {
    const fileInput = document.getElementById("img");
    const file = fileInput.files[0];

    if (!file) {
        alert("É necessário enviar uma imagem para seu blog.");
        return false;
    };

    const formData = new FormData();
    formData.append("imagem", file);

    /** cadastrar imagem do curso primeiro */
    fetch("../../api/utils/UploadImagem.php", {
        method: "POST",
        body: formData
    })
        .then(response => response.json())
        .then(data => {

            if (data.status) {
                const datas = {
                    acao: "cadastrar",
                    img: data.nome_imagem
                };

                fetch("../../api/controllers/banners.php", {
                    method: "POST",
                    body: JSON.stringify(datas)
                })
                    .then(response => response.json())
                    .then(data => {

                        const feedbackModal = new bootstrap.Modal(document.getElementById("feedbackModal"));
                    const inscricaoModal = bootstrap.Modal.getInstance(document.getElementById("addBlogModal"));
            
                    const feedbackIcon = document.getElementById("fm-icon");
                    const titleMessage = document.getElementById("fm-title");
                    const successMessage = document.getElementById("fm-description");
            
                    if (data.status) {
                        feedbackIcon.classList.add("fa-check-circle", "text-success");
                        titleMessage.textContent = data.title;
                        successMessage.textContent = data.message;
            
                        inscricaoModal.hide();
                        feedbackModal.show();
                        
                    } else {
                        feedbackIcon.classList.add("fa-circle-xmark", "text-danger");
                        titleMessage.textContent = data.title;
                        successMessage.textContent = data.message;
            
                        inscricaoModal.hide();
                        feedbackModal.show();
                    }

                    })
                    .catch(error => {
                        console.error("Erro:", error);
                    });
            } else {
                alert(data.message);
            };

        })
        .catch(error => {
            console.error("Erro:", error);
        });
};

function definirBannerPrincipal(idBanner) {
    console.log(idBanner);

    const datas = {
        acao: "definir_principal",
        id: idBanner
    };

    fetch("../../api/controllers/banners.php", {
        method: "POST",
        body: JSON.stringify(datas)
    })
        .then(response => response.json())
        .then(data => {

        window.location.reload();

        })
        .catch(error => {
            console.error("Erro:", error);
        });
};
function deletarBanner(idbanner) {
    if (confirm("Tem certeza que deseja excluir este item?")) {
        const datas = {
            acao: "deletar",
            id_banner: idbanner
        };

        fetch("../../api/controllers/banners.php", {
            method: "POST",
            body: JSON.stringify(datas)
        })
            .then(response => response.json())
            .then(data => {
                window.location.reload();
            })
            .catch(error => {
                console.error("Erro:", error);
            });
    };
};