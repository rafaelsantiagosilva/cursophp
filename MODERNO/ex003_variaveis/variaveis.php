<?php 

    // variavel
        $nome = "Rafael";
        $sobrenome = "Santiago";
    
    // constante
        const PAIS = "Brasil";
        
    // usando variaveis e constantes  
        echo "Muito prazer, sou $nome $sobrenome! Eu sou do " . PAIS;
    
    /*
    REGRAS PARA NOMES IDENTIFICADORES
        - Variáveis começam com $ e após isso uma LETRA ou _ (UNDERLINE)
        - Aceitam os caracteres [a-z], [A-Z], [0-9] e [_]
        - Aceitam= caracteres da tabela ASCII
        - Aceitam á, à, ô, õ, ç...
        - É case sensitive (letra minuscula != letra maiuscula)
        - Nomes especiais, comandos, como $this não podem ser usados
    
    RECOMENDAÇÕES
        - Nomes claros e de fácil identificação
        - Evite nomes muito curtos ou muitos longos
        - Defina um padrão de nomeação
        - Variaveis = letras minusculas, sem espaços (camel ou snake)
        - Constantes = letras maiusculas, sem espaços com SNAKE_CASE
        - Métodos = camelCase
    */ 

?>