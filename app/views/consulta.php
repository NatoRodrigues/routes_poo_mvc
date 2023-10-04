<title>Página de consultas</title>

<style>
        .custom-table {
            background-color: #fff; /* Cor de fundo da tabela */
            border-radius: 10px; /* Arredonde os cantos da tabela */
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1); /* Adicione uma sombra sutil */
        }

        .custom-th {
            background-color: #ec407a; /* Cor de fundo do cabeçalho da tabela */
            color: #fff; /* Cor do texto no cabeçalho da tabela */
            font-weight: bold; /* Texto em negrito no cabeçalho da tabela */
        }

        .custom-td {
            padding: 10px; /* Espaçamento interno das células da tabela */
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="custom-header">
            <h4 class="light">Página de Consultas</h4>
        </div>
        <div class="custom-table">
            <table class="striped hoverable">
                <thead>
                    <tr>
                        <th class="custom-th">Nome</th>
                        <th class="custom-th">Email</th>
                        <th class="custom-th">Telefone</th>
                        <th class="custom-th">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($consulta as $registro) : ?>
                        <?php $parametroCriptografado = base64_encode("id=" . $registro['id']); ?>
                        <tr>
                            <td class="custom-td"><?= $registro['name']; ?></td>
                            <td class="custom-td"><?= $registro['email']; ?></td>
                            <td class="custom-td"><?= $registro['telefone']; ?></td>
                            <td class="custom-td">
                                <a href="?router=Site/edita_valor_form/&id=<?= base64_encode($registro['id']); ?>" class="btn-small waves-effect waves-light">Editar</a>
                                <a href="?router=Site/confirma_delete/&id=<?= base64_encode($registro['id']); ?>" class="btn-small waves-effect waves-light pink">Deletar</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>