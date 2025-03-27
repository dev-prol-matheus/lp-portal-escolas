    <!-- Modal para cadastrar novo curso -->
    <div class="modal fade" id="addUpdateModal" tabindex="-1" aria-labelledby="addUpdateModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header" style="background-color: #29166F; color: #FFF;">
                    <h5 class="modal-title" id="addUpdateModalLabel">Atualizar curso</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- Formulário de cadastro de curso -->
                    <form id="addCourseForm">
                    <div class="mb-3">
                            <label for="img" class="form-label">Imagem</label>
                            <input type="file" class="form-control" id="update_img" name="img" required>
                            <span><i>Somente imagens nos formatos JPEG ou PNG são permitidas.</i><br><i>Resolução recomendada 900x438</i></span>
                        </div>
                        <div class="mb-3">
                            <label for="description" class="form-label">Título</label>
                            <textarea class="form-control" id="update_description" name="descricao" required></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="segmento" class="form-label">Segmento</label>
                            <select class="form-select" name="segmento" id="update_segmento">
                                <option value="">Selecione</option>
                                <?php
                                $segmentos = $segmentos_models->ler_todos();

                                if (sizeof($segmentos) > 0) {
                                    foreach ($segmentos as $seg) {
                                ?>
                                    <option value="<?php echo $seg['segmento']; ?>"><?php echo $seg['descricao']; ?></option>
                                <?php }
                                } ?>
                            </select>
                            <div>
                            <label for="turno" class="form-label">Turno</label>
                            <select class="form-select" name="turno" id="update_turno">
                                <option value="">Selecione</option>
                                <?php
                                $turnos = $turnos_models->ler_todos();

                                if (sizeof($turnos) > 0) {
                                    foreach ($turnos as $tur) {
                                ?>
                                    <option value="<?php echo $tur['turno']; ?>"><?php echo $tur['descricao']; ?></option>
                                <?php }
                                } ?>
                            </select>
                            </div>
                            <div class="mb-3">
                                <label for="valor" class="form-label">Valor</label>
                                <input type="text" class="form-control" id="update_valor" name="valor" placeholder="R$0,00 não é obrigatório ser preenchido">
                        </div>
                        <div class="mb-3">
                            <label for="startDate" class="form-label">Início da Turma</label>
                            <input type="date" class="form-control" id="update_startDate" name="data_inicio" required>
                        </div>
                        </div>
                        <input type="hidden" id="idCursoUpdate">
                        <!-- <div class="mb-3">
                            <label for="startDate" class="form-label">Início da Turma</label>
                            <input type="date" class="form-control" id="startDate" name="inicio_turma" required>
                        </div> -->
                        <button type="button" onclick="atualizarCurso()" class="btn" style="background-color: #FEB21F; color: #FFF;">Atualizar</button>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                </div>
            </div>
        </div>
    </div>