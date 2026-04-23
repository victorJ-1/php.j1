<?php
$idade = 16;

if ($idade >= 18) {
    echo "Você é maior de idade.";
} else {
    echo "Você é menor de idade.";
}
?>

<?php
$hora = 15;

if ($hora < 12) {
    echo "Bom dia!";
} elseif ($hora < 18) {
    echo "Boa tarde!";
} else {
    echo "Boa noite!";
}
?>
<hr>
<?php
$semaforo = "verde";

if ($semaforo == "verde") {
    echo "pode passar!";
} elseif ($semaforo == "amarelo") {
    echo "atenção, prepare-se para parar!";
} elseif ($semaforo == "vermelho") {
    echo "pare!";
} else { echo "sinal de transito desconhecido.";
}
?>
<hr>
<?php
$diaSemana = date('w');  // Retorna o dia da semana em número (0-6)

switch ($diaSemana) {
    case 0:
        echo "Domingo";
        break;
    case 1:
        echo "Segunda-feira";
        break;
    case 2:
        echo "Terça-feira";
        break;
    case 3:
        echo "Quarta-feira";
        break;
    case 4:
        echo "Quinta-feira";
        break;
    case 5:
        echo "Sexta-feira";
        break;
    case 6:
        echo "Sábado";
        break;
    default:
        echo "Dia inválido";
}
?>
<?php
date_default_timezone_set('america/sao_paulo');
echo date(" d/m/y h:i:a");
?>
<hr>
<?php
$nome = "uninove";
echo "nome = $nome";
echo "md5 = " . md5($nome);
$hash = password_hash($nome, PASSWORD_DEFAULT);
echo "<br>hash = " . $hash;

