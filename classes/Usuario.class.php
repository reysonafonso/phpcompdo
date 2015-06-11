<?php

class Usuario {

    private $id;
    private $nome;
    private $email;
    private $senha;

    public function __construct(\PDO $db)
    {
        $this->db = $db;
    }

    public function find($id)
    {
        $query = "Select * from usuarios where id=:id";

        $stmt = $this->db->prepare($query);
        $stmt->bindValue(":id", $id);
        $stmt->execute();

        return $stmt->fetch(\PDO::FETCH_ASSOC);
    }

    public function logar($usuario, $senha)
    {
        $query = "Select usuario, senha from usuarios where usuario=:usuario and senha=:senha";

        $stmt = $this->db->prepare($query);
        $stmt->bindValue(":usuario", $usuario);
        $stmt->bindValue(":senha", $senha);
        $stmt->execute();

        if($stmt->fetch(\PDO::FETCH_ASSOC)) {
            return true;
        }else{
            return false;
        }
    }

    public function listar($ordem = null)
    {
        if($ordem) {
            $query = "Select * from usuarios order by {$ordem}";
        } else {
            $query = "Select * from usuarios";
        }

        $stmt = $this->db->query($query);
        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }

    public function inserir()
    {
        $query = "Insert into usuarios(usuario, email, senha) values (:nome, :email, :senha)";

        $stmt = $this->db->prepare($query);
        $stmt->bindValue(":nome", $this->getNome());
        $stmt->bindValue(":email", $this->getEmail());
        $stmt->bindValue(":senha", $this->getSenha());

        if($stmt->execute()) {
            return true;
        }

    }

    public function alterar()
    {
        $query = "Update usuarios set usuario = :nome, email = :email, senha=:senha where id=:id";

        $stmt = $this->db->prepare($query);
        $stmt->bindValue(":nome", $this->getNome());
        $stmt->bindValue(":email", $this->getEmail());
        $stmt->bindValue(":senha", $this->getSenha());
        $stmt->bindValue(":id", $this->getId());

        if($stmt->execute()) {
            return true;
        }
    }

    public function deletar($id)
    {
        $query = "Delete from usuarios where id=:id";
        $stmt = $this->db->prepare($query);
        $stmt->bindValue(":id", $id);

        if($stmt->execute()) {
            return true;
        }

    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;
        return $this;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function setNome($nome)
    {
        $this->nome = $nome;
        return $this;
    }

    public function getSenha()
    {
        return $this->senha;
    }

    public function setSenha($senha)
    {
        $this->senha = $senha;
        return $this;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

} 