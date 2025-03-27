<!-- Modal para cadastrar novo blog -->
<div class="modal fade" id="addBlogModal" tabindex="-1" aria-labelledby="addBlogModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header" style="background-color: #29166F; color: #FFF;">
                <h5 class="modal-title" id="addBlogModalLabel">Cadastrar Novo Banner</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Formulário de cadastro de blog -->
                <form class="addBlogForm">
                <div class="mb-3">
        <label for="img" class="label-img">Escolha uma Imagem</label>
        <input type="file" name="img" id="img" required>
        <button type="button" onclick="carregarBanner()" class="btn" style="background-color: #FEB21F; color: #FFF; margin: 15px;">Carregar</button>
        <span style="font-size: 15px"><i>Resolução Recomendada 1440x460</i></span>
        </div>
    </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
            </div>
        </div>
    </div>
</div>