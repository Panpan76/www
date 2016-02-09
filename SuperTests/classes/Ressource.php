<?php

class Ressource{

    private $id;
    private $id_type;
    private $nom;
    private $quantite_base; // Quantité extraite de base
    private $stock_base; // Quantité possédée de base

    public function getId(){ return $this->id; }
    public function setId($id){ $this->id = $id; }

    public function getIdType(){ return $this->id_type; }
    public function setIdType($id_type){ $this->id_type = $id_type; }

    public function getNom(){ return $this->nom; }
    public function setNom($nom){ $this->nom = $nom; }

    public function getQuantiteBase(){ return $this->quantite_base; }
    public function setQuantiteBase($quantite_base){ $this->quantite_base = $quantite_base; }

    public function getStockBase(){ return $this->stock_base; }
    public function setStockBase($stock_base){ $this->stock_base = $stock_base; }

    public function Ressource($id, $id_type, $nom, $quantite_base, $stock_base){
        $this->id = $id;
        $this->id_type = $id_type;
        $this->nom = $nom;
        $this->quantite_base = $quantite_base;
        $this->stock_base = $stock_base;
    }
}
?>
