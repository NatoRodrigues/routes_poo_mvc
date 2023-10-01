<?php

declare (strict_types = 1);
require './classes.php';

$secret_key = 'ES_5a6d23d18aac4670b039ed358538bbb8';

if (isset($_POST['submit'])) 
{
    $data = array(
        'secret' => $secret_key,
        'response' => $_POST['h-captcha-response']
    );
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, "https://hcaptcha.com/siteverify");
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $response = curl_exec($ch);
    $responseData = json_decode($response);
    if($responseData->success && $_SERVER['REQUEST_METHOD'] == 'POST') 
    { 
        $cliente_data->set_nome($nome);
        $cliente_data->set_data($data);
        
        $cliente_data->set_email($email);
        $cliente_data->set_genero($genero);
        $cliente_data->set_cep($cep);
        $cliente_data->set_endereco($endereco);
        $cliente_data->set_cidade($cidade);
        $cliente_data->set_bairro($bairro);
        $cliente_data->set_uf($uf);

        $dados =  print_r($cliente_data);
        echo 'dados do cliente: <br>' . $dados;
    }
    else
    {
        echo 'Verficação humana falhou, por favor tente novamente.';
    }
}
?>