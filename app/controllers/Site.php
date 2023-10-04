<?php

namespace app\controllers;

use app\models\Crud;

class Site extends Crud
{
    public function Home() // Certifique-se de que comece com letra maiúscula
    {
        require_once __DIR__ .'/../views/home.php';
    }
    
    public function cadastro()
    {
        $cadastro = $this->create();
        require_once __DIR__ .'/../views/cadastro.php';
    }

    public function consulta()
    {
        $consulta = $this->read();
        require_once __DIR__ . '/../views/consulta.php';
    }

    public function edita_valor_form()
    {
        $update_form = $this->editForm(); 
        require_once __DIR__ . '/../views/editar.php';
    }

    public function salvar_update()
    {
        $alterar = $this->update();
        header("Location:?router=Site/consulta/");
    }

    public function confirma_delete() // <- serve apenas para confirmar a exclusão do dado
    {
        $id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_SPECIAL_CHARS);
        require_once __DIR__ . '/../views/confirma_delete.php';
    }

    public function deletar()// <- método que será usado para realmente excluir dados executando uma query.
    {
        $deletar = $this->delete();
        header("Location:?router=Site/consulta/");
    }

}