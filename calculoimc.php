
<?php 
function classificarIMC($imc) {
    $faixasIMC = [
        ["limite" => 18.5, "classificacao" => "Magreza"],
        ["limite" => 24.9, "classificacao" => "Saudável"],
        ["limite" => 29.9, "classificacao" => "Sobrepeso"],
        ["limite" => 34.9, "classificacao" => "Obesidade Grau I"],
        ["limite" => 39.9, "classificacao" => "Obesidade Grau II"]
    ];
    
    $classificacao = "Obesidade Grau III";

    foreach ($faixasIMC as $faixa) {
        if ($imc <= $faixa['limite']) {
            $classificacao = $faixa['classificacao'];
            break;
        }
    }

    echo 'Atenção, seu IMC é: ' . number_format($imc, 2) . ', e você está classificado como: ' . $classificacao . '.';
}

classificarIMC(25.30);

?>