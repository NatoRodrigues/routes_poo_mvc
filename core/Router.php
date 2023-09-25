<?php

namespace core;

class Router // <- classe para desenvolver sistema de rotas.
{
    private string $controller = 'Site'; // <- vai armazenar o nome da classe principal.
    private string $method = ''; // <- Vai armazenar o nome da página a ser acessada.
    private array $param = []; // <- vai armazenar um parametro se necessário

    public function __construct()
    {
        $router = $this->url();
    
        if (file_exists('app/controllers/' . ucfirst($router[0] . '.php'))) {
            $this->controller = $router[0];
            unset($router[0]);
        } else {
            $this->controller = 'Site'; // Controlador padrão caso o arquivo não exista
        }
    
        $class = "\\app\\controllers\\" . ucfirst($this->controller); // cria-se uma variavel para armazenar o nome completo da classe do controlador
        $object = new $class;
    
        if (isset($router[1]) && method_exists($class, $router[1])) {
            $this->method = $router[1];
            unset($router[1]);
        } else {
            $this->method = 'home'; // Método padrão caso o método não exista
        }
    
        if ($router) {
            $this->param = array_values($router);
        } else {
            $this->param = [];
        }
        
        call_user_func_array([$object, $this->method], $this->param);
    }
    

    private function url()
    {
        $parse_url = explode("/", filter_input(INPUT_GET, 'router', FILTER_SANITIZE_URL));
        return $parse_url;
    }
}


?>