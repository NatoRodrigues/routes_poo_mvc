<?php

namespace app\controllers;

class Site
{
    public function Home() // Certifique-se de que comece com letra maiúscula
    {
        require_once __DIR__ .'/../views/home.php';
    }

    public function Galery($foto) // Certifique-se de que comece com letra maiúscula
    {
        $photo = $foto;
        require_once __DIR__ .'/../views/galery.php';
    }
    
}