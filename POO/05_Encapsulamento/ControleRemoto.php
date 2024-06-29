<?php

require_once "Controlador.php";

class ControleRemoto implements Controlador
{
     private $volume;
     private $ligado;
     private $tocando;

     public function __construct()
     {
          $this->volume = 50;
          $this->ligado = false;
          $this->tocando = false;
     }

     public function getVolume()
     {
          return $this->volume;
     }
     public function getLigado()
     {
          return $this->ligado;
     }
     public function getTocando()
     {
          return $this->tocando;
     }
     public function setVolume($volume)
     {
          $this->volume = $volume;
     }

     public function setTocando($tocando)
     {
          $this->tocando = $tocando;
     }

     public function setLigado($ligado)
     {
          $this->ligado = $ligado;
     }

     public function ligar()
     {
          $this->setLigado(true);
     }

     public function desligar()
     {
          $this->setLigado(false);
     }

     private function imprimirVolume($volume)
     {
          for ($i = 0; $i <= $volume; $i += 10)
               echo " | ";
     }

     public function abrirMenu()
     {
          echo "<br/>----------------------MENU----------------------";
          echo "<br/>Está ligado?: " . ($this->getLigado() ? "Sim" : "Não");
          echo "<br/>Está tocando?: " . ($this->getTocando() ? "Sim" : "Não");
          echo "<br/>Volume: " . $this->getVolume();
          $this->imprimirVolume($this->getVolume());
          echo "<br/>------------------------------------------------";
     }

     public function fecharMenu()
     {
          echo "<br>Fechando menu...";
     }

     public function maisVolume()
     {
          if ($this->getLigado() && $this->getVolume() < 100)
               $this->setVolume($this->getVolume() + 1);
     }

     public function menosVolume()
     {
          if ($this->getLigado() && $this->getVolume() > 0)
               $this->setVolume($this->getVolume() - 1);
     }

     public function ligarMudo()
     {
          if ($this->getLigado())
               $this->setVolume(0);
     }

     public function desligarMudo()
     {
          if ($this->getLigado() && $this->getVolume() == 0)
               $this->setVolume(50);
     }

     public function play()
     {
          if ($this->getLigado())
               $this->setTocando(true);
     }

     public function pause()
     {
          if ($this->getLigado())
               $this->setLigado(false);
     }

}