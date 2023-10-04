<div class="row container">
    <div class="col s12">
        <h4 class="light">Editar registro</h4>
    </div>

    <div class="col s12">
        <form action="?router=Site/salvar_update/" method="post">
            <?php foreach($update_form as $registro): ?>
                <input type="hidden" name="id" value="<?=$registro['id']; ?>">
                <div class="input-field col s12">
                    <input type="text" id="nome" name="nome" class="validate" value="<?= $registro['name'] ?>">
                    <label for="nome">Nome *</label>
                </div>
                <div class="input-field col s12">
                    <input type="email" id="email" name="email" class="validate" required value="<?= $registro['email']; ?>">
                    <label for="email">Email *</label>
                </div>
                <div class="input-field col s12">
                    <input type="text" id="telefone" name="telefone" class="validate" required value="<?= $registro['telefone']; ?>">
                    <label for="telefone">Telefone *</label>
                </div>

                <div class="col s12">
                    <button class="btn waves-effect waves-light" type="submit" name="action">
                        Atualizar
                        <i class="material-icons left">save</i>
                    </button>
                    <button class="btn waves-effect waves-light red" type="reset" name="action">
                        Limpar
                        <i class="material-icons right">clear</i>
                    </button>
                </div>
            <?php endforeach; ?>
        </form>
    </div>
</div>
