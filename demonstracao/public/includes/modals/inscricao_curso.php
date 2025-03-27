<div class="modal fade" id="inscricaoModal" tabindex="-1" aria-labelledby="inscricaoModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="inscricaoModalLabel">Inscrição no Curso</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fechar"></button>
            </div>
            <div class="modal-body">
                <form class="form" id="idformulario">
                    <div class="row g-3">
                        <div class="col-12">
                            <select id="seletor_cursos" name="curso" class="form-select bg-light border-0" style="height: 55px; width: 100%; max-width: 100%; overflow-x: auto;" required>
                                <option value="" disabled selected>Selecione o Curso</option>
                            </select>
                        </div>
                        <div class="col-12">
                            <input id="nome" class="form-control bg-light border-0" placeholder="Seu Nome" style="height: 55px;" required>
                        </div>
                        <div class="col-12">
                            <input id="telefone" class="form-control bg-light border-0" placeholder="Seu Telefone" style="height: 55px;" required>
                        </div>
                        <div class="col-12">
                            <input id="email" class="form-control bg-light border-0" placeholder="Seu E-mail" style="height: 55px;" required>
                        </div>
                        <div class="col-12">
                            <button class="btn btn-secondary w-100 py-3" onclick="salvarInscricao()" type="button">Realizar inscrição</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>