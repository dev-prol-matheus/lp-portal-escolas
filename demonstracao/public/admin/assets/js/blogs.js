document.getElementById("searchInput").addEventListener("keyup", function () {
    const searchValue = this.value.toLowerCase();
    const rows = document.querySelectorAll("#BlogsList tr");

    rows.forEach(row => {
        const curso = row.cells[1].textContent.toLowerCase();
        const descricao = row.cells[2].textContent.toLowerCase();
        if (curso.includes(searchValue) || descricao.includes(searchValue)) {
            row.style.display = "";
        } else {
            row.style.display = "none";
        }
    });
});

function cadastrarBlog() {
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

            const titulo = document.getElementById("title").value;
            const descricao = tinymce.get('description').getContent();

            const datas = {
                acao: "cadastrar",
                img: data.nome_imagem,
                titulo: titulo,
                descricao: descricao,
            };

            fetch("../../api/controllers/blogs.php", {
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

        })
        .catch(error => {
            console.error("Erro:", error);
        });
};

function deletarBlog(idBlog) {
    if (confirm("Tem certeza que deseja excluir este item?")) {
        const datas = {
            acao: "deletar",
            id_blog: idBlog
        };

        fetch("../../api/controllers/blogs.php", {
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