<div class="row container">
    <div class="col s12">
        <h4 class="light">Página de consultas</h4>
    </div>
    <div class="col s12">
        <table class="striped">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Email</th>
                    <th>Telefone</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($consulta as $registro) : ?>
                    <tr>
                        <td><?= $registro['name']; ?></td>
                        <td><?= $registro['email']; ?></td>
                        <td><?= $registro['telefone']; ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
