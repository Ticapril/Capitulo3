<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calendario</title>
    <style>
        tr td:first-child{
            color: red;
        }
        td:nth-of-type(7) {
            font-weight: bolder;
        }
    </style>
</head>
<body>
    <table border='1'>
        <tr>
            <th>Dom</th>
            <th>Seg</th>
            <th>Ter</th>
            <th>Qua</th>
            <th>Qui</th>
            <th>Sex</th>
            <th>Sab</th>
        </tr>
        <?php 
            require_once "vendor/autoload.php";

            function montaTemplate(){
                $loader = new \Twig\Loader\FilesystemLoader('app/Views');
                $twig = new \Twig\Environment($loader);
                $template = $twig->load('teste.html');
                return $template;
            }
           
            

            function calendario(){
                $dia = 1;
                $semana = array();
                while($dia <= 31){
                    array_push($semana, $dia);
                    if(count($semana) === 7){
                        $template = montaTemplate();
                        $parametros = array();
                        $parametros['semana'] = $semana;
                        $conteudo = $template->render($parametros);
                        echo $conteudo;
                        $semana = array();
                    }
                    if(count($semana) === 3  && $dia > 28){
                        $template = montaTemplate();
                        $parametros = array();
                        $parametros['semana'] = $semana;
                        $conteudo = $template->render($parametros);
                        echo $conteudo;
                        $semana = array();
                    }
                    $dia++;
                }
            }
            calendario();


        

           
            // for ($i=0; $i < 7; $i++) { 
            //     echo $conteudo;
            //     calendario();
            // }
         ?>
    </table>
</body>
</html>



