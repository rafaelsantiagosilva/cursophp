<? declare(strict_types=1); ?>
<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>04: Exemplo Prático</title>
     <link rel="stylesheet" href="../../style.css">
</head>

<body>
     <header>
          <h1>Exemplo Prático</h1>
     </header>
     <main>
          <?php

          class ContaBanco
          {
               public int $numConta;
               protected string $tipo;
               private string $dono;
               private float $saldo;
               private bool $status;

               public function abrirConta(): void
               {
                    if (!$this->isStatus()) {
                         $this->setStatus(true);
                         echo "Conta aberta!";
                    } else {
                         echo "Já está aberta!";
                    }
               }

               public function fecharConta(): void
               {
                    if ($this->isStatus()) {
                         $this->setStatus(false);
                         echo "Conta fechada!";
                    } else {
                         echo "Já está fechada!";
                    }
               }

               public function depositar(float $valor): void
               {
                    $this->saldo += $valor;
               }

               public function sacar(float $valor): void
               {
                    $this->saldo -= $valor;
               }

               public function pagarMensalidade()
               {
                    echo "Mensalidade paga!";
               }

               // Métodos especiais
               public function __construct(int $numConta, string $tipo, string $dono, float $saldo, bool $status)
               {
                    $this->setNumConta($numConta);
                    $this->setTipo($tipo);
                    $this->setDono($dono);
                    $this->setSaldo($saldo);
                    $this->setStatus($status);
               }

               public function getNumConta(): int
               {
                    return $this->numConta;
               }

               public function setNumConta(int $num): void
               {
                    $this->numConta = $num;
               }

               public function getTipo(): string
               {
                    return $this->tipo;
               }

               public function setTipo(string $tipo)
               {
                    $this->tipo = $tipo;
               }

               public function getDono(): string
               {
                    return $this->dono;
               }

               public function setDono(string $dono)
               {
                    $this->dono = $dono;
               }

               public function getSaldo(): float
               {
                    return $this->saldo;
               }

               public function setSaldo(float $saldo)
               {
                    $this->saldo = $saldo;
               }

               public function isStatus(): bool
               {
                    return $this->status;
               }

               public function setStatus(bool $status)
               {
                    $this->status = $status;
               }
          }
          ?>
     </main>
</body>

</html>