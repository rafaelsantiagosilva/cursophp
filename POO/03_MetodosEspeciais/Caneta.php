<?php
declare(strict_types=1);
class Caneta
{
     public string $modelo;
     private string $cor;
     private float $ponta;
     private bool $tampada;

     // Métodos
     public function tampar()
     {
          $this->setTampada(true);
     }

     // Constructor
     public function __construct(string $modelo, string $cor, float $ponta)
     {
          $this->cor = $cor;
          $this->modelo = $modelo;
          $this->ponta = $ponta;
          $this->tampar();
     }

     // Getters e Setters
     public function getModelo(): string
     {
          return $this->modelo;
     }

     public function setModelo(string $modelo)
     {
          $this->modelo = $modelo;
     }

     public function getPonta(): float
     {
          return $this->ponta;
     }

     public function setPonta(float $ponta)
     {
          $this->ponta = $ponta;
     }

     public function getCor(): string
     {
          return $this->cor;
     }

     public function setCor(string $cor)
     {
          $this->cor = $cor;
     }

     public function isTampada(): bool
     {
          return $this->tampada;
     }

     public function setTampada(bool $tampada)
     {
          $this->tampada = $tampada;
     }

}
?>