<?php

class Database{

    private $PDO;

    public function __construct($dbname = 'cadastro')
    {
        try{
            $this->PDO = new PDO("mysql:host=localhost;dbname={$dbname}", 'root', '');
            $this->PDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); //necessidade de colocar versões anterior a 8 do PHP, para lançar exceções
        }catch(PDOException $e){
            die("Error:<b> {$e->getMessage()} </b>");
        }
    }


    public function insert($sql, array $binds)
    {
        $stmt = $this->PDO->prepare($sql);

        foreach($binds as $key => $value){
            $stmt->bindValue($key, $value);
        }
        $stmt->execute();
        if ($stmt->rowCount() > 0){
            return true;
        }
        return false;
    }

    public function select($sql, array $binds)
    {
        $stmt = $this->PDO->prepare($sql);

        foreach($binds as $key => $value){
            $stmt->bindValue($key, $value);
        }
        $stmt->execute();
        return $stmt;
    }

    public function update($sql, array $binds)
    {
        $stmt = $this->PDO->prepare($sql);

        foreach ($binds as $key => $value){
            $stmt->bindValue($key, $value);
        }
        $stmt->execute();
        return $stmt->rowCount();
    }

    public function delete($sql, array $binds)
    {
        $stmt = $this->PDO->prepare($sql);
        foreach ($binds as $key => $value){
            $stmt->bindValue($key, $value);
        }
        $stmt->execute();
        return $stmt->rowCount();
    }
}