<!-- bs5-card-head-foot -->
<div class="card">
    <div class="card-header">
        <a class="btn btn-success" href="?controller=funcionarios&action=save" role="button">Salvar funcionário</a>

    </div>
    <div class="card-body">

        <!-- bs5-table-default -->
        <table class="table">
            <thead>
                <tr>
                    <th>Código</th>
                    <th>Nome</th>
                    <th>Função</th>
                    <th colspan="2">Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($funcionarios as $funcionario) {
                    echo "<tr>
                    <td>" . $funcionario->codigo . "</td>
                    <td>" . $funcionario->nome . "</td>
                    <td>" . $funcionario->cargo . "</td>
                    <td>
                    <!--bs5-bgroup-default-->
                    <div class='btn-group' role='group' >
                        <a href='?controller=funcionarios&action=update&codigo=" . $funcionario->codigo . "' class='btn btn-info'>Editar</a>
                        <a href='?controller=funcionarios&action=delete&codigo=" . $funcionario->codigo . "' class='btn btn-danger'>Remover</a>
                    </div>                    
                    </td>
                </tr>";
                }
                ?>
            </tbody>
        </table>

    </div>

</div>