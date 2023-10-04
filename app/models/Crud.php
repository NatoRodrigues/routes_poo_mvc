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
        $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
        $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
        $telefone = filter_input(INPUT_POST, 'telefone', FILTER_SANITIZE_SPECIAL_CHARS);
        $id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_SPECIAL_CHARS);

        $conn=$this->connect();
        $sql = "UPDATE tb_person SET name = :nome, 
                                     email = :email, 
                                     telefone = :telefone 
                                     WHERE id =:id";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':nome', $nome);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':telefone', $telefone);
        $stmt->bindParam(':id', $id);
        $stmt->execute();

        return $stmt;
    }

    public function delete()
    {
        $id = base64_decode(filter_input(INPUT_GET, 'id', FILTER_SANITIZE_SPECIAL_CHARS));

        $conn = $this->connect();
        $sql = "DELETE FROM tb_person WHERE id = :id";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();

        return $stmt;
    }

    public function editForm(){
        $id = base64_decode(filter_input(INPUT_GET, 'id', FILTER_SANITIZE_SPECIAL_CHARS));
        $conn = $this->connect();
        $sql = "select * from tb_person where id = :id";
        $stmt = $conn->prepare($sql);

        $stmt->bindParam(':id', $id);
        $stmt->execute();

        $result = $stmt->fetchAll();
        return $result;
    }
}
