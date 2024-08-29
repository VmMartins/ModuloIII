<?php
class Paciente{
          public $nome;
          public $idade;

          public function dados($nome,$idade){
                    $this->nome = $nome;
                    $this->idade = $idade;
          }        
    
          public function informa(){
                    echo"<br> Nome: ".$this->nome;
                    echo"<br>idade: ".$this->idade;       
          }
}
?>