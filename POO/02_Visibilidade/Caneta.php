<?php
class Caneta
{
     // Var: visibilidade padrão publica
     public $modelo;
     public $cor;
     private $ponta;
     protected $carga;
     protected $tampada;

     public function rabiscar()
     {
          if ($this->tampada == true && $this->carga > 0) {
               echo "<p>ERRO: Não posso rabiscar!</p>";
          } else {
               echo "<p>Estou rabiscando...</p>";
          }
     }

     public function tampar()
     {
          $this->tampada = true;
     }

     public function destampar()
     {
          $this->tampada = false;
     }

}
?>