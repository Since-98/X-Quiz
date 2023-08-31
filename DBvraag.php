<?php

class DBvraag
{
    private $dataSource = "mysql:dbname=hackathon_quiz;host=localhost;";
    private $userName = "root";
    private $password = "";

    public function SelecteerVraag(){
        $pdo = new PDO($this->dataSource, $this->userName, $this->password);
        $statement = $pdo->prepare("SELECT * FROM vraag_type");
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }
    public function MaakVraag(string $Vraag, string $Antwoord, string $Plaatje){
        $pdo = new PDO($this->dataSource, $this->userName, $this->password);
        $statement = $pdo->prepare("INSERT INTO vraag_type(Vraag,Antwoord,Plaatje) VALUES(:Vraag, :Antwoord, :Plaatje)");
        // $statement->bindParam("ID", $ID, PDO::PARAM_INT);
        $statement->bindParam("Vraag", $Vraag, PDO::PARAM_STR);
        $statement->bindParam("Antwoord", $Antwoord, PDO::PARAM_STR);
        $statement->bindParam("Plaatje", $Plaatje, PDO::PARAM_STR);
        $statement->execute();
    }
    public function VerwijderVraag(int $ID){
        try{
            $pdo = new PDO($this->dataSource, $this->userName, $this->password);
            $statement = $pdo->prepare("DELETE FROM vraag_type WHERE ID = :ID");
            $statement->bindParam("ID", $ID, PDO::PARAM_STR);
            $statement->execute();
        }
        catch(PDOException $e){
        }
    }

}