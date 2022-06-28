<?php

//Créez une classe CompteBancaire qui contient les informations et les opérations basiques d'un compte bancaire. 
//Il faut pouvoir obtenir le solde du compte, enlever et rajouter un montant d'argent. 
//On peut aussi bloquer et débloquer le compte

class CompteBancaire{
    private string $numero;
    private int $solde;
    private string $etat;

    public function __construct(string $numero, int $solde, string $etat){
        $this->numero = $numero;
        $this->solde = $solde;
        $this->etat = $etat = "actif";
    }
    
    public function getSoldeo(): int{
        return $this->solde;
    }
    public function getNumero(): string{
        return $this->numero;
    }
    public function setSolde (int $solde){
        $this->solde = $solde;
    }
    public function setNumero (int $numero): void
    {
        $this->numero = $numero;
    }
    public function getEtat(): string
    {
        return $this->etat;
    }
    public function setEtat (int $solde): void
    {
        $this->etat = $etat;
    }
    public function afficher(){
        echo "<br><br>Le compte " . $this->numero . " contient "
        . $this->solde . "euros";
    }
    public function rajouterSolde (int $montant){
        if ($this->etat == "actif"){
            $this->solde = $this->solde + $montant;}
    
    }
    public function retirerSolde (int $montant){
        $this->solde = $this->solde - $montant;
    }
    public function bloquer (){

    }
    }
    


}