<?php

class Crud {

    private $db;

    public function __construct($db) {
        $this->db = $db;
    }

    public function create($firstname, $lastname, $email, $phone) {

        try {
            $stmt = $this->db->prepare(
                'INSERT INTO users(firstname, lastname, email, phone)
                VALUES (:firstname, :lastname, :email, :phone)');

            $stmt->bindValue(':firstname', $firstname);
            $stmt->bindValue(':lastname', $lastname);
            $stmt->bindValue(':email', $email);
            $stmt->bindValue(':phone', $phone);

            $stmt->execute();
            return true;

        } catch (PDOException $e) {
            echo $e->getMessage();
            return false;
        }

    }

    public function update($id, $firstname, $lastname, $email, $phone) {

        try {

            $stmt = $this->db->prepare('UPDATE users SET firstname = :firstname, lastname = :lastname, email = :email, phone = :phone
                WHERE id = :id');

            $stmt->bindValue(':firstname', $firstname);
            $stmt->bindValue(':lastname', $lastname);
            $stmt->bindValue(':email', $email);
            $stmt->bindValue(':phone', $phone);
            $stmt->bindValue(':id', $id);

            $stmt->execute();
            return true;

        } catch (PDOException $e) {
            echo $e->getMessage();
            return false;
        }

    }

    public function delete($id) {

        try {
            $stmt = $this->db->prepare('DELETE FROM users WHERE id=:id');
            $stmt->bindValue(':id', $id);
            $stmt->execute();
            return true;
        
        } catch (PDOException $e) {
            echo $e->getMessage();
            return false;
        }

    }

    public function getById($id) {

        try {
            $stmt = $this->db->prepare('SELECT * FROM users WHERE id=:id');
            $stmt->bindValue(':id', $id);
            $stmt->execute();

            $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $results;

        } catch (PDOException $e) {
            echo $e->getMessage();
            return false;
        }

    }
}


?>