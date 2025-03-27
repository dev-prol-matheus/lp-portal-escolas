let latitude, longitude, endereco;

(async function () {

    if (window.navigator && window.navigator.geolocation) {
        var geolocation = window.navigator.geolocation;
        geolocation.getCurrentPosition(sucesso, erro);
    } else {
        alert('Geolocalização não suportada em seu navegador.');
    };
    
    function sucesso(posicao) {
        latitude = posicao.coords.latitude; 	// Exemplo: -8.1364933
        longitude = posicao.coords.longitude; 	// Exemplo: -34.9175702
        
        // console.log(latitude, longitude);
    };
    
    function erro(error) {
        latitude    = null;
        longitude   = null;
        endereco    = null;
    };

    const cursos = await buscarCursos();
    const segmentos = await buscarSegmentos();

    popularFiltro(cursos, segmentos);
    listarCursos(cursos);

})();

async function buscarCursos() {
    const datas = {
        acao: "listar_cursos_home"
    };

    return await fetch("api/controllers/cursos.php", {
        method: "POST",
        body: JSON.stringify(datas)
    })
        .then(response => response.json())
        .then(data => {
            let cursos = [];
            if (Array.isArray(data.cursos) && data.cursos.length > 0) {
                cursos = data.cursos;
            };
            return cursos;
        })
        .catch(error => {
            console.error("Erro:", error);
        });
};

async function buscarSegmentos() {
    const datas = {
        acao: "listar_segmentos"
    };

    return await fetch("api/controllers/segmentos.php", {
        method: "POST",
        body: JSON.stringify(datas)
    })
        .then(response => response.json())
        .then(data => {
            let segmentos = [];
            if (Array.isArray(data.segmentos) && data.segmentos.length > 0) {
                segmentos = data.segmentos;
            };
            return segmentos;
        })
        .catch(error => {
            console.error("Erro:", error);
        });
};

function listarCursos(cursos) {
    const gradeCursos = document.getElementById("grade-cursos");
    gradeCursos.innerHTML = "";

    if (Array.isArray(cursos) && cursos.length > 0) {
        
        cursos.forEach(curso => {
            const data = new Date(curso.data_inicio)
            const data_time = `${data.getDate() + 1}/${data.getMonth() + 1}/${data.getFullYear()}`
            gradeCursos.innerHTML += `
                <div class="server-item" data-wow-delay="0.3s" onclick="popularCursos(${curso.curso})">
                    <div style="border-radius: 5px !important" class="rounded-top overflow-hidden">
                        <img class="img-fluida" src="./public/admin/uploads/${curso.img}" style="max-height:140px;">
                    </div>
                    <div class="card-2">
                        <h5 class="font-card">${curso.descricao}</h5>
                        <div class="info-row">

                            ${curso.valor ? '<h5 class="font-card1">Valor ' + curso.valor + '</h5>' : ''}
                            <h5 class="font-card2">Turno ${curso.descricao_turno}</h5>
                            <h5 class="font-card2">Data ${data_time}</h5>

                        </div>
                        <button class="btn btn-primary mt-1" data-bs-toggle="modal" data-bs-target="#inscricaoModal">Inscreva-se já</button>
                    </div>
                </div>
            `;
        })

    } else {
        console.error("lista de cursos não foi encontrada.");
    };
};

async function filtrarCursos() {
    const filtroCursos = document.getElementById("filtro-curso").value;
    const filtroSegmentos = document.getElementById("filtro-segmento").value;

    const datas = {
        acao: "filtrar_cursos",
        curso: filtroCursos,
        segmento: filtroSegmentos
    };

    fetch("api/controllers/cursos.php", {
        method: "POST",
        body: JSON.stringify(datas)
    })
        .then(response => response.json())
        .then(data => {
            listarCursos(data.cursos);
        })
        .catch(error => {
            console.error("Erro:", error);
        });
};

async function popularCursos(cursoSelecionado) {
    const cursos = await buscarCursos();

    const seletorCursos = document.getElementById("seletor_cursos");
    seletorCursos.innerHTML = "";

    if (Array.isArray(cursos) && cursos.length > 0) {
        cursos.forEach(curso => {
            seletorCursos.innerHTML += `
                <option value="${curso.curso}" ${curso.curso == cursoSelecionado && "selected"}>${curso.descricao}</option>
            `;
        })
    } else {
        console.error("lista de cursos não foi encontrada.");
    };
};

async function popularFiltro(cursos, segmentos) {
    const filtroCurso = document.getElementById("filtro-curso");
    const filtroSegmento = document.getElementById("filtro-segmento");

    filtroCurso.innerHTML = `<option value="">Clique para selecionar</option>`;
    filtroSegmento.innerHTML = `<option value="">Clique para selecionar</option>`;

    cursos.forEach(curso => {
        filtroCurso.innerHTML += `
            <option value="${curso.curso}">${curso.descricao}</option>`
    });

    segmentos.forEach(segmento => {
        filtroSegmento.innerHTML += `
            <option value="${segmento.segmento}">${segmento.descricao}</option>`
    });
};

