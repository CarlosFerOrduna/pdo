<?php

include_once 'db.php';

class Survey extends Db {

    private $totalVotes;
    private $optionSelected;

    public function setOptionSelected($option) {
        $this->optionSelected = $option;
    }

    public function getOptionSelected() {
        return $this->optionSelected;
    }

    public function vote() {
        $query = $this->connect()->prepare('UPDATE survivable SET votes = votes +1 WHERE option = :option');
        $query->execute(['option' => $this->optionSelected]);
    }

    public function showResults() {
        return $this->connect()->query('SELECT * FROM survivable');
    }

    public function getTotalVotes() {
        $query = $this->connect()->query('SELECT SUM(votes) AS votos_totales FROM survivable');
        $this->totalVotes = $query->fetch(PDO::FETCH_OBJ)->votos_totales;
        return $this->totalVotes;
    }

    public function getPercentageVotes($option) {
        return round(($option / $this->totalVotes) * 100, 0);
    }

}

?>