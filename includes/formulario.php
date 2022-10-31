<main>
    <section>
        <a href="index.php">
            <button class="btn btn-primary m-3">Voltar</button>
        </a>
    </section>
    <h2 class="m-3"><?=TITLE?></h2>
    <form method="post">
        <div class="form-group m-3">
            <label for="titulo">Título</label>
            <input type="text" class="form-control" name="titulo" value="<?=$obVaga->titulo?>">
        </div>
        <div class="form-group m-3">
            <label for="descricao">Descrição</label>
            <textarea class="form-control" name="descricao" rows="5"><?=$obVaga->descricao?></textarea>
        </div>
        <div class="form-group m-3">
            <label for="descricao">Status</label>
            <div>
                <div class="form-check form-check-inline">
                    <label class="form-control">
                        <input type="radio" name="ativo" value="s" checked> Ativo
                    </label>
                </div>
                <div class="form-check form-check-inline">
                    <label class="form-control">
                        <input type="radio" name="ativo" value="n" <?=$obVaga->ativo == 'n' ? 'checked' : ''?>> Inativo
                    </label>
                </div>
            </div>
        </div>
        <div class="form-group m-3">
            <button type="submit" class="btn btn-success">Salvar</button>
        </div>
    </form>
</main>