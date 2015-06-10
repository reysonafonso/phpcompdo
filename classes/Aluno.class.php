<?php

class Aluno {

    private $id;
    private $nome;
    private $email;
    private $nota;

    public function __construct(\PDO $db)
    {
        $this->db = $db;
    }

    public function find($id)
    {
        $query = "Select * from alunos where id=:id";

        $stmt = $this->db->prepare($query);
        $stmt->bindValue(":id", $id);
        $stmt->execute();

        return $stmt->fetch(\PDO::FETCH_ASSOC);
    }

    public function listar($ordem = null)
    {
        if($ordem) {
            $query = "Select * from alunos order by {$ordem}";
        } else {
            $query = "Select * from alunos";
        }

        $stmt = $this->db->query($query);
        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }

    public function inserir()
    {
        $query = "Insert into alunos(nome, email, nota) values (:nome, :email, :nota)";

        $stmt = $this->db->prepare($query);
        $stmt->bindValue(":nome", $this->getNome());
        $stmt->bindValue(":nota", $this->getNota());
        $stmt->bindValue(":email", $this->getEmail());

        if($stmt->execute()) {
            return true;
        }

    }

    public function alterar()
    {
        $query = "Update alunos set nome = :nome, email = :email, nota=:nota where id=:id";

        $stmt = $this->db->prepare($query);
        $stmt->bindValue(":nome", $this->getNome());
        $stmt->bindValue(":email", $this->getEmail());
        $stmt->bindValue(":nota", $this->getNota());
        $stmt->bindValue(":id", $this->getId());

        if($stmt->execute()) {
            return true;
        }
    }

    public function deletar($id)
    {
        $query = "Delete from alunos where id=:id";
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

    public function getNota()
    {
        return $this->nota;
    }

    public function setNota($nota)
    {
        $this->nota = $nota;
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