async function obterLocalizacao() {

    // return new Promise((resolve, reject) => {
    //     if (navigator.geolocation) {
    //         // Solicita permissão para acessar a localização do usuário
    //         navigator.geolocation.getCurrentPosition(
    //             (position) => {
    //                 // Se o usuário permitir, pega a latitude e longitude
    //                 const latitude = position.coords.latitude;
    //                 const longitude = position.coords.longitude;

    //                 // Usar a API do Google para pegar o endereço formatado
    //                 const location = fetch(`https://maps.googleapis.com/maps/api/geocode/json?latlng=${latitude},${longitude}&key=AIzaSyDwQPtWvZTy2GNAMi7qMtmzvw3spBgk5Y8`)
    //                     .then(response => response.json())
    //                     .then(data => {
    //                         if (data.status === 'OK') {
    //                             const endereco = data.results[0].formatted_address;
    //                             resolve({ latitude, longitude, endereco });
    //                         } else {
    //                             reject('Erro ao obter o endereço');
    //                         };
    //                     })
    //                     .catch(error => reject(error));
    //             },
    //             (error) => {
    //                 // Caso o usuário negue a permissão ou ocorra outro erro
    //                 if (error.code === error.PERMISSION_DENIED) {
    //                     // reject('Permissão de localização negada');
    //                     return [];
    //                 } else {
    //                     reject('Erro ao acessar a localização');
    //                 }
    //             }
    //         );
    //     } else {
    //         reject('Geolocalização não disponível');
    //     }
    // });

    return await fetch(`https://maps.googleapis.com/maps/api/geocode/json?latlng=${latitude},${longitude}&key=AIzaSyDwQPtWvZTy2GNAMi7qMtmzvw3spBgk5Y8`)
    .then(response => response.json())
    .then(data => {

        // console.log(data);

        return {
            latitude: latitude,
            longitude: longitude,
            endereco: data.results[0].formatted_address
        };

    });
};

async function salvarInscricao() {

    const idCurso = document.getElementById("seletor_cursos").value;
    const nome = document.getElementById("nome").value;
    const telefone = document.getElementById("telefone").value;
    const email = document.getElementById("email").value;

    if (!idCurso || !nome || !telefone || !email) {
        alert("É necessário preencher todos os campos para realizar esta inscrição.");
        return false;
    };

    const regexNome = /^[A-Za-záàâãéèêíïóôõöúçñÁÀÂÃÉÈÊÍÏÓÔÕÖÚÇÑ\s]+$/;
    if (!regexNome.test(nome)) {
        alert("Por favor, insira um  nome válido (apenas letras).");
        return false;
    };

    const regexTelefone = /^\(?\d{2}\)?[\s-]?\d{4,5}-?\d{4}$/;
    if (!regexTelefone.test(telefone)) {
        alert("Por favor, insira um número de telefone válido.");
        return false;
    };

    const regexEmail = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!regexEmail.test(email)) {
        alert("Por favor, insira um e-mail válido.");
        return false;
    };

    if (latitude && longitude) {
        const localizacao = await obterLocalizacao();
        // console.log(localizacao);
        latitude = localizacao.latitude;
        longitude = localizacao.longitude;
        endereco = localizacao.endereco;
    };

    const datas = {
        acao: "salvar_inscricao",
        curso: idCurso,
        nome: nome,
        telefone: telefone,
        email: email,
        latitude: latitude,
        longitude: longitude,
        endereco: endereco
    };

    const inscricaoModal = bootstrap.Modal.getInstance(document.getElementById("inscricaoModal"));
    const feedbackModal = new bootstrap.Modal(document.getElementById("feedbackModal"));

    const feedbackIcon = document.getElementById("fm-icon");
    const titleMessage = document.getElementById("fm-title");
    const successMessage = document.getElementById("fm-description");

    try {

        const response = await fetch("api/controllers/clientes.php", {
            method: "POST",
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify(datas)
        })

        const data = await response.json();

        if (data.status) {
            feedbackIcon.classList.add("fa-check-circle", "text-success");
            titleMessage.textContent = data.title;
            successMessage.textContent = data.message;

        } else {
            feedbackIcon.classList.add("fa-circle-xmark", "text-danger");
            titleMessage.textContent = data.title;
            successMessage.textContent = data.message;
        };

        feedbackModal.show();

    } catch (error) {
        console.error("Erro ao processar cadastro:", error);

        feedbackIcon.classList.add("fa-circle-xmark", "text-danger");
        titleMessage.textContent = 'Erro';
        successMessage.textContent = 'Ocorreu um erro ao processar sua inscrição. Tente novamente mais tarde.';
        
        feedbackModal.show();
    }
}