<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="icon" href="resources/icons8-crud-32.png" type="image/x-icon">
<link rel="shortcut icon" href="resources/icons8-crud-32.png" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="config/materialize/css/materialize.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="https://hcaptcha.com/1/api.js" async defer></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <title>PHP MVC POO</title>

    <style>
        .black-text {
            color: black !important;
        }

        
    </style>
</head>
<body>
<nav class=" pink lighten-1 nav-extended">
  <div class="nav-wrapper">
    <div class="container">
      <a href="?router=Site/home/" class="brand-logo center">Curso MVC</a>
      
      <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
      <ul class="right hide-on-med-and-down">
        <li><a href="?router=Site/cadastro/">Cadastro</a></li>        
        <li><a href="?router=Site/consulta/">Consultar</a></li>
        <li><a href="?router=Site/atualiza/">Atualizar</a></li>
        <li><a href="?router=Site/deleta/">Deletar</a></li>
      </ul>
    </div>
  </nav>

  <ul class="sidenav" id="mobile-demo">
        <li><a href="?router=Site/cadastro/">Cadastrar</a></li>
        <li><a href=?router=Site/consulta/">Consultar</a></li>
        <li><a href="?router=Site/atualiza/">Atualizar</a></li>
        <li><a href="?router=Site/deleta/">Deletar</a></li>
  </ul>  </div>
  
</nav>

<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        var elems = document.querySelectorAll('.sidenav');
        var instances = M.Sidenav.init(elems, { edge: 'right' }); // Adicione o 'edge' para especificar o lado
    });
</script>

</body>
</html>
