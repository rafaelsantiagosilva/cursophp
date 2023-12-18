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
echo "\n".chr(67);

// Transformando letra em código
echo "\n".ord("C"); 
?>