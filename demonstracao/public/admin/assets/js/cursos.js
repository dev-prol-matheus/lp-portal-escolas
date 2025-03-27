document.getElementById('searchInput').addEventListener('keyup', function() {
    const searchValue = this.value.toLowerCase();
    const rows = document.querySelectorAll('#courseTable tr');

    rows.forEach(row => {
        const curso = row.cells[1].textContent.toLowerCase();
        const descricao = row.cells[2].textContent.toLowerCase();
        if (curso.includes(searchValue) || descricao.includes(searchValue)) {
            row.style.display = '';
        } else {
            row.style.display = 'none';
        }
    });
});

function cadastrarCurso() {
    const fileInput = document.getElementById("img");
    const file = fileInput.files[0];

    if (!file) {
        alert("É necessário enviar uma imagem para seu curso.");
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

            /** cadastrar informações do curso */
            const descricao = document.getElementById("description").value;
            const segmento = document.getElementById("segmento").value;
            const data_inicio = document.getElementById("startDate").value;
            const turno = document.getElementById("turno").value;
            const valor = document.getElementById("valor").value;
            // const inicio_turma = document.getElementById("startDate").value;

            if (!descricao || !segmento || !data_inicio || !turno) {
                alert("Erro: alguns campos são obrigatórios serem preenchido.");
                return false;
            }

            const datas = {
                acao: "cadastrar",
                img: data.nome_imagem,
                descricao: descricao,
                segmento: segmento,
                data_inicio: data_inicio,
                turno: turno,
                valor: valor,
                // inicio_turma: inicio_turma
            };

            fetch("../../api/controllers/cursos.php", {
                method: "POST",
                body: JSON.stringify(datas)
            })
                .then(response => response.json())
                .then(data => {
                    const feedbackModal = new bootstrap.Modal(document.getElementById("feedbackModal"));
                const inscricaoModal = bootstrap.Modal.getInstance(document.getElementById("addCourseModal"));
        
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
const input = document.getElementById("valor");

        // Ao focar no campo, remover "R$" para permitir a edição
        input.addEventListener("focus", function() {
            // Se o valor começar com "R$", removemos ele para facilitar a edição
            if (input.value === "R$") {
                input.value = "";
            } else if (input.value.startsWith("R$")) {
                // Remover "R$" para permitir a edição
                input.value = input.value.replace("R$", "").trim();
            }
        });

        // Ao perder o foco (blur), formatar o valor e adicionar "R$" novamente
        input.addEventListener("blur", function() {
            if (input.value.trim() === "") {
                input.value = ""; // Deixa o campo vazio se nada for digitado
            } else {
                // Se o usuário digitou algo, formatamos com "R$"
                input.value = formatarValor(input.value);
            }
        });

        // Função para formatar o valor com "R$" e separar as casas decimais
        function formatarValor(valor) {
            // Remove qualquer caractere não numérico
            let num = valor.replace(/\D/g, "");
            if (num.length > 2) {
                // Adiciona a vírgula antes dos últimos 2 dígitos
                num = num.replace(/(\d)(\d{2})$/, "$1,$2");
            }
            return "R$ " + num;
        }

        // Enquanto o usuário digita, formatar para incluir "R$"
        input.addEventListener("input", function() {
            let valor = input.value;

            // Verificar se o valor já tem "R$"
            if (valor.startsWith("R$")) {
                // Formatar com "R$"
                input.value = formatarValor(valor);
            } else {
                // Se o usuário apagar o "R$", garantir que ele será adicionado de novo
                input.value = "R$ " + valor.replace(/\D/g, "");
            }
        });
    function trocarStatus(status_curso, id) {
        const data = {
            acao: 'desativarcursos',
            status_curso: status_curso,
            id: id
        }
        fetch("../../api/controllers/cursos.php", {
            method: 'POST',
            body: JSON.stringify(data)
        })
            .then(response => response.json())
            .then(data => {
    
            window.location.reload();
    
            })
            .catch(error => {
                console.error("Erro:", error);
            });
    }
    function deletarcurso(idcurso) {
        if (confirm("Tem certeza que deseja excluir este item?")) {
            const datas = {
                acao: "deletar",
                id_curso: idcurso
            };
    
            fetch("../../api/controllers/cursos.php", {
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
function atualizarCurso() {
    
    const fileInput = document.getElementById("update_img");
    const file = fileInput.files[0];

    if (!file) {
        alert("É necessário enviar uma imagem para seu curso.");
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

            /** cadastrar informações do curso */
            const descricao = document.getElementById("update_description").value;
            const segmento = document.getElementById("update_segmento").value;
            const data_inicio = document.getElementById("update_startDate").value;
            const turno = document.getElementById("update_turno").value;
            const valor = document.getElementById("update_valor").value;
            // const inicio_turma = document.getElementById("startDate").value;

            if (!descricao || !segmento || !data_inicio || !turno) {
                alert("Erro: alguns campos são obrigatórios serem preenchido.");
                return false;
            }

            const datas = {
                acao: "cadastrar",
                img: data.nome_imagem,
                descricao: descricao,
                segmento: segmento,
                data_inicio: data_inicio,
                turno: turno,
                valor: valor,
                // inicio_turma: inicio_turma
            };

            fetch("../../api/controllers/cursos.php", {
                method: "POST",
                body: JSON.stringify(datas)
            })
                .then(response => response.json())
                .then(data => {
                    const feedbackModal = new bootstrap.Modal(document.getElementById("feedbackModal"));
                const inscricaoModal = bootstrap.Modal.getInstance(document.getElementById("addUpdateModal"));
        
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

function deletarcurso (idcurso) {
        if (confirm("Tem certeza que deseja excluir este item?")) {
            const datas = {
                acao: "deletar",
                id_curso: idcurso
            };
    
            fetch("../../api/controllers/cursos.php", {
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
};

function coletarCurso(curso) {
    console.log(curso);
        const datas = {
            acao: "coletar",
            curso: curso,
        };

        fetch("../../api/controllers/cursos.php", {
            method: "POST",
            body: JSON.stringify(datas)
        })
            .then(response => response.json())
            .then(data => {
                document.getElementById("idCursoUpdate").value = data.data.curso;
                document.getElementById("update_description").value = data.data.descricao;
                document.getElementById("update_segmento").value = data.data.segmento;
                document.getElementById("update_turno").value = data.data.turno;
                document.getElementById("update_valor").value = data.data.valor;
            })
            .catch(error => {
                console.error("Erro:", error);
            });
    };

