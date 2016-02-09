<?php
//id_ressource, id_type, nom, quantite_base, stock_base
//include 'Ressource.php';

class RessourceTest extends PHPUnit_Framework_TestCase{
    private $idRessource = 42;
    private $idType = 69;
    private $nom = "fer";
    private $quantiteBase = 1337;
    private $stockBase = 15;
    private $ressource;

    public function testCreateRessource(){
        $this->ressource = new Ressource($this->idRessource, $this->idType, $this->nom, $this->quantiteBase, $this->stockBase);
        $this->assertNotNull($this->ressource);
    }

    public function testId(){
        if($this->ressource==null){
            $this->testCreateRessource();
        }
        $this->assertEquals($this->idRessource, $this->ressource->getId());
    }

    public function testIdType(){
        if($this->ressource==null){
            $this->testCreateRessource();
        }
        $this->assertEquals($this->idType, $this->ressource->getIdType());
    }

    public function testNom(){
        if($this->ressource==null){
            $this->testCreateRessource();
        }
        $this->assertEquals($this->nom, $this->ressource->getNom());
    }

    public function testQuantiteBase(){
        if($this->ressource==null){
            $this->testCreateRessource();
        }
        $this->assertEquals($this->stockBase, $this->ressource->getStockBase());
    }

    public function testStockBase(){
        if($this->ressource==null){
            $this->testCreateRessource();
        }
        $this->assertEquals($this->stockBase, $this->ressource->getStockBase());
    }

}
?>
