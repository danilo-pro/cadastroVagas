<main>
    <h2 class="m-3">Excluir Vaga</h2>
    <form method="post">
        <div class="form-group m-3">
            <p>Você deseja realmente excluir a vaga <strong><?=$obVaga->titulo?></strong>?</p>
        </div>        
        <div class="form-group m-3">
            <a href="index.php">
                <button type="button" class="btn btn-primary m-3">Cancelar</button>
            </a>
            <button type="submit" name="excluir" class="btn btn-danger">Excluir</button>
        </div>
    </form>
</main>