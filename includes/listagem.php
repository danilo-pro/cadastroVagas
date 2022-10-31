<?php


    $resultados = '';
    foreach($vagas as $vaga) {
        $resultados .= '<tr>
                            <td>'.$vaga->id.'</td>
                            <td>'.$vaga->titulo.'</td>
                            <td>'.$vaga->descricao.'</td>
                            <td>'.($vaga->ativo == 's' ? 'Ativo' : 'Inativo').'</td>
                            <td>'.date('d/m/Y', strtotime($vaga->data)).'</td>
                            <td>
                                <a href="editar.php?id='.$vaga->id.'">
                                    <button type="button" class="btn btn-warning">Editar</button>
                                </a>
                                <a href="excluir.php?id='.$vaga->id.'">                                    
                                    <button type="button" class="btn btn-danger">Excluir</button>
                                </a>
                            </td>
                        </tr>';
    }
?>

<main>
    <section>
        <a href="cadastrar.php">
            <button class="btn btn-primary m-3">Nova Vaga</button>
        </a>
    </section>
    <section>
        <table class="table bg-light">
            <head>
                <tr>
                    <th>ID</th>
                    <th>Título</th>
                    <th>Descrição</th>
                    <th>Status</th>
                    <th>Data</th>
                    <th>Ações</th>
                </tr>
            </head>
            <tbody>
                <?=$resultados?>
            </tbody>
        </table>
    </section>
</main>