<?php

namespace app\models;

class Crud extends Conn
{

    public function create()
    {
        $name = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
        $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
        $telefone = filter_input(INPUT_POST, 'telefone', FILTER_SANITIZE_SPECIAL_CHARS);

        if (empty($name) || empty($email) || empty($telefone)) {
            return false; // Evita a inserção no banco de dados
        }else 
        {
        $conn = $this->connect();
        $sql = "INSERT INTO tb_person VALUES (default, :name, :email, :telefone)";  // <- vai inserir os dados da variavel
                                                                        // no nosso banco através de uma query sql.
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':telefone', $telefone);
        $stmt->execute();

        return $stmt;
        };
    }

    public function read()
    {
        $conn = $this->connect();
        $sql = "SELECT * FROM tb_person ORDER BY name";
        $stmt = $conn->prepare($sql);
        $stmt->execute(); // Execute a consulta aqui
        $result = $stmt->fetchAll();

        return $result;
    }

    public function update()
    {

    }

    public function delete()
    {

    }

}
