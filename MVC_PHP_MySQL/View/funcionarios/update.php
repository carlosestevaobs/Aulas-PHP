<!-- bs5-car-head-foot -->
<div class="card">
    <div class="card-header">
        Alterar funcionários
    </div>
    <div class="card-body">
        <form action="" method="post">

        
        <div class="mb-3">
                <!-- bs5-form-input -->
                <label for="codigo" class="form-label">Código:</label>
                <input readonly type="text" class="form-control" name="codigo" id="codigo" aria-describedby="helpId" placeholder="Código do funcionário" value="<?php echo $funcionario->codigo; ?>" required>
            </div>

            <div class="mb-3">
                <!-- bs5-form-input -->
                <label for="nome" class="form-label">Nome:</label>
                <input type="text" class="form-control" name="nome" id="nome" aria-describedby="helpId" placeholder="Nome do funcionário" value="<?php echo $funcionario->nome; ?>" required>
            </div>

            <div class="mb-3">
                <!-- bs5-form-input -->
                <label for="cargo" class="form-label">Cargo:</label>
                <input type="text" class="form-control" name="cargo" id="cargo" aria-describedby="helpId" placeholder="Cargo" value="<?php echo $funcionario->cargo; ?>" required>
            </div>

            <!-- bs5-button-input -->
            <input name="" id="" class="btn btn-success" type="submit" value="Atualizar funcionário">
            <a href='?controller=funcionarios&action=home' class='btn btn-warning'>Cancelar</a>



        </form>
    </div>

</div>