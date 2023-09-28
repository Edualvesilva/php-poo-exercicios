<?php
require_once "src/Livros.php";
class Tecnico extends Livros {
    private array $formato = ["Digital","Fisíco"];

   
    public function getFormato(): string
    {
        return implode(", ", $this->formato);
    }

    public function setFormato(array $formato): self
    {
        $this->formato = $formato;

        return $this;
    }
}



?>