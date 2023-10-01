<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

?>

<div class="container">
    <h4 class="light">Página de cadastro</h4>
    <form action="?router=Site/cadastro/" method="POST">
        <div class="row">
            <div class="input-field col s12">
                <input type="text" id="nome" name="nome" class="validate" required>
                <label for="nome">Nome *</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12">
                <input type="email" id="email" name="email" class="validate" required>
                <label for="email">Email *</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12">
                <input type="text" id="telefone" name="telefone" class="validate" required>
                <label for="telefone">Telefone *</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12">
                <input type="password" id="senha" name="senha" class="validate" required>
                <label for="senha">Senha *</label>
            </div>
        </div>
        <div class="mb-4">
            <div class="h-captcha" data-sitekey="e3e89b9d-3788-4f6c-9e1a-09347538d13f"></div>
        </div>
        <div class="row">
            <div class="input-field col s12 center-align">
                <button class="btn waves-effect waves-light" type="submit" name="action">Cadastrar
                    <i class="material-icons right">send</i>
                </button>
            </div>
        </div>
    </form>
</div>
<script>
    // Adicione um evento de input ao campo de telefone
    const telefoneInput = document.getElementById('telefone');
    telefoneInput.addEventListener('input', formatarTelefone);

    function formatarTelefone() {
        const telefone = telefoneInput.value.replace(/\D/g, ''); // Remove caracteres não numéricos
        const telefoneFormatado = `(${telefone.substring(0, 2)}) ${telefone.substring(2, 7)}-${telefone.substring(7, 11)}`;
        telefoneInput.value = telefoneFormatado;
    }
</script>