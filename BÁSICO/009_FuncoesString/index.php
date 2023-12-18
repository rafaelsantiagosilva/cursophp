<?php
// Imprimindo com formatação
echo "IMPRIMINDO COM FORMATAÇÃO";
$produto = (String) "leite";
$preço = (float) 4.5;
printf("\nO %s está custando R$%.2f\n\n", $produto, $preço);

/*
%d -> inteiro
%u -> inteiro absoluto
%f -> real
%s -> string 
*/

// Imprimindo arrays
$x[0] = 1;
$x[1] = 2;
$x[2] = 3;
$x[3] = 4;

$x2 = array("Inicio", 1, 2, 3, 4, 5, 6, 7, 8, 9, "Fim");
print_r($x); // => significa associação
print_r($x2);
var_dump($x);
var_export($x2);

// Quebra de linha
$textoGrande = "\n\nAqui temos um texto gigante para mostrar a função wordwrap do PHP";
echo wordwrap($textoGrande, 10); // Quebrando a cada 10 caracteres
echo "\n";
echo wordwrap($textoGrande, 10, "<br>\n"); // Colocando tags quando for quebrando
echo "\n";
echo wordwrap($textoGrande, 5, "<br>\n", false); // Não quebra palavras ao meio
echo "\n";
echo wordwrap($textoGrande, 5, "<br>\n", true); // Quebra palavras ao meio

// Tamanho da string
echo "\n\nTAMANHO DA STRING";
echo "\n" . strlen($textoGrande);

// Trim -> Ignorar os espaços
echo "\n\nIGNORANDO ESPAÇOS NO INICIO E NO FIM";
$nome = "    Rafael    ";
echo "\n$nome";
echo "\n" . trim($nome);
echo "\n" . ltrim($nome); // Apagando somente os espaços do inicio
echo "\n" . rtrim($nome); // "" do fim

// Conta quantas palavras tem
echo "\n\nQUANTAS PALAVRAS TEM";
echo "\n" . str_word_count($textoGrande, 0);
print_r(str_word_count($textoGrande, 1)); // Cria um vetor: cada palavra tem uma posição
print_r(str_word_count($textoGrande, 2)); // Cria um vetor mantendo a posição de cada palavra

// Separa quando encontra determinado caractere
echo "\n\nSEPARA EM DETERMINADO CARACTERE";
print_r(explode(" ", $textoGrande)); // Separa quando encontra espaço

// Separa em caracteres
echo "\n\nSEPARA EM CARACTERES";
print_r(str_split($textoGrande));

// Juntando através de um caractere
$vetor[0] = "Curso";
$vetor[1] = "em";
$vetor[2] = 'Vídeo';
$texto = join("#", $vetor); // ou implode
print($texto);

// Transforma código em caractere
echo "\n" . chr(67);

// Transformando letra em código
echo "\n" . ord("C");

//---------------------------------------------------------
$nome = "RafaeL";
// Minusculo
echo "\n\nDEIXANDO TUDO EM MINÚSCULO";
echo "\n" . strtolower($nome);

// Maiusculo
echo "\n\nDEIXANDO TUDO EM MAIÚSCULO";
echo "\n" . strtoupper($nome);

$nome = "rafael";
// Primeira letra da string toda em maiuscula
echo "\n\nCOLOCANDO A PRIMEIRA LETRA EM MAIUSCULA";
echo "\n" . ucfirst($nome);

$nome = "rafael santiago";
// Colocando a primeira letra de cada palavra em maiuscula
echo "\n\nCOLOCANDO A PRIMEIRA LETRA DE CADA PALAVRA EM MAIUSCULA";
echo "\n" . ucwords($nome);

// Imprimindo a String reversa
echo "\n\nIMPRIMNDO A STRING REVERSA";
echo "\n" . strrev($nome);

// Imprimindo a suposta posição da palavra em um array
$frase = "Estou aprendendo PHP";
echo "\n\nIMPRIMINDO A SUPOSTA POSIÇÃO DA PALAVRA";
echo "\n" . strpos($frase, "PHP");

// "", só que ignorando a caixa de texto
echo "\n" . stripos($frase, "php");

// Contando palavras repetidas
echo "\n\nCONTA REPETIÇÃO DE UMA PALAVRA";
$frase .= " no Curso em Vídeo de PHP";
echo "\n" . substr_count($frase, "PHP");

// Pegando Caracteres De Uma Determinada Posição
$site = "Curso em Vídeo";
echo "\n\nPEGANDO CARACTERES DE UMA DETERMINADA POSIÇÃO";
echo "\n" . substr($site, 0, 5); // Pega os caracteres entre a posição 0 e a posição 5 (sem incluir o 5)

// Colocar caracteres em determinada posição
echo "\n\nCOLOCAR CARACTERES EM DETERMINADA POSIÇÃO";
$nome = "Santiago";
echo "\n".str_pad($nome, 30, "#", STR_PAD_RIGHT); // Coloca 30 # a direita
echo "\n".str_pad($nome, 30, "#", STR_PAD_LEFT); // "" esquerda

// Gerando textos
echo "\n\nGERANDO TEXTOS";
echo "\n".str_repeat("oi ", 10); // Escrevendo "oi " dez vezes

// Substituindo substrings (palavras)
echo "\n\nSUBSTITUINDO SUBSTRINGS";
$frase = "Gosto de estudar Matemática";
$novaFrase = str_replace("Matemática", "PHP", $frase);
echo "\n".$novaFrase;
$novaFraseIgnorante = str_ireplace("matemática", "PHP", $frase);
echo "\n".$novaFraseIgnorante;
?>