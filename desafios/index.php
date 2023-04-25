<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafios</title>
</head>
<body>
    <?php 

   
    
    function saudacao()
    {
        $horaAtual = date('h:m:s A');
        $flag = explode(" ", $horaAtual);
        $horario = explode(":", $flag[0]);
        if($flag === 'AM')
        {
            echo '<h1>Bom dia<h1>';
        }
        if($horario[0] >= 1 && $horario[0] <= 6)
        {
            echo '<h1>Bom tarde<h1>';
        }
        else
        {
            echo '<h1>Boa Noite<h1>';
        }
    }

    saudacao();

    ?>
</body>
</html> 

<!-- // 1 - Faça uma página que exiba a hora e a frase "Bom dia", "Boa tarde", ou "Boa noite", de acordo com a hora. Use a condicional if e a função date(); -->

