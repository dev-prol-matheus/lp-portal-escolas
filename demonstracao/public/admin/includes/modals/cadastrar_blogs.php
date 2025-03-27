<!-- Modal para cadastrar novo blog -->
<div class="modal fade" id="addBlogModal" tabindex="-1" aria-labelledby="addBlogModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header" style="background-color: #29166F; color: #FFF;">
                <h5 class="modal-title" id="addBlogModalLabel">Cadastrar Novo Blog</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Formulário de cadastro de blog -->
                <form id="addBlogForm">
                    <div class="mb-3">
                        <label for="img" class="form-label">Imagem</label>
                        <input type="file" class="form-control" id="img" name="img" required>
                        <span><i>Somente imagens nos formatos JPEG ou PNG são permitidas.</i><br><i>Resolução recomendada 800x600</i></span>
                    </div>
                    <div class="mb-3">
                        <label for="title" class="form-label">Título</label>
                        <input type="text" class="form-control" id="title" name="titulo" required>
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Descrição</label>
                        <textarea class="form-control" id="description" name="descricao" required></textarea>
                    </div>
                    <button type="button" onclick="cadastrarBlog()" class="btn" style="background-color: #FEB21F; color: #FFF;">Salvar</button>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
            </div>
        </div>
    </div>
</div>